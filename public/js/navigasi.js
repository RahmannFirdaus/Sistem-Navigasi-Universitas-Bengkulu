document.addEventListener('DOMContentLoaded', async function () {
    
    // 1. INISIALISASI PETA
    const map = L.map('map').setView([-3.759, 102.272], 16);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19, attribution: '© OpenStreetMap'
    }).addTo(map);

    // 2. VARIABEL GLOBAL
    let graphData = { nodes: [], edges: [] };
    let markers = {};
    let routeLayers = []; 
    let userBlockedEdges = new Set(); // ID jalan yang diblokir
    let isDataReady = false;

    const el = {
        startId: document.getElementById('start-location-id'),
        endId: document.getElementById('end-location-id'),
        startInput: document.getElementById('start-location-input'),
        endInput: document.getElementById('end-location-input'),
        search: document.getElementById('search-building'),
        
        // Tombol Reset Blokir masih ada (opsional) tapi tidak wajib dipakai user
        resetBlockBtn: document.getElementById('reset-block-btn'),
        clearBtn: document.getElementById('clear-route-btn'),
        findBtn: document.getElementById('find-route-btn'),
        instruction: document.getElementById('instruction-text'),
        mobileToggle: document.getElementById('mobile-sidebar-toggle'),
        sidebar: document.querySelector('.nav-sidebar')
    };

    // Update teks instruksi agar user tahu bisa klik ulang
    if(el.instruction) {
        el.instruction.innerHTML = '<i class="fas fa-info-circle"></i> Klik jalan untuk <b>blokir/buka</b> akses.';
    }

    // 3. LOAD DATA API
    async function loadMapData() {
        try {
            const [nodesRes, edgesRes] = await Promise.all([
                fetch('/api/nodes'),
                fetch('/api/edges')
            ]);
            const nodesDB = await nodesRes.json();
            const edgesDB = await edgesRes.json();

            if (nodesDB.length === 0) return alert("Database Kosong.");

            graphData.nodes = nodesDB.map(n => ({
                id: n.id, name: n.name, type: n.type, coords: [n.lat, n.lng],
                schedule: n.schedules.length > 0 ? {
                    days: n.schedules.map(s => s.day_of_week),
                    open: n.schedules[0].open_time,
                    close: n.schedules[0].close_time
                } : null
            }));

            graphData.edges = edgesDB.map(e => ({
                from: e.from_node_id, to: e.to_node_id, weight: e.weight
            }));

            graphData.nodes.forEach(node => {
                if (node.type !== 'jalan') {
                    const marker = L.marker(node.coords).addTo(map);
                    marker.bindPopup(`<b>${node.name}</b>`);
                    markers[node.id] = marker;
                }
            });

            isDataReady = true;
        } catch (e) { console.error(e); }
    }
    loadMapData();

    // 4. LOGIKA ALGORITMA
    function isGateClosed(schedule, now) {
        if (!schedule) return false;
        const day = now.getDay();
        const time = now.toTimeString().slice(0, 5);
        if (!schedule.days.includes(day)) return true;
        if (time >= schedule.open && time < schedule.close) return false;
        return true;
    }

    function dijkstra(nodes, edges, startId, endId) {
        const distances = {}; const prev = {}; const pq = new Set();
        nodes.forEach(n => { distances[n.id] = Infinity; prev[n.id] = null; pq.add(n.id); });
        distances[startId] = 0;

        while (pq.size > 0) {
            let u = null;
            for (const c of pq) {
                if (u === null || distances[c] < distances[u]) u = c;
            }
            if (u === null || distances[u] === Infinity) break;
            if (u === endId) {
                const path = []; let curr = endId;
                while (curr !== null) { path.unshift(curr); curr = prev[curr]; }
                return path;
            }
            pq.delete(u);
            edges.filter(e => e.from === u).forEach(e => {
                const v = e.to;
                if (pq.has(v)) {
                    const alt = distances[u] + e.weight;
                    if (alt < distances[v]) { distances[v] = alt; prev[v] = u; }
                }
            });
        }
        return null;
    }

    // 5. FUNGSI UTAMA: HITUNG RUTE
    function calculateRoute() {
        const startId = parseInt(el.startId.value);
        const endId = parseInt(el.endId.value);

        if (!startId || !endId) return alert("Pilih lokasi!");
        if (startId === endId) return alert("Lokasi sama!");

        const now = new Date();
        const closedGates = new Set();
        
        graphData.nodes.forEach(n => {
            if (n.type === 'gate' && isGateClosed(n.schedule, now)) closedGates.add(n.id);
        });

        if (closedGates.has(endId)) {
            const name = graphData.nodes.find(n => n.id === endId).name;
            return alert(`Tujuan (${name}) sedang TUTUP.`);
        }

        // Siapkan Edges dengan Blokir
        let dynamicEdges = JSON.parse(JSON.stringify(graphData.edges));
        
        dynamicEdges.forEach(e => {
            if (closedGates.has(e.from) || closedGates.has(e.to)) {
                e.weight = Infinity;
            } else {
                // Cek blokir manual
                const edgeId = [e.from, e.to].sort().join('-');
                if (userBlockedEdges.has(edgeId)) {
                    e.weight = Infinity; 
                }
            }
        });

        const path = dijkstra(graphData.nodes, dynamicEdges, startId, endId);
        drawInteractiveRoute(path);
    }

    // ============================================================
    // 6. FUNGSI GAMBAR RUTE (TOGGLE BLOKIR)
    // ============================================================
    function drawInteractiveRoute(path) {
        // Hapus layer lama
        routeLayers.forEach(l => map.removeLayer(l));
        routeLayers = [];

        // A. GAMBAR GARIS MERAH (Jalan Diblokir) - Bisa diklik untuk UNBLOCK
        userBlockedEdges.forEach(edgeKey => {
            const [u, v] = edgeKey.split('-').map(Number);
            const nodeU = graphData.nodes.find(n => n.id === u);
            const nodeV = graphData.nodes.find(n => n.id === v);

            if(nodeU && nodeV) {
                // Garis Visual Merah
                const redLine = L.polyline([nodeU.coords, nodeV.coords], {
                    color: '#ef4444', weight: 6, opacity: 0.7, dashArray: '10, 10', interactive: false
                }).addTo(map);

                // Garis Sentuh Transparan (Untuk Unblock)
                const touchUnblock = L.polyline([nodeU.coords, nodeV.coords], {
                    color: 'transparent', weight: 25, opacity: 0
                }).addTo(map);

                touchUnblock.bindTooltip("Klik untuk MEMBUKA kembali jalan ini", { sticky: true });
                
                // ✨ EVENT UNBLOCK ✨
                touchUnblock.on('click', function() {
                    const confirmUnblock = confirm("Buka kembali jalan ini?");
                    if(confirmUnblock) {
                        userBlockedEdges.delete(edgeKey); // Hapus dari blacklist
                        calculateRoute(); // Hitung ulang
                    }
                });

                routeLayers.push(redLine);
                routeLayers.push(touchUnblock);
            }
        });

        if (!path || path.length < 2) {
            if (userBlockedEdges.size > 0) alert("Tidak ada rute! Coba buka beberapa blokiran.");
            else alert("Rute tidak ditemukan.");
            return;
        }

        // B. GAMBAR GARIS BIRU (Rute Aktif) - Bisa diklik untuk BLOCK
        let bounds = [];
        for (let i = 0; i < path.length - 1; i++) {
            const u = path[i];
            const v = path[i+1];
            const nodeU = graphData.nodes.find(n => n.id === u);
            const nodeV = graphData.nodes.find(n => n.id === v);

            if(nodeU && nodeV) {
                const visualLine = L.polyline([nodeU.coords, nodeV.coords], {
                    color: '#00f0ff', weight: 6, opacity: 0.9, interactive: false
                }).addTo(map);

                const touchBlock = L.polyline([nodeU.coords, nodeV.coords], {
                    color: 'transparent', weight: 25, opacity: 0
                }).addTo(map);

                touchBlock.bindTooltip("Klik untuk BLOKIR jalan ini", { sticky: true });

                // ✨ EVENT BLOCK ✨
                touchBlock.on('click', function() {
                    // Efek visual instan
                    visualLine.setStyle({ color: '#ff0000', dashArray: '5, 10' });
                    
                    setTimeout(() => {
                        const confirmBlock = confirm("Blokir jalan ini dan cari rute lain?");
                        if(confirmBlock) {
                            const edgeId = [u, v].sort().join('-');
                            userBlockedEdges.add(edgeId); // Tambah ke blacklist
                            calculateRoute(); // Hitung ulang
                        } else {
                            visualLine.setStyle({ color: '#00f0ff', dashArray: null }); // Batal
                        }
                    }, 100);
                });

                routeLayers.push(visualLine);
                routeLayers.push(touchBlock);
                bounds.push(nodeU.coords);
                bounds.push(nodeV.coords);
            }
        }
        
        map.fitBounds(bounds, { padding: [50, 50] });
        if(el.instruction) el.instruction.style.display = 'block';
    }

    // ============================================================
    // 7. EVENT LISTENERS
    // ============================================================
    if (el.findBtn) {
        el.findBtn.addEventListener('click', () => {
            if (!isDataReady) return alert("Sedang memuat...");
            userBlockedEdges.clear(); 
            calculateRoute();
        });
    }

    if (el.resetBlockBtn) {
        el.resetBlockBtn.addEventListener('click', () => {
            userBlockedEdges.clear();
            calculateRoute();
        });
    }

    if (el.clearBtn) {
        el.clearBtn.addEventListener('click', () => {
            routeLayers.forEach(l => map.removeLayer(l));
            routeLayers = [];
            el.startInput.value = ''; el.startId.value = '';
            el.endInput.value = ''; el.endId.value = '';
            el.search.value = '';
            userBlockedEdges.clear();
            if(el.instruction) el.instruction.style.display = 'none';
            map.closePopup();
            map.setView([-3.759, 102.272], 16);
        });
    }

    function setupSearch(inputId, hiddenId, listId) {
        const input = document.getElementById(inputId);
        const list = document.getElementById(listId);
        if(!input || !list) return;

        input.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            list.innerHTML = '';
            if(!query) { list.style.display = 'none'; return; }
            
            const matches = graphData.nodes.filter(n => n.type !== 'jalan' && n.name.toLowerCase().includes(query));
            
            if(matches.length > 0) {
                list.style.display = 'block';
                matches.forEach(n => {
                    const li = document.createElement('li');
                    li.textContent = n.name;
                    li.onclick = () => {
                        input.value = n.name;
                        if(hiddenId) document.getElementById(hiddenId).value = n.id;
                        list.style.display = 'none';
                        if(inputId === 'search-building') {
                            map.setView(n.coords, 18);
                            if(markers[n.id]) markers[n.id].openPopup();
                        }
                    };
                    list.appendChild(li);
                });
            } else { list.style.display = 'none'; }
        });
        document.addEventListener('click', e => { if(e.target !== input) list.style.display = 'none'; });
    }

    setupSearch('search-building', null, 'search-results');
    setupSearch('start-location-input', 'start-location-id', 'start-results');
    setupSearch('end-location-input', 'end-location-id', 'end-results');
    
    if(el.mobileToggle){
        el.mobileToggle.addEventListener('click', () => {
            document.querySelector('.nav-sidebar').classList.toggle('open');
        });
    }
});
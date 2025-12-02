document.addEventListener('DOMContentLoaded', async function () {
    // 1. Inisialisasi Peta
    const map = L.map('map-parking').setView([-3.759, 102.272], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19, attribution: '© OpenStreetMap'
    }).addTo(map);

    const searchInput = document.getElementById('search-parking');
    const parkingListElement = document.getElementById('parking-list-detailed');
    
    // Variabel Global untuk menyimpan data
    let parkingAreaPolygons = {}; 
    let currentPolygons = [];

    // 2. ✨ FETCH DATA DARI DATABASE ✨
    try {
        const response = await fetch('/api/parking');
        const dataDB = await response.json();

        // Konversi format DB kembali ke format Object agar kompatibel dengan logika lama
        dataDB.forEach(loc => {
            parkingAreaPolygons[loc.polygon_id] = {
                name: loc.name,
                polygonId: loc.polygon_id, // Penting untuk referensi
                center: [loc.center_lat, loc.center_lng],
                areas: loc.zones.map(zone => ({
                    sub_id: zone.sub_id,
                    jenis_kendaraan: zone.vehicle_type,
                    color: zone.color,
                    coords: zone.coordinates // JSON otomatis jadi array oleh Laravel
                }))
            };
        });

        console.log("Data Parkir dimuat dari Database:", parkingAreaPolygons);
        
        // Tampilkan list awal setelah data siap
        const initialList = Object.values(parkingAreaPolygons).map(p => ({
            name: p.name, 
            polygonId: p.polygonId 
        }));
        displayParkingList(initialList);

    } catch (error) {
        console.error("Gagal memuat data parkir:", error);
        parkingListElement.innerHTML = '<li class="parking-item-empty">Gagal memuat data.</li>';
    }

    // 3. Fungsi Gambar Polygon (Tidak berubah banyak)
    function drawParkingLocation(locationData) {
        clearMapFeatures();
        const bounds = [];

        if (!locationData || !locationData.areas) return;

        locationData.areas.forEach(area => {
            const polygon = L.polygon(area.coords, {
                color: area.color, weight: 2, opacity: 1,
                fillColor: area.color, fillOpacity: 0.15,
                className: 'polygon-glow'
            }).addTo(map);

            polygon.bindPopup(`<b>${locationData.name}</b><br>Area: ${area.jenis_kendaraan}`);
            
            polygon.on('click', (e) => {
                 L.DomEvent.stopPropagation(e);
                 highlightListItem(locationData.polygonId);
             });
            currentPolygons.push(polygon);
            bounds.push(polygon.getBounds());
        });

        if (bounds.length > 0) {
            map.fitBounds(L.latLngBounds(bounds), { padding: [50, 50] });
        } else if (locationData.center) {
             map.setView(locationData.center, 18);
        }
    }

    function clearMapFeatures() {
        currentPolygons.forEach(p => map.removeLayer(p));
        currentPolygons = [];
        document.querySelectorAll('.parking-item.highlighted').forEach(el => el.classList.remove('highlighted'));
    }

    function highlightListItem(id) {
        document.querySelectorAll('.parking-item.highlighted').forEach(el => el.classList.remove('highlighted'));
        document.querySelectorAll(`[data-polygon-id="${id}"]`).forEach(item => item.classList.add('highlighted'));
    }

    // 4. Fungsi List & Search
    function displayParkingList(locations) {
        parkingListElement.innerHTML = '';
        if (locations.length === 0) {
            parkingListElement.innerHTML = '<li class="parking-item-empty">Lokasi tidak ditemukan</li>';
            return;
        }
        
        locations.forEach(loc => {
            const li = document.createElement('li');
            li.className = 'parking-item';
            li.dataset.polygonId = loc.polygonId;
            li.innerHTML = `<h5>${loc.name}</h5>`;

            li.addEventListener('click', () => {
                const data = parkingAreaPolygons[loc.polygonId];
                if (data) {
                    drawParkingLocation(data);
                    highlightListItem(loc.polygonId);
                }
            });
            parkingListElement.appendChild(li);
        });
    }

    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        const allData = Object.values(parkingAreaPolygons);
        const filtered = allData.filter(p => p.name.toLowerCase().includes(query))
                                .map(p => ({ name: p.name, polygonId: p.polygonId }));
        displayParkingList(filtered);
    });

    // Legenda Peta
    const legend = L.control({ position: 'bottomright' });
    legend.onAdd = function () {
        const div = L.DomUtil.create('div', 'info legend');
        div.innerHTML =
            '<h4>Legenda Parkir</h4>' +
            '<div><i style="background: #00f0ff"></i> Motor</div>' +
            '<div><i style="background: #f72585"></i> Mobil</div>' +
            '<div><i style="background: #9b59b6"></i> Motor & Mobil</div>';
        return div;
    };
    legend.addTo(map);
});
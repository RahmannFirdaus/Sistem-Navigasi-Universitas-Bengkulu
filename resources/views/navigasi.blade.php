<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi Peta - Sistem Navigasi UNIB</title>
    <link rel="stylesheet" href="{{ asset('css/style-navigasi.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="nav-page-body">
    <div class="nav-page-wrapper">
        <button class="mobile-sidebar-toggle" id="mobile-sidebar-toggle"><i class="fas fa-bars"></i></button>

        <aside class="nav-sidebar" id="nav-sidebar">
            <div class="sidebar-header">
                <i class="fa-solid fa-compass header-icon"></i>
                <h2 class="sidebar-title">Navigasi</h2>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-section">
                    <h4><i class="fas fa-search-location"></i> Cari Gedung</h4>
                    <div class="search-input-group">
                        <i class="fas fa-search search-icon"></i>
                        <input type="search" id="search-building" class="form-control search-input" placeholder="Nama gedung..." autocomplete="off">
                        <ul id="search-results" class="search-results-list"></ul>
                    </div>
                </div>
                <div class="sidebar-section">
                    <h4><i class="fas fa-route"></i> Cari Rute</h4>
                    <div class="form-group route-search-group">
                        <label>Lokasi Awal</label>
                        <input type="search" id="start-location-input" class="form-control" placeholder="Pilih lokasi..." autocomplete="off">
                        <input type="hidden" id="start-location-id">
                        <ul id="start-results" class="search-results-list"></ul>
                    </div>
                    <div class="form-group route-search-group">
                        <label>Lokasi Tujuan</label>
                        <input type="search" id="end-location-input" class="form-control" placeholder="Pilih lokasi..." autocomplete="off">
                        <input type="hidden" id="end-location-id">
                        <ul id="end-results" class="search-results-list"></ul>
                    </div>
                    
                    <div class="button-group" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <button id="find-route-btn" class="btn btn-primary" style="flex: 1;">
                            <i class="fas fa-search"></i> Cari
                        </button>
                        
                        <button id="reset-block-btn" class="btn btn-warning" style="display: none; background-color: #ffc107; color: #000; border: none; flex: 1;">
                            <i class="fas fa-undo"></i> Reset Blokir
                        </button>
                    
                        <button id="clear-route-btn" class="btn btn-secondary" style="flex: 0 0 auto;">
                            <i class="fas fa-times"></i> Bersihkan
                        </button>
                    </div>
                    
                    <div id="instruction-text" style="display:none; margin-top:12px; font-size:0.85rem; color:#94a3b8; text-align:center; line-height:1.4;">
                        <i class="fas fa-hand-pointer"></i> Klik garis rute untuk memblokir/membuka jalan.
                    </div>
                    </div>
            </div>
            <div class="sidebar-footer">
                <a href="{{ route('beranda') }}" class="btn btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </aside>
        <main id="map" class="map-container"></main>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="{{ asset('js/navigasi.js') }}"></script>
</body>
</html>
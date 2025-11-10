<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigasi Peta - Sistem Navigasi UNIB</title>
    
    <link rel="stylesheet" href="{{ asset('css/style-navigasi.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="nav-page-body hightech-theme">

    <div class="nav-page-wrapper">
        <button class="mobile-sidebar-toggle" id="mobile-sidebar-toggle"><i class="fas fa-bars"></i></button>

        <aside class="nav-sidebar" id="nav-sidebar">
            <div class="sidebar-header">
                <i class="fa-solid fa-compass header-icon"></i>
                <h2 class="sidebar-title">Sistem Navigasi</h2>
            </div>

            <div class="sidebar-content">
                <div class="sidebar-section search-section">
                    <h4><i class="fas fa-search-location"></i> Cari Gedung</h4>
                    <div class="search-input-group">
                        <i class="fas fa-search search-icon"></i>
                        <input type="search" id="search-building" class="form-control search-input" placeholder="Ketik nama gedung..." autocomplete="off">
                        <ul id="search-results" class="search-results-list"></ul>
                    </div>
                </div>

                <div class="sidebar-section">
                    <h4><i class="fas fa-route"></i> Cari Rute</h4>
                    
                    <div class="form-group route-search-group">
                        <label for="start-location-input">Lokasi Awal</label>
                        <input type="search" id="start-location-input" class="form-control" placeholder="Ketik atau pilih lokasi..." autocomplete="off">
                        {{-- Panah Dropdown Dihapus --}}
                        <input type="hidden" id="start-location-id">
                        <ul id="start-results" class="search-results-list"></ul>
                    </div>

                    <div class="form-group route-search-group">
                        <label for="end-location-input">Lokasi Tujuan</label>
                        <input type="search" id="end-location-input" class="form-control" placeholder="Ketik atau pilih lokasi..." autocomplete="off">
                        {{-- Panah Dropdown Dihapus --}}
                        <input type="hidden" id="end-location-id">
                        <ul id="end-results" class="search-results-list"></ul>
                    </div>

                    <div class="button-group">
                        <button id="find-route-btn" class="btn btn-primary"><i class="fas fa-map-signs"></i> Cari</button>
                        <button id="clear-route-btn" class="btn btn-secondary"><i class="fas fa-times"></i> Bersihkan</button>
                    </div>
                </div>
            </div>

            <div class="sidebar-footer">
                <a href="{{ route('beranda') }}" class="btn btn-back">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </aside>

        <main id="map" class="map-container"></main>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="{{ asset('js/navigasi.js') }}"></script>
    <script>
        // Toggle Sidebar Mobile
        const sidebar = document.getElementById('nav-sidebar');
        const toggleButton = document.getElementById('mobile-sidebar-toggle');
        const wrapper = document.querySelector('.nav-page-wrapper');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            wrapper.classList.toggle('sidebar-open');
        });

        document.addEventListener('click', function(event) {
          if (window.innerWidth < 768 && sidebar.classList.contains('open')) {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnToggleButton = toggleButton.contains(event.target);
            if (!isClickInsideSidebar && !isClickOnToggleButton) {
              sidebar.classList.remove('open');
              wrapper.classList.remove('sidebar-open');
            }
          }
        });
    </script>
</body>
</html>
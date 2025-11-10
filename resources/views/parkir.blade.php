<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Parkir - Sistem Navigasi UNIB</title>
    <link rel="stylesheet" href="{{ asset('css/style-parking.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="parking-page-body hightech-light-theme"> {{-- ✨ UBAH KELAS TEMA DI SINI ✨ --}}

    <div class="parking-page-wrapper">
        <button class="mobile-sidebar-toggle" id="mobile-sidebar-toggle"><i class="fas fa-bars"></i></button>

        <aside class="parking-sidebar" id="parking-sidebar">
            <div class="sidebar-header">
                <i class="fa-solid fa-map-location-dot header-icon"></i>
                <h2 class="sidebar-title">Lokasi Parkir</h2>
            </div>

            <div class="sidebar-content">
                <div class="sidebar-section search-section">
                    <h4><i class="fas fa-search"></i> Cari Lokasi</h4>
                    <div class="search-input-group">
                        <i class="fas fa-search search-icon"></i>
                        <input type="search" id="search-parking" class="form-control search-input" placeholder="Ketik nama lokasi...">
                    </div>
                </div>

                <div class="sidebar-section list-section">
                    <h4>Daftar Lokasi</h4>
                    <ul id="parking-list-detailed" class="parking-list-detailed">
                        <li class="parking-item-empty">Memuat data...</li>
                    </ul>
                </div>
            </div>

            <div class="sidebar-footer">
                <a href="{{ route('beranda') }}" class="btn btn-back">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </aside>

        <main class="parking-map-container">
            <div id="map-parking" class="map-view"></div>
        </main>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="{{ asset('js/parkir.js') }}"></script>
    <script>
        const sidebar = document.getElementById('parking-sidebar');
        const toggleButton = document.getElementById('mobile-sidebar-toggle');
        const wrapper = document.querySelector('.parking-page-wrapper');

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
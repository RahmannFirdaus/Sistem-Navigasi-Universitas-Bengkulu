<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Sistem Navigasi UNIB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">

    <div class="bg-overlay"></div>

    <header class="main-header">
        <div class="logo-container">
            <img src="{{ asset('images/Logo Unib.png') }}" alt="Logo UNIB" class="logo">
            <h2>UNIB <span style="font-weight: 300;">Maps</span></h2>
        </div>
    </header>

    <div class="content-area">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Jelajahi Kampus</h1>
                <p>Temukan gedung kuliah, rute, fasilitas, dan area parkir dengan mudah.</p>
            </div>

            <div class="menu-wrapper">
                <a href="{{ route('navigasi') }}" class="menu-card nav-card">
                    <div class="icon-bg">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3>Navigasi Peta</h3>
                    <p>Cari rute tercepat antar gedung</p>
                    <span class="btn-text">Mulai <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="{{ route('parkir.index') }}" class="menu-card park-card">
                    <div class="icon-bg">
                        <i class="fa-solid fa-square-parking"></i>
                    </div>
                    <h3>Info Parkir</h3>
                    <p>Cek area parkir</p>
                    <span class="btn-text">Lihat <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <span>&copy; 2025 Universitas Bengkulu &bull; Sistem Navigasi</span>
    </footer>

    <button class="floating-info-btn" onclick="openInfoModal()" title="Bantuan & Informasi">
        <i class="fas fa-question"></i>
    </button>

    <div class="modal-overlay" id="info-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><i class="fas fa-info-circle"></i> Informasi Navigasi</h3>
                <button class="modal-close" onclick="closeInfoModal()">&times;</button>
            </div>
            
            <div class="modal-body modal-info-content">
                <div class="info-section">
                    <h4><i class="fas fa-map-signs"></i> Legenda Area Parkir</h4>
                    <ul class="legend-list">
                        <li>
                            <span class="legend-icon" style="background-color: #00f0ff;"></span> 
                            Area Parkir Motor
                        </li>
                        
                        <li>
                            <span class="legend-icon" style="background-color: #f72585;"></span> 
                            Area Parkir Mobil
                        </li>
                        
                        <li>
                            <span class="legend-icon" style="background-color: #9b59b6;"></span> 
                            Area Parkir Motor & Mobil
                        </li>
                    </ul>
                </div>
                <div class="info-section">
                    <h4><i class="fas fa-clock"></i> Jadwal Gerbang</h4>
                    <table class="info-table">
                        <tr><td><strong>Gerbang Masuk Depan Rektorat</strong></td><td>Setiap Hari (06:00-22:00)</td></tr>
                        <tr><td><strong>Gerbang Masuk UNIB Belakang</strong></td><td>Senin-Jumat (06:00-18:00)</td></tr>
                        <tr><td><strong>Gerbang Keluar UNIB Belakang</strong></td><td>Setiap Hari (06:00-22:00)</td></tr>
                        <tr><td><strong>Gerbang Masuk UNIB Depan</strong></td><td>Senin-Jumat (06:00-18:00)</td></tr>
                        <tr><td><strong>Gerbang Keluar UNIB Depan</strong></td><td>Senin-Jumat (06:00-18:00)</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        const infoModal = document.getElementById('info-modal');
        function openInfoModal() { infoModal.classList.add('active'); }
        function closeInfoModal() { infoModal.classList.remove('active'); }
        window.onclick = function(event) { if (event.target == infoModal) closeInfoModal(); }
    </script>
</body>
</html>
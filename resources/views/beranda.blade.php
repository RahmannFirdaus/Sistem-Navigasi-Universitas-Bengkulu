<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Sistem Navigasi UNIB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="dashboard-body">

    <header class="main-header">
        <div class="logo-container">
            <img src="{{ asset('images/Logo Unib.png') }}" alt="Logo UNIB" class="logo">
            <h2>Beranda</h2>
        </div>

        <div class="header-right-wrapper">
            
            <div class="notification-area">
                <button id="notification-bell" class="header-icon-btn" title="Pengumuman">
                    <i class="fas fa-bell"></i>
                    
                    @if($pengumuman->isNotEmpty())
                        <span class="notification-dot"></span>
                    @endif
                </button>

                <div id="notification-dropdown" class="notification-dropdown">
                    <div class="dropdown-header">
                        <h3>Pengumuman Terbaru</h3>
                    </div>
                    <ul class="dropdown-list">
                        
                        @forelse($pengumuman as $item)
                            <li class="announcement-item" 
                                data-title="{{ $item->judul }}" 
                                data-content="{{ $item->isi }}">
                                <span class="item-title">{{ $item->judul }}</span>
                                <span class="item-date">{{ $item->created_at->format('d M Y') }}</span>
                            </li>
                        @empty
                            <li class="empty-notification">
                                <span>Tidak ada pengumuman saat ini.</span>
                            </li>
                        @endforelse

                    </ul>
                </div>
            </div>

            <div class="user-profile">
                <i class="fas fa-user-circle"></i>
                <span>{{ Auth::user()->name }}</span>
            </div>
        </div>

    </header>

    <main class="content-area">
        <div class="menu-container">
            
            {{-- Kartu Informasi Umum --}}
            <a href="#" class="menu-card" data-modal-target="#info-modal">
                <i class="fas fa-circle-info card-icon"></i><h3>Informasi Penting</h3><p>Kontak, Layanan & Info Kampus...</p>
            </a>
            
            {{-- Kartu Parkir --}}
            <a href="{{ route('parkir.index') }}" class="menu-card">
                <i class="fas fa-car card-icon"></i><h3>Daftar Parkir</h3><p>Lihat Lokasi & Status...</p>
            </a>
            
            {{-- Kartu Navigasi Utama (Kelas 'card-center' dihapus) --}}
            <a href="{{ route('navigasi') }}" class="menu-card">
                <i class="fas fa-compass card-icon"></i><h3>Menu Navigasi</h3>
            </a>
        </div>
    </main>

    <footer class="main-footer">
        <p>© 2025 Sistem Navigasi</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">Keluar</button>
        </form>
    </footer>

    <div class="modal-overlay" id="info-modal">
        <div class="modal-content">
            <button class="modal-close" data-modal-close>&times;</button>
            <h2 class="modal-title">Informasi Penting Universitas Bengkulu</h2>
            <div class="modal-body modal-info-content">
                <h4>Kontak Darurat & Layanan</h4>
                <ul>
                    <li><strong>Keamanan Kampus (24 Jam):</strong> (0736) 21170 ext. 123</li>
                    <li><strong>Poliklinik UNIB:</strong> (0736) 21170 ext. 456 (Jam Kerja)</li>
                    <li><strong>Email Rektorat:</strong> rektorat@unib.ac.id</li>
                </ul>
                
                <h4>Layanan Akademik & Kemahasiswaan</h4>
                <p>Untuk informasi mengenai registrasi ulang, KIP Kuliah, atau layanan akademik lainnya, silakan hubungi biro terkait:</p>
<ul>
                    <li><strong>Biro PPK (Perencanaan, Pengembangan, & Kerjasama)</strong></li>
                    <li><strong>Biro USD (Umum, Sumber Daya, & Keuangan)</strong></li>
                    <li><strong>UPT Perpustakaan:</strong> Buka Senin-Jumat, 08.00 - 16.00 WIB.</li>
                </ul>

                <h4>Akses Internet (WiFi)</h4>
                <p>Gunakan jaringan <strong>@unib.ac.id</strong> atau <strong>UNIB_Internal</strong> dengan menggunakan akun email UNIB Anda yang terdaftar.</p>
            </div>
        </div>
    </div>
    
    <div class="modal-overlay" id="announcement-modal">
        <div class="modal-content">
            <button class="modal-close" data-modal-close>&times;</button>
            <h2 class="modal-title" id="announcement-modal-title">Judul Pengumuman</h2>
            <p class="modal-body" id="announcement-modal-body">Isi pengumuman akan muncul di sini.</p>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Logika Dropdown Notifikasi ---
            const bell = document.getElementById('notification-bell');
            const dropdown = document.getElementById('notification-dropdown');

            if (bell) {
                bell.addEventListener('click', (event) => {
                    event.stopPropagation();
                    if (dropdown) dropdown.classList.toggle('active');
                });
            }

            // --- Logika Modal Generik (Info Umum) ---
            const openModalButtons = document.querySelectorAll('[data-modal-target]');
            const closeModalButtons = document.querySelectorAll('[data-modal-close]');
            const overlays = document.querySelectorAll('.modal-overlay');

            const openModal = (modal) => {
                if (modal == null) return;
                modal.classList.add('active');
            };

            const closeModal = (modal) => {
                if (modal == null) return;
                modal.classList.remove('active');
            };

            openModalButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault(); // Mencegah link #
                    const modal = document.querySelector(button.dataset.modalTarget);
                    openModal(modal);
                });
            });

            closeModalButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modal = button.closest('.modal-overlay');
                    closeModal(modal);
                });
            });

            overlays.forEach(overlay => {
                overlay.addEventListener('click', (event) => {
                    if (event.target === overlay) {
                        closeModal(overlay);
                    }
                });
            });
            
            // --- Logika Modal Pengumuman (dari dropdown) ---
            const announcementModal = document.getElementById('announcement-modal');
            const modalTitle = document.getElementById('announcement-modal-title');
            const modalBody = document.getElementById('announcement-modal-body');
            const announcementItems = document.querySelectorAll('.announcement-item');

            announcementItems.forEach(item => {
                item.addEventListener('click', () => {
                    const title = item.dataset.title;
                    const content = item.dataset.content;

                    if(modalTitle) modalTitle.textContent = title;
                    if(modalBody) modalBody.textContent = content;
                    if(dropdown) dropdown.classList.remove('active');
                    
                    openModal(announcementModal);
                });
            });

            // Klik di luar dropdown untuk menutup dropdown
            document.addEventListener('click', (event) => {
                if (dropdown && dropdown.classList.contains('active') && !bell.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
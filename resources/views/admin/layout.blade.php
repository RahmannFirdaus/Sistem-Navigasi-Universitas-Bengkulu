<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="admin-body">
    <div id="admin-wrapper">
        <aside class="admin-sidebar" id="admin-sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('images/Logo Unib.png') }}" alt="Logo UNIB" class="logo">
                <span class="sidebar-title">Sistem Navigasi</span>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header"><span>MENU UTAMA</span></li>
                <li><a href="{{ route('admin.beranda') }}" class="{{ request()->routeIs('admin.beranda') ? 'active' : '' }}"><i class="fa-solid fa-house-chimney"></i><span>Beranda</span></a></li>
                
                {{-- ✨ PERUBAHAN DI SINI ✨ --}}
                <li class="menu-header"><span>MANAJEMEN KONTEN</span></li>
                <li><a href="{{ route('admin.pengumuman.index') }}" class="{{ request()->routeIs('admin.pengumuman.*') ? 'active' : '' }}"><i class="fa-solid fa-bullhorn"></i><span>Pengumuman</span></a></li>

                {{-- Bagian Manajemen Data (Route & Parkir) telah dihapus --}}
                {{-- ✨ AKHIR PERUBAHAN ✨ --}}
            </ul>
            <ul class="sidebar-menu bottom-menu">
                <li><a href="#"><i class="fa-solid fa-circle-info"></i><span>Panduan</span></a></li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i><span>Keluar</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </li>
            </ul>
        </aside>

        <main class="admin-main-content">
            <header class="admin-header">
                <button id="sidebar-toggle" class="sidebar-toggle-btn"><i class="fas fa-bars"></i></button>
                <div class="header-right">
                    <i class="fas fa-bell"></i>
                    <div class="admin-profile">
                        <i class="fas fa-user-circle"></i>
                        <span>{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </header>

            <div class="content-wrapper">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            document.getElementById('admin-wrapper').classList.toggle('sidebar-collapsed');
        });
    </script>
</body>
</html>
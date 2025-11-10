@extends('admin.layout')

@section('title', 'Beranda')

@section('content')
    <div class="welcome-banner">
        <div>
            <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
            <p>Semester Ganjil Tahun Akademik 2025/2026</p>
        </div>
        <div class="project-tag">Admin Panel</div>
    </div>

    <div class="admin-stats-container">
        
        <div class="stat-card">
            <div class="stat-icon icon-announcement">
                <i class="fa-solid fa-bullhorn"></i>
            </div>
            <div class="stat-info">
                <span class="stat-number">{{ $jumlahPengumuman }}</span>
                <span class="stat-label">Total Pengumuman</span>
            </div>
        </div>

        </div>

    <div class="content-section">
        <div class="table-header">
            <h3>Informasi Sistem</h3>
        </div>
        <p>Selamat datang di dashboard administrator Sistem Navigasi UNIB. Dari sini, Anda dapat mengelola data-data penting yang akan ditampilkan kepada pengguna.</p>
        <p>Gunakan menu di sebelah kiri untuk:</p>
        <ul>
            <li>Mengelola **Pengumuman** yang tampil di aplikasi pengguna.</li>
        </ul>
    </div>
@endsection
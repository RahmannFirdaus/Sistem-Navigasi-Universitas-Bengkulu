<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Navigasi UNIB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="notification-container">
        {{-- Notifikasi setelah registrasi berhasil --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        {{-- Notifikasi setelah password berhasil direset atau link dikirim --}}
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        {{-- Notifikasi jika ada error (misal: login gagal) --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="auth-container">
        <div class="auth-card">
            <img src="{{ asset('images/Logo Unib.png') }}" alt="Logo UNIB" class="logo">
            <h1>Selamat Datang</h1>
            <p>Sistem Navigasi Universitas Bengkulu</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" autofocus>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Ingat Saya
                    </label>
                    <a href="{{ route('password.request') }}">Lupa Password?</a>
                </div>
                <button type="submit">Masuk</button>
            </form>

            <div class="switch-form">
                <p>Belum Punya Akun? <a href="{{ route('register') }}">Daftar Disini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
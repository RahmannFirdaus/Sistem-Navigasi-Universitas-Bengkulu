<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <img src="{{ asset('images/Logo Unib.jpg') }}" alt="Logo UNIB" class="logo">
            <h1>Lupa Password</h1>
            <p style="margin-bottom: 1rem;">Masukkan alamat email Anda, dan kami akan mengirimkan tautan untuk mereset password.</p>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                </div>
                <button type="submit">Kirim Tautan Reset</button>
            </form>
            <div class="switch-form">
                <p>Ingat password Anda? <a href="{{ route('login') }}">Login disini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Sistem Navigasi UNIB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="notification-container">
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
            <h1>Buat Akun Baru</h1>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password (min. 8 karakter)" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ulangi Password" required>
                </div>

                <span id="password_error" class="text-danger"></span>

                <button type="submit">Daftar</button>
            </form>
            <div class="switch-form">
                <p>Sudah Punya Akun? <a href="{{ route('login') }}">Login Disini</a></p>
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordConfirmationInput = document.getElementById('password_confirmation');
        const passwordError = document.getElementById('password_error');
        const submitButton = document.querySelector('button[type="submit"]');

        function validatePasswords() {
            if (passwordInput.value.length > 0 && passwordConfirmationInput.value.length > 0) {
                if (passwordInput.value !== passwordConfirmationInput.value) {
                    passwordError.textContent = 'Password tidak cocok!';
                    submitButton.disabled = true;
                } else {
                    passwordError.textContent = '';
                    submitButton.disabled = false;
                }
            } else {
                passwordError.textContent = '';
                submitButton.disabled = false;
            }
        }
        passwordInput.addEventListener('keyup', validatePasswords);
        passwordConfirmationInput.addEventListener('keyup', validatePasswords);
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="login-container">
        <div class="logo">
            <img src="{{ URL::asset('image/Cashier_Apps_Logo3-removebg-preview.png') }}" alt="">
        </div>

        <form action="/login" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <input type="text" placeholder="Username atau Email" required name="login">
                    <i class="fas fa-user"></i>
                </div>
                @error('login')
                {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="password" id="password" placeholder="Password" required name="password">
                    <i class="fas fa-lock"></i>
                    <i class="fas fa-eye" id="togglePassword"></i>
                </div>
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="links">
            <a href="#">Lupa kata sandi?</a>
        </div>

        <div class="separator"></div>

        <div class="links">
            <a href="/register">Buat akun baru</a>
        </div>
    </div>


    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            if (password.type === 'password') {
                password.type = 'text';
                togglePassword.classList.remove('fa-eye');
                togglePassword.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                togglePassword.classList.remove('fa-eye-slash');
                togglePassword.classList.add('fa-eye');
            }
        });
    </script>
</body>

</html>
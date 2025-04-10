<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="login-container">
        <div class="logo">
            <img src="{{ URL::asset('image/Cashier_Apps_Logo3-removebg-preview.png') }}" alt="">
        </div>

        <form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="input-group">
            <input type="text" name="name" placeholder="Username" required>
            <i class="fas fa-user"></i>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
            <i class="fas fa-envelope"></i>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <i class="fas fa-lock"></i>
            <i class="fas fa-eye" id="togglePassword"></i>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            <i class="fas fa-lock"></i>
        </div>
    </div>

    <button type="submit">Register</button>
</form>



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

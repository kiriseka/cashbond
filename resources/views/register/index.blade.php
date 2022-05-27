<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/responsif.css">
    <title>Registrasi</title>
</head>
<body>
    <img class="logo" src="/img/logo.png" alt="logo">
    <div class="kotak_login">
        <p class="tulisan_login">Registrasi</p>
    
        <form action="/register" method="post">
            @csrf
            <label>Nama</label>
            <input type="text" name="name" id="name" class="form_login" placeholder="Nama" autofocus required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <label>Email</label>
            <input type="text" name="email" id="email" class="form_login" placeholder="email@gmail.com" required value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <label>Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password" required>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form_login password_confirmation" placeholder="Password" required>
            <i class="bi bi-eye-slash" id="toggle-password_confirmation"></i>
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    
            <input type="submit" class="tombol_login" id="myBtn" value="Daftar">
    
            <center>
                <p class="link_login">Kembali Ke <a class="link" href="/login">Login</a></p>
            </center>
            <script>
                const togglePassword = document.querySelector("#togglePassword");
                const password = document.querySelector("#password");
                const toggleRePassword = document.querySelector("#toggle-password_confirmation");
                const RePassword = document.querySelector("#password_confirmation");

                togglePassword.addEventListener("click", function () {
                    const type = password.getAttribute("type") === "password" ? "text" : "password";
                    password.setAttribute("type", type);
                    
                    this.classList.toggle("bi-eye");
                });

                toggleRePassword.addEventListener("click", function () {
                    const type = RePassword.getAttribute("type") === "password" ? "text" : "password";
                    RePassword.setAttribute("type", type);
                    
                    this.classList.toggle("bi-eye");
                });
            </script>
        </form>
    </div>
</body>
</html>
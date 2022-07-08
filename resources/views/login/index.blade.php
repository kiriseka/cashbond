<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="{{ asset('/css/responsif.css') }}">


    <link rel="icon" href="{{ asset('img/logo-polos.png') }}" />

    <title>Login</title>
</head>

<body>
    <img class="logo" src="img/logo.png" alt="logo">


    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

        <form action="/login" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control form_login"
                placeholder="email@gmail.com" @error('email') is-invalid @enderror autofocus required
                value="{{ old('email') }}">

            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control form_login" placeholder="*******"
                required>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
            <a class="forget_pw link" href="#">Lupa Password?</a>

            <input type="submit" class="tombol_login" id="myBtn" value="Login">

            <center>
                <p class="link_login">Tidak punya akun? <a class="link" href="/register">Daftar disini!</a></p>
            </center>
        </form>
    </div>


    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session()->has('loginError'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal!',
                text: 'Akun yang anda masukkan salah!',
            })
        </script>
    @endif
    
    @if (session()->has('registerSuccess'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Buat akun berhasil!',
                text: 'Silahkan login untuk melanjutkan!',
            })
        </script>
    @endif

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            this.classList.toggle("bi-eye");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>

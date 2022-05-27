<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/responsif.css">
    <title>Home</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="left">
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="right">
            <div class="notif">
                <img src="svg/notif.svg" alt="">
            </div>
            <div class="user">
                <img src="svg/keluar.svg" alt="">
            </div>
        </div>
    </div>
      
    <!-- The sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="img/logo-1.png" alt="logo">
        </div>
        <div class="menu-sidebar">
            <div class="dashboard">
                <div class="icon-db icon">
                    <img src="svg/db.svg" alt="">
                </div>
                <a class="active" href="/">Dashboard</a>
            </div>
            <div class="catatan">
                <div class="icon-catatan icon">
                    <img src="svg/catatan.svg" alt="">
                </div>
                <a href="catatan">Catatan</a>
            </div>
            <div class="keluar">
                
                <div class="icon-keluar icon">
                    <img src="svg/keluar.svg" alt="">
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn-logout" type="submit">Keluar</button>
                </form>
                
            </div>
        </div>
    </div>
    
    <!-- Page content -->
    <div class="content">
        <img src="img/logo-polos.png" alt="">
        <h2>Welcome Back</h2>
        <h4>Hello, {{ auth()->user()->name }}</h4>
    </div>
    <script src="/js/script.js"></script> 
</body>
</html>
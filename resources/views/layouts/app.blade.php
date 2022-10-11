<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/css/notif.css">
    <link rel="stylesheet" href="/css/responsif.css">
    <link rel="icon" href="{{ asset('img/logo-polos.png') }}"/>
    <title>Home</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".notification_icon .fa-bell").click(function(){
				$(".dropdown").toggleClass("active");
			})
		});
	</script>
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
        <div class="wrapper">
	            <div class="notification_wrap">
                    <div class="notif notification_icon">
                        <img class="fa-bell" src="/svg/notif.svg" alt="">
                    </div>
                    <div class="dropdown">
                        <div class="notify_item">
                            <div class="notify_info">
                                <p>Johan belum membayar selama<span>14 hari</span></p>
                                <span class="notify_time">10 minutes ago</span>
                            </div>
                        </div>
                        <div class="notify_item">
                            <div class="notify_info">
                                <p>Sunarya belum membayar selama<span>7 hari</span></p>
                                <span class="notify_time">55 minutes ago</span>
                            </div>
                        </div>
                        <div class="notify_item">
                            <div class="notify_info">
                                <p>Agus belum membayar selama<span>8 hari</span></p>
                                <span class="notify_time">2 hours ago</span>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="user">
                <img src="svg/keluar.svg" title="{{ auth()->user()->name }}">
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
                <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">Dashboard</a>
            </div>
            <div class="catatan {{ (request()->is('/transaction*')) ? 'active' : '' }}">
                <div class="icon-catatan icon">
                    <img src="/svg/catatan.svg" alt="">
                </div>
                <a href="/transaction">Catatan</a>
            </div>
            <div class="keluar"> 
                <div class="icon-keluar icon">
                    <img src="/svg/keluar.svg" alt="">
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn-logout" type="submit">Keluar</button>
                </form>    
            </div>
            <div class="saran"> 
                <div class="icon-saran icon">
                    <img width="24" height="24" viewBox="0 0 24 24" fill="none" src="img/saran.png" alt="">
                </div>
                <a class="{{ (request()->is('/saran')) ? 'active' : '' }}" href="/">Saran dan Masukan</a>   
            </div>
        </div>
    </div>
    
    <!-- Page content -->
    @yield('content')
    
</body>
</html>
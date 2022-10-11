<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/css/notif.css">
    <link rel="stylesheet" href="/css/responsif.css">
    <link rel="icon" href="{{ asset('img/logo-polos.png') }}"/>
    <title>Tambah Catatan</title>
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
            <p class="name-page">Tambah Catatan</p>
        </div>
        <div class="right">
        <div class="wrapper">
	            <div class="notification_wrap">
                    <div class="notif notification_icon">
                        <img class="fa-bell" src="/../svg/notif.svg" alt="">
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
                <img src="{{ asset('/svg/keluar.svg') }}" title="{{ auth()->user()->name }}">
            </div>
        </div>
    </div>
      
      <!-- The sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('/img/logo-1.png') }}" alt="logo">
        </div>
        <div class="menu-sidebar">
            <div class="dashboard">
                <div class="icon-db icon">
                    <img src="{{ asset('svg/db.svg') }}" alt="">
                </div>
                <a class="home" href="/">Dashboard</a>
            </div>
            <div class="catatan">
                <div class="icon-catatan icon">
                    <img src="/svg/catatan.svg" alt="">
                </div>
                <a class="active" href="/transaction">Catatan</a>
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
        </div>
    </div>
    
    <!-- Page content -->
    <div class="content">
        <div class="name">
            <p class="name-page">Tambah Catatan</p>
        </div>
        <form action="/transaction" method="post">
            @csrf
            <label>Nama</label>
            <input type="text" name="nama_customer" id="nama_customer" class="form">
            <label>Produk</label>
            <input type="text" name="produk_item" id="produk_item" class="form">
            @error('nama_customer')
                <div class="invalid-feedback warn">
                    {{ $message }}
                </div>
            @enderror

            <label>Harga</label>
            <input type="number" name="nominal_transaksi" id="nominal_transaksi" class="form" placeholder="Rp">
            @error('nominal_transaksi')
                <div class="invalid-feedback warn">
                    {{ $message }}
                </div>
            @enderror

            <label>Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form">
            @error('tanggal_transaksi')
                <div class="invalid-feedback warn">
                    {{ $message }}
                </div>
            @enderror
            
            <label>Status</label>
            <div class="dropdown">
                <select id="status_transaksi" name="status_transaksi">
                    <option value="1" selected>Belum Lunas</option>
                    <option value="2">Lunas</option>
                </select>
            </div>
            <input type="submit" class="btn" value="Tambah">
        </form>
    </div>
    <script src="/js/script.js"></script> 
</body>
</html>
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
    <link rel="stylesheet" href="/css/responsif.css">
    <title>Ubah Catatan</title>
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
            <p class="name-page">Ubah Catatan</p>
        </div>
        <div class="right">
            <div class="notif">
                <img src="/svg/notif.svg" alt="">
            </div>
            <div class="user">
                <img src="/svg/keluar.svg" alt="">
            </div>
        </div>
    </div>
      
    <!-- The sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="/img/logo-1.png" alt="logo">
        </div>
        <div class="menu-sidebar">
            <div class="dashboard">
                <div class="icon-db icon">
                    <img src="/svg/db.svg" alt="">
                </div>
                <a href="/">Dashboard</a>
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
            <p class="name-page">Ubah Catatan</p>
        </div>

        <form action="/transaction/{{ $transaction->id }}" method="post">
            @method('put')
            @csrf
            <label>Nama Customer</label>
            <input type="text" name="nama_customer" id="nama_customer" class="form" required autofocus value="{{ old('nama_customer', $transaction->nama_customer) }}">

            <label>Produk</label>
            <input type="text" name="produk_item" id="produk_item" class="form" required value="{{ old('produk_item', $transaction->produk_item) }}">

            <label>Harga</label>
            <input type="text" name="nominal_transaksi" id="nominal_transaksi" class="form" required value="{{ old('nominal_transaksi', $transaction->nominal_transaksi) }}">

            <label>Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form" required value="{{ old('tanggal_transaksi', $transaction->tanggal_transaksi) }}">
            
            <label>Status</label>
            <select id="status_transaksi" name="status_transaksi">
                @if (old('status_transaksi', $transaction->status_transaksi) == 1 )
                    <option value="1" selected>Belum Lunas</option>
                    <option value="2" >Lunas</option>
                @else
                    <option value="1" >Belum Lunas</option>
                    <option value="2"selected>Lunas</option>
                @endif
                
            </select>
                
            <input type="submit" class="btn update" value="Update">
        </form>

    </div>
    <script src="/js/script.js"></script> 
</body>
</html>
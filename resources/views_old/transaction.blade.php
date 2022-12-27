<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/catatan.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/css/responsif.css">
    <link rel="stylesheet" href="/css/notif.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="icon" href="{{ asset('img/logo-polos.png') }}"/>
    <title>Catatan</title>
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
            <p class="name-page"><b>Catatan</b></p>
            <p class="keterangan">Catatan Tunggakan Transaksi</p>
        </div>
        <div class="right">
            <form action="/transaction" class="search-bar">
                <img class="search" src="svg/search.svg" alt="">
                <input type="text" name="search" id="search" placeholder="search">
            </form>
            <div class="wrapper">
	            <div class="notification_wrap">
                    <div class="notif notification_icon">
                        <img class="fa-bell" src="svg/notif.svg" alt="">
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
                <a href="/">Dashboard</a>
            </div>
            <div class="catatan">
                <div class="icon-catatan icon">
                    <img src="svg/catatan.svg" alt="">
                </div>
                <a class="active" href="/transaction">Catatan</a>
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
        {{-- @if (!empty($search))
            <p>result for : {{ $search }}</p>
        @endif --}}
        <div class="name">
            <p class="name-page"><b>Catatan</b></p>
            <p class="keterangan">Catatan Tunggakan Transaksi</p>
        </div>
        <div class="input">
            <a href="/transaction/create">
                <input type="submit" value="+ Tambah Catatan" class="adds button" id="add">
            </a>
        </div>

        <table id="customers">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th class="hide">Produk</th>
                <th>Harga</th>
                <th>Status</th>
                <th class="hide">Tanggal Transaksi </th>
                <th>Action</th>

            </tr>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaction->nama_customer }}</td>
                    <td class="hide">{{ $transaction->produk_item }}</td>
                    <td>Rp. @currency($transaction->nominal_transaksi)</td>
                    <td>
                        @if (old('status_transaksi', $transaction->status_transaksi) == 1 )
                            <div class="belum-lunas">Belum Lunas</div>
                        @else
                            <div class="lunas">Lunas</div>
                        @endif
                    </td>
                    <td class="hide">{{ $transaction->tanggal_transaksi }}</td>
                    <td class="action">
                        <a href="/transaction/{{ $transaction->id }}/edit" type="submit">Edit</a>
                        <form class="hide" action="/transaction/{{ $transaction->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="delete" type="submit" onclick="return confirm('Kamu yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </table>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (!empty($search))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Menampilkan hasil untuk {{ $search }}',
            })
        </script>
    @endif
    @if (session()->has('deleted'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil dihapus!',
            })
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil dibuat!',
            })
        </script>
    @endif
</body>
</html>
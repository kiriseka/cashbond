<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catatan.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/responsif.css">
    <title>Catatan</title>
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
            <form action="" class="search-bar">
                <img class="search" src="svg/search.svg" alt="">
                <input type="text" name="search" id="search" placeholder="search">
            </form>
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
                <a href="/">Dashboard</a>
            </div>
            <div class="catatan">
                <div class="icon-catatan icon">
                    <img src="svg/catatan.svg" alt="">
                </div>
                <a class="active" href="catatan">Catatan</a>
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
        <div class="name">
            <p class="name-page"><b>Catatan</b></p>
            <p class="keterangan">Catatan Tunggakan Transaksi</p>
        </div>
        <div class="input">
            <a href="/catatan-edit.html">
                <input type="button" value="Edit" class="edit button" id="filter">
            </a>
            <input type="button" value="Filters" class="filters button" id="filter">
            <a href="/form-input.html">
                <input type="submit" value="+ Tambah Catatan" class="adds button" id="add">
            </a>
        </div>

        <table id="customers">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th class="hide">Produk</th>
                <th>Harga</th>
                <th>status</th>
                <th class="hide">Dibuat Pada </th>
            </tr>
            <tr>
                <td>1</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="lunas">Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="belum-lunas">Belum Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="lunas">Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="belum-lunas">Belum Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="belum-lunas">Belum Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="lunas">Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="lunas">Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="lunas">Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Jhon Clavio</td>
                <td class="hide">Pulsa</td>
                <td>Rp. 20.000</td>
                <td>
                    <div class="lunas">Lunas</div>
                </td>
                <td class="hide">April 14, 2020</td>
            </tr>
        </table>
    </div>

    <script>
        // function toggle(source) {
        //     checkboxes = document.getElementsByClassName("check");
        //     for(let i=0, n=checkboxes.length;i<n;i++) {
        //         checkboxes[i].checked = source.checked;
        //     }
        // }
    </script>

    <script src="/js/script.js"></script>   
</body>
</html>
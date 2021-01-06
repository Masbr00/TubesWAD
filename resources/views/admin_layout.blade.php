<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}">
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('asset/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        #body-row {
            margin-left:0;
            margin-right:0;
        }
        #sidebar-container {
            min-height: 100vh;   
            background-color: #333;
            padding: 0;
        }

        .sidebar-expanded {
            width: 230px;
        }
        .sidebar-collapsed {
            width: 60px;
        }

        #sidebar-container .list-group a {
            height: 50px;
            color: white;
        }

        #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
        }
        .sidebar-submenu {
            font-size: 0.9rem;
        }

        .sidebar-separator-title {
            background-color: #333;
            height: 35px;
        }
        .sidebar-separator {
            background-color: #333;
            height: 25px;
        }
        .logo-separator {
            background-color: #333;    
            height: 60px;
        }

        #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
        
        display: inline;
        text-align: right;
        padding-left: 10px;
        }

        #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
        
        display: inline;
        text-align: right;
        padding-left: 10px;
        }
    </style>
</head>
<body>
    
    {{-- sidebar --}}
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <span class="menu-collapsed">SisFO Pelayanan Publik</span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- Do Not Delete --}}
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="#">Profile</a>
                    </div>
                </li>
            </ul>
        </div>
        {{-- End of Do Not Delete --}}
        <div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selamat Datang, <font style="color:yellow"><b>Admin</b></font>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile">Profile</a>
                        <a class="dropdown-item" href="#">LogOut</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title d-flex align-items-center menu-collapsed">
                    <small style="color: white"><b>MAIN MENU</b></small>
                </li>

                {{-- Menampilkan Waktu dan Tanggal --}}
                <script type="text/javascript">
                    window.setTimeout("waktu()",1000);
                    function waktu() {
                        var jam = new Date();
                        setTimeout("waktu()",1000);
                        document.getElementById("jam").innerHTML = jam.getHours();
                        document.getElementById("menit").innerHTML = jam.getMinutes();
                        document.getElementById("detik").innerHTML = jam.getSeconds();
                    }
                </script>
                <li class="list-group-item list-group-item-action bg-dark text-white" onLoad="waktu()">
                    @php
                        date_default_timezone_set('Asia/Jakarta');
                        echo '<b>';
                        echo '<label>';
                        echo 'Tanggal : <br>';
                        echo date('D, d M Y');
                        echo '</label>';
                        echo '</b><br>';

                        echo '<b>';
                        echo 'Waktu : <br>';
                        echo '<span id="jam"></span>';
                        echo ':';
                        echo '<span id="menit"></span>';
                        echo ':';
                        echo '<span id="detik"></span>';
                        echo '</b>';
                    @endphp
                </li>
                {{-- end of menampilkan waktu dan tanggal --}}

                {{-- menu 1 --}}
                <a href="admin_home" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"><i class="fa fa-dashboard mr-3"></i> Beranda</span>
                </a>
                {{-- end of menu 1 --}}
                {{-- menu 2 --}}
                <a href="admin_skpd" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"><i class="fa fa-dashboard mr-3"></i> SKPD</span>
                </a>
                {{-- end of menu 2 --}}
                {{-- menu 2 --}}
                <a href="admin_visi" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"><i class="fa fa-dashboard mr-3"></i> Visi, Misi, Moto</span>
                </a>
                {{-- end of menu 2 --}}

                {{-- menu 4 --}}
                <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Daftar Layanan</span>
                        <span class="submenu-icon ml-auto"><i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div id='submenu4' class="collapse sidebar-submenu">
                    <a href="admin_buatktp" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Pembuatan KTP</span>
                    </a>
                    <a href="daftar_dokumen" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Daftar Pengajuan KTP</span>
                    </a>
                    <a href="ktp_selesai" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">List KTP Selesai</span>
                    </a>
                    <a href="ktp_belum_selesai" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">List KTP Belum Selesai</span>
                    </a>
                </div>
                {{-- end of menu 4 --}}
            </ul>
            <div class="d-flex w-100 justify-content-start align-items-center text-light ml-4 my-3">
                Jam Operasional
            </div>
            <div class="d-flex w-100 justify-content-start align-items-center text-light ml-4">
                <label><i class="fas fa-calendar-day"></i> Senin - Kamis</label>
            </div>
            <div class="d-flex w-100 justify-content-start align-items-center text-light ml-4 mb-3">
                <label><i class="fas fa-clock"></i> 07.00 - 15.30 WIB</label>
            </div>
            <div class="d-flex w-100 justify-content-start align-items-center text-light ml-4">
                <label><i class="fas fa-calendar-day"></i> Jum'at</label>
            </div>
            <div class="d-flex w-100 justify-content-start align-items-center text-light ml-4 mb-3">
                <label><i class="fas fa-clock"></i> 07.00 - 15.00 WIB</label>
            </div>
            <div class="d-flex w-100 justify-content-start align-items-center text-light ml-4">
                <label><i class="fas fa-calendar-day"></i> Sabtu dan Minggu</label>
            </div>
            <div class="d-flex w-100 justify-content-start align-items-center text-light ml-4 mb-3">
                <label><i class="fas fa-clock"></i> Libur</label>
            </div>
        </div>
    {{-- end of sidebar --}}

    {{-- content --}}
    <div class="container col ml-2 mt-1">
        <div class="mb-3 text-muted">
            <marquee class="bg-warning text-dark" behavior="alternate" onmouseout ="this.start()" 
            onmouseover = "this.stop()" scrollamount="16" title="Saat ini anda sedang mengakses website menggunakan akun dengan kelas Admin">
            Kelas Akses = Admin</marquee>
            <label>Laman : @yield('title')</label>
        </div>

        {{-- Isi dari konten akan ditampilkan disini --}}
        @yield('konten')
    </div>
    {{-- end of content --}}

    {{-- footer --}}
    <footer class="page-footer font-small blue bg-warning" style="width: 100%;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#" style="color: black"> TelkomUniversity</a>
        </div>
    </footer>
    {{-- end of footer --}}
</body>
</html>
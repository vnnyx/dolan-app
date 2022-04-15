<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/info-wisata.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<!-- Sidebar Holder -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="nav">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{ asset('image/dplan.png') }}" alt=""></a>
                </div>
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="list-unstyled components">
                    <li class="act">
                        <div class="hov">
                            <i class='bx bxs-dashboard'></i>
                            <a href="#">Dashboard</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-book-content'></i>
                            <a href="#">Konten</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-cart'></i>
                            <a href="#">Transaksi</a>
                        </div>
                    </li>
                    <br><br><br><br><br><br><br><br><br><br>
                    <li style="margin-left:35px;">
                        <div class="hov">
                            <i class='bx bx-log-out'></i>
                            <a href="{{ url('/pengelola/logout') }}">Keluar</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-9" id="banner">
            <h1 class="judul mt-3 mb-3 font-weight-bold">Dashboard Pemilik Wisata</h1>
            <div class="row">
                <div class="col-12">
                    <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Informasi Penjualan</h4>
                    <hr class="garis ml-4">
                </div>
            </div>
            <div class="row ml-3 mb-4">
                <div class="kanan col-6">
                    <img class="var" src="{{ asset('image/Variasi1.png') }}" alt="">
                    <h1 class="tiket mt-3 ml-3">Tiket terjual</h1>
                    <h1 class="count ml-4">{{ $totalTicket }}</h1>
                </div>
                <div class="kiri col-6 ml-3">
                    <img class="var" src="{{ asset('image/Variasi2.png') }}" alt="">
                    <h1 class="tiket mt-3 ml-3">Pengunjung</h1>
                    <h1 class="count ml-4">{{ $jumlahPengunjung }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Informasi Pendapatan</h4>
                    <hr class="garis ml-4">
                </div>
            </div>
            <div class="row ml-3">
                <div class="item col-12">
                    <img class="var" src="{{ asset('image/Variasi3.png') }}" alt="">
                    <h1 class="tiket mt-3 ml-3">Pendapatan Terkini</h1>
                    <h1 class="count ml-4">Rp {{ number_format($total, 2) }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Holder -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>

<script type="text/javascript">
    $(document).ready(function() {
        let navbarState = true;
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
            if (navbarState) {
                $('#nav').removeClass('col-md-3').addClass('col-md-2')
                $('#banner').removeClass('col-lg-9').addClass('col-lg-10')
                navbarState = false;
            } else {
                $('#nav').removeClass('col-md-2').addClass('col-md-3')
                $('#banner').removeClass('col-lg-10').addClass('col-lg-9')
                navbarState = true;
            }
        });
        $('li').on('click', function() {
            $(this).siblings().removeClass('act')
            $(this).addClass('act')
        });
    });
</script>
</body>

</html>

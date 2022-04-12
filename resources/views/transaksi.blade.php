<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/transaksi.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                            <i class='bx bxs-user-account'></i>
                            <a href="#">Akun</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-cart'></i>
                            <a href="#">Transaksi</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-9" id="banner">
            <h1 class="judul mt-3 mb-5 font-weight-bold">Daftar Transaksi</h1>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Menampilkan Daftar transaksi <span class="count">({{$count}})</span>
                    </h4>
                </div>
                <div class="col-md-6">
                    <span class="pipe">|</span>
                </div>
                <form action="/transaction">
                <div class="box">
                    <div class="container-1">
                        <span class="icon"><i class='bx bx-search'></i></span>
                        <input name="search" class="form-control" type="text" id="search"placeholder="Cari nama transaksi"/>
                    </div>
                    <button type="submit" class="btn btn-cari">Cari</button>
                    <i class='bx bx-filter-alt'></i>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12">
                    <hr class="garis ml-4">
                </div>
                @foreach($datas as $data)
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="wrapp">
                                @if($data->success == 1)
                                    <img class="status" src="{{ asset('image/centang.png') }}" alt="">
                                @endif
                                @if($data->success == 0)
                                    <img class="status" src="{{ asset('image/silang.png') }}" alt="">
                                @endif
                                <h1 class="wisata ml-5">Tiket Wisata <span>{{ $data->nama_wisata }}</span></h1>
                                <h4 class="harga">Rp{{ number_format($data->harga_tiket, 2) }}</h4>
                                <i class="fas fa-ticket-alt"></i>
                                <span class="tiket">{{ $data->total_ticket }} Tiket</span>
                                <i class="fa-solid fa-ticket-simple"></i>
                                <h4 class="lokasi mb-5">{{ $data->alamat }}</h4>
                                <i class='bx bx-user'> <span
                                        class="user"> {{ $data->username }}</span></i>
                                <i class='bx bx-calendar-week'> {{date('d F Y', strtotime($data->created_at))}}</i>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Page Content Holder -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.11.0/jquery.typeahead.min.js"
        integrity="sha512-Rc24PGD2NTEGNYG/EMB+jcFpAltU9svgPcG/73l1/5M6is6gu3Vo1uVqyaNWf/sXfKyI0l240iwX9wpm6HE/Tg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        let navbarState = true;
        $('#sidebarCollapse').on('click', function () {
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
        $('li').on('click', function () {
            $(this).siblings().removeClass('act')
            $(this).addClass('act')
        });
        $('.input-text').on('change', function () {
            var countfile = $(this)[0].files.length;
            var textgambar = $(this).prev();

            if (countfile === 1) {
                var filename = $(this).val().split('\\').pop();
                textgambar.text(filename);
            } else {
                textgambar.text(countfile + ' File yang dipilih')
            }
        });
        $(window).on('resize', function () {
            if ($(window).width() < 768) {
                $('#sidebar').addClass('active');
            } else {
                $('#sidebar').removeClass('active')
            }
        });
    });
</script>
</body>

</html>

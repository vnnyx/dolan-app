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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/list-pengajuan.css') }}">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/0ff6004706.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<!-- Sidebar Holder -->
<div class="container-fluid">
    <div class="row">
        <div class="col-3" id="nav">
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
                            <a href="{{ url("/admin/logout") }}">Keluar</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="akun col-md-9 mt-4">
            <h1 class="judul font-weight-bold mb-5">Daftar Akun</h1>
            <div class="row mb-5">
                <div class="col-6">
                    <h5 class="ml-3 font-weight-bold">Menampilkan Daftar Pembeli Tiket ({{ $count }})</h5>
                </div>
                <div class="col-7">
                    <div class="pipe"></div>
                    <form action="/pengelola/transaction">
                        <div class="box">
                            <div class="container-1">
                                <span class="icon"><i class='bx bx-search'></i></span>
                                <input type="text" id="search" name="term" placeholder="Search..." />
                            </div>
                            <button type="submit" class="btn btn-cari">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <hr class="garis"> -->
            @foreach($datas as $data)
                <div class="row ml-2 mb-5">
                    <div class="col-11">
                        <div class="wrapp">
                            <h5 class="account">{{ $data->username }}</h5>
                            <span class="tiket"><i class="fa-solid fa-ticket"></i> {{ $data->total_ticket }}
                                Tiket</span>
                            <div class="pipe2"></div>
                            <i class='bx bx-file' data-toggle="modal" data-target="#modal-bukti{{ $data->id }}"> Lihat
                                Transaksi</i>
                            <form action="/pengelola/transaction/{{ $data->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <button name="action" value="tolak" type="submit" class="btn btn-danger blokir"><i
                                        class='bx bx-block'></i>
                                    Tolak</button>
                                <button name="action" value="acc" type="submit" class="btn btn-success acc"><i
                                        class='bx bx-block'></i> Acc</button>
                                <hr class="garis-konten">
                            </form>
                        </div>
                    </div>
                </div>
                @include('modal.modal_transaksi')
            @endforeach
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
    let navbarState = true;
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');

            if (navbarState) {
                $('#nav').removeClass('col-md-3').addClass('col-md-2')
                navbarState = false;
            } else {
                $('#nav').removeClass('col-md-2').addClass('col-md-3')
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

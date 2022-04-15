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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/list-akun.css') }}">

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
                    <li>
                        <div class="hov">
                            <i class='bx bxs-dashboard'></i>
                            <a href="{{ url("/admin/dashboard") }}">Dashboard</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-book-content'></i>
                            <a href="{{ url("/admin/content") }}">Konten</a>
                        </div>
                    </li>
                    <li class="act">
                        <div class="hov">
                            <i class='bx bxs-user-account'></i>
                            <a href={{ url("/admin/akun") }}>Akun</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-cart'></i>
                            <a href="{{ url("/admin/transaction") }}">Transaksi</a>
                        </div>
                    </li>
                    <br><br><br><br><br><br><br>
                    <li style="margin-left:45px;">
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
            <div class="row">
                <form action="/admin/akun" method="get">
                    <div class="col">
                        <h5 class="ml-3 font-weight-bold">Menampilkan Daftar Akun</h5>
                        <select name="role" id="kategori" class="ml-3">
                            <option {{old('role',Session::get('roleOption'))=="semua" ? 'selected' :''}}
                                    value="semua">Semua</option>
                            <option {{old('role',Session::get('roleOption'))=="owner" ? 'selected' :''}}
                                    value="owner">Pemilik Wisata</option>
                            <option {{old('role',Session::get('roleOption'))=="user" ? 'selected' :''}}
                                    value="user">Pengunjung</option>
                        </select>
                        <h1 class="count">({{$totalData}})</h1>
                    </div>
                    <div class="col">
                        <div class="box">
                            <div class="container-1">
                                <span class="icon"><i class='bx bx-search'></i></span>
                                <input type="search" id="search" name="term" placeholder="Search..." />
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn cari mr-3"> Cari</button>
                </form>
            </div>
            @foreach($datas as $key => $data)
                <div class=" row list mt-5">
                    <div class="col-md-12">
                        <h4 class="account">{{$data->username}}</h4>
                        <button type="button" class="btn chat mr-3" id="pesan-{{$data->id}}"><i class="bx bx-chat"></i>
                            Kirim Pesan</button>
                        <button type="button" class="btn btn-danger blokir" id="blokir-{{$data->id}}"><i
                                class="bx bx-block"> Blokir</i></button>
                        <hr>
                    </div>
                </div>
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

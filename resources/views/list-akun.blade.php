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
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- Sidebar Holder -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
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
            <div class="akun col-md-9 mt-4">
                <h1 class="judul font-weight-bold mb-5">Daftar Akun</h1>
                <div class="row">
                    <div class="col">
                        <h5 class="ml-3 font-weight-bold">Menampilkan Daftar Akun</h5>
                        <select name="kategori" id="kategori" class="ml-3">
                            <option value="">Pemilik Wisata</option>
                            <option value="">Pengunjung</option>
                            <option value="">Semua</option>
                        </select>
                        <h1 class="count">(56)</h1>
                    </div>
                    <div class="col">
                        <div class="box">
                            <div class="container-1">
                                <span class="icon"><i class='bx bx-search'></i></span>
                                <input type="search" id="search" placeholder="Search..." />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list mt-5">
                    <div class="col-md-12">
                        <h4 class="account">Ignasius Nindra Karisma F</h4>
                        <button type="button" class="btn chat mr-3"><i class="bx bx-chat"></i> Kirim Pesan</button>
                        <button type="button" class="btn btn-danger blokir"><i class="bx bx-block"> Blokir</i></button>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content Holder -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');

            });
            $('li').on('click', function () {
                $(this).siblings().removeClass('act')
                $(this).addClass('act')
            });

        });
    </script>
</body>

</html>
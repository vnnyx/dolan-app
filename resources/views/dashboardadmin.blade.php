<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dolan</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="#"><img src="{{asset('image/dplan.png')}}" alt=""></a>
        <button type="button" id="sidebarCollapse" class="navbar-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
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
<!-- Page Content Holder -->
<div id="content">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    <h1 class="judul">Dashboard Admin</h1>
    <div class="row">
        <div class="cont-l col-lg-6" id="left">
            <h4>Menunggu Pengajuan(15)</h4>
            <hr>
            <h3 class="tanggal">Kamis, 24 Januari 2022</h3>
            <div class="row mb-3 ml-4">
                <div class="item col-lg-12 col-md-6">
                    <h1 class="nama-wisata">Desa Wisata Kauman Solo</h1>
                    <p class="lokasi">Jebres, Surakarta, Jawa Tengah</p>
                    <button type="button" class="btn">Detail wisata</button>
                </div>
            </div>
            <div class="row mb-3 ml-4">
                <div class="item col-lg-12 col-md-6">
                    <h1 class="nama-wisata">Desa Wisata Kauman Solo</h1>
                    <p class="lokasi">Jebres, Surakarta, Jawa Tengah</p>
                    <button type="button" class="btn">Detail wisata</button>
                </div>
            </div>
            <h3 class="tanggal">Kamis, 24 Januari 2022</h3>
            <div class="row mb-3 ml-4">
                <div class="item col-lg-12 col-md-6">
                    <h1 class="nama-wisata">Desa Wisata Kauman Solo</h1>
                    <p class="lokasi">Jebres, Surakarta, Jawa Tengah</p>
                    <button type="button" class="btn">Detail wisata</button>
                </div>
            </div>
            <h3 class="tanggal">Kamis, 24 Januari 2022</h3>
            <div class="row mb-3 ml-4">
                <div class="item col-lg-12 col-md-6">
                    <h1 class="nama-wisata">Desa Wisata Kauman Solo</h1>
                    <p class="lokasi">Jebres, Surakarta, Jawa Tengah</p>
                    <button type="button" class="btn">Detail wisata</button>
                </div>
            </div>
            <div class="row mb-3 ml-4">
                <div class="item col-lg-12 col-md-6">
                    <h1 class="nama-wisata">Desa Wisata Kauman Solo</h1>
                    <p class="lokasi">Jebres, Surakarta, Jawa Tengah</p>
                    <button type="button" class="btn">Detail wisata</button>
                </div>
            </div>
            <div class="row mb-3 ml-4">
                <div class="item col-lg-12 col-md-6">
                    <h1 class="nama-wisata">Desa Wisata Kauman Solo</h1>
                    <p class="lokasi">Jebres, Surakarta, Jawa Tengah</p>
                    <button type="button" class="btn">Detail wisata</button>
                </div>
            </div>
        </div>
        <div class="cont-r col-lg-3 col-md-12">
            <h1 class="catatan">Catatan ({{ $count }})</h1>
            <i class='bx bx-plus-circle' data-toggle="modal" data-target="#exampleModal"></i>
            <hr>
            @foreach($note as $notes)
            <div class="row mb-3">
                <div class="box col" data-toggle="modal" data-target="#modal-note">
                    <h1 class="jdl-note">{{ $notes->title }}</h1>
                    <p class="desc">{{ $notes->message }}</p>
                    <h6 class="adm-name">{{ $notes->username }}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tulis Catatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.store') }}" method="post">
                    @csrf
                    <h1 style="color: #B9B9B9;">Judul Catatan</h1>
                    <input type="text" id="notes" name="title" placeholder="Update Konten, Wisata, dll" style="border-radius: 8px;">
                    <h1 style="color: #B9B9B9;">Isi Catatan</h1>
                    <textarea name="message" id="isi" placeholder="Tulis apa aja deh disini buat admin yang lain biar bisa koordinasi" style="border-radius: 8px;"></textarea>
                    <button type="submit" class="btn justify-content-center w-100 py-3 text-white" style="background-color: #02182B;border-radius: 8px;">Buat Catatan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-note" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tulis Catatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.edit', $note->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <h1 style="color: #B9B9B9;">Judul Catatan</h1>
                    <input type="text" id="notes" placeholder="Update Konten, Wisata, dll" style="border-radius: 8px;">
                    <h1 style="color: #B9B9B9;">Isi Catatan</h1>
                    <textarea name="" id="isi" placeholder="Tulis apa aja deh disini buat admin yang lain biar bisa koordinasi" style="border-radius: 8px;"></textarea>
                    <div class="modal-footer" style="border: none;">
                        <button type="submit" class="btn py-3 text-white" style="background-color: #02182B;border-radius: 8px;">Simpan</button>
                        <button type="button" class="btn py-3">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        let navbarState = true;
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
            if (navbarState) {
                $('#left').removeClass('col-lg-6').addClass('col-lg-7')
                navbarState = false;
            }else{
                $('#left').removeClass('col-lg-7').addClass('col-lg-6')
                navbarState = true;
            }
        });
        $('li').on('click', function () {
            $(this).siblings().removeClass('act')
            $(this).addClass('act')
        });
    });
</script>
<!-- <script src="api-consume.js">
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            headers: {
                "Content-Type": "application/json"
            },
            url: "http://localhost:8800/api/hello/test",
            success: function (data) {
                var users = JSON.parse(JSON.stringify(data));
                $("#data").replaceWith('<a >'+users+'</a>')
            }
        });
    });
</script> -->
</body>

</html>

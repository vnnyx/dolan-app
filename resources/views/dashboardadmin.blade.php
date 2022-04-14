<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dolan</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    @include('sweetalert::alert')
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
                    <a href="{{ url("/admin/content") }}">Konten</a>
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
                    <a href="{{ url("/admin/transaction") }}">Transaksi</a>
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
                <h4>Menunggu Pengajuan({{$countSubmission}})</h4>
                <hr>
                @foreach($submissions as $key => $submission)
                @php($day='Minggu')

                @switch(date('l', strtotime($key)))
                @case('Monday')
                @php($day='Senin')
                @break
                @case('Tuesday')
                @php($day='Selasa')
                @break
                @case('Wednesday')
                @php($day='Rabu')
                @break
                @case('Thursday')
                @php($day='Kamis')
                @break
                @case('Friday')
                @php($day='Jumat')
                @break
                @case('Saturday')
                @php($day='Sabtu')
                @endswitch
                <h3 class="tanggal">{{$day}}{{date(', d F Y', strtotime($key));}}</h3>
                @foreach($submission as $wisata)
                <div class="row mb-3 ml-4">
                    <div class="item col-lg-12 col-md-6">
                        <h1 class="nama-wisata">{{$wisata->name}}</h1>
                        <p class="lokasi">{{$wisata->location}}</p>
                        <button type="button" class="btn" id="{{$wisata->id}}">Detail wisata</button>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
            <div class="cont-r col-lg-3 col-md-12">
                <h1 class="catatan">Catatan ({{ $count }})</h1>
                <i class='bx bx-plus-circle' data-toggle="modal" data-target="#exampleModal"></i>
                <hr>
                @foreach($note as $notes)
                <div class="row mb-3">
                    <div class="box col" data-toggle="modal" data-target="#modal-note{{$notes->id}}">
                        <h1 class="jdl-note">{{ $notes->title }}</h1>
                        <p class="desc">{{ $notes->message }}</p>
                        <h6 class="adm-name">{{ $notes->username }}</h6>
                    </div>
                </div>
                @include('modal.modal_update')
                @endforeach
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tulis Catatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/admin/note" method="post">
                        @csrf
                        <h1 style="color: #B9B9B9;">Judul Catatan</h1>
                        <input type="text" id="notes" name="title" placeholder="Update Konten, Wisata, dll" style="border-radius: 8px;">
                        <h1 style="color: #B9B9B9;">Isi Catatan</h1>
                        <textarea name="message" id="isi" placeholder="Tulis apa aja deh disini buat admin yang lain biar bisa koordinasi" style="border-radius: 8px;"></textarea>
                        <button type="submit" class="btn justify-content-center w-100 py-3 text-white" style="background-color: #02182B;border-radius: 8px;">Buat Catatan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let navbarState = true;
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                if (navbarState) {
                    $('#left').removeClass('col-lg-6').addClass('col-lg-7')
                    navbarState = false;
                } else {
                    $('#left').removeClass('col-lg-7').addClass('col-lg-6')
                    navbarState = true;
                }
            });

            $('li').on('click', function() {
                $(this).siblings().removeClass('act')
                $(this).addClass('act')
            });

            $(".alert").slideDown(300).delay(3000).slideUp(300)
        });
        $('li').on('click', function() {
            $(this).siblings().removeClass('act')
            $(this).addClass('act')
        });
        $('#hapus').on('hover', function() {
            $(this).css("background", "#DEE6F0");
        })
    </script>
</body>

</html>
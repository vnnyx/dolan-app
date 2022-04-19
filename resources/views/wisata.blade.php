<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_token" content="{{csrf_token()}}">

    <title>Dolan - Wisata</title>
    <link rel="icon" href="{{ url('image/favicon.ico') }}">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/wisata.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://kit.fontawesome.com/0ff6004706.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/helper.js') }}"></script>

</head>

<body>
@include('sweetalert::alert')
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
                    <li>
                        <div class="hov">
                            <i class='bx bxs-dashboard'></i>
                            <a href="{{ url('/pengelola/dashboard') }}">Dashboard</a>
                        </div>
                    </li>
                    <li class="act">
                        <div class="hov">
                            <i class='bx bx-book-content'></i>
                            <a href="{{ url('/pengelola/wisata') }}">Konten</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-cart'></i>
                            <a href="{{ url('/pengelola/transaction') }}">Transaksi</a>
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
            <h1 class="judul mt-3 mb-5 font-weight-bold">Daftar Konten</h1>
            <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Banner Halaman Utama</h4>
            <hr class="ml-4">
            <div class="wrapper mb-5">
                <div class="drop-file" id="banner1">
                    @if(sizeof($content) < 1)
                        <span class="btn-file">Pilih file</span>
                        <span class="name-file">atau Seret gambar kesini</span>
                        <input type="file" id="file1" class="input-text" name="banner-1" multiple>
                    @endif
                    @if(sizeof($content) > 0)
                        <img class="image" src="{{ $content[0]->content }}" style="height: 100%; width: 420px">
                        <div class="overlay">
                            <label for="update1" class="btn btn-edit text-white"
                                   style="margin-top: 23%; margin-right:10px;"><i
                                    class="fa-solid fa-pen-to-square text-white"></i> Ubah Gambar
                            </label>
                            <input type="file" id-content="{{$content[0]->id}}" id="update1" name="banner-1"
                                   class="input-text" style="display: none ;">
                            <a data-id="{{$content[0]->id}}" class="btn btn-danger ms-2 delete"
                               style="margin-top: 21%; color: white"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </div>
                    @endif
                </div>
                <div class="drop-file" id="banner2">
                    @if(sizeof($content) < 2)
                        <span class="btn-file">Pilih file</span>
                        <span class="name-file">atau Seret gambar kesini</span>
                        <input type="file" id="file2" class="input-text" name="banner-2" multiple>
                    @endif
                    @if(sizeof($content) > 1)
                        <img src="{{ $content[1]->content }}" style="height: 100%; width: 420px">
                        <div class="overlay">
                            <label for="update2" class="btn btn-edit text-white"
                                   style="margin-top: 23%; margin-right:10px;"><i
                                    class="fa-solid fa-pen-to-square text-white"></i> Ubah Gambar
                            </label>
                            <input type="file" id-content="{{$content[1]->id}}" id="update2" name="banner-2"
                                   class="input-text" style="display: none ;">
                            <a data-id="{{$content[1]->id}}" class="btn btn-danger ms-2 delete"
                               style="margin-top: 21%; color: white"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </div>
                    @endif
                </div>
                <div class="drop-file" id="banner3">
                    @if(sizeof($content) < 3)
                        <span class="btn-file">Pilih file</span>
                        <span class="name-file">atau Seret gambar kesini</span>
                        <input type="file" id="file3" class="input-text" name="banner-3" multiple>
                    @endif
                    @if(sizeof($content) > 2)
                        <img src="{{ $content[2]->content }}" style="height: 100%; width: 420px">
                        <div class="overlay">
                            <label for="update3" class="btn btn-edit text-white"
                                   style="margin-top: 23%; margin-right:10px;"><i
                                    class="fa-solid fa-pen-to-square text-white"></i> Ubah Gambar
                            </label>
                            <input type="file" id-content="{{$content[2]->id}}" id="update3" name="banner-3"
                                   class="input-text" style="display: none ;">
                            <a data-id="{{$content[2]->id}}" class="btn btn-danger ms-2 delete"
                               style="margin-top: 21%; color: white"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </div>
                    @endif
                </div>
            </div>
            <form action="/pengelola/data-wisata" method="post">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Deskripsi Wisata</h4>
                        <hr class="ml-4">
                        <textarea data-datas="{{ $wisata[0]->deskripsi }}" class="area ml-3" name="deskripsi"
                                  id="deskripsi" cols="130" rows="10"
                                  placeholder="Tulis deskripsi dari wisata Anda dengan detail disini ...">{{ $wisata[0]->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Set Harga dan Stok Tiket</h4>
                        <hr class="ml-4">
                        <div class="row mb-3 ml-3">
                            <label for="kode" class="col-sm-2 col-form-label">Harga Tiket Wisata</label>
                            <div class="col-sm-4">
                                <input data-type="Harga Tiket" data-datas="{{ $wisata[0]->harga_tiket }}"
                                       value="{{ $wisata[0]->harga_tiket }}"
                                       type="text" class="form-control" name="harga_tiket" id="harga-tiket"
                                       placeholder="Masukkan harga tiket disini..">
                                <img class="tiket" src="{{ asset('image/Vector.png') }}" alt="">
                            </div>
                            <span class="keterangan">Per Orang</span>
                        </div>
                        <div class="row mb-3 ml-3">
                            <label for="nama" class="col-sm-2 col-form-label">Stok Tiket Wisata</label>
                            <div class="col-sm-4">
                                <input data-type="Stok Tiket" data-datas="{{ $wisata[0]->stock_tiket }}"
                                       value="{{ $wisata[0]->stock_tiket }}"
                                       type="text" class="form-control" name="stock_tiket" id="stok-tiket"
                                       placeholder="Masukkan stok tiket disini..">
                                <img class="tiket" src="{{ asset('image/Vector2.png') }}" alt="">
                            </div>
                            <span class="keterangan">Tiket</span>
                        </div>
                        @csrf
                        @method('PUT')
                        <button type="submit" disabled id="save" class="btn btn-success" style="margin-left:20px;"><i
                                class='bx bx-check-circle'></i> Simpan Perubahan
                        </button>
                    </div>
                </div>
            </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        for (let i = 1; i <= 3; i++) {
            $(document.getElementById('file' + i)).change(function () {
                uploadBanner('file' + i, '#banner' + i)
            })
        }
        for (let i = 1; i <= 3; i++) {
            $(document.getElementById('update' + i)).change(function () {
                updateBanner('update' + i, '#banner' + i)
            })
        }

        $('.delete').click(function () {
            var id = $(this).attr('data-id');
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak dapat mengembalikan file ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: 'Batalkan',
                confirmButtonText: 'Ya, hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/pengelola/wisata/" + id
                }
            })
        })

        $('#save').click(function () {
            if (isNaN($('#harga-tiket').val()) || isNaN($('#stok-tiket').val())) {
                $('#save').attr('type', 'button')
                alertValidation('warning', 'Oops...', 'Format harus angka')
            } else if ($('#harga-tiket').val() === "" && $('#stok-tiket').val() !== "") {
                $('#save').attr('type', 'button')
                alertValidation('warning', 'Oops...', 'Harga tiket tidak boleh kosong')
            } else if ($('#stok-tiket').val() === "" && $('#harga-tiket').val() !== "") {
                $('#save').attr('type', 'button')
                alertValidation('warning', 'Oops...', 'Stok tiket tidak boleh kosong')
            } else if ($('#deskripsi').val() === "" && $('#harga-tiket').val() !== "" && $('#stok-tiket').val() !== "") {
                $('#save').attr('type', 'button')
                alertValidation('warning', 'Oops...', 'Deskripsi tidak boleh kosong')
            }else{
                $('#save').attr('type', 'button')
                alertValidation('warning', 'Oops...', 'Data tidak boleh kosong')
            }
        })

        $(document).keyup(function () {
            $('#save').attr('type', 'submit')
            const deskripsi = $('#deskripsi').attr('data-datas');
            const stok_tiket = $('#stok-tiket').attr('data-datas');
            const harga_tiket = $('#harga-tiket').attr('data-datas');
            if (deskripsi !== $('#deskripsi').val() || stok_tiket !== $('#stok-tiket').val() || harga_tiket !== $('#harga-tiket').val()) {
                $(':input[type="submit"]').prop('disabled', false)
                if (isNaN($('#harga-tiket').val()) && isNaN($('#stok-tiket').val())) {
                    $('#stok-tiket').css('box-shadow', '0 0 0 0.2rem rgb(255 0 0 / 25%')
                    $('#harga-tiket').css('box-shadow', '0 0 0 0.2rem rgb(255 0 0 / 25%')
                } else if (isNaN($('#harga-tiket').val()) && !isNaN($('#stok-tiket').val())) {
                    $('#harga-tiket').css('box-shadow', '0 0 0 0.2rem rgb(255 0 0 / 25%')
                    $('#stok-tiket').css('box-shadow', '')
                } else if (!isNaN($('#harga-tiket').val()) && isNaN($('#stok-tiket').val())) {
                    $('#stok-tiket').css('box-shadow', '0 0 0 0.2rem rgb(255 0 0 / 25%')
                    $('#harga-tiket').css('box-shadow', '')
                } else {
                    $('#harga-tiket').css('box-shadow', '')
                    $('#stok-tiket').css('box-shadow', '')
                }
            } else {
                $('#harga-tiket').css('box-shadow', '')
                $('#stok-tiket').css('box-shadow', '')
                $('#save').attr('disabled', 'true')
            }
        })
    });
</script>
</body>

</html>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contoh.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <meta name="csrf_token" content="{{csrf_token()}}">
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
                    <li>
                        <div class="hov">
                            <i class='bx bxs-dashboard'></i>
                            <a href="#">Dashboard</a>
                        </div>
                    </li>
                    <li class="act">
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
            <h1 class="judul mt-3 mb-5 font-weight-bold">Daftar Konten</h1>
            <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Banner Halaman Utama</h4>
            <hr class="ml-4">
            <div class="wrapper">
                <div class="drop-file" id="banner1">
                    @if(sizeof($content) == 0)
                        <span class="btn-file">Browse File</span>
                        <span class="name-file">or drag and drop files(png)</span>
                        <input type="file" id="file1" name="fileContent" class="input-text" multiple>
                    @endif
                    @if(sizeof($content) == 1)
                        <img src="{{ $content[0]->content }}" style="height: 100%; width: 405.38px">
                    @endif
                </div>
                <div class="drop-file" id="banner2">
                    @if(sizeof($content) == 0 || sizeof($content) == 1)
                    <span class="btn-file">Browse File</span>
                    <span class="name-file">or drag and drop files(png)</span>
                    <input type="file" id="file2" name="fileContent" class="input-text" multiple>
                    @endif
                        @if(sizeof($content) == 2)
                            <img src="{{ $content[1]->content }}" style="height: 100%; width: 405.38px">
                        @endif
                </div>
                <div class="drop-file" id="banner3">
                    @if(sizeof($content) == 0 || sizeof($content) == 1 ||sizeof($content) == 2)
                    <span class="btn-file">Browse File</span>
                    <span class="name-file">or drag and drop files(png)</span>
                    <input type="file" id="file3" name="fileContent" class="input-text" multiple>
                    @endif
                        @if(sizeof($content) == 3)
                            <img src="{{ $content[2]->content }}" style="height: 100%; width: 405.38px">
                        @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Banner Iklan Wisata</h4>
                    <hr class="ml-4">
                    <div class="wrapper">
                        <div class="drop-file" id="banner4">
                            @if(sizeof($ads) == 0)
                            <span class="btn-file">Browse File</span>
                            <span class="name-file">or drag and drop files(png)</span>
                            <input type="file" id="file4" class="input-text" multiple>
                            @endif
                                @if(sizeof($ads) == 1)
                                    <img src="{{ $ads[0]->content }}" style="height: 100%; width: 405.38px">
                                @endif
                        </div>
                        <div class="drop-file" id="banner5">
                            @if(sizeof($ads) == 0 || sizeof($ads) == 1)
                            <span class="btn-file">Browse File</span>
                            <span class="name-file">or drag and drop files(png)</span>
                            <input type="file" id="file5" class="input-text" multiple>
                            @endif
                                @if(sizeof($ads) == 2)
                                    <img src="{{ $ads[1]->content }}" style="height: 100%; width: 405.38px">
                                @endif
                        </div>
                        <div class="drop-file" id="banner6">
                            @if(sizeof($ads) == 0 || sizeof($ads) == 1 ||sizeof($ads) == 2)
                            <span class="btn-file">Browse File</span>
                            <span class="name-file">or drag and drop files(png)</span>
                            <input type="file" id="file6" class="input-text" multiple>
                            @endif
                                @if(sizeof($ads) == 3)
                                    <img src="{{ $ads[2]->content }}" style="height: 100%; width: 405.38px">
                                @endif
                        </div>
                    </div>
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

        for (let i = 1; i <= 6; i++) {
            $(document.getElementById('file' + i)).change(function () {
                uploadImage('file' + i, '#banner' + i, i)
            })
        }

        function uploadImage(element, banner, type) {
            var url = "{{url('/admin/content')}}";
            if (type < 4) {
                var content = new FormData();
                content.append('fileContent', document.getElementById(element).files[0]);
                $.ajax({
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
                    },
                    async: true,
                    type: "post",
                    contentType: false,
                    url: url,
                    data: content,
                    processData: false,
                    success: function () {
                        console.log("content");
                    }
                });

            } else {
                var ads = new FormData();
                ads.append('fileAds', document.getElementById(element).files[0]);
                $.ajax({
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
                    },
                    async: true,
                    type: "post",
                    contentType: false,
                    url: url,
                    data: ads,
                    processData: false,
                    success: function () {
                        console.log("ads");
                    }
                });
            }
            var reader = new FileReader();
            var myurl = inputToUrl(document.getElementById(element))
            reader.onload = function () {
                var preview = `<img src="${myurl}" style="height: 100%; width: 405.38px">`
                $(banner).html(preview)
            }
            reader.readAsDataURL(document.getElementById(element).files[0]);
        }

        function inputToUrl(inputElement) {
            var file = inputElement.files[0];
            return window.URL.createObjectURL(file);
        }
    });
</script>
</body>

</html>

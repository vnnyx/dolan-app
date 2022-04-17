<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{csrf_token()}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
          integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">
    <title>Dolan - Reset Password</title>
    <link rel="icon" href="{{ url('image/favicon.ico') }}">
</head>

<body>
@include('sweetalert::alert')
<div class="row">
    <div class="head">
        <img class="img-head" src="{{ asset('image/Dolanpemilikwisata.png') }}" alt="">
    </div>
    <div class="col-6">
        <form action="{{ url('/reset/password') }}" id="register" method="post">
            <input type="hidden" name="token" value="{{ $token }}">
            @csrf
            @method('PUT')
            <div class="card">
                <h3 class="step-title"></h3>
                <div class="form-group">
                    <i class='bx bx-envelope'></i>
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete='off'
                           value="{{ $email ?? old('email') }}">
                </div>
                <div class="form-group">
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" id="password" name="password" placeholder="Password Baru" autocomplete='off'>
                    <span class="eye" onclick="myFunction()">
                            <i id="hide1" class="fa-solid fa-eye"></i>
                            <i id="hide2" class="fa-solid fa-eye-slash"></i>
                        </span>
                </div>
                <div class="form-group">
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" name="password-confirm" id="password-confirm"
                           placeholder="Konfirmasi Password"
                           autocomplete='off'>
                    <span class="eye" onclick="hide()">
                            <i id="hide3" class="fa-solid fa-eye"></i>
                            <i id="hide4" class="fa-solid fa-eye-slash"></i>
                        </span>
                </div>
                <button type="submit" class="tombol-primary mt-5" id="btn-next">Kirim</button>
            </div>
        </form>
    </div>
    <div class="col-6">
        <img class="gambar" src="{{ asset('image/gambar.png') }}" alt="">
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("password")
        var y = document.getElementById("hide1")
        var z = document.getElementById("hide2")
        if (x.type == "password") {
            x.type = "text";
            y.style.display = "inline"
            z.style.display = "none"
        } else {
            x.type = "password";
            y.style.display = "none"
            z.style.display = "inline"
        }
    }

    function hide() {
        var a = document.getElementById("password-confirm")
        var b = document.getElementById("hide3")
        var c = document.getElementById("hide4")
        if (a.type == "password") {
            a.type = "text";
            b.style.display = "inline"
            c.style.display = "none"
        } else {
            a.type = "password";
            b.style.display = "none"
            c.style.display = "inline"
        }
    }

    $(document).ready(function () {
        $('#btn-next').click(function () {
            var passwords = $('#password').val()
            var conf_password = $('#password-confirm').val()
            if (passwords !== conf_password){
                $('#btn-next').attr('type', 'button')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password tidak sesuai',
                })
            }else{
                $('#btn-next').attr('type', 'submit')
            }
        })
    })

</script>
</body>

</html>

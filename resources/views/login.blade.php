<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
          integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Dolan - Login</title>
    <link rel="icon" href="{{ url('image/favicon.ico') }}">
</head>

<body>
@include('sweetalert::alert')
<div class="row">
    <div class="col-md-6" id="kol1">
        <div class="head-c">
            <img class="img-head" src="{{ asset('image/Dolan.png') }}" alt="">
            <p class="tulisan">Pemilik Wisata</p>
        </div>
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email"><i class='bx bx-envelope' id="envelope"></i></label>
                <input type="text" name="email" class="form-control mx-auto" id="email" style="padding-left: 50px;"
                       placeholder="E-mail" required autocomplete=’off’ value="{{ old('email') }}">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="password"><i class='bx bx-lock-alt' id="lock"></i></label>
                <input type="password" class="form-control mx-auto" style="padding-left: 50px;" name="password"
                       id="password" placeholder="Password" required>
                <span class="eye" onclick="myFunction()">
            <i id="hide1" class="fa-solid fa-eye"></i>
            <i id="hide2" class="fa-solid fa-eye-slash"></i>
          </span>
            </div>
            <a href="/forgot-password" class="sandi">Lupa kata sandi ?</a>
            <a href="#">
                <button type="submit" class="btn ">Login</button>
            </a>
        </form>
        <h1 class="daftar">Belum punya akun ?<a href="{{ url('/register') }}"> Daftar</a></h1>
    </div>
    <div class="col-md-6" id="kol2">
        <img class="w-100" src="{{ asset('image/gambar.png') }}" alt="">
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>
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
</script>
</body>

</html>

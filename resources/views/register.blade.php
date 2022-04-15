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
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
    <script src="{{'js/script.js'}}" defer></script>
    <title>RPL PROJECT</title>
</head>

<body>
    <div class="row">
        <div class="head">
            <img class="img-head" src="{{ asset('image/Dolanpemilikwisata.png') }}" alt="">
        </div>
        <div class="col-6">
            <form action="/register" data-multi-step class="multi-step-form" method="post">
                @csrf
                <div class="card" data-step>
                    <h3 class="step-title"></h3>
                    <div class="form-group">
                    <i class='bx bx-user' ></i>
                        <input type="text" name="username" id="username" placeholder="Username" autocomplete='off'>
                    </div>
                    <div class="form-group">
                        <i class='bx bx-envelope'></i>
                        <input type="email" name="email" id="email" placeholder="Email" autocomplete='off'>
                    </div>
                    <div class="form-group">
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" id="password" placeholder="Password" autocomplete='off'>
                        <span class="eye" onclick="myFunction()">
                          <i id="hide1" class="fa-solid fa-eye"></i>
                          <i id="hide2" class="fa-solid fa-eye-slash"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" name="password" id="password-cnfrm" placeholder="Konfirmasi Password" autocomplete='off'>
                        <span class="eye" onclick="hide()">
                          <i id="hide3" class="fa-solid fa-eye"></i>
                          <i id="hide4" class="fa-solid fa-eye-slash"></i>
                        </span>
                    </div>
                    <button type="button" class="tombol-primary" data-next>Selanjutnya</button>
                </div>
                <div class="card" data-step>
                    <h3 class="step-title"></h3>
                    <div class="form-group">
                      <i class="fa-solid fa-bahai"></i>
                        <input type="text" name="namawisata" id="namawisata" placeholder="Nama Wisata">
                    </div>
                    <div class="form-group">
                    <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="alamatwisata" id="alamatwisata"
                            placeholder="Alamat Wisata (Kelurahan, Kota)">
                    </div>
                    <div class="form-group">
                        <label for="iconupload">
                            <img src="{{'image/Upload.png'}}" width="88" height="65" style="cursor: pointer;">
                        </label>
                        <input type="file" id="iconupload" name="filename" style="display: none ;">
                    </div>
                    <button type="submit" class="tombol-primary" data-next>Daftar</button>
                    <button type="button" class="tombol-secondary" data-previous>Kembali</button>

                </div>
                <div class="card" data-step>
                    <h3 class="step-title">Silakan Menunggu</h3>
                    <h4>Pembuatan akun wisata yang Anda daftarkan sedang dalam tahap review oleh tim Dolan.
                        Estimasi sekitar 1-20 menit.</h4>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"
                        background="transparent" speed="1.2" style="width: 300px; height: 300px;" loop autoplay>
                    </lottie-player>
                </div>
            </form>
        </div>
        <div class="col-6">
            <img class="gambar" src="{{ asset('image/gambar.png') }}" alt="">
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
          function hide() {
            var a = document.getElementById("password-cnfrm")
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
        </script>
</body>

</html>
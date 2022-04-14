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
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <form data-multi-step class="multi-step-form">
    <div class="card" data-step>
      <h3 class="step-title"></h3>
      <div class="form-group">
        <input type="text" name="username" id="username" placeholder="Username" autocomplete="false">
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" placeholder="Email" autocomplete="false">
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Password" autocomplete="false">
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password " placeholder="Konfirmasi Password" autocomplete="false">
      </div>
      <button type="button" class="tombol-primary" data-next>Selanjutnya</button>
    </div>
    <div class="card" data-step>
      <h3 class="step-title"></h3>
      <div class="form-group">
        <input type="text" name="namawisata" id="namawisata" placeholder="Nama Wisata">
      </div>
      <div class="form-group">
        <input type="text" name="alamatwisata" id="alamatwisata" placeholder="Alamat Wisata (Kelurahan, Kota)">
      </div>
      <div class="form-group">
        <label for="iconupload">
          <img src="{{'image/Upload.png'}}"  width="88" height="65" style="cursor: pointer;">
        </label>
        <input type="file" id="iconupload" name="filename" style="display: none ;" onchange="getImage(this.value);" >
      </div>
      <button type="button" class="tombol-primary" data-next>Daftar</button>
      <button type="button" class="tombol-secondary" data-previous>Kembali</button>
      
    </div>
    <div class="card" data-step>
      <h3 class="step-title">Silakan Menunggu</h3>
      <h4>Pembuatan akun wisata yang Anda daftarkan sedang dalam tahap review oleh tim Dolan. 
Estimasi sekitar 1-20 menit.</h4>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"  background="transparent"  speed="1.2"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
    </div>
  </form>
  </div>
  <div class="col-6">
  <img class="gambar"  src="{{ asset('image/gambar.png') }}" alt="">
  </div>
</div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script>

  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
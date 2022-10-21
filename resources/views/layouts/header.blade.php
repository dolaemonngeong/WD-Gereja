<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
    <link rel="icon" href="images/logo.png" type="image/ico">
    <link rel="stylesheet" type="text/css" href="mydesign/mystyle.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" alt="" class=""  height="70">
              </a>
         
            <a class="navbar-brand" href="/"  style="color: #603B1B">Gereja Katolik <br>
                 Santo Yusup
                 <br> 
                 Jember</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" style="color: #603B1B">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer" style="color: #603B1B">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dph" style="color: #603B1B">DPH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jadwal" style="color: #603B1B">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer" style="color: #603B1B">Lokasi</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="#footer" style="color: #603B1B">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('isi')

    @include('layouts.footer')
</body>

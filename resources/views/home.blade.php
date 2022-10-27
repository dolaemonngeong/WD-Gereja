@extends('layouts.header')

@section('title', 'Home')

@section('isi')

{{-- <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/bg.jpeg">
            </div>
        </div>
    </div> --}}
<div class="tes" id="tentang">
    <div class="d-lg-none">
        <img class="imgJumbotron w-100" src="images/bgMobile.jpeg"></div>
    <div class="center container-sm">
        <h2><strong>
            Gereja Katolik St. Yusup Jember adalah Gereja Katolik yang memiliki 3.600 umat, 38 lingkungan, dan 14
            wilayah
            dengan 1 stasi.</strong>
        </h2>
    </div>
    <div class="d-none d-lg-block">
        <img class="imgJumbotron w-100" src="images/bg.jpeg">
        <div class="center container-sm">
            <h2><strong>
                Gereja Katolik St. Yusup Jember adalah Gereja Katolik yang memiliki 3.600 umat, 38 lingkungan, dan 14
                wilayah
                dengan 1 stasi.</strong>
            </h2>
        </div>
    </div>
</div>
{{-- <div class="tes fw-semibold" id="tentang">
    <img class="imgJumbotron w-100" src="images/bg.jpeg">
    <div class="center container-sm">
        <h2>
            Gereja Katolik St. Yusup Jember adalah Gereja Katolik yang memiliki 3.600 umat, 38 lingkungan, dan 14
            wilayah
            dengan 1 stasi.
        </h2>
    </div>
</div> --}}

<div class="text-center">
    {{-- <h1 class="mt-4" id="tentang">Tentang</h1>
    <p>
        Gereja Katolik St. Yusup Jember adalah Gereja Katolik yang memiliki 3.600 umat, 38 lingkungan, dan 14 wilayah
        dengan 1 stasi.
    </p> --}}
    <h1 class="fw-bolder display-3" style="margin-top:100px; margin-bottom:20px;">Visi</h1>
    <p class="visiMisi">TERWUJUDNYA KOMUNITAS UMAT BERIMAN YANG TERBUKA DAN TERLIBAT DI TENGAH MASYARAKAT YANG BERANEKA
        RAGAM SUKU,
        SOSIAL EKONOMI, BUDAYA DAN AGAMA.
    </p>

    <h1 class="fw-bolder display-3" style="margin-top:85px; margin-bottom:20px;">Misi</h1>
    <p class="visiMisi">MEWUJUDKAN PANCA TUGAS GEREJA DALAM KELUARGA, LINGKUNGAN/ WILAYAH/ STASI, KATEGORIAL, SEKOLAH
        DAN MASYARAKAT.</p>

    <h1 class="fw-bolder display-3" style="margin-top:85px; margin-bottom:25px;">Pastor Kami</h1>

    {{-- <div class="container mb-4 ">
        <div class="grid text-center" style="--bs-columns: 4; --bs-gap: 5rem;"> 
            {{-- <div class="g-col-2">
                <img src="images/1.jpeg" class="d-block rounded-circle " width="350px"  alt="">
                <p class="mt-4">Rm. Yoseph Utus, O.Carm</p>
                <h6 class="fw-bold" style="color:#603B1B">Pastor Kepala Paroki</h6>
            </div>
            <div class="g-col-2">
                <img src="images/2.jpeg" class="d-block rounded-circle " width="350px"  alt="">
                <p class="mt-4">Romo Robertus Andy Priambada, O.Carm</p>
                <h6 class="fw-bold" style="color:#603B1B">Romo Rekan</h6>
            </div>
        </div>
    </div>  
     row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 d-flex justify-content-center 
     font-size:130%--}}

    <div class="pastors container d-flex justify-content-center" style="">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 ">
            @foreach ($pastors as $pass)
            <div class="col-sm-6 col">
                <img src="/images/{{ $pass['image']}}" class="d-block rounded-circle mx-auto " width="290px"
                    height="290px" alt="">
                <p class="mt-4 text-center">{{ $pass['name'] }}</p>
                <p class="fw-bold text-center" style="color: #603B1B">{{ $pass['posisi'] }}</p>
            </div>
            @endforeach
        </div>



    </div>
</div>

<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3072263539725!2d113.69831941461759!3d-8.171771484161706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6943ad665a21f%3A0x8813d4343bd3da92!2sGereja%20Katolik%20Santo%20Yusup!5e0!3m2!1sen!2sid!4v1666455067728!5m2!1sen!2sid"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade" id="location"></iframe>
</div>

@endsection

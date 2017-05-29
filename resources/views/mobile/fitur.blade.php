@extends('mobile.layouts.main')

@section('title')

    {{ $menu->title }}

@endsection

@section('background')

    "../images/{{ $menu->picture }}"

@endsection

@section('background-grayscale')

    "../images/home-gray.png"

@endsection

@section('navbar')

<div class="row ">
    <div class="col-6 ">
        <div class="navbar1">
            <a href="/mobile/home"><img src="../images/btn-back-arrow-gray.png" width="30%" align="left"></a>
        </div>
    </div>
    <div class="col-6">
        <div class="navbar2">
            <a href="#"><img src="../images/btn-menu-gray.png" width="30%" align="right" id="navbar-mobile"></a>
        </div>
    </div>
</div>

<div class="row floating" id="navbar-content-mobile" style="display:none">
    <div class="col-12">
        <div class="row">
            <div class="col-12 close" ><a href="#" id="close"><img src="../images/btn-close.png" width="16%" align="right"></a></div>
        </div>
        <div class="row menu-mobile">
            <div class="col-12">
                <ul>
                   <li><a href="/mobile/home" class="font-white">Home</a></li>
                    <hr class="white">
                    <li><a href="/mobile/about" class="font-white">About bima+</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-assistant" class="font-white"><img src="../images/menu-dass.png" height="25px"></a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-world" class="font-white">Digital World</a></li>
                    <hr class="white">
                    <li><a href="/mobile/&co" class="font-white">&Co Creative Hub</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-chat&call" class="font-white">Digital Chat & Call</a></li>
                    <hr class="white">
                    <li><a href="/mobile/faq" class="font-white">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="fitur" align="center">
    <div class="row">
        <div class="col-12"><img src="../images/fitur-bima.png" width="30%"></div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-4"><img src="../images/kartutri.png" width="70%"></div>
        <div class="col-4"><img src="../images/notifikasi.png" width="57%"></div>
        <div class="col-4"><img src="../images/isi-ulang-pulsa.png" width="55%"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-4"><img src="../images/isi-ulang-kuota.png" width="100%"></div>
        <div class="col-4"><img src="../images/rekomendasi-paket.png" width="75%"></div>
        <div class="col-4"><img src="../images/informasi-tagihan.png" width="50%"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-4"><img src="../images/pembayaran-tagihan.png" width="75%"></div>
        <div class="col-4"><img src="../images/trims.png" width="55%"></div>
        <div class="col-4"><img src="../images/tips-trik.png" width="65%"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-12"><img src="../images/hubungi-kami.png" width="15%"></div>
    </div>
</div>

@endsection



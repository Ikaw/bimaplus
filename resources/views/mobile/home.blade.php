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
            <a href="#"><img src="../images/btn-kosong.png" width="30%" align="left"></a>
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
            <div class="col-12 close" ><a href="#" id="close"><img src="../images/btn-close.png" width="14%" align="right"></a></div>
        </div>
        <div class="row menu-mobile">
            <div class="col-12">
                <ul>
                    <li><a href="/mobile/home" class="font-white"><img src="../images/menu-home.png" height="20px"></a></li>
                    <hr class="white">
                    <li><a href="/mobile/about" class="font-white">About bima+</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-assistant" class="font-white">Digital Assistant</a></li>
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

<div class="home">
    <div class="row align-items-center">
        <div class="col-12" align="center">
            <img src="../images/logo-bimaplus.png" width="50%" >
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-12" align="center">
            <h3 class="font-white">Akses serunya hidup.</h3>
        </div>
    </div>
    <div class="row align-items-center" style="padding-top:10px;">
        <div class="col-12" align="center">
            <h6 class="font-white">Digital hub for your digital lifestyle</h6>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="footer">
        <div class="row align-items-end">
            <div class="col flex-first"><a href="http://tri.co.id"><img src="../images/logo-tri.png" width="40%"></a></div>
            <div class="col flex-last" align="right"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="60%"></a></div>
        </div>
    </div>
</div>

@endsection



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
                    <li><a href="/mobile/digital-assistant" class="font-white">Digital Assistant</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-world" class="font-white">Digital World</a></li>
                    <hr class="white">
                    <li><a href="/mobile/&co" class="font-white">&Co Creative Hub</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-chat&call" class="font-white"><img src="../images/menu-dcc.png" height="25px"></a></li>
                    <hr class="white">
                    <li><a href="/mobile/faq" class="font-white">FAQ</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="cnc">
    <div class="row">
        <div class="col-12">
            <h1 class="font-white"><strong>Digital</strong></h1>
        </div>
        <div class="col-12">
            <h1 class="font-white"><strong>Chat & Call.</strong></h1>
        </div>
        
    </div>
    <div class="row">
        <div class="col-12">
            <div class="font-white">
                Puas telepon dan chatting
            </div>
        </div>
        <div class="col-12">
            <div class="font-white">
                kapan saja tanpa batas
            </div>
        </div>
    </div>
</div>

@endsection



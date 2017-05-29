@extends('desktop.layouts.main')

@section('title','Bima+')

@section('background')

    "images/desktop/d-home.png"

@endsection

@section('navbar')

<div class="row navbar-desktop">
    <div class="col-2" align="left"><img src="../images/desktop/d-logo-bimaplus.png" width="70%"></div>
    <div class="col-8">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="/home"><img src="../images/desktop/d-menu-home.png" height="17px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About bima+</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/digital-assistant">Digital Assistant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/digital-world">Digital World</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/&co">&Co Creative Hub</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/digital-chat&call">Digital Chat & Call</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">FAQ</a>
          </li>
        </ul>
    </div>
    <div class="col-2" align="right"><a href="http://tri.co.id"><img src="../images/desktop/d-logo-tri.png" width="40%"></a></div>
</div>


@endsection

@section('content')
    <div class="row home-desktop">
        <div class="col-1">
            <br><br><br><br>
            <a href="#"><img src="images/desktop/d-ig.png" width="25%"></a><br><br>
            <a href="#"><img src="images/desktop/d-fb.png" width="25%"></a><br><br>
            <a href="#"><img src="images/desktop/d-tw.png" width="25%"></a>
        </div>
        <div class="col-10">
            <a href="http://www.youtube.com/embed/7oQ4cEWVv6M?autoplay=1" data-fancybox="gallery"><img class="btn-play" id="btn-play" src="images/desktop/d-btn-play.png"></a>
            <a href="/digital-world"><img class="btn-plus" id="btn-plus-1" src="images/desktop/d-btn-plus.png"></a>
            <a href="/digital-assistant"><img class="btn-plus" id="btn-plus-2" src="images/desktop/d-btn-plus.png" ></a>
            <a href="/digital-chat&call"><img class="btn-plus" id="btn-plus-3" src="images/desktop/d-btn-plus.png" ></a>
            <a href="/&co"><img class="btn-plus" id="btn-plus-4" src="images/desktop/d-btn-plus.png" ></a>

            <!-- <img class="btn-plus" id="btn-plus-1" src="images/desktop/d-btn-plus.png"> -->
        </div>
        <div class="col-1">
            &nbsp;
        </div>
    </div>


@endsection

@section('footer')
<div class="row footer-desktop">
    <div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
</div>
@endsection

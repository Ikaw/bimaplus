@extends('desktop.layouts.main')

@section('title','Bima+')

@section('background')

    "images/desktop/d-about.png"

@endsection

@section('navbar')

<div class="row navbar-desktop">
    <div class="col-2" align="left"><img src="../images/desktop/d-logo-bimaplus.png" width="70%"></div>
    <div class="col-8">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about"><img src="../images/menu-about.png" height="17px"></a>
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

<div class="about">
  <div class="row">
    <div class="col-6"></div>
    <div class="col-6">
      <img src="../images/desktop/d-logo-bimaplus.png" width="50%">
      <br><br>
      <h5 class="font-white">Digital Hub untuk menikmati beragam keseruan hidup.</h5>
      <h5 class="font-white">Digital Assistant | Digital World | &Co | Digital Chat & Call</h5>
      <br>
      <a href="http://www.youtube.com/embed/7oQ4cEWVv6M?autoplay=1" data-fancybox="gallery"><img src="../images/desktop/d-btn-video.png" width="40%"></a>
    </div>
  </div>
</div>


@endsection

@section('footer')
<div class="row footer-desktop">
    <div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
</div>
@endsection

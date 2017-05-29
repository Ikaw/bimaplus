@extends('desktop.layouts.main')

@section('title','Bima+')

@section('background')

    "images/desktop/d-dw.png"

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
            <a class="nav-link" href="/about">About bima+</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/digital-assistant">Digital Assistant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/digital-world"><img src="../images/menu-dw.png" height="20px"></a>
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

<div class="dent">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="font-white title">
        Digital <br> World.
      </h1>
      <h5 class="font-white">Beragam konten digital yang bikin<br>hidupmu makin seru</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <img src="../images/konten-dw.png" width="19%">
    </div>
  </div>
</div>


@endsection

@section('footer')
<div class="row footer-desktop">
    <div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
</div>
@endsection

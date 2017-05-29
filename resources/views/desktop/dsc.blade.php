@extends('desktop.layouts.main')

@section('title','Bima+')

@section('background')

    "images/desktop/d-dass.png"

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
            <a class="nav-link" href="/digital-assistant"><img src="../images/menu-dass.png" height="20px"></a>
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

<div class="dass">
  <div class="row">
    <div class="col-6"></div>
    <div class="col-6">
      <h1 class="font-white title">
        Digital <br>Assistant.
      </h1>

      <h5 class="font-white">Asisten digital dengan beragam fitur yang <br>siap membantumu setiap hari.</h5>
      <br>
      <a href="/fitur "><img src="../images/btn-fiturbimaplus.png" width="50%"></a>
    </div>
  </div>
</div>


@endsection

@section('footer')
<div class="row footer-desktop">
    <div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
</div>
@endsection

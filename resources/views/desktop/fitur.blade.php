@extends('desktop.layouts.main')

@section('title','Bima+')

@section('background')

    "images/desktop/d-fitur.png"

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

<div class="fitur">
  <div class="row">
    <div class="col-12" align="center">
      <img src="../images/fitur-bima.png" width="14%">
    </div>
  </div>
  <br><br><br>
  <div class="row" align="center">
    <div class="col-1">&nbsp;</div>
    <div class="col-2"><img src="../images/kartutri.png" width="50%"></div>
    <div class="col-2"><img src="../images/notifikasi.png" width="40%"></div>
    <div class="col-2"><img src="../images/isi-ulang-pulsa.png" width="40%"></div>
    <div class="col-2"><img src="../images/isi-ulang-kuota.png" width="80%"></div>
    <div class="col-2"><img src="../images/rekomendasi-paket.png" width="60%"></div>
    <div class="col-1">&nbsp;</div>
  </div>
  <br><br>
  <div class="row" align="center">
    <div class="col-1">&nbsp;</div>
    <div class="col-2"><img src="../images/informasi-tagihan.png" width="36%"></div>
    <div class="col-2"><img src="../images/pembayaran-tagihan.png" width="50%"></div>
    <div class="col-2"><img src="../images/trims.png" width="35%"></div>
    <div class="col-2"><img src="../images/tips-trik.png" width="43%"></div>
    <div class="col-2"><img src="../images/hubungi-kami.png" width="40%"></div>
    <div class="col-1">&nbsp;</div>
  </div>
  <div class="row">
    <div class="col-12"></div>
  </div>
</div>

@endsection

@section('footer')
<div class="row footer-desktop">
    <div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
</div>
@endsection

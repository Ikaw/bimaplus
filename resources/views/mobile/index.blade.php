@extends('mobile.layouts.main')

@section('title','Bima+')

@section('background')

    "/images/index.png"

@endsection

@section('content')

<div class="utama">
    <div class="row" align="center">
        <div class="col-12">
            <br><br>
            <img src="../images/kepala-bima.png" width="20%">
            <br><br><br>
            <img src="../images/akses.png" width="60%">
            <br><br>
            <a href="{{ url('/mobile/door') }}"><img src="../images/enter_here.png" width="30%"></a>
            <div class="footer-index" align="right">
                <a href="http://tri.co.id"><img src="../images/logo-tri.png" width="16%"></a>
            </div>
        </div>
    </div>

</div>

@endsection

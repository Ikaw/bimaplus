@extends('desktop.layouts.main')

@section('title','Bima+')

@section('background')

    "images/desktop/d-open.png"

@endsection

@section ('background_1')
	 -webkit-background-size: cover;
	 -moz-background-size: cover;
	 -o-background-size: cover;
	 background-size: cover;
	 position:fixed;
@endsection

@section('content')
<div class="landing">
	<div class="row navbar-landing">
	    <div class="col-12" align="right">
	    		<img src="../images/desktop/d-3-black.png" width="6%">
	    </div>
	</div>

	<div class="row">
        <div class="col-1 list-icon-black-door">
            <a href="#"><img src="images/desktop/d-ig-black.png" width="50%"></a><br><br>
            <a href="#"><img src="images/desktop/d-fb-black.png" width="50%"></a><br><br>
            <a href="#"><img src="images/desktop/d-tw-black.png" width="50%"></a>
        </div>
	</div>

	<div class="row footer-desktop">
    	<div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
	</div>
</div>

<script>setTimeout(function(){window.location.href="/home"},2000);</script>
@endsection

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
                    <li><a href="/mobile/&co" class="font-white"><img src="../images/menu-nco.png" height="25px"></a></li>
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

<div class="reg-nco">
    <div class="row">
        <div class="col-12">
            <img src="../images/logo-nco-hitam.png" width="25%">
            <h3>Registration Form.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/mobile/&co-reg-2" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="brand_name">Brand name:</label>
              </div>
                <input type="text" class="form-control form-control-sm" id="brand_name" name="brand_name" value="@if(Session::has('brand_name')){{ Session::get('brand_name')}} @endif" required="">
              <div class="form-group">
                <label for="brand_name">Brand category:</label>
                <select class="form-control form-control-sm" id="brand_category"name="brand_category" required="">
                  <option value="1">Accessories</option>
                  <option value="2">Fashion</option>
                  <option value="3">Food & Beverage</option>
                  <option value="4">Hobby</option>
                  <option value="5">Home & Living</option>
                </select>
              </div>
              <div class="form-group">
                <label for="brand_name">Brand owner name:</label>
                <input type="text" class="form-control form-control-sm" id="owner_name"  name="owner_name" value="@if(Session::has('owner_name')){{ Session::get('owner_name')}} @endif" required="">
              </div>
              <div class="form-group">
                <label for="brand_name">Brand owner ID:</label>
                <input type="text" class="form-control form-control-sm" id="owner_id" name="owner_id" placeholder="KTP/SIM/Passport" value="@if(Session::has('owner_id')){{ Session::get('owner_id')}} @endif" required="">
              </div>
              <div class="form-group">
                <label for="brand_name">Brand owner phone:</label>
                <input type="text" class="form-control form-control-sm" id="owner_phone"  name="owner_phone" value="@if(Session::has('owner_phone')){{ Session::get('owner_phone')}} @endif" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-sm" id="owner_phone_2"  name="owner_phone_2"  placeholder="If you have second phone number" value="@if(Session::has('owner_phone_2')){{ Session::get('owner_phone_2')}} @endif" >
              </div>
              <div class="form-group">
                <label for="brand_name">Brand e-mail address:</label>
                <input type="text" class="form-control form-control-sm" id="brand_email"  name="brand_email" value="@if(Session::has('brand_email')){{ Session::get('brand_email')}} @endif" required="">
              </div>
              <div class="form-group">
                <label for="brand_name">Brand address:</label>
                <textarea class="form-control form-control-sm" id="brand_address"  name="brand_address"  placeholder="Please fill in home/store address" rows="4" required="">@if(Session::has('brand_address')){{ Session::get('brand_address')}} @endif</textarea>
              </div>
              <div class="form-group">
                  <a href="#"><img src="../images/btn-back.png" width="35%" align="left"></a>
                  <button type="submit" class="btn btn-sm btn-primary pull-right">Next</button>
                  <input type="hidden" name="page" value="1">
              </div>
            </form>
        </div>
    </div>
</div>

@endsection

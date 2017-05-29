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
            <img src="../images/logo-nco-hitam.png" width="30%">
            <h2>Registration Form.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/mobile/&co-reg-3" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="brand_name">Brand location:</label>
                <select class="form-control form-control-sm" name="province" id="province" required="">
                  @foreach($province as $prov)
                     <option value="{{ $prov->id }}">{{ $prov->province }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <!-- <select class="form-control form-control-sm">
                  <option>City</option> -->
                  <select name="city" id="city" class="form-control form-control-sm" required="">
                    @foreach($city as $city)
                      <option value="{{ $city->id }}">{{ $city->city }}</option>
                    @endforeach
                  </select>

                <!-- </select> -->
              </div>
              <div class="form-group">
                <label for="brand_name">Brand social media:</label>
                <input type="text" class="form-control form-control-sm" name="brand_soc_ig" placeholder="Instagram" value="@if(Session::has('brand_soc_ig')){{ Session::get('brand_soc_ig')}} @endif" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="brand_soc_web" placeholder="Website" value="@if(Session::has('brand_soc_web')){{ Session::get('brand_soc_web')}} @endif" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="brand_soc_fb" placeholder="Facebook" value="@if(Session::has('brand_soc_fb')){{ Session::get('brand_soc_fb')}} @endif" required="">
              </div>
              <div class="form-group">
                <label for="brand_name">Tell us about your brand:</label>
                <textarea class="form-control form-control-sm" placeholder="Required at least 300 characters" rows="12" name="brand_about" required="">@if(Session::has('brand_about')){{ Session::get('brand_about')}} @endif</textarea>
              </div>
              <div class="form-group">
                  <a href="/mobile/&co-reg-1"><img src="../images/back-off.png" width="35%" align="left"></a>
                  <button type="submit" class="btn btn-sm btn-primary pull-right">Next</button>
                  <input type="hidden" name="page" value="2">
              </div>
            </form>
        </div>
    </div>
</div>

@endsection





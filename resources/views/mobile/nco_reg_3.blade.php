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
            <form action="&co-reg-form-final" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputFile">Brand owner ID:</label>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="row">
                          <div class="col-4">
                              <div class="form-group">
                                <div class="file-nco" align="center">
                                  <input type="file" name="brand_picture_id" required="">
                                </div>
                              </div>
                          </div>
                          <div class="col-2 align-self-end">
                                <a href="#"><img src="../images/btn-tong.png" width="80%"></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Brand logo:</label>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="row">
                          <div class="col-4">
                              <div class="form-group">
                                <div class="file-nco" align="center" >
                                  <input type="file" name="brand_logo" required="">
                                </div>
                              </div>
                          </div>
                          <div class="col-2 align-self-end">
                                <a href="#"><img src="../images/btn-tong.png" width="80%"></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Product photo:</label>
              </div>
              <div class="row">
                <div class="col-10">
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <div class="file-nco" align="center">
                          <input type="file" name="brand_product_1" required="">
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <div class="file-nco" align="center">
                          <input type="file" name="brand_product_2" required="">
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <div class="file-nco" align="center">
                          <input type="file" name="brand_product_3" required="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2 align-self-end">
                  <a href="#"><img src="../images/btn-tong.png" width="80%"></a>
                </div>
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="brand_agree" required="">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">I hereby agree with terms & conditons for &Co registration.</span>
                </label>
              </div>
              <div class="form-group">
                  <a href="/mobile/&co-reg-2"><img src="../images/back-off.png" width="35%" align="left"></a>
                  <button type="submit" class="btn btn-sm btn-primary pull-right">Next</button>
              </div>
            </form>
        </div>
    </div>
</div>

@endsection



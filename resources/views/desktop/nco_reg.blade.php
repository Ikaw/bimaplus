@extends('desktop.layouts.main')

@section('title','Bima+')

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
            <a class="nav-link" href="/&co"><img src="../images/desktop/d-menu-nco.png" height="17px"></a></a>
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

<div class="form-nco">
    <div class="row">
        <div class="col-2">
            <img src="../images/logo-nco-hitam.png" width="100%">
        </div>
        <div class="col-9 align-self-end">
            <h4><strong>Registration Form.</strong></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="&co-reg-form-final" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="brand_name">Brand name: &nbsp;*</label>
                <input type="text" class="form-control form-control-sm" id="brand_name" name="brand_name" value="@if(Session::has('brand_name')){{ Session::get('brand_name')}} @endif" required="">
              </div>
              <div class="form-group">
                <label for="brand_name">Brand category: &nbsp;*</label>
              </div>
              <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="brand_category" id="inlineRadio1" value="1" checked=""> Accessories
                  </label>
              </div>
              <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="brand_category" id="inlineRadio2" value="2"> Fashion
                  </label>
              </div>
              <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="brand_category" id="inlineRadio2" value="3"> Food & Beverage
                  </label>
              </div>
              <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="brand_category" id="inlineRadio2" value="4"> Hobby
                  </label>
              </div>
              <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="brand_category" id="inlineRadio2" value="5"> Home & Living
                  </label>
              </div>
              <div class="form-group">
                <label for="brand_name">Brand owner name: &nbsp;*</label>
                <input type="text" class="form-control form-control-sm" id="owner_name"  name="owner_name" value="@if(Session::has('owner_name')){{ Session::get('owner_name')}} @endif" required="">
              </div>
              <div class="form-group">
                <label for="brand_name">Brand owner ID: &nbsp;*</label>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="owner_id" name="owner_id" placeholder="KTP/SIM/Passport" value="@if(Session::has('owner_id')){{ Session::get('owner_id')}} @endif" required="">
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="brand_name">Brand owner phone: &nbsp;*</label>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="owner_phone"  name="owner_phone" value="@if(Session::has('owner_phone')){{ Session::get('owner_phone')}} @endif" >
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="owner_phone_2"  name="owner_phone_2"  placeholder="If you have second phone number" value="@if(Session::has('owner_phone_2')){{ Session::get('owner_phone_2')}} @endif" >
                      </div>
                  </div>
              </div>


              <div class="form-group">
                <label for="brand_name">Brand e-mail address:&nbsp;*</label>
                <input type="text" class="form-control form-control-sm" id="brand_email"  name="brand_email" value="@if(Session::has('brand_email')){{ Session::get('brand_email')}} @endif" required="">
              </div>
              <div class="form-group">
                <label for="brand_name">Brand address:&nbsp;*</label>
                <textarea class="form-control form-control-sm" id="brand_address"  name="brand_address"  placeholder="Please fill in home/store address" rows="4" required="">@if(Session::has('brand_address')){{ Session::get('brand_address')}} @endif</textarea>
              </div>
              <div class="form-group">
                <label for="brand_name">Brand location:&nbsp;*</label>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <select class="form-control form-control-sm" name="province" id="province" required="">
                          @foreach($province as $prov)
                             <option value="{{ $prov->id }}">{{ $prov->province }}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col-6">
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
                  </div>
              </div>
              <div class="form-group">
                <label for="brand_name">Brand social media:&nbsp;*</label>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="brand_soc_ig" placeholder="Instagram" value="@if(Session::has('brand_soc_ig')){{ Session::get('brand_soc_ig')}} @endif" required="">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="brand_soc_web" placeholder="Website" value="@if(Session::has('brand_soc_web')){{ Session::get('brand_soc_web')}} @endif" required="">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="brand_soc_fb" placeholder="Facebook" value="@if(Session::has('brand_soc_fb')){{ Session::get('brand_soc_fb')}} @endif" required="">
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="brand_name">Tell us about your brand: &nbsp;*</label>
                <textarea class="form-control form-control-sm" placeholder="Required at least 300 characters" rows="12" name="brand_about" required="">@if(Session::has('brand_about')){{ Session::get('brand_about')}} @endif</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Brand owner ID: &nbsp;*</label>
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
                <label for="exampleInputFile">Brand logo: &nbsp;*</label>
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
                <label for="exampleInputFile">Product photo: &nbsp;*</label>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <div class="file-nco" align="center">
                          <input type="file" name="brand_product_1" required="" align="center">
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
                  <a href="#"><img src="../images/btn-tong.png" width="30%"></a>
                </div>
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="brand_agree" required="">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">I hereby agree with terms & conditons for &Co registration. &nbsp;*</span>
                </label>
              </div>
              <div class="form-group">
                  <a href="/&co"><img src="../images/back-off.png" width="15%" align="left"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('footer')
<div class="row footer-desktop">
    <div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
</div>
@endsection

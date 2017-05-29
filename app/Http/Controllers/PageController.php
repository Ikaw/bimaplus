<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Home;
use App\Models\Province;
use App\Models\City;

class PageController extends Controller
{
   public function index()
    {
        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
            $id=0;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/index' , ['menu'=>$menu]);
        } else {
            return view('desktop/index');
        }
    }

    public function door()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
            $id=9;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/door' , ['menu'=>$menu]);
        } else {
            return view('desktop/door');
        }
    }

    public function home()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=1;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/home' , ['menu'=>$menu]);
        } else {
            return view('desktop/home');
        }
    }

    public function about()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=2;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/about' , ['menu'=>$menu]);
        } else {
            return view('desktop/about');
        }
    }

    public function dsc()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=3;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/dsc' , ['menu'=>$menu]);
        } else {
            return view('desktop/dsc');
        }
    }
    public function dent()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=4;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/dent' , ['menu'=>$menu]);
        } else {
            return view('desktop/dent');
        }
    }
    public function nco()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=5;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/nco' , ['menu'=>$menu]);
        } else {
            return view('desktop/nco');
        }
    }
    public function cnc()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=6;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/cnc' , ['menu'=>$menu]);
        } else {
            return view('desktop/cnc');
        }
    }

    public function faq()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=7;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/faq' , ['menu'=>$menu]);
        } else {
            return view('desktop/faq');
        }
    }

    public function fitur()
    {

        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=8;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/fitur' , ['menu'=>$menu]);
        } else {
            return view('desktop/fitur');
        }
    }

    public function nco_reg_1()
    {
        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=10;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/nco_reg_1', ['menu'=>$menu]);
        } else {
            $province = Province::all();
            $city = City::all();
            return view('desktop/nco_reg', ['province'=>$province, 'city'=>$city]);
        }
    }

    public function nco_reg_2()
    {
        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=10;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/nco_reg_2', ['menu'=>$menu]);
        } else {
            return view('desktop/nco_reg_2');
        }
    }

    public function nco_reg_3()
    {
        $agent = new Agent();

        if ($agent->isMobile() OR $agent->isTablet()) {
             $id=10;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/nco_reg_3', ['menu'=>$menu]);
        } else {
            return view('desktop/nco_reg_3');
        }
    }
}

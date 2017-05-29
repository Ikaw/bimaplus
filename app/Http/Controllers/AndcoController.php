<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Jenssegers\Agent\Agent;

use App\Models\Province;
use App\Models\City;
use App\Models\Home;
use App\Models\Owner;
use App\Models\Brand;
use App\Models\Product;

class AndcoController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $province = Province::all();
        $city = City::all();
        $id=10;
        $menu = Home::where('index_number',$id)->first();
        if ($agent->isMobile() OR $agent->isTablet()) {
            return view('mobile/nco_reg_2',['province'=>$province, 'city'=>$city, 'menu'=>$menu]);
        } else {
            return view('desktop/nco_reg_2');
        }
    }

    public function temp(Request $request)
    {
        $value=$request->input();

        // if (!empty($value['brand_name']) OR !empty($value['owner_name']) OR !empty($value['brand_category']) OR !empty($value['owner_id']) OR !empty($value['owner_phone']) OR !empty($value['owner_phone_2']) OR !empty($value['brand_email']) OR !empty($value['brand_address']) OR !empty($value['province']) OR !empty($value['city']) OR !empty($value['brand_soc_ig']) OR !empty($value['brand_soc_web']) OR !empty($value['brand_soc_fb']) OR !empty($value['brand_about']) OR !empty($value['brand_picture_id']) OR !empty($value['brand_logo']) OR !empty($value['brand_product_1']) OR !empty($value['brand_product_2']) OR !empty($value['brand_product_3'])) {





            //Form Registration &Co 3
            if (!empty($value['brand_picture_id'])) {
                Session::put('brand_picture_id',$value['brand_picture_id']);
            }

            if (!empty($value['brand_logo'])) {
                Session::put('brand_logo',$value['brand_logo']);
            }

            if (!empty($value['brand_product_1'])) {
                Session::put('brand_product_1',$value['brand_product_1']);
            }

            if (!empty($value['brand_product_2'])) {
                Session::put('brand_product_2',$value['brand_product_2']);
            }

            if (!empty($value['brand_product_3'])) {
                Session::put('brand_product_3',$value['brand_product_3']);
            }

            if (!empty($value['brand_agree'])) {
                Session::put('brand_agree',$value['brand_agree']);
            }

        // }


        $agent = new Agent();
        $id=10;
        $menu = Home::where('index_number',$id)->first();
        $page = $value['page'];
        if ($page == '1') {
            return $this->temp2();
        } elseif ($page == '2') {
            if ($agent->isMobile() OR $agent->isTablet()) {
                return view('mobile/nco_reg_3', ['menu'=>$menu]);
            } else {
                return view('desktop/nco_reg_3');
            }
        }

    }

    public function temp2(Request $request)
    {
        $value=$request->input();
        //Form Registration &Co 1
        if (!empty($value['brand_name'])) {
            Session::put('brand_name',$value['brand_name']);
        }

        if (!empty($value['owner_name'])) {
            Session::put('owner_name',$value['owner_name']);
        }

        if (!empty($value['brand_category'])) {
            Session::put('brand_category',$value['brand_category']);
        }

        if (!empty($value['owner_id'])) {
            Session::put('owner_id',$value['owner_id']);
        }

        if (!empty($value['owner_phone'])) {
            Session::put('owner_phone',$value['owner_phone']);
        }

        if (!empty($value['owner_phone_2'])) {
            Session::put('owner_phone_2',$value['owner_phone_2']);
        }

        if (!empty($value['brand_email'])) {
            Session::put('brand_email',$value['brand_email']);
        }

        if (!empty($value['brand_address'])) {
            Session::put('brand_address',$value['brand_address']);
        }

        $agent = new Agent();
        $province = Province::all();
        $city = City::all();
        $id=10;
        $menu = Home::where('index_number',$id)->first();
        if ($agent->isMobile() OR $agent->isTablet()) {
            return view('mobile/nco_reg_2',['province'=>$province, 'city'=>$city, 'menu'=>$menu]);
        } else {
            return view('desktop/nco_reg_2');
        }
    }

    public function temp3(Request $request)
    {
        $value=$request->input();
        //Form Registration &Co 2
        if (!empty($value['province'])) {
            Session::put('province',$value['province']);
        }

        if (!empty($value['city'])) {
            Session::put('city',$value['city']);
        }

        if (!empty($value['brand_soc_ig'])) {
            Session::put('brand_soc_ig',$value['brand_soc_ig']);
        }

        if (!empty($value['brand_soc_web'])) {
            Session::put('brand_soc_web',$value['brand_soc_web']);
        }

        if (!empty($value['brand_soc_fb'])) {
            Session::put('brand_soc_fb',$value['brand_soc_fb']);
        }

        if (!empty($value['brand_about'])) {
            Session::put('brand_about',$value['brand_about']);
        }

        $agent = new Agent();
        $id=10;
        $menu = Home::where('index_number',$id)->first();
        if ($agent->isMobile() OR $agent->isTablet()) {
            return view('mobile/nco_reg_3',['menu'=>$menu]);
        } else {
            return view('desktop/nco_reg_3');
        }
    }

    public function store(Request $request)
    {
        if (($request->hasFile('brand_picture_id')) )
        {
            $this->validate($request, [
            'brand_picture_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_picture_idName = microtime().'.'.$request->brand_picture_id->getClientOriginalExtension();
            $request->brand_picture_id->move(public_path('images/nco'), $brand_picture_idName);
            // dd($brand_picture_idName);
        }
        else
        {
            $brand_picture_idName=null;
        }

        if (($request->hasFile('brand_logo')) )
        {
            $this->validate($request, [
            'brand_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_logoName = microtime().'.'.$request->brand_logo->getClientOriginalExtension();
            $request->brand_logo->move(public_path('images/nco'), $brand_logoName);
            // dd($brand_logoName);
        }
        else
        {
            $brand_logoName=null;
        }

        if (($request->hasFile('brand_product_1')) )
        {
            $this->validate($request, [
            'brand_product_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_product_1Name = microtime().'.'.$request->brand_product_1->getClientOriginalExtension();
            $request->brand_product_1->move(public_path('images/nco'), $brand_product_1Name);
            // dd($brand_product_1Name);
        }
        else
        {
            $brand_product_1Name=null;
        }

        if (($request->hasFile('brand_product_2')) )
        {
            $this->validate($request, [
            'brand_product_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_product_2Name = microtime().'.'.$request->brand_product_2->getClientOriginalExtension();
            $request->brand_product_2->move(public_path('images/nco'), $brand_product_2Name);
            // dd($brand_product_2Name);
        }
        else
        {
            $brand_product_2Name=null;
        }

        if (($request->hasFile('brand_product_3')) )
        {
            $this->validate($request, [
            'brand_product_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_product_3Name = microtime().'.'.$request->brand_product_3->getClientOriginalExtension();
            $request->brand_product_3->move(public_path('images/nco'), $brand_product_3Name);
            // dd($brand_product_3Name);
        }
        else
        {
            $brand_product_3Name=null;
        }

        $owner = new Owner;
        $owner->name            = Session::get('owner_name');
        $owner->phone           = Session::get('owner_phone');
        $owner->phone_2         = Session::get('owner_phone_2');
        $owner->picture_ID      = $brand_picture_idName;
        $owner->personal_ID     = Session::get('owner_id');
        $owner->save();

        $personal_ID =  Session::get('owner_id');

        $owner_save = new Owner;
        $owner_save = Owner::where('personal_ID', $personal_ID)->firstOrFail();


        $brand = new Brand;
        $brand->name            = Session::get('brand_name');
        $brand->email           = Session::get('brand_email');
        $brand->address         = Session::get('brand_address');
        $brand->soc_ig          = Session::get('brand_soc_ig');
        $brand->soc_web         = Session::get('brand_soc_web');
        $brand->soc_fb          = Session::get('brand_soc_fb');
        $brand->about           = Session::get('brand_about');
        $brand->logo            = $brand_logoName;
        $brand->id_city         = Session::get('city');
        $brand->id_category     = Session::get('brand_category');
        $brand->id_owner        = $owner_save->id;
        $brand->agreement       = Session::get('brand_agree');

        $id_owner = $owner_save->id;
        $brand->save();

        $id_owner_by_product = new Brand;
        $id_owner_by_product = Brand::where('id_owner', $id_owner)->firstOrFail();
        $id_brand = $id_owner_by_product->id;

        $product1 = new Product;
        $product1->file_name       = $brand_product_1Name;
        $product1->id_brand        = $id_brand;
        $product1->save();

        $product2 = new Product;
        $product2->file_name       = $brand_product_2Name;
        $product2->id_brand        = $id_brand;
        $product2->save();

        $product3 = new Product;
        $product3->file_name       = $brand_product_3Name;
        $product3->id_brand        = $id_brand;
        $product3->save();

        Session::forget('brand_name');
        Session::forget('owner_name');
        Session::forget('brand_category');
        Session::forget('owner_id');
        Session::forget('owner_phone');
        Session::forget('owner_phone_2');
        Session::forget('brand_email');
        Session::forget('brand_address');
        Session::forget('province');
        Session::forget('city');
        Session::forget('brand_soc_ig');
        Session::forget('brand_soc_web');
        Session::forget('brand_soc_fb');
        Session::forget('brand_about');
        Session::forget('brand_picture_id');
        Session::forget('brand_product_1');
        Session::forget('brand_product_2');
        Session::forget('brand_product_3');
        Session::forget('brand_agree');

        $agent = new Agent();
        if ($agent->isMobile() OR $agent->isTablet()) {
            $id=5;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/nco' , ['menu'=>$menu]);
        } else {
            return view('desktop/nco');
        }
    }

    public function store_desktop(Request $request)
    {
        if (($request->hasFile('brand_picture_id')) )
        {
            $this->validate($request, [
            'brand_picture_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_picture_idName = microtime().'.'.$request->brand_picture_id->getClientOriginalExtension();
            $request->brand_picture_id->move(public_path('images/nco'), $brand_picture_idName);
            // dd($brand_picture_idName);
        }
        else
        {
            $brand_picture_idName=null;
        }

        if (($request->hasFile('brand_logo')) )
        {
            $this->validate($request, [
            'brand_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_logoName = microtime().'.'.$request->brand_logo->getClientOriginalExtension();
            $request->brand_logo->move(public_path('images/nco'), $brand_logoName);
            // dd($brand_logoName);
        }
        else
        {
            $brand_logoName=null;
        }

        if (($request->hasFile('brand_product_1')) )
        {
            $this->validate($request, [
            'brand_product_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_product_1Name = microtime().'.'.$request->brand_product_1->getClientOriginalExtension();
            $request->brand_product_1->move(public_path('images/nco'), $brand_product_1Name);
            // dd($brand_product_1Name);
        }
        else
        {
            $brand_product_1Name=null;
        }

        if (($request->hasFile('brand_product_2')) )
        {
            $this->validate($request, [
            'brand_product_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_product_2Name = microtime().'.'.$request->brand_product_2->getClientOriginalExtension();
            $request->brand_product_2->move(public_path('images/nco'), $brand_product_2Name);
            // dd($brand_product_2Name);
        }
        else
        {
            $brand_product_2Name=null;
        }

        if (($request->hasFile('brand_product_3')) )
        {
            $this->validate($request, [
            'brand_product_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $brand_product_3Name = microtime().'.'.$request->brand_product_3->getClientOriginalExtension();
            $request->brand_product_3->move(public_path('images/nco'), $brand_product_3Name);
            // dd($brand_product_3Name);
        }
        else
        {
            $brand_product_3Name=null;
        }

        $value=$request->input();

        $owner = new Owner;
        $owner->name            = $value['owner_name'];
        $owner->phone           = $value['owner_phone'];
        $owner->phone_2         = $value['owner_phone_2'];
        $owner->picture_ID      = $brand_picture_idName;
        $owner->personal_ID     = $value['owner_id'];
        $owner->save();

        $personal_ID =  $value['owner_id'];

        $owner_save = new Owner;
        $owner_save = Owner::where('personal_ID', $personal_ID)->firstOrFail();


        $brand = new Brand;
        $brand->name            = $value['brand_name'];
        $brand->email           = $value['brand_email'];
        $brand->address         = $value['brand_address'];
        $brand->soc_ig          = $value['brand_soc_ig'];
        $brand->soc_web         = $value['brand_soc_web'];
        $brand->soc_fb          = $value['brand_soc_fb'];
        $brand->about           = $value['brand_about'];
        $brand->logo            = $brand_logoName;
        $brand->id_city         = $value['city'];
        $brand->id_category     = $value['brand_category'];
        $brand->id_owner        = $owner_save->id;
        $brand->agreement       = 'yes';

        $id_owner = $owner_save->id;
        $brand->save();

        $id_owner_by_product = new Brand;
        $id_owner_by_product = Brand::where('id_owner', $id_owner)->firstOrFail();
        $id_brand = $id_owner_by_product->id;

        $product1 = new Product;
        $product1->file_name       = $brand_product_1Name;
        $product1->id_brand        = $id_brand;
        $product1->save();

        $product2 = new Product;
        $product2->file_name       = $brand_product_2Name;
        $product2->id_brand        = $id_brand;
        $product2->save();

        $product3 = new Product;
        $product3->file_name       = $brand_product_3Name;
        $product3->id_brand        = $id_brand;
        $product3->save();

        // Session::forget('brand_name');
        // Session::forget('owner_name');
        // Session::forget('brand_category');
        // Session::forget('owner_id');
        // Session::forget('owner_phone');
        // Session::forget('owner_phone_2');
        // Session::forget('brand_email');
        // Session::forget('brand_address');
        // Session::forget('province');
        // Session::forget('city');
        // Session::forget('brand_soc_ig');
        // Session::forget('brand_soc_web');
        // Session::forget('brand_soc_fb');
        // Session::forget('brand_about');
        // Session::forget('brand_picture_id');
        // Session::forget('brand_product_1');
        // Session::forget('brand_product_2');
        // Session::forget('brand_product_3');
        // Session::forget('brand_agree');

        $agent = new Agent();
        if ($agent->isMobile() OR $agent->isTablet()) {
            $id=5;
            $menu = Home::where('index_number',$id)->first();
            return view('mobile/nco' , ['menu'=>$menu]);
        } else {
            return view('desktop/nco');
        }
    }
}

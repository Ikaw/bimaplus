<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Home;

class CmsController extends Controller
{
    public function index()
    {
        $menu = Home::all();
        return view('cms/home',['menus'=>$menu]);
    }

    public function show($id)
    {

        return view('cms/master');
    }

    public function edit($id)
    {
        $menu = Home::find($id);
        return view('cms/edit' , ['menu'=>$menu]);
    }

    public function update(Request $request, $id)
    {
        $menu = Home::find($id);
        $menu->title        = $request->title;
        $menu->description  = $request->description;
        $menu->save();

        return redirect('cms');

    }

    public function create()
    {
        return view('cms/create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image'))
        {
            // $image = $request->file('image');
            // $upload = 'upload/images';
            // $time = time();
            // $filename = $image->getClientOriginalName($time);
            // //$image->save($upload.'/'.$filename);

            // // $this->validate($request, [
            // // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            // // ]);
            // // $imageName = time().'.'.$request->image_file->getClientOriginalExtension();
            //  $request->image->move(public_path('upload/images'), $filename);

            $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);




        }
        else
        {
            $imageName=null;
        }

        $menu = new Home;
        $menu->title        = $request->title;
        $menu->description  = $request->description;
        $menu->picture      = $imageName;
        $menu->save();

        return redirect('cms');

    }


    public function destroy($id)
    {
        $menu = Home::find($id);
        $menu->delete();
        return redirect('cms');

    }

}

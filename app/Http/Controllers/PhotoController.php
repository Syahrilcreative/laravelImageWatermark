<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use DB;
use Image;


class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::get();
        return view('watermark', compact('photos'));
    }
    public function photoUpload(Request $request)
    {
        $data = $request->image;
        $name = time(). $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();
        $waterMark = public_path('watermark/watermark.png');
        $img = Image::make($request->file('image'));
        $img->insert($waterMark, 'center');
        
        $gambarnya = $img->save('projectDesigner/'.$name);
        $data1 = array(
            'image'     => $name
        );
        Photo::create($data1);
        return redirect()->back();
    }


// //////////////////////////////////////
    public function index1()
    {
        $waterMark = public_path('watermark/watermark.png');
        $image = Image::make(public_path('watermark/pic.png'));
        $image->insert($waterMark, 'bottom-right',10,10);
        $image->save(public_path('watermark/new-pic.png'));
        dd('berhasil yah');
    }

    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     $data = $request->validate([
    //         'title'     => 'min:3|max:100',
    //         'image'     => 'required|mimes:jpg,jpeg,png|max:2024'
    //     ]);
    //     // dd($data);
    //     $imageName      = $request->file('image')->getClientOriginalName();
    //             // dd($imageName);
    //     $data['image']  = $request->file('image')->storeAs('Banner', $imageName);
    //     Banner::create($data);
    //     Alert::toast('Successfully Save Data', 'success');
    //     return redirect()->back();
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{

    public function index()
    {
        $waterMark = public_path('watermark/watermark.png');
        $image = Image::make(public_path('watermark/pic.png'));
        $image->insert($waterMark, 'bottom-right',10,10);
        $image->save(public_path('watermark/new-pic.png'));
        dd('berhasil yah');
    }
    public function imageWatermark()
    {
        $waterMark = public_path('watermark/watermark.png');
        $image = Image::make(public_path('watermark/pic.png'));
        $image->insert($waterMark, 'bottom-right',10,10);
        $image->save(public_path('watermark/new-pic.png'));
        dd('berhasil');
    }
}

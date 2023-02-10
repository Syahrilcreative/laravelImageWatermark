<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', [ImageController::class,'index']);
Route::get('/', function () {

    return view('welcome');
    // $waterMark = public_path('watermark/watermark.png');
    // $image = Image::make(public_path('watermark/pic.png'));
    // $image->insert($waterMark, 'bottom-right',10,10);
    // $image->save(public_path('watermark/new-pic.png'));
//     return 'barhasil';
});
    Route::get('photo', [PhotoController::class,'index']);
    Route::post('photoUpload', [PhotoController::class,'photoUpload'])->name('photoUpload');
// Route::get('watermark',[ImageController::class,'index']);
// Route::get('watermark',[ImageController::class,'imageWatermark']);

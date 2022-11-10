<?php

use App\Http\Controllers\Admin\AdminCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCtrl;
use App\Http\Controllers\ProductCtrl;
use App\Http\Controllers\PolicyCtrl;
use App\Http\Controllers\Admin\Interface_ColorCtrl;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[CategoryCtrl::class,'index']);
Route::get("/danhmuc/{danhmuc}",[CategoryCtrl::class,'showProductByCategory']);
Route::get("sanpham/{sp}",[ProductCtrl::class,"show"]);
Route::get("trogiup/{tg}",[PolicyCtrl::class,"index"]);
Route::group(['prefix' => 'admin'], function () {
    Route::get("/",[AdminCtrl::class,"index"]);
    Route::get("/login",[AdminCtrl::class,"login"]);
    Route::post("/auth",[AdminCtrl::class,"auth"]);
    Route::get("/logout",[AdminCtrl::class,"logout"]);
    
    //color
    Route::get("/interface",[Interface_ColorCtrl::class,"index"]);
    Route::post("/interface/change-color",[Interface_ColorCtrl::class,"changeColor"]);
});



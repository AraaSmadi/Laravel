<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/a', function () {
    return 'my nameaefj';
});
Route::view("user","user");
Route::view("home","home")->middleware('protectedpage');
Route::view("noaccess","noaccess");
Route::group(['middleware'=>["protectedpage"]],function(){
    Route::view("user","user");
});
Route::view("user","user")->middleware('protectedpage');
Route::view("upload","uploadpage");
Route::post("upload",[uploadcontroller::class,'index']);
Route::view("welcome","welcome");
Route::get('/{lang}', function ($lang) {

    return view('welcome');
});
Route::get('/', function () {

    return view('langalaa');
});

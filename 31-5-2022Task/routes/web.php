<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\students;
use App\Http\Controllers\RegistrController;
use App\Models\registr;
use App\Http\Controllers\calController;


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

// Route::get('/about', [students::class ,'getall']);
//  Route::get('/register', [RegistrController::class ,'getall']);
// Route::get('/registerid', [RegistrController::class ,'getid']);
// Route::get('/', function () {
//     return view('aboutus');
// });
// Route::get('/', function () {
//     return view('contactus');
// });


// Route::get('/post', [test::class ,'getpost']);
// Route::get('/post2', [test::class ,'post']);


Route::get('/calculater', [calController::class ,'index']);


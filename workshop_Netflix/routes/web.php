<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\index;
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
Route::view('add', 'Add_movies');
Route::post('add', [MoviesController::class , 'Add']);
Route::get('list', [index::class,'showall']);
Route::get('delete/{id}', [index::class,'delete']);
Route::get('edit/{id}', [index::class,'showdata']);
Route::get('show/{id}', [index::class,'show']);
Route::post('edit',[index::class,'update']);
Route::view('edit','update');

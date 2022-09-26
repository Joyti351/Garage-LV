<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;

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
Route::get('/user',[HomeController::class,'user']);
Route::get('/contact.html',[HomeController::class,'contact']);

//slider site
Route::get('/admin',[SliderController::class,'side']);
Route::get('/slider-create',[SliderController::class,'create']);
Route::post('/slider-store',[SliderController::class,'store']);
Route::get('/slider-index',[SliderController::class,'index']);
Route::get('/slider-view/{id}',[SliderController::class,'View']);
Route::get('/slider-edit/{id}',[SliderController::class,'edit']);
Route::get('/slider-delete/{id}',[SliderController::class,'delete']);
Route::post('/slider-update',[SliderController::class,'update']);


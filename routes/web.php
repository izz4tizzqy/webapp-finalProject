<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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
    return view('home');
});

Route::post("adminlogin",[UserAuth::class,'AdminLogin']);
Route::view("adminlogin",'adminlogin');
Route::view("check",'check');
Route::post("/input",[UserAuth::class,'submitSymptom']);
Route::post('/submit', 'App\Http\Controllers\page@save');
Route::view('/input', 'userview');
Route::view("viewbooking",'viewbooking');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::view('adminview', 'adminview');
Route::get('adminview', '\App\Http\Controllers\page@index');
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');


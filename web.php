<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\SiteController@home');
Route::get('/about','App\Http\Controllers\SiteController@abot');
Route::get('/kontak','App\Http\Controllers\SiteController@kontak');

//daftar
Route::get('/daftar','App\Http\Controllers\KaryawanController@signup');

//login
Route::get('/login','App\Http\Controllers\KaryawanController@signin');

//dashboard
Route::get('/dashboard','App\Http\Controllers\DashboardController@index');

//diskusi forum 
Route::get('/diskusi','App\Http\Controllers\ForumController@index');

//read data 
 Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');

 //edit
  Route::get('/karyawan/edit','App\Http\Controllers\KaryawanController@edit');

  //profile
  Route::get('/karyawan/profile','App\Http\Controllers\KaryawanController@profile');

 //view diskusi
  Route::get('/diskusi/view','App\Http\Controllers\ForumController@view');

 //keluar akun
  Route::get('/logout','App\Http\Controllers\KaryawanController@logout');
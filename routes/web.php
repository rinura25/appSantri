<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PutraController;
use App\Http\Controllers\PutriController;
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
Route::get('/home', function () {
    return view('home');
});
Route::group(['middleware' => ['auth']], function(){
    //CRUD Putra
    //create data
    Route::get('/putra/create', 'App\Http\Controllers\PutraController@create');
    Route::post('/putra', 'App\Http\Controllers\PutraController@store');
    //menampilkan data
    Route::get('/putra', 'App\Http\Controllers\PutraController@index');
    //menampilkan detail data
    Route::get('/putra/{putra_id}', 'App\Http\Controllers\PutraController@show');
    //menampilkan form edit data
    Route::get('/putra/{putra_id}/edit', 'App\Http\Controllers\PutraController@edit');
    //menyimpan perubahan data
    Route::put('/putra/{putra_id}', 'App\Http\Controllers\PutraController@update');
    //menghapus data
    Route::delete('/putra/{putra_id}', 'App\Http\Controllers\PutraController@destroy');
    // CRUD Putri
    //menampilkan data
    Route::get('/putri', 'App\Http\Controllers\PutriController@index');
    //create data
    Route::get('/putri/create', 'App\Http\Controllers\PutriController@create');
    //menyimpan data ke database
    Route::post('/putri', 'App\Http\Controllers\PutriController@store');
    //menampilkan detail data
    Route::get('/putri/{putri_id}', 'App\Http\Controllers\PutriController@show');
    //menampilkan form edit data
    Route::get('/putri/{putri_id}/edit', 'App\Http\Controllers\PutriController@edit');
    //menyimpan perubahan data
    Route::put('/putri/{putri_id}', 'App\Http\Controllers\PutriController@update');
    //menghapus data
    Route::delete('/putri/{putri_id}', 'App\Http\Controllers\PutriController@destroy');
  


    //CRUD Barang
    Route::resource('barang', 'BarangController');
});

Auth::routes();
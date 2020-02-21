<?php

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
    return view('welcome2');
});

Route::get('/sesi', function () {
    //return view('welcome');
    return view('tamu.form');
});
Route::get('/kirim', function () {
    //return view('welcome');
    return view('paket.form');
});

Route::get('/home', function () {
    //return view('welcome');
    return view('layouts.home');
})->middleware('auth');
Route::get('/tamu', function () {
    //return view('welcome');
    return view('layouts.home');
})->middleware('auth');
Route::get('/chart', function () {
    //return view('welcome');
    return view('layouts.charts');
})->middleware('auth');
Route::get('/afterRegister', function () {
    return view('layouts.afterRegister');
});
Route::get('/afterKirim', function () {
    return view('layouts.afterKirim');
});


Route::resource('/tamu', 'TamuController');

Route::resource('/paket', 'PaketController');

Route::resource('/auth', 'UsersController');

Route::get('generate-pdf','TamuController@generatePDF')->middleware('auth');
Route::get('tamu-pdf','TamuController@tamuPDF')->middleware('auth');

Route::get('export', 'TamuController@export')->name('export')->middleware('auth');
Route::get('paket-pdf','PaketController@paketPDF')->middleware('auth');
Route::get('export-paket', 'PaketController@export')->name('export')->middleware('auth');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Auth::routes();
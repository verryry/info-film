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
    return view('welcome');
});

Route::resource('/index','HomeController');
Route::resource('/film','FilmController');
Route::view('/login','login')->name('login');
Route::post('/login/save','FilmController@signin')->name('signin');
Route::get('/daftar','HomeController@daftar')->name('daftar');


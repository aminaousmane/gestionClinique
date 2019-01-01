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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'ConsulteController@show')->name('home');
Route::get('/malade', 'maladeController@show')->name('malade');
Route::get('/consultation', 'ConsulteController@index')->name('consultation');
Route::post('/store', 'maladeController@store')->name('store');
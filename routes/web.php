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
Route::get('/malade', 'maladeController@index')->name('malade');
Route::get('/consultation', 'ConsulteController@index')->name('consultation');
Route::get('/consultation', 'maladeController@show')->name('consultation');
Route::post('/store', 'maladeController@store')->name('store');
Route::post('/storeConsult', 'ConsulteController@store')->name('storeConsult');
Route::get('/laboratoire','laboratoireController@index')->name('laboratoire');
Route::get('/laboratoire', 'laboratoireController@show')->name('laboratoire');
Route::post('/storeLaboratoire', 'laboratoireController@store')->name('storeLaboratoire');
Route::get('/traitement', 'traitementController@index')->name('traitement');
Route::get('/traitement', 'traitementController@show')->name('traitement');
Route::post('/storeTraitement', 'traitementController@store')->name('storeTraitement');
Route::get('/medecins', 'medecinsController@index')->('medecins');
Route::get('/medecins', 'medecinsController@show')->name('medecins');
Route::post('/storeMedecins', 'medecinsController@store')->name('storeMedecins');

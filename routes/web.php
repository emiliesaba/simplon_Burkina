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
    return view('accueil');
})->name('accueil');
Route::get('/formation/encours','ApprenantsController@list')->name('formation');
Route::get('/apprenant/new','ApprenantsController@new')->name('nouveau');
Route::post('/apprenant/new','ApprenantsController@store')->name('apprenant.store');
Route::get('/apprenant/details/{id_apprenant}','ApprenantsController@details')->name('details');

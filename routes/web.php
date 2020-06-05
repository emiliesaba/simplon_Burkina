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


//routes de Apprenant

Route::get('/formation/encours','ApprenantsController@list')->name('formation');
Route::get('/apprenant/new','ApprenantsController@new')->name('nouveau.apprenant');
Route::post('/apprenant/new','ApprenantsController@store')->name('apprenant.store');
Route::get('/apprenant/{nom}--{prenom}/{id_apprenant}','ApprenantsController@details')->name('apprenant.details');



//routes pour Alumni
Route::get('/alumni/promotion={promotion}','AlumniController@list')->name('alumni');
Route::get('/alumni/new','AlumniController@new')->name('nouveau.alumni');
Route::post('/alumni/new','AlumniController@store')->name('alumni.store');
Route::get('/alumni/{nom}--{prenom}-promotion={promotion}/{id}','AlumniController@details')->name('alumni.details');

//routes de apropos
Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');


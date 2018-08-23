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
Route::get('/index', function () {
    return view('layouts_Dash.index');
});
Route::get('/fiche-patient', function () {
    return view('admin.patient-fiche');
});
Route::get('/enreg-ancien-patient', function () {
    return view('admin.ancien-patient');
});
Route::get('/enreg-nouv-patient', function () {
    return view('admin.patients-ajout');
});

Route::resource('docteurs-ajout', 'MedecinController');
Route::resource('docteurs-liste', 'ListeMedecinControlleur');
Route::resource('secretaire-ajout', 'SecretaireControlleur');
Route::resource('secretaire-liste', 'ListeSecretaireControlleur');


Route::get('/login','SessionsController@create');

Route::get('/register','RegisterController@create');

Route::post('/register','RegisterController@store');

Route::get('/logout','SessionsController@destroy');

Route::post('/login','SessionsController@store');
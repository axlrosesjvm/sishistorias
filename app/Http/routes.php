<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('adminhistorias/historia','HistoriaController');
Route::resource('adminhistorias/personaje','PersonajeController');
Route::resource('adminhistorias/escena','EscenaController');
Route::resource('adminhistorias/dialogo','DialogoController');
Route::resource('adminhistorias/listaescenas','ListaescenasController');
Route::resource('seguridad/usuario','UsuarioController');
Route::auth();

Route::get('/home', 'HomeController@index');

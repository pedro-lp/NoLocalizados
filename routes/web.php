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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('datosdesaparecido','DatosDesaparecidoController');
Route::resource('datosreportante','DatosReportanteController');
Route::resource('datosregistro','DatosRegistroController');
Route::resource('foto','DatosRegistroController');

Route::view('/datosdesaparecido2','datosdesaparecido1')->name('datosdesaparecido');
Route::view('/datosRegistro2','datosRegistro')->name('datosRegistro');
Route::view('/datosFotografia2','datosFotografia')->name('datosFotografia');
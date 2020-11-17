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

Route::resource('datosdesaparecidos','DatosDesaparecidoController');
Route::resource('datosreportantes','DatosDesaparecidoController');
Route::resource('datosregistros','DatosRegistroController');

Route::view('/datosdesaparecido','datosdesaparecido1')->name('datosdesaparecido');

Route::view('/datosRegistro','datosRegistro')->name('datosRegistro');

Route::view('/datosFotografia','datosFotografia')->name('datosFotografia');
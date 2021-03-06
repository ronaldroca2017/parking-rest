<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('users', 'UserController');
Route::resource('login', 'SesionController');
Route::resource('estacionamiento', 'EstacionamientoController');
Route::resource('autos','AutoController');
Route::resource('obtenerusuario', 'GetUsuarioController');
Route::resource('solicitud','SolicitudController');

Route::post('search', 'SearchController@index');

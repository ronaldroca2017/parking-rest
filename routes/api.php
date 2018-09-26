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
<<<<<<< HEAD
Route::resource('login', 'SesionController');
Route::resource('estacionamiento', 'EstacionamientoController');
=======
Route::resource('autos','AutoController');
Route::resource('estacionamiento', 'EstacionamientoController');
>>>>>>> 54f96472d0c7cee8a93467e85ec02fc56b358a2c

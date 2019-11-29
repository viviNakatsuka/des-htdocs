<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| Dirigir la peticion del usr acia un metodo o un controlador
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viviana', function () {
    return view('pruebaViviana');
});

Route::get('/test', function () {
   return view('prueba');
});

Route::get('home', 'WelcomeController@index');
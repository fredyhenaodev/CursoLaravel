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
    return view('welcome');
});

Route::get('prueba', function(){
   return "hola mundo"; 
});
Route::get('nombre/{nombre}', function($nombre){
   return "mi nombre es: ".$nombre; 
});

Route::resource('movie','MovieController');

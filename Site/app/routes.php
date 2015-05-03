<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/','app\controllers\HomeController@index',['only'=>['index']]);

Route::resource('/cadastraDoador','app\controllers\PessoaController@create');
Route::post('/cadastraDoador','app\controllers\PessoaController@store');
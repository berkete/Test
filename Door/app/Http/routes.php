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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/doors','DoorsController');
//Route::get('/doors/{door}',['as'=>'doors.show','uses'=>'DoorsController@show']);
//Route::post('door/create','DoorsController@create');
//Route::get('door/index','DoorsController@index');




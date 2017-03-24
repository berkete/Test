<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Auth\Access\Response;
use Toin0u\Geocoder\Facade\Geocoder;

Route::get('/', function () {
    return view('index');
});

Route::get('/api/v1/hotels/{id?}', 'Hotels@index');
Route::post('/api/v1/hotels', 'Hotels@store');
Route::post('/api/v1/hotels/{id}', 'Hotels@update');
Route::delete('/api/v1/hotels/{id}', 'Hotels@destroy');

Route::get('/api/v1/coordinates/{name}', function($name) {
    try {
        $geocode = Geocoder::geocode("$name, Tanzania")->toArray();
        return Response::json($geocode);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
});
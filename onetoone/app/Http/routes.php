<?php

use App\User;
use App\Adress;
//use Illuminate\Routing\Route;

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
//
Route::get('/insert',function (){



    $user=User::findOrFail(1);
    $address = new Adress(['name'=>'jica wakinohamacho chu-ku kobe shi']);
    $added=$user->adress()->save($address);
    if ($added){

        return "sucessfully added!";
    }

});

Route::get('/update',function (){

   $address = Adress::where('user_id',1)->first();
    $address->name="updated new adre  Jica center";
    $address->save();
});

Route::get('/read',function (){

    $user = User::findOrFail(2);
    $user->adress->name;
    echo $user;

});

Route::get('/delete',function (){


    $user = User::findOrFail(1);
    $user->adress()->delete();
    return "done";
});
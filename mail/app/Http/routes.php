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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function (){

    $data=[

        'title'=>'The bset student that I hope',
        'content'=>'Please attend the laravlel tutorial in this link https://www.udemy.com/php-with-laravel-for-beginners-become-a-master-in-laravel/learn/v4/t/lecture/4960684'

    ];


Mail::send('emails.test',$data,function ($message){

    $message->to('shume98@gmail.com','shumex')->subject('Hey there');

});

});
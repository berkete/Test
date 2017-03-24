<?php
use App\User;
use App\Role;

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
Route::get('/create',function (){

   $user = User::find(1);
    $role = new Role(['name'=>'admin']);
    $user->roles()->save($role);


});
Route::get('/read',function (){

    $user= User::findOrFail(1);

    //dd($user->roles);
    foreach ($user->roles as $role){

        echo $role->name."<br>";
    }



});

Route::get('/update',function (){
   $user=User::findOrfail(1);
    if ($user->has('roles')){
        foreach ($user->roles as $role){


            if ($role->name='subscriber'){
                $role->name= 'administrator';
                $role->save();
            }
        }

    }



});
Route::get('/delete',function (){


    $user=User::findOrFail(1);
    $user->roles()->delete();

    //used to delete all the recodings
//    foreach ($user->roles as $role)
//    {
//
//      $role->whereId(2)->delete();
//    }


});
//create relation between tables

Route::get('/attach',function (){

    $user=User::find(2);

    $user->roles()->attach(5);


});

//canceling the relations
Route::get('/detach',function (){

   $user=User::find(1);
    $user->roles()->detach();
});
Route::get('/sync',function (){


    $user=User::find(2);
    $user->roles()->sync([5,6]);
});
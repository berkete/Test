<?php
use App\Post;
use App\User;
//use Illuminate\Routing\Route;

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

/*Route::get('/', function () {
return view('welcome');
    //return "The admin is here";
});
Route::get('/about',function ()
{


    return "hey this about page";
});

Route::get('/contact',function (){

    return "this the contact";
});
Route::get('/post/{id}/{name}',function ($id,$name){


    return "post user_id:   ".$id."<br>User name:  ".$name;
});
Route::get('admin/posts/example',array('as'=>'admin.home',function(){
    $url=route('admin.home');
   //echo "<a href="route('admin.home')">click here!</a>";
    return "this Url is :". $url;


}));*/

//eloquent ORM
//Route::get('/find',function (){
//
//    $posts=Post::all();
//    foreach ($posts as $post){
//
//        return $post->id;
//    }
//
//});

//Route::get('/find_where',function (){
//
//    $posts=Post::where('id',5)->orderBy('id','desc')->take(1)->get();
//  return $posts;
//
//
//
//});
//Route::get('/findmore',function (){
////
////    $posts=Post::findOrFail(1);
////    return $posts;
//
//
//    $posts= Post::where('id','<',50)->firstOrFail();
//    return $posts;
//});

//elequent inserting data
//
//Route::get('/binsert',function (){
//
//    $post=new Post;
//    $post->title='Announcement';
//    $post->body='laravel is makeing the difference';
//
//    $post->save();
//
//});
//Route::get('/bainsert',function (){
//
//    $post=Post::find(5);
//    $post->title='This update from elquent';
//    $post->body='thios body freezing';
//    $post->save();
//
//
//});

//Route::get('/create',function (){
//    Post::create(['title'=>'the create method','body'=>'Wowo learning php']);
//
//});
//Route::get('/update',function (){
//
//    Post::where('id',4)->where('created_at',NULL)->update(['title'=>'new php title','body'=>'Yes of course']);
//
//
//});

//delete
//Route::get('/delete',function (){
//
//
//
//    $post=Post::find(6);
//    $post->delete();
//
//
//
//});

//Route::get('/delete2',function (){
//
////$post=Post::destroy([6,7]);
//  $post=Post::where('id',5)->delete();
//    if ($post)
//    {
//
//        return "deleted sucessfully!";
//    }
//else{
//    return "something gone wrong";
//}
//});
//Route::get('/softdelete',function (){
//
//$post=Post::find(9)->delete();
//if($post){
//
//    return "deleted sucessfully";
//}
//else{
//
//    return "something went wrong";
//}
//
//});
//Route::get('/readsoftdelete',function (){
////
////    $post=Post::find(9);
////    return $post;
//
////    $post=Post::withTrashed()->where('id',9)->get();
////    return $post;
//$post=Post::onlyTrashed()->where('id',9)->get();
//return $post;
//
//
//
//});


//Route::get('/restore',function (){
//
//
//    $post=Post::withTrashed()->where('id',9)->restore();
//    if($post){
//
//        return"Retored!";
//    }
//    else{
//        return"went wrong"
//    }
//
//});

//Route::get('/forcedelete',function (){
//
//    $post=Post::withTrashed()->where('id',9)->forceDelete();
//
//});

//Relations ships

//Route::get('/user/{id}/post',function ($id){
//
//    return User::find($id)->post->body;
//
//
//});
//
//Route::get('/post/{id}/user',function ($id){
//
//
//    return Post::find($id)->user->name;
//
//});

//Route::get('/posts',function (){
//
// $user=User::find(1);
//
////return $user;
//    foreach($user->posts as $post){
//  echo $post->body."<br>";
//
//
//    }
//});


//many to many relation


/*
Route::get('/user/{id}/role', function ($id){

   $user=User::find($id)->roles()->orderBy('id','desc')->get();
    return $user;

//    foreach ($user->roles as $role){
//        return $role->name;
//    }


});

Route::get('user/pivot',function (){

   $user=User::find(1);

    foreach ($user->roles as $role){

        echo $role->pivot->created_at;
    }*/

//});


//Route::get('/post/{id}','PostController@create');
//Route::resource('posts', 'PostController');
//Route::get('/contact/','PostController@contact');
//Route::get('post/{id}/{name}/{password}','PostController@show_post');


//Database
/*se Illuminate\Support\Facades\DB;

Route::get('/insert',function (){

   DB::insert('insert into posts(title,body) VALUES(?,?)',['This is','laravel']);
    Db::insert('insert into posts(title,body,created_at) VALUES (?,?,?)',['This is laravale5','welcome','2016-2-15']);

   // DB::insert('insert into contacts(name,email,password) VALUES (?,?,?)',['shume','shume98@gmail.com','1222222']);

});*/
//Route::get('/read',function (){
//    $result=DB::select('select * from posts where id=?',[5]);
//    // $result=DB::select('select * from posts');
//   // $result->title;
////    return var_dump($result);
////    foreach ($result as $post)
////    {
////        return $post->body;
////    }
//
//});
//Route::get('/update',function (){
//
//    $updated=DB::update('update posts set title="update a title" where id=?',[1]);
//    return $updated;
//});
//Route::get('/delete',function (){
//    $deleted=DB::delete('delete from posts where id=?',[3]);
//   // return $deleted;
//    if ($deleted==1) {
//
//        return "Sucessfully deleted";
//    }
//    else {
//        return "something went wrong!";
//    }
//});

//Crud application

Route::group(['middleware'=>'web'],function (){
    Route::resource('/posts','PostController');


});
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chart', function () {



    $view = DB::table('users')
        ->select(DB::raw('MONTHNAME(is_active) as month'), DB::raw("DATE_FORMAT(created_at,'%Y-%m') as monthNum"), DB::raw('count(*) as users'))
        ->groupBy('monthNum')
        ->get();

    //return $view;


//    public function chartjs()
//    {
//        $viewer = DB::table('users')
//            ->select(DB::raw("sum(is_active) as count"))
//            ->orderBy("created_at")
//            ->groupBy(DB::raw("year(created_at)"))
//            ->get();
////        $viewer = array_column($viewer, 'count');
//
//        $click = DB::table('users')
//            ->select(DB::raw("SUM() as count"))
//            ->orderBy("created_at")
//            ->groupBy(DB::raw("year(created_at)"))
//            ->get();
//        $click = array_column($click, 'count');

        return view('chartjs')
            ->with('viewer', json_encode($view, JSON_NUMERIC_CHECK));
            //->with('click', json_encode($click, JSON_NUMERIC_CHECK));
//    }




});

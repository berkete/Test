<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        //$request->session()->flash('message','hey there Genki');

        $request->session()->reflash();
        $request->session()->keep('message');


       return $request->session()->get('message');




         //session(['shume1'=>'teacher']);
//        return session('shume1');
        //
        //$request->session()->forget('shume1');
       // $request->session()->flush();

        //return $request->session()->all();

//return $request->session()->put(['shume'=>'Instructor']);

        //return session(['peter'=>'student']);

       // return $request->session()->all();
//        $user=Auth::user();
//
//        return view('home',compact('user'));
    }
}

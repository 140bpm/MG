<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Civil_state;
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
    public function index()
    {
        $civilstates = Civil_state::orderBy('id','desc')->get();

        foreach($civilstates as $civilstate){
            echo  $civilstate;
        }

        //if (Auth::user()->admin == true )
        //  {
            //return view('admin');
     //   }else
       // {
            //return view('home');
        //}

    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
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
    public function index(){
        $users = User::all();
        return view('home', compact('users'));
    } 
    
    // public function index(){
    //     $users = DB::select('SELECT * FROM users');
    //     return view('home',['users'=>$users]);
    // }
    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }



}

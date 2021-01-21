<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index(){
    //     $users = User::all();
    //     return view('home', compact('users'));
    // }


    /**
     * Remove categories.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */

    public function removeUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function showExploreUser(){
        $users = User::all();
        return view('home', compact('users'));
    }







    // public function editUser(Request $request, $id)
    // {
    //     $user = User::find($id);
    //     $user->firstName = $request->get('firstName');
    //     $user->lastName = $request->get('lastName');
    //     $user->gender = $request->get('gender');
    //     $user->email = $request->get('email');
    //     $user->save();
    //     return back();
    // }


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function editUser(User $user)
    // {   
    //     $user = Auth::user();
    //     return view('editUser', compact('user'));
    // }

    // public function update(User $user)
    // { 
    //     $this->validate(request(), [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6|confirmed'
    //     ]);

    //     $user->name = request('name');
    //     $user->email = request('email');
    //     $user->password = bcrypt(request('password'));

    //     $user->save();

    //     return back();
    // }



}

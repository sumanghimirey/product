<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(){

        return view('login');
    }

    function userSave(Request $request){
        User::create([
            'name'=>$request->get('fullname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'password'=> bcrypt( $request->get('password'))
        ]);

        return redirect()->back()->with('messege', 'Registered Successfully!');

    }

    function postLogin(Request $request){

        if(Auth::attempt($request->only('username','password'))){

            return redirect()->intended(route('productList'));
        }
        return redirect()->back()->with('status','Login Failed');
    }
}

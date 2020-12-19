<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LogintatController extends Controller
{
    public function login()
    {
        return view('ProjectDrama.Login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/kdrama');
        }
        return redirect('/loginta');
    }
}

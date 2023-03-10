<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view('aisya.login');
    }

    public function postLogin(Request $request){
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        
        request()->session()->regenerateToken();
        return redirect('/');
    }
}

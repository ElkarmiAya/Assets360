<?php

namespace App\Http\Controllers;

use App\Http\Requests\Loginrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');

    }
    public function dologin(Loginrequest $request ){
             $credentials=$request->validated();
            //  Auth::login(User::find(1));
            //  Auth::
            if(Auth::attempt($credentials)){                 $request->session()->regenerate();
                return redirect()->intended(route('acceuil'));
                
            };
           
            return to_route('auth.login')->withErrors([
                'password'=>"email ou passworde incorrect"
            ])->onlyInput('email');


    }
    
    public function logout(){
    Auth::logout();
    return to_route('auth.login') ;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionController extends Controller
{

    public function loginUser(){

        $attributes = request()->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:1|max:255',

        ]);
        
        if(Auth::attempt($attributes) ){


            session()->regenerate();
            return redirect('/')->with('success', 'Login' );

        }else{
        //    dd($attributes); 
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }


        return redirect('/')->with('success', 'Login problem' );
    }


    public function logoutUser(){
        Auth::logout();
        return redirect('/')->with('success', 'Logout' );
    }



    

    


}

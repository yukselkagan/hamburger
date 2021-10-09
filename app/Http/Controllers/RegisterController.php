<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    
    public function registerUser(){

        $attributes = request()->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required|min:1|max:255',




        ]);

        $newUser = User::create([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),

        ]);


        Auth::login($newUser);
        return redirect('/')->with('success', 'Registered' );
    }
    


}

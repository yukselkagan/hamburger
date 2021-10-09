<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    
    public function orderHamburger(){

        $attributes = request()->validate([
            'hamburger_id' => 'required|in:1,2,3,4',
            'address' => 'required|max:255',





        ]);

        $userId = Auth::user()->id;

        $newOrder = Order::create([
            'hamburger_id' => $attributes['hamburger_id'],
            'address' => $attributes['address'],
            'user_id' => $userId,

        ]);





        return redirect('/')->with('success', 'Registered' );
    }






}

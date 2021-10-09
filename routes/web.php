<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HamburgererController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\OrderController;
use App\Models\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hamburger');
});

Route::get('about', function () {
    return view('page/about');
});


Route::get('register', function () {
    return view('authham/register');
})->middleware('guest');

Route::get('login', function () {
    return view('authham/login');
})->middleware('guest')->name('login');

Route::get('order', function () {
    return view('page/order');
})->middleware('auth');

Route::get('view-order', function () {
    return view('admin/view-order', [
        'orders' => Order::orderBy('created_at','desc')->get()
    ]);
});


Route::post('/registerprocess', [RegisterController::class, 'registerUser'])->middleware('guest');
Route::post('/loginprocess', [SessionController::class, 'loginUser'])->middleware('guest');

Route::get('/logoutprocess', [SessionController::class, 'logoutUser'])->middleware('auth');

Route::post('/orderHamburger', [OrderController::class, 'orderHamburger'])->middleware('auth');















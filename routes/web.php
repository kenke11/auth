<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::middleware('guest')->group(function(){

    Route::prefix('login')->group(function() {
        Route::get('/', function (){
            return view('auth.login');
        })->name('login');
    });

    Route::prefix('register')->group(function() {
        Route::get('/', function (){
            return view('auth.register');
        })->name('register-show');
        Route::post('/', [RegisterController::class, 'store'])->name('register.store');
    });
});

Route::middleware('auth')->group(function (){
    Route::get('/profile', function () {
       return view('profile');
    })->name('profile');
});

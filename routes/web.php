<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::view('/register','auth.register')->name('register');
// Route::post('/register',[AuthController::class],'register');

// Route::view('/login','auth.login')->name('login');
// Route::post('/login',[AuthController::class, 'login']);


Route::get('/',function(){
    return view('landing-page');
});
Route::get('/about-page',function(){
    return view('about-page');
});
Route::get('/buy-page',function(){
    return view('buy-page');
});

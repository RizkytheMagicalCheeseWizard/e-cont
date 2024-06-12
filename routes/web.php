<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;





Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::view('/login','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');

Route::get('/',function(){
    return view('landing-page');
})->name('home');
Route::get('/admin',function(){
    return view ('admin');
})->name('admin');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/about-page',function(){
    return view('about-page');
});
Route::get('/buy-page',function(){
    return view('buy-page');
});

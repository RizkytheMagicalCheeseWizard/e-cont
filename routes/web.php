<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::view('/login','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');
Route::view('/','landing-page')->name('home');
Route::view('/admin','admin')->name('admin');
Route::view('/about-page','about-page')->name('about');
Route::get('/',[ViewController::class,'view']);


// Route::get('/',function(){
//     return view('landing-page');
// })->name('home');
// Route::get('/admin',function(){
//     return view ('admin.admin');
// })->name('admin');

// Route::get('/about-page',function(){
//     return view('about-page');
// })->name('about');

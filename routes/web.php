<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Type_TicketsController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\TypeTicketController;
use App\Http\Controllers\ViewController;
use App\Models\TypeTicket;
use Illuminate\Support\Facades\Route;





Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::view('/login','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');

Route::get('/',function(){
    return view('landing-page');
})->name('home');
Route::get('/admin',function(){
    return view ('admin.admin');
})->name('admin');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/about-page',function(){
    return view('about-page');
})->name('about');
Route::get('/buy-page',function(){
    return view('buy-page');
})->name('buy');

Route::get('/',[ViewController::class,'view']);
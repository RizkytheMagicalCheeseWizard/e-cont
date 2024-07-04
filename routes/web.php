<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('auth')->post('/', [BookingController::class, 'booking'])->name('booking');
Route::view('/login','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');
Route::view('/','landing-page');
Route::view('/admin','admin.admin')->name('admin'); 
Route::view('/about-us','about-page')->name('about');
Route::view('/admin/schedule','admin.schedule');
Route::view('/admin/client','admin.client');
Route::get('/{id}/reschedule', [BookingController::class,'edit'])->name('reschedule');
Route::get('/',[ViewController::class,'view_user']);
Route::get('/admin/schedule',[ViewController::class,'view_schedule'])->name('admin.schedule');
Route::get('/admin/client',[ViewController::class,'view_client'])->name('admin.client');
Route::put('/{id}',[BookingController::class,'update'])->name('update');
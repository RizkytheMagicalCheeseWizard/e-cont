<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('auth')->post('/', [BookingController::class, 'booking'])->name('booking');
Route::middleware('auth')->post('/admin/schedule', [AdminController::class, 'insert_schedule'])->name('insert_schedule');
Route::middleware('auth')->post('/admin/ticket',[AdminController::class,'insert_type'])->name('insert_type');
Route::view('/login','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');
Route::view('/','landing-page')->middleware('auth');
Route::view('/admin','admin.admin') ->middleware('auth'); 
Route::view('/about-us','about-page')->name('about')->middleware('auth');
Route::view('/admin/schedule','admin.schedule')->middleware('auth');
Route::view('/admin/ticket','admin.ticket')->middleware('auth');
Route::view('/admin/client','admin.client')->middleware('auth');
Route::get('/{id}/reschedule', [BookingController::class,'edit'])->name('reschedule')->middleware('auth');
Route::get('/admin/schedule/{id}/edit',[AdminController::class,'edit_schedule'])->name('edit_schedule')->middleware('auth');
Route::get('/admin/ticket/{id}/edit',[AdminController::class,'edit_type'])->name('edit_type')->middleware('auth');
Route::get('/',[ViewController::class,'view_user'])->middleware('auth');
Route::get('/admin/schedule',[ViewController::class,'view_schedule'])->name('admin.schedule')->middleware('auth');
Route::get('/admin/ticket',[ViewController::class,'view_ticket'])->name('admin.ticket')->middleware('auth');
Route::get('/admin/client',[ViewController::class,'view_client'])->name('admin.client')->middleware('auth');
Route::get('/admin',[ViewController::class,'view_booker'])->name('admin')->middleware('auth');
Route::put('/{id}',[BookingController::class,'update'])->name('update')->middleware('auth');
Route::put('/admin/schedule/{id}',[AdminController::class,'update_schedule'])->name('update_schedule')->middleware('auth');
Route::put('/admin/ticket/{id}',[AdminController::class,'update_type'])->name('update_type')->middleware('auth');
Route::delete('/admin/schedule/{id}',[AdminController::class,'delete_schedule'])->name('delete_schedule')->middleware('auth');
Route::delete('/admin/ticket/{id}',[AdminController::class,'delete_type'])->name('delete_type')->middleware('auth');
<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login-page');
// });

Route::get('/',function(){
    return view('about-page');
});
Route::get('/contact-page',function(){
    return view('contact-page');
});

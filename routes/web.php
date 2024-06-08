<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login-page');
// });

Route::get('/home',function(){
    return view('landing-page');
});
ROute::get('/about-page',function(){
    return view('about-page');
});
Route::get('/buy-page',function(){
    return view('buy-page');
});

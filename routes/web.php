<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login-page');
// });

Route::get('/',function(){
    return view('landing-page');
});
ROute::get('/about-page',function(){
    return view('about-page');
});
Route::get('/landing-page',function(){
    return view('landing-page');
});

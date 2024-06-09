<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required','min:3']
        ]);
    }
    public function register(Request $request){
        $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','max:255','name'],
            'password' => ['required','min:3','confirmed']
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required','min:3']
        ]);
        $fields = $request->validate([
            'email'=>['required','max:255','email'],
            'password'=>['required']
        ]);
        Auth::attempt($fields);
        return redirect()->route('home');
    }
    public function register(Request $request){
        $fields = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','max:255','email','unique:users'],
            'password' => ['required','min:3','confirmed']
        ]);
        $user = User::create($fields);
        Auth::login($user);
        return redirect()->route('home');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login-page');
    }

    public function loginPost(Request $request){
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($login)){
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('error', 'Log in Failed.');
    }

    public function register(){
        return view('register-page');
    }

    public function registerPost(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $validation['name'];
        $user->email = $validation['email'];
        $user->password = Hash::make($validation['password']);
        if ($user->save()){
            return redirect()->route('login')->with('success', 'Account created successfully!');
        }

        return redirect()->route('register')->with('error', 'Account creation failed.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('logout', 'User has Logged out.');
    }
}

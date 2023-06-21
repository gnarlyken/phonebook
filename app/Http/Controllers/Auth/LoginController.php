<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginpage');
    }

    public function login(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to index.blade.php
            return redirect()->route('app');
        } else {
            // Authentication failed, redirect back to login page with error message
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

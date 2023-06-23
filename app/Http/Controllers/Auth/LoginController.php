<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginpage');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $email = $credentials['email'];
        $password = $credentials['password'];
    
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed
            return redirect()->route('contacts.index');
        } else {
            // Authentication failed
            return Redirect::back()->withInput()->withErrors(['error' => 'Invalid credentials. Please try again.']);
        }
    }


}


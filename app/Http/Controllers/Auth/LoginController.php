<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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

        $user = User::where('email', $credentials['email'])->first();

        if ($user && $user->password === $credentials['password']) {
            return redirect('/main')->with('success', 'Sign in completed successfully!');
        }

        return redirect()->back()->withErrors(['message' => 'Invalid nickname or password.']);
    }
    
}

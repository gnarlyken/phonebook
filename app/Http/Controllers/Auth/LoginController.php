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
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if ($user && $user->password === $validatedData['password']) {
            $request->session()->put('email', $user->email);
            return redirect('/')->with('success', 'Sign in completed successfully!');
        }

        return redirect()->back()->withErrors(['message' => 'Invalid email or password.']);
    }
}


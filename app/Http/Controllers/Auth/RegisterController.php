<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // Assuming you have a User model

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registerpage');
    }

    public function register(Request $request)
    {
        // Validate the registration form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user with the validated data
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        // Redirect the user to the desired page after successful registration
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}

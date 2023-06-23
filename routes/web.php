<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('index');
})->name('index');

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginpage');
Route::post('/login', [LoginController::class, 'login'])->name('login');


// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registerpage');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Protected routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Index route
    Route::get('/contacts', [ContactController::class, 'index'])->name('index');

    // Other routes...
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});


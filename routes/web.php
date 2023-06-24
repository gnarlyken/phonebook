<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('loginpage');
})->name('loginpage');

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registerpage');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Authentication routes

   

Route::post('/login', [LoginController::class, 'login'])->name('login');



Route::get('/main', [ContactController::class, 'index'])->name('main');



Route::get('/create', function () {
    return view('contacts.create');
})->name('contact.create');


Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::post('/main', [ContactController::class, 'store'])->name('contacts.store'); // Updated route




Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');



Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');



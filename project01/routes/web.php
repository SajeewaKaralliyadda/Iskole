<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Home Route
Route::get('/', function () {
    return view('app'); // Returns the 'resources/views/app.blade.php' view
})->name('home');

// About Route
Route::get('/about', function () {
    return view('about'); // Returns 'resources/views/about.blade.php'
})->name('about');

// Courses Route
Route::get('/Courses', function () {
    return view('Courses'); // Returns 'resources/views/Courses.blade.php'
})->name('Courses');

// Forgot Password Route
Route::get('/Forgotpw', function () {
    return view('Forgotpw'); // Returns 'resources/views/Forgotpw.blade.php'
})->name('Forgotpw');

// Login Route
Route::get('/Login', function () {
    return view('Login'); // Returns 'resources/views/Login.blade.php'
})->name('Login');

// Signup Route
Route::get('/Signup', function () {
    return view('Signup'); // Returns 'resources/views/Signup.blade.php'
})->name('Signup');

// Dashboard Route (Inertia)
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__ . '/auth.php';

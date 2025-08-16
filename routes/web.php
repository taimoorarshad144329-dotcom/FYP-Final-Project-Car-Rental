<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Main routes
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

// Page routes
Route::get('/about', function () {
    return view('about');
});

Route::get('/rental-deals', function () {
    return view('rentaldeals');
});

Route::get('/contact-us', function () {
    return view('contactus');
});

Route::get('/rent-now', function () {
    return view('rentnow');
});

// Account route
Route::get('/my-account', function () {
    return view('my-account');
})->name('my-account');

// Authentication routes
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Additional routes
Route::get('/malik-motors', function () {
    return view('MalikMotors');
});

// Fallback route
Route::fallback(function () {
    return view('home');
});

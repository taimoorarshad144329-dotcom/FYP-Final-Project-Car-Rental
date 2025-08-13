<?php

use Illuminate\Support\Facades\Route;

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

// Additional routes
Route::get('/malik-motors', function () {
    return view('MalikMotors');
});

// Fallback route
Route::fallback(function () {
    return view('home');
});

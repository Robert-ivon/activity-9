<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Landing page for guests (unauthenticated users)
Route::get('/', function () {
    return view('landingpage');
});

// Authentication routes (login, registration, password reset)
Auth::routes();

// Dashboard route for authenticated users only
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

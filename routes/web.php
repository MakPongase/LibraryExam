<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landingpage')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', Register::class);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', Login::class);
});

Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');
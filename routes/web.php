<?php
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;


Route::view('/', 'landingpage')->name('home');

Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');
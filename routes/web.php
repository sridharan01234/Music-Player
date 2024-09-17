<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/home');
    }
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/', AuthController::class . '@login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', AuthController::class . '@register');
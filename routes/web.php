<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', AuthController::class . '@login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', AuthController::class . '@register');
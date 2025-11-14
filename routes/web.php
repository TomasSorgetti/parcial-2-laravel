<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'show'])
    ->name('home');

// login
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');

// register
Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register');

// verify
Route::get('/auth/verify-email', [AuthController::class, 'showVerifyEmail'])->name('verify-email');

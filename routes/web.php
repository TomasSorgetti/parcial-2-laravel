<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'show'])
    ->name('home');

// login
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');

// register
Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register');

// logout
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout')->middleware('guest');

// verify
Route::get('/auth/verify-email', [AuthController::class, 'showVerifyEmail'])->name('verify-email');

Route::get('/welcome', [DashboardController::class, 'show'])
    ->name('welcome')
    ->middleware('auth');

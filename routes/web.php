<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ErrorController;

Route::get('/', [HomeController::class, 'show'])
    ->name('home');

Route::get('/blog', [BlogController::class, 'show'])
    ->name('blog');

Route::get('/blog/{slug}', [BlogController::class, 'showDetail'])
    ->name('blog.detail');

// login
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');

// register
Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register');

// logout
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// verify
Route::get('/auth/verify-email', [AuthController::class, 'showVerifyEmail'])->name('verify-email');

Route::get('/welcome', [DashboardController::class, 'show'])
    ->name('welcome')
    ->middleware('auth');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'show'])
    ->name('admin.dashboard')
    ->middleware('auth')
    ->middleware('admin');

Route::get('/admin/blog', [AdminBlogController::class, 'show'])
    ->name('admin.blog')
    ->middleware('auth')
    ->middleware('admin');

Route::get('/admin/blog/edit/{id}', [AdminBlogController::class, 'show'])
    ->name('admin.blog.edit')
    ->middleware('auth')
    ->middleware('admin');

Route::post('/admin/blog', [AdminBlogController::class, 'save'])
    ->name('admin.blog')
    ->middleware('auth')
    ->middleware('admin');

Route::get('/admin/blog/add-new', [AdminBlogController::class, 'showAddNew'])
    ->name('admin.blog.create')
    ->middleware('auth')
    ->middleware('admin');

// Error pages
Route::get('/403', [ErrorController::class, 'show403'])->name('403');
Route::get('/404', [ErrorController::class, 'show404'])->name('404');

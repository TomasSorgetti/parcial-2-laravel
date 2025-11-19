<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\LevelController as AdminLevelController;
use App\Http\Controllers\Admin\ExerciseController as AdminExerciseController;

/**
 * Todo -> Refactor en diferentes archivos de ruta
 */

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

Route::get('/exercises/{slug}', [ExerciseController::class, 'show'])
    ->name('exercises')
    ->middleware('auth');

Route::get('/exercise/{slug}', [ExerciseController::class, 'showExercise'])
    ->name('exercise')
    ->middleware('auth');

Route::get('/account/profile', [UserController::class, 'showProfile'])
    ->name('profile')
    ->middleware('auth');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'show'])
    ->name('admin.dashboard')
    ->middleware('auth')
    ->middleware('admin');

//admin blog
Route::get('/admin/blog', [AdminBlogController::class, 'show'])
    ->name('admin.blog')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/blog/edit/{id}', [AdminBlogController::class, 'showEdit'])
    ->name('admin.blog.edit')
    ->middleware('auth')
    ->middleware('admin');
Route::put('/admin/blog/edit/{id}', [AdminBlogController::class, 'update'])
    ->name('admin.blog.update')
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
Route::get("/admin/blog/{id}/delete", [AdminBlogController::class, "confirmDelete"])
    ->name("admin.blog.confirm-delete")
    ->middleware('auth')
    ->middleware('admin');;
Route::delete("/admin/blog/{id}", [AdminBlogController::class, "delete"])
    ->name("admin.blog.delete")
    ->middleware('auth')
    ->middleware('admin');;

// admin categories
Route::get('/admin/categories', [AdminCategoryController::class, 'show'])
    ->name('admin.categories')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/categories/add-new', [AdminCategoryController::class, 'showCreate'])
    ->name('admin.categories.add-new')
    ->middleware('auth')
    ->middleware('admin');
Route::post('/admin/categories', [AdminCategoryController::class, 'create'])
    ->name('admin.categories.create')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/categories/edit/{id}', [AdminCategoryController::class, 'showEdit'])
    ->name('admin.categories.edit')
    ->middleware('auth')
    ->middleware('admin');
Route::put('/admin/categories/edit/{id}', [AdminCategoryController::class, 'update'])
    ->name('admin.categories.update')
    ->middleware('auth')
    ->middleware('admin');
Route::get("/admin/categories/{id}/delete", [AdminCategoryController::class, "confirmDelete"])
    ->name("admin.categories.confirm-delete")
    ->middleware('auth')
    ->middleware('admin');;
Route::delete("/admin/categories/{id}", [AdminCategoryController::class, "delete"])
    ->name("admin.categories.delete")
    ->middleware('auth')
    ->middleware('admin');;

// admin levels
Route::get('/admin/levels', [AdminLevelController::class, 'show'])
    ->name('admin.levels')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/levels/add-new', [AdminLevelController::class, 'showCreate'])
    ->name('admin.levels.add-new')
    ->middleware('auth')
    ->middleware('admin');
Route::post('/admin/levels', [AdminLevelController::class, 'create'])
    ->name('admin.levels.create')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/levels/edit/{id}', [AdminLevelController::class, 'showEdit'])
    ->name('admin.levels.edit')
    ->middleware('auth')
    ->middleware('admin');
Route::put('/admin/levels/edit/{id}', [AdminLevelController::class, 'update'])
    ->name('admin.levels.update')
    ->middleware('auth')
    ->middleware('admin');
Route::get("/admin/levels/{id}/delete", [AdminLevelController::class, "confirmDelete"])
    ->name("admin.levels.confirm-delete")
    ->middleware('auth')
    ->middleware('admin');;
Route::delete("/admin/levels/{id}", [AdminLevelController::class, "delete"])
    ->name("admin.levels.delete")
    ->middleware('auth')
    ->middleware('admin');;

// admin exercises
Route::get('/admin/exercises', [AdminExerciseController::class, 'show'])
    ->name('admin.exercises')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/exercises/add-new', [AdminExerciseController::class, 'showCreate'])
    ->name('admin.exercises.add-new')
    ->middleware('auth')
    ->middleware('admin');
Route::post('/admin/exercises', [AdminExerciseController::class, 'create'])
    ->name('admin.exercises.create')
    ->middleware('auth')
    ->middleware('admin');
Route::get('/admin/exercises/edit/{id}', [AdminExerciseController::class, 'showEdit'])
    ->name('admin.exercises.edit')
    ->middleware('auth')
    ->middleware('admin');
Route::put('/admin/exercises/edit/{id}', [AdminExerciseController::class, 'update'])
    ->name('admin.exercises.update')
    ->middleware('auth')
    ->middleware('admin');
Route::get("/admin/exercises/{id}/delete", [AdminExerciseController::class, "confirmDelete"])
    ->name("admin.exercises.confirm-delete")
    ->middleware('auth')
    ->middleware('admin');;
Route::delete("/admin/exercises/{id}", [AdminExerciseController::class, "delete"])
    ->name("admin.exercises.delete")
    ->middleware('auth')
    ->middleware('admin');;

// Error pages
Route::get('/403', [ErrorController::class, 'show403'])->name('403');
Route::get('/404', [ErrorController::class, 'show404'])->name('404');

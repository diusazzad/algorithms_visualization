<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\EditorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SuperAdminController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list', function () {
    return view('list');

});


// ----------------------------------------------------------------
// Login
// Route::post('/login', [LoginController::class, 'showLoginForm'])->middleware('auth')->name('login');

// Authentication
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login']);
// Registration
// Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'register']);

// Routes for Super Admin Dashboard
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('auth.superadmin.dashboard');
});

// Routes for Admin Dashboard
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('auth.admin.dashboard');
});

// Routes for Editor Dashboard
Route::middleware(['auth', 'role:editor'])->group(function () {
    Route::get('/editor/dashboard', [EditorController::class, 'dashboard'])->name('auth.editor.dashboard');
});

// Routes for User Dashboard
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('auth.user.dashboard');
});



Route::get('/test', function () {
    return view('test.index');
});

Route::fallback(function () {
    return view('error');
});

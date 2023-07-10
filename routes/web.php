<?php

use App\Http\Controllers\linearSearch;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\sequentialAlgorithm\sortingAlgorithm\bubbleSort;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list', function () {
    return view('list');
});


// ----------------------------------------------------------------
// Login
Route::post('/login', [LoginController::class, 'login'])->middleware('auth');
// Registration
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

// Routes accessible only to superadmin and admin users
Route::group(['middleware' => ['auth', 'superadmin', 'admin']], function () {
    // ...
});

// Routes accessible only to editor users
Route::group(['middleware' => ['auth', 'admin']], function () {
    // ...
});

// Routes accessible only to superadmin and admin users
Route::group(['middleware' => ['auth', 'editor']], function () {
    // ...
});

// Routes accessible only to editor users
Route::group(['middleware' => ['auth', 'user']], function () {
    // ...
});




Route::fallback(function () {
    return view('error');
});

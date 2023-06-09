<?php

use App\Http\Controllers\linearSearch;
use App\Http\Controllers\ProfileController;
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

Route::get('/linear-search', [linearSearch::class, 'search'])->name('linear-search');

Route::post('/linear-search', [LinearSearchController::class, 'search'])->name('linear-search');

// Route::fallback(function () {
//     return view('error');
// });

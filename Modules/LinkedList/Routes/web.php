<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\LinkedList\Http\Controllers\LinkedListController;

Route::prefix('linkedlist')->group(function() {
    // Route::get('/linkedlist', 'LinkedListController@createLinkedList');
    Route::get('/', [LinkedListController::class,'createLinkedList'])->name('linkedlist.index');
    Route::post('/', [LinkedListController::class,'storeList'])->name('linkedlist.store');

});

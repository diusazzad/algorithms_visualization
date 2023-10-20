<?php


use Illuminate\Support\Facades\Route;
use Modules\LinkedList\Http\Controllers\LinkedListController;

Route::prefix('linkedlist')->group(function() {
    Route::get('/create', [LinkedListController::class, 'create']);
    Route::post('/add', [LinkedListController::class, 'add']);

});


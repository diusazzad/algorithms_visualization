<?php


use Illuminate\Support\Facades\Route;
use Modules\LinkedList\Http\Controllers\LinkedListController;

Route::prefix('linkedlist')->group(function() {
    // Route::get('/linkedlist', 'LinkedListController@createLinkedList');
    // Route::get('/', [LinkedListController::class,'createLinkedList'])->name('linkedlist.index');
    // Route::post('/', [LinkedListController::class,'storeList'])->name('linkedlist.store');
    Route::get('/linkedlist/create', [LinkedListController::class, 'create'])->name('linkedlist.create');
    Route::post('/linkedlist', [LinkedListController::class, 'store'])->name('linkedlist.store');
    Route::get('/linkedlist', [LinkedListController::class, 'index'])->name('linkedlist.index');
    Route::get('/linkedlist/{linkedList}', [LinkedListController::class, 'show'])->name('linkedlist.show');
    Route::get('/linkedlist/{linkedList}/edit', [LinkedListController::class, 'edit'])->name('linkedlist.edit');
    Route::put('/linkedlist/{linkedList}', [LinkedListController::class, 'update'])->name('linkedlist.update');
    Route::delete('/linkedlist/{linkedList}', [LinkedListController::class, 'destroy'])->name('linkedlist.destroy');
    Route::get('/linkedlist/search', [LinkedListController::class, 'search'])->name('linkedlist.search');
    Route::get('/linkedlist/{linkedList}/traverse', [LinkedListController::class, 'traverse'])->name('linkedlist.traverse');



});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\BookController::class, 'index'])->name('books.index');

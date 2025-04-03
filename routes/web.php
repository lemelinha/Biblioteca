<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;

// dashboard
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Books\BookController;
//use App\Http\Controllers\Dashboard\Authors\AuthorController;
//use App\Http\Controllers\Dashboard\Stock\StockController;
//use App\Http\Controllers\Dashboard\Categories\CategoryController;
//use App\Http\Controllers\Dashboard\Readers\ReaderController;

use App\Http\Middleware\LoggedIn;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'home'])->name('home');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

// TODO
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('/reset-password', 'index')->name('reset-password.index');
    Route::post('/reset-password', 'store')->name('reset-password.store');
});

Route::middleware(LoggedIn::class)->prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/books', [BookController::class, 'index'])->name('dashboard.books');
    Route::get('/books/create', [BookController::class, 'create'])->name('dashboard.books.create');

    Route::get('/authors', [DashboardController::class, 'index'])->name('dashboard.authors');

    Route::get('/stock', [DashboardController::class, 'index'])->name('dashboard.stock');

    Route::get('/categories', [DashboardController::class, 'index'])->name('dashboard.categories');

    Route::get('/readers', [DashboardController::class, 'index'])->name('dashboard.readers');
});

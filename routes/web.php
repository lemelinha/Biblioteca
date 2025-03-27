<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\dashboard\DashboardController;
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

Route::middleware(LoggedIn::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

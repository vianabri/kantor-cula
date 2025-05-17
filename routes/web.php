<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

// Routes untuk register (bebas diakses)
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Routes untuk login/logout (bebas diakses)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Semua routes berikut harus login/auth
Route::middleware('auth')->group(function () {
    // Route dashboard, memanggil DashboardController@index agar $staffCount tersedia
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource controller employees
    Route::resource('employees', EmployeeController::class);
});

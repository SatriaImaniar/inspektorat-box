<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InviteMailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuthMiddleware;

// Halaman Login & Register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware agar hanya user dengan role tertentu yang bisa akses
Route::middleware(['auth'])->group(function () {
    // Halaman User: Lihat Schedule
    Route::get('/schedule', [InviteMailController::class, 'index'])->name('schedule');

    // Halaman Admin: Input Surat Undangan
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/invite', [InviteMailController::class, 'create'])->name('invite.create');
        Route::post('/admin/invite', [InviteMailController::class, 'store'])->name('invite.store');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::post('/admin/input', [AdminController::class, 'input'])->name('input');

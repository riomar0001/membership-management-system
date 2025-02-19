<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('pages.landing.index');
});


Route::get('/registration', function () {
    return view('pages.landing.registration');
});


Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/admin/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/admin', function () {
            return view('pages.admin.index');
        });
    });
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('role:admin,president')->group(function () {
        Route::get('/admin-only', function () {
            return 'This page is for Admin and President only.';
        });
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/admin', function () {
            return view('pages.admin.index');
        });
    });

    Route::post('/admin/logout', [AuthController::class, 'logout']);
    Route::get('/admin/logout', [AuthController::class, 'logout']);
});

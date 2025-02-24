<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;


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

    //get all members /admin/members, MembersControler index
    Route::get('/admin/members', [MemberController::class, 'index']);
    //get view invididual member page /admin/members/{id} MembersControler show
    Route::get('/admin/members/{id}', [MemberController::class, 'show']);
    //get edit member page /admin/members/{id}/edit MembersControler edit
    Route::get('/admin/members/{id}/edit', [MemberController::class, 'edit']);
    //get add member page /admin/members/create MembersControler create
    Route::get('/admin/members/create', [MemberController::class, 'create']);

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

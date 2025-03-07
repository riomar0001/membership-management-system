<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContentManagementController;
use App\Http\Controllers\OfficersController;
use App\Http\Controllers\AccountsController;



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
    Route::get('/admin/members', [MemberController::class, 'index'])->name('members');
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

    Route::get('/admin/content-management/contacts', [ContentManagementController::class, 'showContact'])->name('contacts');
    Route::get('/admin/content-management/socials', [ContentManagementController::class, 'showSocials'])->name('socials');
    Route::get('/admin/content-management/org-details', [ContentManagementController::class, 'showOrgDetails'])->name('org-details');
    Route::get('/admin/content-management/regis-details', [ContentManagementController::class, 'showRegisDetails'])->name('regis-details');
    
    Route::get('/admin/content-management/contacts/create', [ContentManagementController::class, 'showCreateContact'])->name('contacts.show');
    Route::get('/admin/content-management/contacts/edit', [ContentManagementController::class, 'showEditContact'])->name('contacts.edit');
    Route::post('/admin/content-management/contacts/store', [ContentManagementController::class, 'storeContact'])->name('contacts.store');

    Route::get('/admin/content-management/socials/create', [ContentManagementController::class, 'showCreateSocials'])->name('socials.show');
    Route::get('/admin/content-management/socials/edit', [ContentManagementController::class, 'showEditSocials'])->name('socials.edit');
    Route::post('/admin/content-management/socials/store', [ContentManagementController::class, 'storeSocials'])->name('socials.store');

    Route::get('/admin/content-management/org-details/create', [ContentManagementController::class, 'showCreateOrgDetails'])->name('org-details.show');
    Route::get('/admin/content-management/org-details/edit', [ContentManagementController::class, 'showEditOrgDetails'])->name('org-details.edit');
    Route::post('/admin/content-management/org-details/store', [ContentManagementController::class, 'storeOrgDetails'])->name('org-details.store');
    Route::put('/admin/content-management/org-details/update', [ContentManagementController::class, 'updateOrgDetails'])->name('org-details.update');

    Route::get('/admin/content-management/regis-details/create', [ContentManagementController::class, 'showCreateRegisDetails'])->name('regis-details.show');
    Route::get('/admin/content-management/regis-details/edit', [ContentManagementController::class, 'showEditRegisDetails'])->name('regis-details.edit');
    Route::post('/admin/content-management/regis-details/store', [ContentManagementController::class, 'storeRegisDetails'])->name('regis-details.store');

    

    Route::get('/admin/officers', [OfficersController::class, 'viewOfficers'])->name('officers.view');
    Route::middleware('role:admin,president')->group(function () {
        Route::post('/admin/officers/store', [OfficersController::class, 'storeOfficer'])->name('officers.store');
        Route::post('/admin/officers/update', [OfficersController::class, 'updateOfficer'])->name('officers.update');
    });
    Route::get('/admin/members/search', [OfficersController::class, 'searchMembers'])->name('members.search');
});


Route::middleware('auth')->group(function () {
    // Other routes...
    
    // Accounts management routes
    Route::middleware('role:admin,president')->group(function () {
        Route::get('/admin/accounts', [AccountsController::class, 'index'])->name('accounts.index');
        Route::get('/admin/accounts/create', [AccountsController::class, 'create'])->name('accounts.create');
        Route::post('/admin/accounts', [AccountsController::class, 'store'])->name('accounts.store');
        Route::get('/admin/accounts/{id}', [AccountsController::class, 'show'])->name('accounts.show');
        Route::get('/admin/accounts/{id}/edit', [AccountsController::class, 'edit'])->name('accounts.edit');
        Route::post('/admin/accounts/{id}', [AccountsController::class, 'update'])->name('accounts.update');
        Route::get('/admin/accounts/{id}/reset-password', [AccountsController::class, 'resetPassword'])->name('accounts.reset-password');
    });
});
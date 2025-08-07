<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\auth\Controllers\AuthController;

Route::group([],function () {
    Route::get('/login', [AuthController::class, 'login']);

    Route::post('/login', [AuthController::class, 'loginSucess'])->name('provider-login');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin-dashboard');


    Route::middleware('auth:admin')->group(function () {
        Route::get('/profile-edit', [AuthController::class, 'profileEdit'])->name('admin-profile-edit');
        Route::put('/profile-update/{id}', [AuthController::class, 'profileUpdate'])->name('admin-profile-update');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');
    });
});

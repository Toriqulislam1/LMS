<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\auth\Controllers\AuthController;

Route::group([],function () {

    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'loginSucess'])->name('provider-login');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin-dashboard');


    Route::middleware('auth:admin')->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');
    });
});

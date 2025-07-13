<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Controllers\Api\V1\AuthController;

Route::prefix('auth')->group(function () {
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', [AuthController::class, 'user']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});

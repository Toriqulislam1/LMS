<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\auth\Controllers\AuthController;

Route::group([],function () {

    Route::get('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});

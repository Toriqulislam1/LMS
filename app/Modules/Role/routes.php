<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Role\Controllers\Api\V1\UserController;
use App\Modules\Role\Controllers\Api\V1\RoleController;
use App\Modules\Role\Controllers\Api\V1\PermissionController;

Route::prefix('role-management')->group(function () {

    Route::middleware('auth:sanctum','throttle:20,1','role:super-admin')->permission('manage-roles')->group(function () {

        Route::resource('/users', UserController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
        Route::resource('/roles', RoleController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
        Route::resource('/permissions', PermissionController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    });
});

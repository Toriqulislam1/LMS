<?php

use Illuminate\Support\Facades\Route;

Route::prefix('provider')->group(function () {
    require base_path('app/Modules/Provider/routes.php');
});

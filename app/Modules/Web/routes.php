<?php


use Illuminate\Support\Facades\Route;
use App\Modules\Web\Controllers\HomeController;

Route::group([], function () {
    dd(56);
    Route::get('/', [HomeController::class, 'home']);
});

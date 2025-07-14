<?php


use Illuminate\Support\Facades\Route;


use App\Modules\Web\Controllers\HomeController;

Route::group(function () {
    Route::post('/', [HomeController::class, 'Home']);
});

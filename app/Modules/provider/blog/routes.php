<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\blog\Controllers\BlogController;

Route::group([],function () {

    Route::resource('blogs', BlogController::class);

});

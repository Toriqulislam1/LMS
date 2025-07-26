<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\shop\Controllers\ShopController;

Route::group([],function () {

    Route::resource('shops', ShopController::class);

});

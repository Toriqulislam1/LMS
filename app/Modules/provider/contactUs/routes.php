<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\contactUs\Controllers\ContactUsController;

Route::group([],function () {

    Route::resource('contact-us', ContactUsController::class);

});

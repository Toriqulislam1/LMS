<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\course\Controllers\CourseController;

Route::group([],function () {

    Route::resource('courses', CourseController::class);

});

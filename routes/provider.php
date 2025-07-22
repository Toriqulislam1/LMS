<?php
use Illuminate\Support\Facades\Route;

Route::group([],function () {

    require base_path('app/Modules/provider/auth/routes.php');
    require base_path('app/Modules/provider/course/routes.php');
    require base_path('app/Modules/provider/setting/routes.php');
});


<?php

// use Illuminate\Support\Facades\Route;

// Route::group([
//     'namespace' => 'App\Modules\Web',
// ], function () {
//     require base_path('app/Modules/Web/routes.php');
// });

use Illuminate\Support\Facades\Route;
use App\Modules\Web\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']); // method name is 'home', not 'Home'

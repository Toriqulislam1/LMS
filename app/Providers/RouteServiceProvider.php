<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
            // $this->loadRoutes();

    // Register custom admin route file
    Route::middleware('web') // You can use 'api' if it's for APIs
        ->prefix('provider')     // Optional: sets a prefix to all routes in the file
        ->group(base_path('routes/provider.php'));

    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\provider\auth\Repositories\AdminRepositoryInterface;
use App\Modules\provider\auth\Repositories\AdminRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

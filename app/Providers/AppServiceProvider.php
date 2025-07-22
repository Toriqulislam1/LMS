<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\provider\auth\Repositories\AdminRepositoryInterface;
use App\Modules\provider\auth\Repositories\AdminRepository;

use App\Modules\provider\course\Repositories\CourseRepositoryInterface;
use App\Modules\provider\course\Repositories\CourseRepository;
use App\Modules\provider\setting\Repositories\SettingRepositoryInterface;
use App\Modules\provider\setting\Repositories\SettingRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

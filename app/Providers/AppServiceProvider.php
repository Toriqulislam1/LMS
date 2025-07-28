<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\provider\auth\Repositories\AdminRepositoryInterface;
use App\Modules\provider\auth\Repositories\AdminRepository;

use App\Modules\provider\course\Repositories\CourseRepositoryInterface;
use App\Modules\provider\course\Repositories\CourseRepository;
use App\Modules\provider\setting\Repositories\SettingRepositoryInterface;
use App\Modules\provider\setting\Repositories\SettingRepository;
use App\Modules\provider\blog\Repositories\BlogRepositoryInterface;
use App\Modules\provider\blog\Repositories\BlogRepository;
use App\Modules\provider\shop\Repositories\ShopRepositoryInterface;
use App\Modules\provider\shop\Repositories\ShopRepository;
use App\Modules\Web\Repositories\FrontHomeRepositoryInterface;
use App\Modules\Web\Repositories\FrontHomeRepository;


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
        $this->app->bind(\App\Modules\provider\blog\Repositories\BlogRepositoryInterface::class, \App\Modules\provider\blog\Repositories\BlogRepository::class);
        $this->app->bind(\App\Modules\provider\shop\Repositories\ShopRepositoryInterface::class, \App\Modules\provider\shop\Repositories\ShopRepository::class);
        $this->app->bind(\App\Modules\Web\Repositories\FrontHomeRepositoryInterface::class, \App\Modules\Web\Repositories\FrontHomeRepository::class);
        
        $this->app->bind(
            \App\Modules\Provider\course\Repositories\CourseRepositoryInterface::class,
            \App\Modules\Provider\course\Repositories\CourseRepository::class
        );

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

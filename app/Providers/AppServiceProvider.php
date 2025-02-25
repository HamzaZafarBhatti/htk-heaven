<?php

namespace App\Providers;

use App\Settings\HomePageSetting;
use App\Settings\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('site_settings', app(SiteSetting::class));
        View::share('homepage_settings', app(HomePageSetting::class));
    }
}

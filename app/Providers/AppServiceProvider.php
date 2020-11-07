<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
         if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
        Builder::defaultStringLength(191);
    }
}

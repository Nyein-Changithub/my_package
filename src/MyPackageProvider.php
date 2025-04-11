<?php

namespace Pkg\MyPackage;

use Illuminate\Support\ServiceProvider;


class MyPackageProvider extends ServiceProvider
{
   
    public function register(): void
    {
        $this->app->make('Pkg\MyPackage\MyPackageController');

         // merge config to allow default fallback
        $this->mergeConfigFrom(
            __DIR__ . '/../config/cloudflareImage.php', 'cloudflareImage'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //routes
        include __DIR__ . '/routes.php';

        //views
        $this->loadViewsFrom(__DIR__.'/views','myPackage');

        // publish config
        $this->publishes([
            __DIR__ . '/../config/cloudflareImage.php' => config_path('cloudflareImage.php'),
        ], 'config');
    }
}

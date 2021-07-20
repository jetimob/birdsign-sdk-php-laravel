<?php

namespace Jetimob\BirdSign;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Jetimob\BirdSign\Console\InstallBirdSignPackage;

class BirdSignServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $src = realpath($raw = __DIR__ . '/../config/birdsign.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $src => config_path('birdsign.php')
            ], 'config');

            $this->commands([
                InstallBirdSignPackage::class,
            ]);
        }

        $this->mergeConfigFrom($src, 'birdsign');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('jetimob.birdsign', function (Container $app) {
            return new BirdSign($app['config']['birdsign'] ?? []);
        });

        $this->app->alias('jetimob.birdsign', BirdSign::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'jetimob.birdsign',
        ];
    }
}

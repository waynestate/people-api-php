<?php

namespace Waynestate\Api;

use Waynestate\Api\People;
use Illuminate\Support\ServiceProvider;

class PeopleServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/waynestatepeople.php', 'waynestatepeople');

        $this->app->bind(People::class, function ($app) {
            return new People(config('waynestatepeople'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/waynestatepeople.php' => config_path('waynestatepeople.php'),
        ], 'waynestatepeople');
    }
}

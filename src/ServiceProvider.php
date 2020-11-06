<?php

namespace OTIFSolutions\Laravel\Settings;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     *
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
}

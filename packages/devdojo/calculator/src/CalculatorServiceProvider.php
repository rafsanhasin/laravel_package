<?php

namespace Devdojo\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Devdojo\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}

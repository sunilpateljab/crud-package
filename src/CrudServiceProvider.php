<?php

namespace Crudpacakage\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','crud');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    }
}

<?php

namespace riftone07\changepasswordfirst;

use Illuminate\Support\ServiceProvider;

class ChangePasswordFirstServiceProvider extends ServiceProvider
{
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
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'changepasswordfirst');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

}

<?php

namespace App\Providers;

use App\Service\AnaliticService;
use Illuminate\Support\ServiceProvider;

class AnaliticServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AnaliticService::class, function($app){
            return new AnaliticService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

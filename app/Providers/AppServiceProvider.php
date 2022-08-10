<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TradeNetwork\Domain\ReadModel\User\FindByEmail as FindByUserEmail;
use TradeNetwork\Infrastructure\Persistence\Database\ReadModel\User\FindByEmail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FindByUserEmail::class, function ($app) {
            return new FindByEmail();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

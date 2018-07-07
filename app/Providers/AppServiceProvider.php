<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\CurrencyGenerator;
use App\Services\CurrencyRepository;
use App\Services\CurrencyRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(CurrencyRepositoryInterface::class, CurrencyRepository::class);

        $this->app->bind(CurrencyRepository::class, function() {
            return new CurrencyRepository(CurrencyGenerator::generate());
        });

    }
}

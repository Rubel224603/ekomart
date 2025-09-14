<?php

namespace App\Providers;

use App\Services\PaymentServiceExample;
use Illuminate\Support\ServiceProvider;

class PaymentServiceExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(PaymentServiceExample::class,function ($app){
            return new PaymentServiceExample();
        });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $requestParams = $this->app->request->all();

        if (!array_key_exists('rightOrWrong', $requestParams) || $requestParams['rightOrWrong'] == 'right') {
            $this->app->bind(\App\Interfaces\IMathService::class, \App\Services\DoMathRightService::class);
        } else {
            $this->app->bind(\App\Interfaces\IMathService::class, \App\Services\DoMathWrongService::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

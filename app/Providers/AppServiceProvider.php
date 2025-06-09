<?php

/**
 * Copyright (c) 2025 Eko Muchamad Haryono
 * This file is part of a proprietary project. Unauthorized use, distribution, or modification is strictly prohibited.
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (env('APP_ENV') == 'production') {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // if (app()->environment('production')) {
        //     URL::forceScheme('https');
        // }
    }
}

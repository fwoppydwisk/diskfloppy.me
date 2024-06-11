<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use PostHog\PostHog;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        PostHog::init(
            Config::get('services.posthog.key'),
            [
                'host' => 'https://'.Config::get('services.posthog.host')
            ]
        );
    }
}

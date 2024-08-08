<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class Weather extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function getWeatherData(): mixed {
        // If it's already cached just return that
        if (Cache::has('weather_data')) {
            return Cache::get('weather_data');
        }

        $response = Http::get('http://'. Config::get('services.weatherlink') . '/v1/current_conditions');
        $data = $response->json();
        $conditions = $data["data"]["conditions"];
        Cache::put('weather_data', $conditions, now()->addSeconds(60));
        return $conditions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.weather', [
            'conditions' => $this->getWeatherData(),
        ]);
    }
}

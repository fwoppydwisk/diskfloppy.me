<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class Wah extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct() {}


    public function getWah(): string {
        try {
            $response = Http::get('https://api.tinyfox.dev/img.json?animal=wah');
            $data = $response->json();
            return "https://api.tinyfox.dev".$data["loc"];
        } catch (Exception $ex) {
            return "";
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.wah', [
            'wah' => $this->getWah(),
        ]);
    }
}

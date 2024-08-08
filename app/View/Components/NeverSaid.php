<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NeverSaid extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    function returnQuote(): array {
        $quotes = config('quotes.neversaid');
        $index = rand(0, count($quotes) - 1);
        return $quotes[$index];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.never-said', [
            "quote" => $this->returnQuote()
        ]);
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TohQuote extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    function returnQuote(): array {
        $quotes = config('quotes.toh');
        $index = rand(0, count($quotes) - 1);
        return $quotes[$index];
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toh-quote',[
            'quote' => $this->returnQuote()
        ]);
    }
}

<?php

namespace App\View\Components;

use Closure;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.layout', [
            'isChristmas' => $this->isItChristmas()
        ]);
    }

    public function isItChristmas() : bool {
        $currentDate = new DateTime();
        $currentYear = intval($currentDate->format('Y'));

        $startDate = new DateTime("$currentYear-11-10");
        $endDate = new DateTime(($currentYear + 1) . "-01-01");

        return $currentDate >= $startDate && $currentDate < $endDate;
    }
}

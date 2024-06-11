<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CurrentTrack extends Component
{
    public $track;
    /**
     * Create a new component instance.
     */
    public function __construct($track)
    {
        $this->track = $track;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.current-track');
    }
}

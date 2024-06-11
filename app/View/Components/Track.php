<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Track extends Component
{
    public $track;
    public $count;
    /**
     * Create a new component instance.
     */
    public function __construct($track, $count)
    {
        $this->track = $track;
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.track');
    }
}

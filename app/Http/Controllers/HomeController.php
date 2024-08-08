<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use DateTime;

class HomeController extends Controller {
    /**
     * Returns age based on birthday date and current date (GMT)
     * @return int
     */
    function returnAge(): int {
        date_default_timezone_set('Europe/London');
        $birthday = new DateTime("2005-06-07");
        $currentDate = DateTime::createFromFormat("Y-m-d", date("Y-m-d"));
        $age = $birthday->diff($currentDate);
        return $age->y;
    }

    /**
     * Shows home page
     * @return View
     */
    public function show(): View {
        return view('home', [
            'age' => $this->returnAge(),
        ]);
    }
}

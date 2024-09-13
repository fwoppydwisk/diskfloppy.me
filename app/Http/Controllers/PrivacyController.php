<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PrivacyController extends Controller{
    /**
     * Shows the page
     * @return View
     */
    public function show(): View {
        return view('privacy');
    }
}

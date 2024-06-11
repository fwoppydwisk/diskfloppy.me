<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ComputersController extends Controller
{
    public function show() : View {
        return view('computers');
    }
}

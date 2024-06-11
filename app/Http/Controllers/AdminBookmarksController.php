<?php

namespace App\Http\Controllers;

use App\Models\BookmarkCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminBookmarksController extends Controller
{
    public function show(): View
    {
        $categories = BookmarkCategory::with('sites')->get();
        return view('admin.bookmarks', compact('categories'));
    }
}

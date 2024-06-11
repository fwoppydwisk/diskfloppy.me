<?php

namespace App\Http\Controllers;

use App\Models\BookmarkSite;
use App\Models\BookmarkCategory;
use Illuminate\View\View;

class BookmarksController extends Controller
{
    public function show(): View
    {
        $categories = BookmarkCategory::with('sites')->get();
        return view('bookmarks', compact('categories'));
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/bookmarks', function () {
    return view('pages.bookmarks');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/calculators', function () {
    return view('pages.calculators');
});

Route::get('/computers', function () {
    return view('pages.computers');
});

Route::get('/guestbook', 'App\Http\Controllers\GuestbookController@guestbook')
    ->name('guestbook');

Route::post('/guestbook', 'App\Http\Controllers\GuestbookController@guestbookpost')
    ->name('guestbookPost')
    ->middleware('rate_limit');

Route::get('/weather', function () {
    return view('pages.weather');
});

Route::get('/music', function () {
    return view('pages.music');
});

Route::get('/bot', function () {
    return view('pages.bot');
});

/* ------------------------------ Admin Routes ------------------------------ */

Route::get('/admin', function () {
    if (!auth()->check()) {
        return view('errors.no-auth');
    }
    return view('pages.admin.index');
});

Route::get('/admin/guestbook', function () {
    if (!auth()->check()) {
        return view('errors.no-auth');
    }
    return view('pages.admin.guestbook');
});

Route::get('/admin/guestbook/delete', function () {
    if (!auth()->check()) {
        return view('errors.no-auth');
    }

    $id = request()->input('id');
    $entry = DB::table('guestbook__entries')->find($id);

    if ($entry) {
        // Render a confirmation view
        return view('pages.admin.guestbook-del-confirm', compact('entry'));
    } else {
        return view('errors.generic-error')
            ->with('error', "Entry not found")
            ->with('description', "The specified entry does not exist!");
    }
});

Route::post('/admin/guestbook/delete', function () {
    if (!auth()->check()) {
        return view('errors.no-auth');
    }

    $id = request()->input('id');
    DB::table('guestbook__entries')->where('id', $id)->delete();

    return back()->with('success', 'Entry deleted successfully!');
});


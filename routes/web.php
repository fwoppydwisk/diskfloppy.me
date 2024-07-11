<?php

use App\Http\Controllers\AdminBookmarksController;
use App\Http\Controllers\AdminGuestbookController;
use App\Http\Controllers\AdminImportController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\CalculatorsController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
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

// Run the PageView middleware for *all* public GET routes
Route::get('/', [HomeController::class, 'show']);
Route::get('/bookmarks', [BookmarksController::class, 'show']);
Route::get('/guestbook', [GuestbookController::class, 'show']);
Route::get('/calculators', [CalculatorsController::class, 'show']);
Route::get('/computers', [ComputersController::class, 'show']);
Route::get('/music', [MusicController::class, 'show']);
Route::post('/guestbook', [GuestbookController::class, 'addEntry'])
    ->middleware('rate_limit');

// Admin pages
Route::prefix('admin')->group(function () {
    Route::get('/admin/guestbook', [AdminGuestbookController::class, 'show']);
    Route::get('/admin/bookmarks', [AdminBookmarksController::class, 'show']);
    Route::get('/admin/import', [AdminImportController::class, 'show']);
    Route::post('/admin/import', [AdminImportController::class, 'submit'])
        ->name('admin.import.submit');

})->middleware('auth');

<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(app()->getLocale()); // Redirect to default locale
});
Route::get('/southbridge', function () {
    return view('southbridge');
});
Route::get('/projekti', function () {
    return view('projekti');
});




Route::get('lang/{locale}', function ($locale) {
    // Get all segments except the first one (which is the current locale)
    $segments = request()->segments();

    // Remove the first segment if it's a locale
    if (in_array($segments[0] ?? '', ['en', 'sr'])) {
        array_shift($segments);
    }

    // Build the new URL with the new locale
    $path = '/' . $locale;
    if (!empty($segments)) {
        $path .= '/' . implode('/', $segments);
    }

    return redirect($path);
})->name('lang.switch');

// Frontend routes with locale prefix
Route::group([
    'prefix'     => '{locale}',
    'where'      => ['locale' => 'en|sr'],
    'middleware' => 'setlocale',
], function () {
    Route::get('/', function () {
        return view('law');
    })->name('law');

    Route::get('/southbridge', function () {
        return view('southbridge');
    })->name('southbridge');

    Route::get('/projekti', function () {
        return view('projekti');
    })->name('projekti');

    Route::post('/projekti/contact', [\App\Http\Controllers\ContactController::class, 'submit'])
    ->name('projekti.contact');
});
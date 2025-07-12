<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/southbridge');
});

Route::get('/southbridge', function () {
    return view('southbridge');
})->name('southbridge');

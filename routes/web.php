<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/portfolio', function () {
    return view('pages.aboutAs');
})->name('portfolio');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    $top_six = array_slice($comics, 0, 6);
    return view('home', compact('top_six'));
})->name('home');


Route::get("/comics", function () {
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');


Route::get("/about", function () {
    return view('about');
})->name('about');

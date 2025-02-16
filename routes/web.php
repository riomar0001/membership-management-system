<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});


Route::get('/registration', function () {
    return view('pages.landing.registration');
});



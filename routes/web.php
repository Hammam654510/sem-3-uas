<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('index');
});

Route::get('/coba2yabro', function () {
    return view('index');
});
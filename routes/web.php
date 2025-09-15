<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $info_test = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
    // return view('home', ['info_test' => $info_test]);
    return view('home', compact('info_test'));
});

Route::get('/about', function () {
    return view('about');
});

<?php

Route::get('/', function () {
    return view('pages.login');
});


Route::get('/entry', function () {
    return view('pages.entry');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/history', function () {
    return view('pages.history');
});

Route::get('/billing', function () {
    return view('pages.billing');
});




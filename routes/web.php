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

Route::get('/edit', function () {
    return view('pages.edit');
});

Route::get('/emp', function () {
    return view('pages.emp');
});

Route::get('/emp/details', function () {
    return view('pages.empDetails');
});


Route::get('/inv', function () {
    return view('pages.invList');
});




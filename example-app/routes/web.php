<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/music', function () { 
    return view('music');
});

Route::get('/contact', function () { 
    return view('contact');
});
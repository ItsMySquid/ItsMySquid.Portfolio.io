<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes voor de vier projectpagina's
Route::get('/Unreal', function () {
    return view('unreal');
});

Route::get('/Ecojourney', function () {
    return view('ecojourney');
});

Route::get('/Io Digital', function () {
    return view('iodigital');
});

Route::get('/Gebarentaal', function () {
    return view('gebarentaal');
});

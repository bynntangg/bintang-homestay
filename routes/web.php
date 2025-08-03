<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::view('/sitemap', 'sitemap');
Route::view('/privacy-policy', 'privacy-policy');
Route::view('/terms-of-service', 'terms-of-service');

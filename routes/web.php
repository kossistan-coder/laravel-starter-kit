<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('dashboard/admins')->group(function (){
    Route::get('/overview', function () {
        return view('admins.overview');
    })->name('overview');
    Route::get('/administrateurs', function () {
        return view('admins.show-admins');
    })->name('show-admins');
});


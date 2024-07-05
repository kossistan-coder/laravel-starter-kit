<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/', function () {
    return view('auth.register');
})->name('register');


Route::prefix('dashboard')->group(function (){
    Route::get('/overview', function () {
        return view('admins.overview');
    })->name('overview');
    Route::get('/administrateurs', function () {
        return view('admins.show-admins');
    })->name('show-admins');

    Route::get('/utilisateurs', function () {
        return view('admins.show-users');
    })->name('show-users');


});


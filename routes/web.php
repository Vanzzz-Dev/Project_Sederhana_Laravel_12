<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function(){
    return 'Hello Cuy';
})->name('seyHello');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    });
});


Route::get('/test', function(){
    dd(session()->all());
});
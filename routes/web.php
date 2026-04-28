<?php

use App\Http\Controllers\testController;
use App\Http\Controllers\ProsesController;
use Illuminate\Support\Facades\Route;

// ============ Bawaan ============
Route::get('/', function () {
    return view('dashboard');
});

// ============ Route View ==========
Route::view('/home','dashboard')->name('home');
Route::view('/login','login');
Route::view('/buat','buat');
Route::view('/buattugas','buatTugas');

//=========== Route Post ===========
Route::post('/buat', [ProsesController::class, 'store']);
Route::post('/login', [ProsesController::class, 'storeLogin']);
Route::post('/logout', [ProsesController::class, 'storeLogOut']);






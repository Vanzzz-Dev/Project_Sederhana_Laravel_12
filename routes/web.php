<?php

use App\Http\Controllers\testController;
use App\Http\Controllers\ProsesController;
use Illuminate\Support\Facades\Route;

// ============ Bawaan ============
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/home', [ProsesController::class, 'index'])->name('home');

// ============ Route View ==========
Route::view('/login','login');
Route::view('/buat','buat');
Route::view('/buattugas','buatTugas');

//=========== Route Post ===========
Route::post('/buat', [ProsesController::class, 'store']);
Route::post('/buattugas', [ProsesController::class, 'storeTugas']);
Route::post('/login', [ProsesController::class, 'storeLogin']);
Route::post('/logout', [ProsesController::class, 'storeLogOut']);






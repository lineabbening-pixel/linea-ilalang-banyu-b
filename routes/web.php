<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

// Halaman utama (home)
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Halaman CV
Route::get('/cv', [CvController::class, 'index'])->name('cv.index');

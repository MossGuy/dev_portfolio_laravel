<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home')->middleware('theme.set');

Route::post('/set-theme', [ThemeController::class, 'set'])->name('set-theme');

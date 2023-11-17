<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MugshotsController;
use Illuminate\Support\Facades\Route;

Route::get('/mugshots', [MugshotsController::class, 'mugshots'])->name('mugshots');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
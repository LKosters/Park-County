<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/nieuwsberichten', [NewsController::class, 'newspage']);

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/news', NewsController::class);
});

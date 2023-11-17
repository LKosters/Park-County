<?php

use App\Http\Controllers\CellsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/cells', cellsController::class);
});

<?php

use App\Http\Controllers\MugshotsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::post('/dashboard/mugshots/add-prisoner', [MugshotsController::class, 'addUserToImage'])->name('mugshots.addUserToImage');
    Route::delete('/dashboard/mugshots/remove-prisoner', [MugshotsController::class, 'removeUserFromImage'])->name('mugshots.removeUserFromImage');
    Route::resource('/dashboard/mugshots', MugshotsController::class);
});

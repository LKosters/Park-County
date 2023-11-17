<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/images', ImageController::class);
    Route::get('/dashboard/image', [ImageController::class, 'index'])->name('image.index');
    Route::post('/dashboard/image/add-user', [ImageController::class, 'addUserToImage'])->name('image.addUserToImage');
    Route::post('/dashboard/image/remove-user', [ImageController::class, 'removeUserToImage'])->name('image.removeUserToImage');
});
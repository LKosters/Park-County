<?php

use App\Http\Controllers\PrisonersController;
use Illuminate\Support\Facades\Route;

Route::get('/prisoners/login', [PrisonersController::class, 'prisonerLogin'])->name('prisoners.login');
Route::post('/prisoners/login', [PrisonersController::class, 'prisonerAuth'])->name('prisoners.auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/prisoners/{id}/edit/select', [PrisonersController::class, 'selectImage'])->name('prisoners.selectImage');
    Route::post('/dashboard/prisoners/attach/image', [PrisonersController::class, 'attachImage'])->name('prisoners.attachImage');
    Route::delete('/dashboard/prisoners/{id}/edit/detach', [PrisonersController::class, 'detachImage'])->name('prisoners.detachImage');
    Route::resource('/dashboard/prisoners', PrisonersController::class);
});

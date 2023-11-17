<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/werknemers', [UserController::class, 'index'])->name('employee.index');
Route::get('/werknemer/create', [UserController::class, 'create'])->name('employee.create');
Route::post('/werknemer/store', [UserController::class, 'store'])->name('employee.store');
Route::delete('/werknemer/{id}', [UserController::class, 'destroy'])->name('employee.destroy');
Route::get('/werknemer/{id}/edit', [UserController::class, 'edit'])->name('employee.edit');
Route::put('/werknemer/{id}/', [UserController::class, 'update'])->name('employee.update');



<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__.'/auth.php';
require __DIR__.'/other.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/other.php';
require __DIR__ . '/profile.php';
require __DIR__ . '/images.php';
require __DIR__ . '/mugshots.php';
require __DIR__ . '/vehicle.php';
require __DIR__ . '/news.php';
require __DIR__ . '/cells.php';
require __DIR__ . '/prisoners.php';
require __DIR__ . '/employee.php';

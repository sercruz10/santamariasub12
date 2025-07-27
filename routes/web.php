<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayersController;

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);


Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', [PlayersController::class, 'listPlayer'])->middleware('auth');

Route::get('/', function () {
    return 'ok';
});

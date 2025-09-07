<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayersController;

// 🔑 Login (única rota com name 'login')
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// 🚪 Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 🏠 Home → redireciona para /login (sem name duplicado)
Route::get('/', function () {
    return redirect()->route('login');
});

// 🔒 Áreas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PlayersController::class, 'listPlayer'])->name('dashboard');
});

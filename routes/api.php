<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayersController;


Route::post('/check-birthday', [PlayersController::class, 'birthday']);

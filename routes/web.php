<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);
Route::get('/dashboard', [DashbordController::class, 'index']);

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'create'])->name('register.create');
Route::get('/dashboard', [DashbordController::class, 'index']);

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'create'])->name('register.create');
Route::get('/dashboard', [DashbordController::class, 'index'])->name('dashboard');
Route::get('/data-pengguna', [DashbordController::class, 'dataPengguna'])->name('dataPengguna');
Route::get('/data-barang', [DashbordController::class, 'dataBarang'])->name('dataBarang');
Route::get('/data-supplier', [DashbordController::class, 'dataSupplier'])->name('dataSupplier');
Route::get('/kategori-barang', [DashbordController::class, 'kategoriBarang'])->name('kategoriBarang');

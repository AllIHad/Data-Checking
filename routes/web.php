<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DataBarang;
use App\Http\Controllers\DataSupplier;
use App\Http\Controllers\Pemilik;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    
    Route::put('/kategori-barang-delete/{slug}', [DashbordController::class, 'kategoriBarangDelete'])->name('kategoriBarangDelete');
    Route::get('/kategori-barang-create', [DashbordController::class, 'formKategoriBarang'])->name('createKategoriBarang');
    Route::post('/createdKategoriBarang', [DashbordController::class, 'kategoriBarangCreated'])->name('kategoriBarangCreated');
    Route::get('/editKategoriBarang/{slug}', [DashbordController::class, 'editKategoriBarang'])->name('editKategoriBarang');
    Route::post('/editedKategoriBarang/{slug}', [DashbordController::class, 'editedKategoriBarang'])->name('editedKategoriBarang');
    
    Route::put('/data-barang-delete/{slug}', [DataBarang::class, 'dataBarangDelete'])->name('dataBarangDelete');
    Route::get('/data-barang-create', [DataBarang::class, 'formDataBarang'])->name('createDataBarang');
    Route::post('/createdDataBarang', [DataBarang::class, 'dataBarangCreated'])->name('dataBarangCreated');
    Route::get('/editDataBarang/{slug}', [DataBarang::class, 'editDataBarang'])->name('editDataBarang');
    Route::post('/editedDataBarang/{slug}', [DataBarang::class, 'editedDataBarang'])->name('editedDataBarang');
    
    Route::delete('/destroyDataSupplier/{slug}', [DataSupplier::class, 'destroy']);
    Route::get('/data-supplier-create', [DataSupplier::class, 'formDataSupplier'])->name('createDataSupplier');
    Route::post('/createdDataSupplier', [DataSupplier::class, 'dataSupplierCreated'])->name('dataSupplierCreated');
    Route::get('/editDataSupplier/{slug}', [DataSupplier::class, 'editDataSupplier'])->name('editDataSupplier');
    Route::post('/editedDataSupplier/{slug}', [DataSupplier::class, 'editedDataSupplier'])->name('editedDataSupplier');
});

Route::prefix('pemilik')->group(function () {
    Route::put('/approvalKategoriBarang/{slug}', [Pemilik::class, 'approvalKategoriBarang'])->name('approvalKategoriBarang');
    Route::delete('/refusalKategoriBarang/{slug}', [Pemilik::class, 'refusalKategoriBarang'])->name('refusalKategoriBarang');
    Route::put('/refusalDeleteKategoriBarang/{slug}', [Pemilik::class, 'refusalDeleteKategoriBarang'])->name('refusalDeleteKategoriBarang');
    Route::delete('/aprovalDeleteKategoriBarang/{slug}', [Pemilik::class, 'approvalDeleteKategoriBarang'])->name('approvalDeleteKategoriBarang');
    Route::put('/approvalEditKategoriBarang/{slug}', [Pemilik::class, 'approvalEditKategoriBarang'])->name('approvalEditKategoriBarang');

    Route::put('/approvalDataBarang/{slug}', [Pemilik::class, 'approvalDataBarang'])->name('approvalDataBarang');
    Route::delete('/refusalDataBarang/{slug}', [Pemilik::class, 'refusalDataBarang'])->name('refusalDataBarang');
    Route::put('/refusalDeleteDataBarang/{slug}', [Pemilik::class, 'refusalDeleteDataBarang'])->name('refusalDeleteDataBarang');
    Route::delete('/aprovalDeleteDataBarang/{slug}', [Pemilik::class, 'approvalDeleteDataBarang'])->name('approvalDeleteDataBarang');
    Route::put('/approvalEditDataBarang/{slug}', [Pemilik::class, 'approvalEditDataBarang'])->name('approvalEditDataBarang');

    Route::put('/approvalDataSupplier/{slug}', [Pemilik::class, 'approvalDataSupplier'])->name('approvalDataSupplier');
    Route::delete('/refusalDataSupplier/{slug}', [Pemilik::class, 'refusalDataSupplier'])->name('refusalDataSupplier');
    Route::put('/refusalDeleteDataSupplier/{slug}', [Pemilik::class, 'refusalDeleteDataSupplier'])->name('refusalDeleteDataSupplier');
    Route::delete('/aprovalDeleteDataSupplier/{slug}', [Pemilik::class, 'approvalDeleteDataSupplier'])->name('approvalDeleteDataSupplier');
    Route::put('/approvalEditDataSupplier/{slug}', [Pemilik::class, 'approvalEditDataSupplier'])->name('approvalEditDataSupplier');
});

Route::get('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'create'])->name('register.create');
Route::get('/dashboard', [DashbordController::class, 'index'])->name('dashboard');
Route::get('/data-pengguna', [DashbordController::class, 'dataPengguna'])->name('dataPengguna');
Route::get('/data-barang', [DataBarang::class, 'dataBarang'])->name('dataBarang');
Route::get('/data-supplier', [DataSupplier::class, 'dataSupplier'])->name('dataSupplier');
Route::get('/kategori-barang', [DashbordController::class, 'kategoriBarang'])->name('kategoriBarang');
Route::get('/waitings', [DashbordController::class, 'waitings'])->name('waitings');

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DataBarang;
use App\Http\Controllers\DataManagement;
use App\Http\Controllers\DataSupplier;
use App\Http\Controllers\Pemilik;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {  
    Route::put('/destroyDataPengguna/{slug}', [DashbordController::class, 'destroyDataPengguna'])->name('destroyDataPengguna');
    Route::get('/data-pengguna-create', [DashbordController::class, 'formDataPengguna'])->name('createDataPengguna');
    Route::post('/createdDataPengguna', [DashbordController::class, 'dataPenggunaCreated'])->name('dataPenggunaCreated');

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

    Route::put('/destroyDataSupplier/{slug}', [DataSupplier::class, 'destroy']);
    Route::get('/data-supplier-create', [DataSupplier::class, 'formDataSupplier'])->name('createDataSupplier');
    Route::post('/createdDataSupplier', [DataSupplier::class, 'dataSupplierCreated'])->name('dataSupplierCreated');
    Route::get('/editDataSupplier/{slug}', [DataSupplier::class, 'editDataSupplier'])->name('editDataSupplier');
    Route::post('/editedDataSupplier/{slug}', [DataSupplier::class, 'editedDataSupplier'])->name('editedDataSupplier');
});

Route::get('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'create'])->name('register.create');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/dashboard', [DashbordController::class, 'index'])->name('dashboard');
Route::get('/data-yuli', [DataManagement::class, 'dataYuli'])->name('dataYuli');
Route::get('/data-rani', [DataManagement::class, 'dataRani'])->name('dataRani');
Route::get('/data-Aji', [DataManagement::class, 'dataAji'])->name('dataAji');
Route::get('/data-jijul', [DataManagement::class, 'dataJijul'])->name('dataJijul');
Route::get('/data-ibad', [DataManagement::class, 'dataIbad'])->name('dataIbad');
Route::get('/createData', [DataManagement::class, 'createData'])->name('createData');
Route::post('/dataCreated', [DataManagement::class, 'dataCreated'])->name('dataCreated');
Route::get('/editData/{slug}', [DataManagement::class, 'editData'])->name('editData');
Route::post('/dataEdited/{slug}', [DataManagement::class, 'dataEdited'])->name('dataEdited');
Route::put('/destroyData/{slug}', [DataManagement::class, 'destroyData'])->name('destroyData');
Route::get('/waitings', [DataManagement::class, 'waitings'])->name('waitings');
Route::get('/profile', [DashbordController::class, 'profile'])->name('profile');
Route::put('/editProfile/{slug}', [DashbordController::class, 'editProfile'])->name('editProfile');

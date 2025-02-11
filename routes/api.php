<?php

use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\CompanyInformationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiPerusahaanController;
use App\Http\Controllers\KategoriLayananController;
use App\Http\Controllers\TipeKategoriController;
use App\Models\AboutCompany;
use App\Models\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('autentikasi')->group(function () {
    Route::post('masuk', [AutentikasiController::class, 'loginCheck']);
});

Route::middleware(['auth:sanctum'])->group(function() {
    Route::prefix('dashboard')->group(function() {
        
    });

    Route::prefix('informasi-perusahaan')->group(function() {
        Route::post('/add-data', [InformasiPerusahaanController::class, 'addData']);
        Route::post('/list-data', [InformasiPerusahaanController::class, 'listData']);
        Route::put('/update-data/{id}', [InformasiPerusahaanController::class, 'updateData']);
        Route::delete('/delete-data/{id}', [InformasiPerusahaanController::class, 'deleteData']);
        Route::post('/update-selection', [InformasiPerusahaanController::class, 'updateSelection']);
        Route::get('/get-selected-data', [InformasiPerusahaanController::class, 'getSelectedData']);
    });

    Route:: prefix('kategori-layanan')->group(function() {
        Route::get('/data-support/informasi-perusahaan', [KategoriLayananController::class, 'supportInformasiPerusahaan']);
        Route::get('/data-support/informasi-perusahaan/nama-kategori', [KategoriLayananController::class, 'supportNamaKtegori']);
        Route::post('/add-data', [KategoriLayananController::class, 'addData']);
        Route::post('/list-data', [KategoriLayananController::class, 'listData']);
        Route::post('/update-data/{id}', [KategoriLayananController::class, 'updateData']);
        Route::delete('/delete-data/{id}', [KategoriLayananController::class, 'deleteData']);
        Route::get('/get-selected-data', [KategoriLayananController::class, 'getSelectedData']);
        Route::post('/update-selection', [KategoriLayananController::class, 'updateSelection']);
    });

    Route::prefix('tipe-kategori')->group(function() {
        Route::post('/list-data', [TipeKategoriController::class, 'listData']);
        Route::post('/add-data', [TipeKategoriController::class, 'addData']);
        Route::put('/update-data/{id}', [TipeKategoriController::class, 'updateData']);
        Route::delete('/delete-data/{id}', [TipeKategoriController::class, 'deleteData']);
        Route::get('/get-list-data', [TipeKategoriController::class, 'getListData']);
    });
});

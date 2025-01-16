<?php

use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\CompanyInformationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiPerusahaanController;
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

    Route:: prefix('tentang-perusahaan')->group(function() {
        Route::get('/data-support/company-information', [AboutCompanyController::class, 'supportCompanyInformation']);
        Route::post('/add-data', [AboutCompanyController::class, 'addData']);
    });
});

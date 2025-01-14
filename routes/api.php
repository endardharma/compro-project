<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\CompanyInformationController;
use App\Http\Controllers\DashboardController;
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
        Route::post("/add-data", [CompanyInformationController::class, 'addData']);
        Route::post("/list-data", [CompanyInformationController::class, 'listData']);
        Route::put("/update-data/{id}", [CompanyInformationController::class, 'updateData']);
        Route::delete("/delete-data/{id}", [CompanyInformationController::class, 'deleteData']);

        Route::post("/update-selection", [CompanyInformationController::class, 'updateSelection']);
        Route::get("/get-selected-data", [CompanyInformationController::class, 'getSelectedData']);
    });
});

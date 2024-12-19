<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\CompanyInformationController;
use App\Http\Controllers\DashboardController;
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
    });
});

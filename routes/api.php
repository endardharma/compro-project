<?php

use App\Http\Controllers\AutentikasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('autentikasi')->group(function () {
    Route::post('masuk', [AutentikasiController::class, 'loginCheck']);
});

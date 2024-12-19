<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\CompanyInformationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page.index');
})->name('home');

Route::get('/login', function(){
    return view('auth.login');
})->name('user.login');

Route::get('/aplikasi/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/aplikasi/under-maintenance', [DashboardController::class, 'underMaintenance'])->name('maintenance');
Route::get('/aplikasi/informasi-perusahaan', [CompanyInformationController::class, 'index'])->name('company_information');

//Pindah route create-data ke dalam API
// Route::get('/aplikasi/informasi-perusahaan/create-data', function() {
//     return view('crud.informasi-perusahaan.pages.create');
// })->name('create.show');


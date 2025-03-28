<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\BrandMessagingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiPerusahaanController;
use App\Http\Controllers\KategoriLayananController;
use App\Http\Controllers\TipeKategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page.index');
})->name('home');

Route::get('/login', function(){
    return view('auth.login');
})->name('user.login');

Route::get('/aplikasi/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/aplikasi/under-maintenance', [DashboardController::class, 'underMaintenance'])->name('maintenance');
Route::get('/aplikasi/informasi-perusahaan', [InformasiPerusahaanController::class, 'index'])->name('informasi_perusahaan');
Route::get('/aplikasi/kategori-layanan', [KategoriLayananController::class, 'index'])->name('kategori_layanan');
Route::get('/aplikasi/tipe-kategori', [TipeKategoriController::class, 'index'])->name('tipe_kategori');
Route::get('/aplikasi/brand-messagings', [BrandMessagingController::class, 'index'])->name('brand_messagings');

//Pindah route create-data ke dalam API
// Route::get('/aplikasi/informasi-perusahaan/create-data', function() {
//     return view('crud.informasi-perusahaan.pages.create');
// })->name('create.show');


<?php

use App\Http\Controllers\AutentikasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function(){
    return view('login.login');
})->name('user.login');
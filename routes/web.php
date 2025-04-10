<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CreateAkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});


route::middleware('guest:admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [CreateAkunController::class, 'index'])->name('register');
    Route::post('/register', [CreateAkunController::class, 'register']);
});

// route::middleware('auth:admin')->group(function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/history', [HistoryController::class, 'index']);
    Route::get('/penjualan', [PenjualanController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);

    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/barang-create', [BarangController::class, 'create']);


    Route::get('/laporan', [LaporanController::class, 'index']);
// });

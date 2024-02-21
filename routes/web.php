<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['cek_login'])->group(function(){
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');

    // petugas tidak bisa akses produk
    Route::view('/produk', 'produk')->name('produk');

});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/proses-register', [RegisterController::class, 'proses_register']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/proses-login', [LoginController::class, 'proses']);

Route::get('/logout', [LoginController::class, 'logout']);

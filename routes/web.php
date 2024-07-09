<?php

use App\Http\Controllers\admin\DaftarPesananController;
use App\Http\Controllers\admin\DataPaketController;
use App\Http\Controllers\admin\DataTentorController;
use App\Http\Controllers\admin\DataUserController;
use App\Http\Controllers\DataLaporanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PaketController;
use App\Http\Controllers\user\PesanController;
use App\Http\Controllers\user\ProfilUserController;
use App\Http\Controllers\user\RiwayatController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('/user', [LoginController::class, 'login_user']);
    Route::post('/', [LoginController::class, 'login']);
    Route::get('/registrasi', [LoginController::class, 'registrasi']);
    Route::post('/registrasi', [LoginController::class, 'store']);

    Route::get('/lupa-password', [LoginController::class, 'lupa']);
    Route::post('/lupa-password', [LoginController::class, 'otp']);
});

Route::middleware(['auth'])->group(function () {
    //user
    Route::get('/home', [DashboardController::class, 'index']);
    Route::get('/riwayat', [RiwayatController::class, 'index']);

    Route::get('/paket', [PaketController::class, 'index']);

    Route::get('/profil-user', [ProfilUserController::class, 'index']);
    Route::post('/profil-user', [ProfilUserController::class, 'update']);

    Route::get('/pesan/{id}', [PesanController::class, 'index']);
    Route::post('/pesan/{id}', [PesanController::class, 'pemesanan']);
    Route::get('/transaksi/{id}', [PesanController::class, 'pesan']);
    Route::get('/transaksi/checkout/{id}', [PesanController::class, 'pembayaran']);
    Route::get('/getsnap/{id}', [PesanController::class, 'checkout']);
   
    Route::get('/logout', [LoginController::class, 'logout']);

    //admin
    Route::get('/beranda', [HomeController::class, 'index']);

    Route::get('/data-paket', [DataPaketController::class, 'index']);
    Route::get('/data-paket/tambah', [DataPaketController::class, 'tambah']);
    Route::post('/data-paket/tambah', [DataPaketController::class, 'store']);
    Route::get('/data-paket/{id}/edit', [DataPaketController::class, 'edit']);
    Route::post('/data-paket/{id}/edit', [DataPaketController::class, 'update']);
    Route::get('/data-paket/{id}/hapus', [DataPaketController::class, 'delete']);
    
    Route::get('/data-tentor', [DataTentorController::class, 'index']);
    Route::get('/data-tentor/tambah', [DataTentorController::class, 'tambah']);
    Route::post('/data-tentor/tambah', [DataTentorController::class, 'store']);
    Route::get('/data-tentor/{id}/edit', [DataTentorController::class, 'edit']);
    Route::post('/data-tentor/{id}/edit', [DataTentorController::class, 'update']);
    Route::get('/data-tentor/{id}/hapus', [DataTentorController::class, 'delete']);
    
    Route::get('/data-akun/{role}', [DataUserController::class, 'index']);
    Route::get('/data-akun/{role}/tambah', [DataUserController::class, 'tambah']);
    Route::post('/data-akun/{role}/tambah', [DataUserController::class, 'store']);
    Route::get('/data-akun/{role}/{id}/edit', [DataUserController::class, 'edit']);
    Route::post('/data-akun/{role}/{id}/edit', [DataUserController::class, 'update']);
    Route::get('/data-akun/{id}/hapus', [DataUserController::class, 'delete']);

    Route::get('/daftar-pesanan', [DaftarPesananController::class, 'index']);
    Route::post('/daftar-pesanan/{id}', [DaftarPesananController::class, 'update']);
    Route::get('/daftar-pesanan/selesai/{id}', [DaftarPesananController::class, 'selesai']);

    Route::get('/laporan', [DataLaporanController::class, 'index']);
    Route::post('/laporan', [DataLaporanController::class, 'generateLaporan']);
});

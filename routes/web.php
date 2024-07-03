<?php

use App\Http\Controllers\admin\DataPaketController;
use App\Http\Controllers\admin\DataTentorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\user\DashboardController;
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
    Route::post('/', [LoginController::class, 'login']);
    Route::get('/registrasi', [LoginController::class, 'registrasi']);
    Route::post('/registrasi', [LoginController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    //user
    Route::get('/home', [DashboardController::class, 'index']);
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

});

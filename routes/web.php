<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengabsahanController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\TemplateSurat\TestingTemp;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // Bagian Auth
    Route::get('/', function () {
        return view('Auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/pengajuan', function () {
        return view('navigasi.pengajuan.pengajuan-view');
    });

    Route::get('/rekap', function () {
        return view('navigasi.rekapitulasi.rekapitulasi');
    });

    Route::get('/validator', function () {
        return view('navigasi.validator.validator-view');
    });

    // Bagian Settings
    Route::get('/settings', function () {
        return view('settings.dashboard-settings');
    });

    Route::get('/settings/kategori', [KategoriController::class, 'index']);
    Route::post('/settings/kategori', [KategoriController::class, 'store']);
    Route::post('/settings/kategori/{q}', [KategoriController::class, 'update']);
    Route::get('/settings/kategori/{q}/del', [KategoriController::class, 'destroy']);

    Route::get('/settings/tipe', function () {
        return view('settings.tipe_surat.tipe-view');
    });

    Route::get('/settings/tipe_tambah', function () {
        return view('settings.tipe_surat.tipe-tambah');
    });

    Route::get('/settings/tipe_edit', function () {
        return view('settings.tipe_surat.tipe-edit');
    });

    Route::get('/test', function(){
        return view('preview-docx');
    });

    Route::get('/settings/pengabsahan', [PengabsahanController::class, 'index']);
    Route::post('/settings/pengabsahan', [PengabsahanController::class, 'store']);
    Route::post('/settings/pengabsahan/{q}', [PengabsahanController::class, 'update']);
    Route::get('/settings/pengabsahan/{q}/delete', [PengabsahanController::class, 'destroy']);

    Route::get('/settings/fakultas', [FakultasController::class, 'index']);
    Route::post('/settings/fakultas', [FakultasController::class, 'store']);
    Route::post('/settings/fakultas/{q}', [FakultasController::class, 'update']);
    Route::get('/settings/fakultas/{q}/delete', [FakultasController::class, 'destroy']);
});


Route::middleware(['auth'])->group(function () {

    Route::get('/home', [AuthController::class, 'url']);

    Route::middleware('UserAkses:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    });

    Route::middleware('UserAkses:verifier')->group(function () {
        Route::get('/verifier/dashboard', [DashboardController::class, 'index']);
    });
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('/admin/settings', function(){
        return view('settings.dashboard-settings');
    });
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengabsahanController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\TemplateSurat\TestingTemp;
use App\Http\Controllers\TipeSuratController;
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
    // Route::get('/settings', function () {
    //     return view('settings.dashboard-settings');
    // });

    Route::get('/settings/kategori', [KategoriController::class, 'index']);
    Route::post('/settings/kategori', [KategoriController::class, 'store']);
    Route::post('/settings/kategori/{q}', [KategoriController::class, 'update']);
    Route::get('/settings/kategori/{q}/del', [KategoriController::class, 'destroy']);

    Route::get('/settings/tipe', [TipeSuratController::class, "index"]);
    Route::post('/settings/tipe/store', [TipeSuratController::class, "store"]);
    Route::post('/settings/tipe/{id}/update', [TipeSuratController::class, "update"]);

    Route::get('/test', function () {
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

    // role admin
    Route::middleware('UserAkses:admin')->group(function () {
        Route::get('dashboard/admin', [DashboardController::class, 'index']);
        Route::get('settings/admin', function () {
            return view('settings.dashboard-settings');
        });

        // Pengajuan 
        Route::get('/pengajuan/{token}/admin', [PengajuanController::class, "index"]);

        // Rekapitulasi 
        Route::get('/rekap/admin', [RekapitulasiController::class, "index"]);



        // tipe surat
        Route::get('/settings/admin/tipe', [TipeSuratController::class, "index"]);
        Route::post('/settings/admin/tipe/store', [TipeSuratController::class, "store"]);
        Route::post('/settings/admin/tipe/{id}/update', [TipeSuratController::class, "update"]);
        Route::get('/settings/admin/tipe/{id}/delete', [TipeSuratController::class, "destroy"]);

        // kategori surat
        Route::get('/settings/admin/kategori', [KategoriController::class, 'index']);
        Route::post('/settings/admin/kategori', [KategoriController::class, 'store']);
        Route::post('/settings/admin/kategori/{q}', [KategoriController::class, 'update']);
        Route::get('/settings/admin/kategori/{q}/del', [KategoriController::class, 'destroy']);

        // pengabsahan
        Route::get('/settings/admin/pengabsahan', [PengabsahanController::class, 'index']);
        Route::post('/settings/admin/pengabsahan', [PengabsahanController::class, 'store']);
        Route::post('/settings/admin/pengabsahan/{q}', [PengabsahanController::class, 'update']);
        Route::get('/settings/admin/pengabsahan/{q}/delete', [PengabsahanController::class, 'destroy']);

        // fakultas
        Route::get('/settings/admin/fakultas', [FakultasController::class, 'index']);
        Route::post('/settings/admin/fakultas', [FakultasController::class, 'store']);
        Route::post('/settings/admin/fakultas/{q}', [FakultasController::class, 'update']);
        Route::get('/settings/admin/fakultas/{q}/delete', [FakultasController::class, 'destroy']);
    });

    // role verifier
    Route::middleware('UserAkses:verifier1')->group(function () {
        Route::get('/verifier1/dashboard', [DashboardController::class, 'index']);
    });

    // logout
    Route::get('logout', [AuthController::class, 'logout']);
});

<?php

use Illuminate\Support\Facades\Route;

// Bagian Auth
Route::get('/', function () {
    return view('Auth.login');
});

// Bagian Navigasi
Route::get('/dashboard', function () {
    return view('navigasi.dashboard');
});

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

Route::get('/settings/kategori', function () {
    return view('settings.kategori.kategori-view');
});

Route::get('/settings/kategori_tambah', function () {
    return view('settings.kategori.kategori-tambah');
});

Route::get('/settings/kategori_edit', function () {
    return view('settings.kategori.kategori-edit');
});

Route::get('/settings/tipe', function () {
    return view('settings.tipe_surat.tipe-view');
});

Route::get('/settings/tipe_tambah', function () {
    return view('settings.tipe_surat.tipe-tambah');
});

Route::get('/settings/tipe_edit', function () {
    return view('settings.tipe_surat.tipe-edit');
});

Route::get('/settings/pengabsahan', function () {
    return view('settings.pengabsahan.pengabsahan-view');
});

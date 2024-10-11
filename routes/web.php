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

// Bagian Settings
Route::get('/settings', function () {
    return view('settings.dashboard-settings');
});

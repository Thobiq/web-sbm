<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');
Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

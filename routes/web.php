<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn()=>view('halaman.public.beranda'));

Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index']);

Route::get('/artikel', [App\Http\Controllers\BeritaController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

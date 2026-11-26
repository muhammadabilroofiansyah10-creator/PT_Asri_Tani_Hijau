<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

// Halaman publik (single page)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman admin - CRUD produk
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn () => redirect()->route('admin.produk.index'));
    Route::resource('produk', ProdukController::class)->except(['show']);
});

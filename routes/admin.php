<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\UangkuController;
use App\Http\Controllers\Admin\BankController;

Route::group([], function () {
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
   Route::get('galeri', [GalleryController::class, 'index'])->name('galeri.index');
});

Route::prefix('user')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.index');
    Route::get('/password', [ProfileController::class, 'passwordIndex'])->name('user.password.index');
    Route::get('bank', [BankController::class, 'index'])->name('user.bank.index');

    Route::put('/', [ProfileController::class, 'update'])->name('user.update');
    Route::post('bank', [BankController::class, 'manage'])->name('user.bank.manage');
});

Route::prefix('uangku')->group(function () {
    Route::get('/', [UangkuController::class, 'index'])->name('uangku.index');
});

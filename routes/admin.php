<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;

Route::group([], function () {
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
   Route::get('profile', [ProfileController::class, 'index'])->name('user.index');
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/detail-produk/{product}', [UserController::class, 'detailproduk'])->name('user.produk');
Route::post('/pesan/{product}', [OrderController::class, 'store'])->name('order.store');

// Login
Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('showlogin');
    Route::post('/admin/login', [AdminController::class, 'login'])->name('login');
    Route::post('/admin/index', [AdminController::class, 'index'])->name('admin.index');
});

Route::middleware(['auth'])->group(function () {
    // Logout
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');
    // Untuk Admin saat sudah login
    Route::get('admin/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/produk', [AdminController::class, 'produk'])->name('admin.produk');
    Route::get('admin/produk/create', [AdminController::class, 'createproduk'])->name('admin.produkcreate');
    Route::post('admin/produk/store', [AdminController::class, 'store'])->name('admin.store');
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/1', function () {
    return view('admin.index');
});


Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/DetaiProduk', [UserController::class, 'detailproduk'])->name('user.produk');


Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('showlogin');
Route::get('admin/', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/produk', [AdminController::class, 'produk'])->name('admin.produk');
Route::get('admin/produk/create', [AdminController::class, 'createproduk'])->name('admin.produkcreate');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.index');
});


Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/DetaiProduk', [UserController::class, 'detailproduk'])->name('user.produk');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});
Route::resource('kategori',CategoryController::class)
->except('show','destroy','create');
Route::resource('pelanggan',CustomerController::class)
->except('destroy');

Route::resource('produk',ProductController::class);
Route::resource('pengguna',UserController::class)->except('destroy','create','show','update','edit');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});
Route::resource('kategori',CategoryController::class)
->except('show','destroy','create');
Route::resource('pelanggan',CustomerController::class)
->except('destroy');
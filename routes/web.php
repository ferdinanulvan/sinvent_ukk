<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\KategoriController;
use \App\Http\Controllers\BarangController;
use \App\Http\Controllers\BarangMasukController;
use \App\Http\Controllers\BarangKeluarController;
use \App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('/products', \App\Http\Controllers\ProductController::class);
    Route::resource('/kategori', \App\Http\Controllers\KategoriController::class);
    Route::resource('/category', \App\Http\Controllers\CategoryController::class);
    Route::resource('/barang', \App\Http\Controllers\BarangController::class);
    Route::resource('/barangmasuk', \App\Http\Controllers\BarangMasukController::class);
    Route::resource('/barangkeluar', \App\Http\Controllers\BarangKeluarController::class);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    
});
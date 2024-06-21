<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\KategoriController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/showkategori', [KategoriController::class, 'showAPIKategori']);
Route::post('editkategori/{kategori_id}', [KategoriController::class, 'updateAPIKategori']);
Route::post('createkategori',[KategoriController::class, 'createAPIKategori']);
Route::delete('deletekategori/{kategori_id}',[KategoriController::class, 'deleteAPIKategori']);
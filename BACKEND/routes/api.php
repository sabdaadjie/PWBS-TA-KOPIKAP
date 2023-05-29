<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Kategori;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route untuk tampil data
Route::get('/tampil', [Produk::class, 'tampil']);
// Route Untuk detail
Route::get('/detail/{parameter}', [Produk::class, 'detail']);
// Route Untuk hapus data
Route::delete('/delete/{parameter}', [Produk::class, 'delete']);
// Route Untuk tambah data
Route::post('/insert', [Produk::class, 'insert']);
// Route untuk update data kamar
Route::put('/updateProduk/{parameter}', [Produk::class, 'updateProduk']);


// Route untuk tampil data kategori
Route::get('/tampilkategori', [Kategori::class, 'tampilkategori']);
// Route untuk tampil data kategori
Route::get('/detailkategori/{parameter}', [Kategori::class, 'detailkategori']); 
// Route Untuk hapus data kategori
Route::delete('/deletekategori/{parameter}', [Kategori::class, 'deletekategori']);
// Route Untuk tambah data kategori
Route::post('/insertkategori', [Kategori::class, 'insertkategori']);
// Route untuk update data kategori
Route::put('/updateKategori/{parameter}', [Kategori::class, 'updateKategori']);
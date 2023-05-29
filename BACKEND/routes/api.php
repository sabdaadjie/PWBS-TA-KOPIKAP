<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Merek;

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

// Route untuk tampil data merek
Route::get('/tampilmerek', [Merek::class, 'tampilmerek']);
// Route untuk tampil data merek
Route::get('/detailmerek/{parameter}', [Merek::class, 'detailmerek']); 
// Route Untuk hapus data merek
Route::delete('/deletemerek/{parameter}', [Merek::class, 'deletemerek']);
// Route Untuk tambah data merek
Route::post('/insertmerek', [Merek::class, 'insertmerek']);
// Route untuk update data kategori
Route::put('/updateMerek/{parameter}', [Merek::class, 'updateMerek']);

// Route untuk tampil data merek
Route::get('/tampilmerek', [Merek::class, 'tampilmerek']);
// Route untuk tampil data merek
Route::get('/detailmerek/{parameter}', [Merek::class, 'detailmerek']); 
// Route Untuk hapus data merek
Route::delete('/deletemerek/{parameter}', [Merek::class, 'deletemerek']);
// Route Untuk tambah data merek
Route::post('/insertmerek', [Merek::class, 'insertmerek']);
// Route untuk update data kategori
Route::put('/updateMerek/{parameter}', [Merek::class, 'updateMerek']);

// Route untuk tampil data user
Route::get('/tampiluser', [User::class, 'tampiluser']);
// Route untuk tampil data user
Route::get('/detailuser/{parameter}', [User::class, 'detailuser']); 
// Route Untuk hapus data user
Route::delete('/deleteuser/{parameter}', [User::class, 'deleteuser']);
// Route Untuk tambah data user
Route::post('/insertuser', [User::class, 'insertuser']);
// Route untuk update data user
Route::put('/updateUser/{parameter}', [User::class, 'updateUser']);
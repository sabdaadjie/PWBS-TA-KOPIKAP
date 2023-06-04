<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Merek;
use App\Http\Controllers\User;
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

// Route untuk tampil data produk
Route::get('/tampil', [Produk::class, 'tampil']);
//route untuk tampil data produk join tbl_kategori join tbl_merek
Route::get('/tampilrelasi', [Produk::class, 'tampilrelasi']);
// Route Untuk detail produk
Route::get('/detail/{parameter}', [Produk::class, 'detail']);
// Route Untuk hapus data produk
Route::delete('/delete/{parameter}', [Produk::class, 'delete']);
// Route Untuk tambah data produk
Route::post('/insert', [Produk::class, 'insert']);
// Route untuk update data produk
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

// Route untuk tampil produk per kategori   

// Route untuk tampil produk per laptop
Route::get('/tampillaptop', [Produk::class, 'tampillaptop']);
// Route untuk tampil produk per monitor
Route::get('/tampilmonitor', [Produk::class, 'tampilmonitor']);
// Route untuk tampil produk per keyboard
Route::get('/tampilkeyboard', [Produk::class, 'tampilkeyboard']);
// Route untuk tampil produk per mouse
Route::get('/tampilmouse', [Produk::class, 'tampilmouse']);
// Route untuk tampil produk per printer
Route::get('/tampilprinter', [Produk::class, 'tampilprinter']);
// Route untuk tampil produk per speaker
Route::get('/tampilspeaker', [Produk::class, 'tampilspeaker']);
// Route untuk tampil produk per headset
Route::get('/tampilheadset', [Produk::class, 'tampilheadset']);
// Route untuk tampil produk per catridge
Route::get('/tampilcatridge', [Produk::class, 'tampilcatridge']);
// Route untuk tampil produk per hardisk
Route::get('/tampilhardisk', [Produk::class, 'tampilhardisk']);
// Route untuk tampil produk per flashdisk
Route::get('/tampilflashdisk', [Produk::class, 'tampilflashdisk']);
// Route untuk tampil produk per ram
Route::get('/tampilram', [Produk::class, 'tampilram']);
// Route untuk tampil produk per powersupply
Route::get('/tampilpowersupply', [Produk::class, 'tampilpowersupply']);
// Route untuk tampil produk per motherboard
Route::get('/tampilmotherboard', [Produk::class, 'tampilmotherboard']);
// Route untuk tampil produk per processor
Route::get('/tampilprocessor', [Produk::class, 'tampilprocessor']);
// Route untuk tampil produk per cooler
Route::get('/tampilcooler', [Produk::class, 'tampilcooler']);
// Route untuk tampil produk per casingpc
Route::get('/tampilcasingpc', [Produk::class, 'tampilcasingpc']);
// Route untuk tampil produk per networkadapter
Route::get('/tampilnetworkadapter', [Produk::class, 'tampilnetworkadapter']);
// Route untuk tampil produk per webcam
Route::get('/tampilwebcam', [Produk::class, 'tampilwebcam']);


// Route untuk tampil produk per merek

// Route untuk tampil produk per asus
Route::get('/tampilasus', [Produk::class, 'tampilasus']);
// Route untuk tampil produk per acer
Route::get('/tampilacer', [Produk::class, 'tampilacer']);
// Route untuk tampil produk per toshiba
Route::get('/tampiltoshiba', [Produk::class, 'tampiltoshiba']);
// Route untuk tampil produk per msi
Route::get('/tampilmsi', [Produk::class, 'tampilmsi']);
// Route untuk tampil produk per apple
Route::get('/tampilapple', [Produk::class, 'tampilapple']);
// Route untuk tampil produk per samsung
Route::get('/tampilsamsung', [Produk::class, 'tampilsamsung']);
// Route untuk tampil produk per hp
Route::get('/tampilhp', [Produk::class, 'tampilhp']);
// Route untuk tampil produk per lenovo
Route::get('/tampillenovo', [Produk::class, 'tampillenovo']);
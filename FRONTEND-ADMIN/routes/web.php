<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });


// route untuk dashboard
Route::get('/', [AdminController::class, 'index'])->name('layout.dashboard');

// Route untuk panggil view user
Route::get("/user", [AdminController::class, 'user']);

// Route untuk panggil view produk
Route::get("/produk", [AdminController::class, 'produk']);

// Route Untuk panggil view merek
Route::get("/merek", [AdminController::class, 'merek']);

// Route untuk panggil view kategori
Route::get("/kategori", [AdminController::class, 'kategori']);

// Route Untuk Hapus Data
Route::delete("/delete/{parameter}", [AdminController::class, 'delete']);

// Route untuk simpan
Route::post("/insert", [AdminController::class, 'insert']);

// Route untuk panggil view profile
Route::get("/profile", [AdminController::class, 'profile'])->name('profile');

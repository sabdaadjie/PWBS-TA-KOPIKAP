<?php

use App\Http\Controllers\ViewUser;
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


Route::get("/", [ViewUser::class, 'brand']);

// Route untuk kategori
Route::get("kategori", [ViewUser::class, 'kategori']);

// Route untuk brand
Route::get("brand", [ViewUser::class, 'brand']);

// Route untuk about
Route::get("about", [ViewUser::class, 'about']);

// Route untuk contact
Route::get("contact", [ViewUser::class, 'contact']);


//route untuk detail data user
Route::get('show/{parameter}', [ViewUser::class, 'show'])->name('show/{parameter}');

Route::get('search', [ViewUser::class, 'search'])->name('search');
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

Route::get('/', function () {
    return view('Vuser/home');
});

// Route untuk kategori
Route::get("Vuser/kategori", [ViewUser::class, 'kategori']);

// Route untuk brand
Route::get("Vuser/brand", [ViewUser::class, 'brand']);

// Route untuk lokasi
Route::get("Vuser/lokasi", [ViewUser::class, 'lokasitoko']);

// Route untuk contact
Route::get("Vuser/contact", [ViewUser::class, 'contact']);
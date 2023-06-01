<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MProduk extends Model
{
    protected $table ='tbl_produk';

    function tampilData()
    {
    $query = DB::table('tbl_produk')
            ->select(
                "Id_Produk",
                "Nama_Produk",
                "Harga",
                "Stok_Produk",
                "Spesifikasi",
                "Foto_Produk",
                "Kategori",
                "Model"
            )
            ->orderBy("Id_Produk")
            ->get();

        return $query;
    }

    function detailData($parameter){
        $query = DB::table('tbl_produk')
        ->select(
                "Id_Produk",
                "Nama_Produk",
                "Harga",
                "Stok_Produk",
                "Spesifikasi",
                "Foto_Produk",
                "Kategori",
                "Model", 
        )
        ->where(DB::raw("Id_produk"), "=", $parameter)
        ->orderBy("Id_Produk")
        ->get();

        return $query;
    }

    // buat fungsi delete data
    function deleteData($parameter)
    {
        DB::table("tbl_produk")
            ->where(DB::raw("Id_Produk"), '=', $parameter)
            ->delete();
    }
    
    // buat fungsi tambah data
    function saveData($Id_produk, $Nama_Produk, $Harga, $Stok_Produk, $Spesifikasi, $Foto_Produk,$Kategori, $Model)
    {
        DB::table("tbl_produk")
        ->insert([
            "Id_Produk" => $Id_produk,
            "Nama_Produk" => $Nama_Produk,
            "Harga" => $Harga,
            "Stok_Produk" => $Stok_Produk,
            "Spesifikasi" => $Spesifikasi,
            "Foto_Produk" => $Foto_Produk,
            "Kategori" => $Kategori,
            "Model" => $Model
        ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function checkUpdate($Id_Produk_Lama, $Id_Produk_baru)
    {
        // tampilkan data
        $query = DB::table("tbl_produk")
            ->select("Id_Produk")
            ->where("Id_Produk", "=", $Id_Produk_baru)
            ->where(DB::raw("(Id_Produk)"), "!=", $Id_Produk_Lama)
            ->get();

        return $query;
    }

    // Update Data Kamar
    function updateData(
        $Id_Produk,
        $Nama_Produk, 
        $Harga, 
        $Stok_Produk, 
        $Spesifikasi, 
        $Foto_Produk, 
        $Kategori, 
        $Model,
        $Id_Produk_Lama
    ) {
        DB::table("tbl_produk")
            ->where(DB::raw("Id_Produk"), "=", $Id_Produk_Lama)
            ->update([
            "Id_Produk" => $Id_Produk,
            "Nama_Produk" => $Nama_Produk,
            "Harga" => $Harga,
            "Stok_Produk" => $Stok_Produk,
            "Spesifikasi" => $Spesifikasi,
            "Foto_Produk" => $Foto_Produk,
            "Kategori" => $Kategori,
            "Model" => $Model
            ]);
    }
}

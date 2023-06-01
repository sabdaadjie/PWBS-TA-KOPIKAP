<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MKategori extends Model
{
    protected $table ='tbl_kategori';

    function tampilDataKategori()
    {
    $query = DB::table('tbl_kategori')
            ->select(
                "Id_Kategori",
                "Nama_Kategori",
            )
            ->orderBy("Id_Kategori")
            ->get();

        return $query;
    }

    function detailDataKategori($parameter){
        $query = DB::table('tbl_kategori')
        ->select(
                "Id_Kategori",
                "Nama_Kategori",
        )
        ->where(DB::raw("Id_Kategori"), "=", $parameter)
        ->orderBy("Id_Kategori")
        ->get();

        return $query;
    }

    // buat fungsi delete data
    function deleteDataKategori($parameter)
    {
        DB::table("tbl_kategori")
            ->where(DB::raw("Id_Kategori"), '=', $parameter)
            ->delete();
    }

    // buat fungsi tambah data
    function saveDataKategori($Id_Kategori, $Nama_Kategori)
    {
        DB::table("tbl_kategori")
        ->insert([
            "Id_Kategori" => $Id_Kategori,
            "Nama_Kategori" => $Nama_Kategori,
        ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function CekUpdateKategori($Id_Kategori_Lama, $Id_Kategori_baru)
    {
        // tampilkan data
        $query = DB::table("tbl_kategori")
            ->select("Id_Kategori")
            ->where("Id_Kategori", "=", $Id_Kategori_baru)
            ->where(DB::raw("(Id_Kategori)"), "!=", $Id_Kategori_Lama)
            ->get();

        return $query;
    }

    // Update Data Kamar
    function updateDataKategori(
        $Id_Kategori,
        $Nama_Kategori, 
        $Id_Kategori_Lama
    ) {
        DB::table("tbl_kategori")
            ->where(DB::raw("Id_Kategori"), "=", $Id_Kategori_Lama)
            ->update([
            "Id_Kategori" => $Id_Kategori,
            "Nama_Kategori" => $Nama_Kategori,
            ]);
    }
}

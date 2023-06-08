<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MMerek extends Model
{
    protected $table ='tbl_merek';

    function tampilDataMerek()
    {
    $query = DB::table('tbl_merek')
            ->select(
                "Id_Merek",
                "Nama_Merek",
            )
            ->orderBy("Id_Merek")
            ->get();

        return $query;
    }

    function detailDataMerek($parameter){
        $query = DB::table('tbl_merek')
        ->select(
                "Id_Merek",
                "Nama_Merek",
        )
        ->where(DB::raw("Id_Merek"), "=", $parameter)
        ->orderBy("Id_Merek")
        ->get();

        return $query;
    }

    // buat fungsi delete data
    function deleteDataMerek($parameter)
    {
        DB::table("tbl_merek")
            ->where(DB::raw("Id_Merek"), '=', $parameter)
            ->delete();
    }

    // buat fungsi tambah data
    function saveDataMerek($Id_Merek, $Nama_Merek)
    {
        DB::table("tbl_merek")
        ->insert([
            "Id_Merek" => $Id_Merek,
            "Nama_Merek" => $Nama_Merek,
        ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function CekUpdateMerek($Id_Merek_Lama, $Id_Merek_baru)
    {
        // tampilkan data
        $query = DB::table("tbl_merek")
            ->select("Id_Merek")
            ->where("Id_Merek", "=", $Id_Merek_baru)
            ->where(DB::raw("(Id_Merek)"), "!=", $Id_Merek_Lama)
            ->get();

        return $query;
    }

    // Update Data merek
    function updateDataMerek(
        $Id_Merek,
        $Nama_Merek, 
        $Id_Merek_Lama
    ) {
    DB::table("tbl_merek")
            ->where(DB::raw("Id_Merek"), "=", $Id_Merek_Lama)
            ->update([
            "Id_Merek" => $Id_Merek,
            "Nama_Merek" => $Nama_Merek,
            ]);
    }
}

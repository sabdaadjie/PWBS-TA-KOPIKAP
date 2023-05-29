<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MUser extends Model
{
    protected $table ='tbl_user';

    function tampilDataUser()
    {
    $query = DB::table('tbl_user')
            ->select(
                "Id_User",
                "Nama",
            )
            ->orderBy("Id_User")
            ->get();

        return $query;
    }

    function detailDataUser($parameter){
        $query = DB::table('tbl_user')
        ->select(
                "Id_User",
                "Nama",
                "email",
                "password",
                "role",
        )
        ->where(DB::raw("Id_User"), "=", $parameter)
        ->orderBy("Id_User")
        ->get();

        return $query;
    }

    // buat fungsi delete data
    function deleteDataUser($parameter)
    {
        DB::table("tbl_user")
            ->where(DB::raw("Id_User"), '=', $parameter)
            ->delete();
    }

    // buat fungsi tambah data
    function saveDataUser($Id_User, $Nama, $email, $password, $role)
    {
        DB::table("tbl_user")
        ->insert([
            "Id_User" => $Id_User,
            "Nama" => $Nama,
            "email" => $email,
            "password" => $password,
            "role" => $role,
        ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function CekUpdateUser($Id_User_Lama, $Id_User_Baru)
    {
        // tampilkan data
        $query = DB::table("tbl_user")
            ->select("Id_User")
            ->where("Id_User", "=", $Id_User_Baru)
            ->where(DB::raw("(Id_User)"), "!=", $Id_User_Lama)
            ->get();

        return $query;
    }

    // Update Data Kamar
    function updateDataUser(
        $Id_User,
        $Nama, 
        $email, 
        $password, 
        $role, 
        $Id_User_Lama
    ) {
        DB::table("tbl_user")
            ->where(DB::raw("Id_User"), "=", $Id_User_Lama)
            ->update([
            "Id_User" => $Id_User,
            "Nama" => $Nama,
            "email" => $email,
            "password" => $password,
            "role" => $role,
            ]);
    }
}

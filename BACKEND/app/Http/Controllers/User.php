<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MUser;

class User extends Controller
{
    function __construct()
    {
        $this->model = new MUser();
    }

    // Function Untuk Tampil Data
    function tampiluser()
    {   // ambil fungsi dari viewData(dari Mkaryawan)
        $data = $this->model->tampilDataUser();

        // tampikan hasil dari "tbkaryawan"
        return response([
            "User" => $data
        ], http_response_code());
    }

    function detailuser($parameter)
    {   // ambil fungsi dari viewData(dari Mkaryawan)
        $data = $this->model->detailDataUser($parameter);

        // tampikan hasil dari "tbkaryawan"
        return response([
            "User" => $data
        ], http_response_code());
    }

    // buat fungsi untuk delete data
    function deleteuser($parameter)
    {
        // cek data dari tbl_karyawan
        //(berdasarkan nik)
        $data = $this->model->detailDataUser($parameter);

        // jika data ditemukan
        if (count($data) != 0) {
            // lakukan penghapusan data
            $data = $this->model->deleteDataUser($parameter);
            // buat pesan dan status hasil penghapusan data
            $status = 1;
            $pesan = "Data Berhasil di Hapus";
        }
        // jika data tidak ditemukan
        else {
            // tampilkan pesan data gagal dihapus
            $status = 1;
            $pesan = "Data Gagal di Hapus ! (NIK tidak ditemukan !)";
        }

        // tampilkan hasil respon

        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // buat function untuk insert data
    function insertuser(Request $req)
    {
        // ambil data hasil input
        $data = array(
            "Id_User" => $req->Id_User,
            "Nama" => $req->Nama,
            "email" => $req->email,
            "password" => $req->password,
            "role" => $req->role,
        );
        // baruu
        $parameter =($data["Id_User"]);
        // cek apakah data karyawan (nik) sudah pernah tersimpan/belum
        $check = $this->model->detailDataUser($parameter);


        // jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukan proses penyimpanan
            $this->model->saveDataUser($data["Id_User"], $data["Nama"], $data["email"], $data["password"], $data["role"]);
            // buat pesan dan status hasil penyimpanan data
            $status = 1;
            $pesan = "Data Berhasil disimpan";
        }
        // jika data tidak ditemukan
        else {

            // tampilkan pesan data gagal disimpan
            $status = 0;
            $pesan = "Data Gagal disimpan";
        }
        // tampilkan hasil respon

        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Update Data Kamar
    function updateUser(
        $parameter,
        Request $req
    ) {
        // Ambil data hasil input
        $data = array(
            "Id_User" => $req->Id_User,
            "Nama" => $req->Nama,
            "email" => $req->email,
            "password" => $req->password,
            "role" => $req->role,
        );

        // Cek apakah data kamar tersedia/tidak
        $cek = $this->model->CekUpdateUser($parameter, $data["Id_User"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data kamar
            $this->model->updateDataUser(
                $data["Id_User"],
                $data["Nama"],
                $data["email"],
                $data["password"],
                $data["role"],
                $parameter
            );
            // tampilkan pesan
            $status = "1";
            $pesan = "Data Berhasil di Ubah";
        }
        // Jika data tidak ditemukan
        else {
            $status = 0;
            $pesan = "Data Gagal Diubah ! (Kode_Kamar Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}

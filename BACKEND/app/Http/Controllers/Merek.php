<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MMerek;

class Merek extends Controller
{
    function __construct()
    {
        $this->model = new MMerek();
    }

    // Function Untuk Tampil Data
    function tampilmerek()
    {   // ambil fungsi dari viewData(dari Mkaryawan)
        $data = $this->model->tampilDataMerek();

        // tampikan hasil dari "tbkaryawan"
        return response([
            "Merek" => $data
        ], http_response_code());
    }

    function detailmerek($parameter)
    {   // ambil fungsi dari viewData(dari Mkaryawan)
        $data = $this->model->detailDataMerek($parameter);



        // tampikan hasil dari "tbkaryawan"
        return response([
            "Merek" => $data
        ], http_response_code());
    }

    // buat fungsi untuk delete data
    function deletemerek($parameter)
    {
        // cek data dari tbl_karyawan
        //(berdasarkan nik)
        $data = $this->model->detailDataMerek($parameter);

        // jika data ditemukan
        if (count($data) != 0) {
            // lakukan penghapusan data
            $data = $this->model->deleteDataMerek($parameter);
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
    function insertmerek(Request $req)
    {
        // ambil data hasil input
        $data = array(
            "Id_Merek" => $req->Id_Merek,
            "Nama_Merek" => $req->Nama_Merek,
        );
        // baruu
        $parameter =($data["Id_Merek"]);
        // cek apakah data karyawan (nik) sudah pernah tersimpan/belum
        $check = $this->model->detailDataMerek($parameter);


        // jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukan proses penyimpanan
            $this->model->saveDataMerek($data["Id_Merek"], $data["Nama_Merek"]);
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
    function updateMerek(
        $parameter,
        Request $req
    ) {
        // Ambil data hasil input
        $data = array(
            "Id_Merek" => $req->Id_Merek,
            "Nama_Merek" => $req->Nama_Merek,
        );

        // Cek apakah data kamar tersedia/tidak
        $cek = $this->model->CekUpdateMerek($parameter, $data["Id_Merek"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data kamar
            $this->model->updateDataMerek(
                $data["Id_Merek"],
                $data["Nama_Merek"],
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MKategori;

class Kategori extends Controller
{
    function __construct()
    {
        $this->model = new MKategori();
    }

    // Function Untuk Tampil Data Kategori
    function tampilkategori()
    {   // ambil fungsi dari tampilDataKategori(dari MKategori)
        $data = $this->model->tampilDataKategori();

        // tampikan hasil dari "tbl_kategori"
        return response([
            "tampilkategori" => $data
        ], http_response_code());
    }

    function detailKategori($parameter)
    {   // ambil fungsi dari viewData(dari MKategori)
        $data = $this->model->detailDataKategori($parameter);

        // tampikan hasil dari "tbl_kategori"
        return response([
            "tampildetailkategori" => $data
        ], http_response_code());
    }

    // buat fungsi untuk delete data
    function deleteKategori($parameter)
    {
        // cek data dari tbl_kategori
        //(berdasarkan Id_Kategori)
        $data = $this->model->detailDataKategori($parameter);

        // jika data ditemukan
        if (count($data) != 0) {
            // lakukan penghapusan data
            $data = $this->model->deleteDataKategori($parameter);
            // buat pesan dan status hasil penghapusan data
            $status = 1;
            $pesan = "Data Berhasil di Hapus";
        }
        // jika data tidak ditemukan
        else {
            // tampilkan pesan data gagal dihapus
            $status = 1;
            $pesan = "Data Gagal di Hapus ! (Id_Kategori tidak ditemukan !)";
        }

        // tampilkan hasil respon

        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // buat function untuk insert data
    function insertkategori(Request $req)
    {
        // ambil data hasil input
        $data = array(
            "Id_Kategori" => $req->Id_Kategori,
            "Nama_Kategori" => $req->Nama_Kategori,
        );
        // baruu
        $parameter =($data["Id_Kategori"]);
        // cek apakah data Kategori (Id_Kategori) sudah pernah tersimpan/belum
        $check = $this->model->detailDataKategori($parameter);


        // jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukan proses penyimpanan
            $this->model->saveDataKategori($data["Id_Kategori"], $data["Nama_Kategori"]);
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

    // Function untuk Update Data Kategori
    function updateKategori(
        $parameter,
        Request $req
    ) {
        // Ambil data hasil input
        $data = array(
            "Id_Kategori" => $req->Id_Kategori,
            "Nama_Kategori" => $req->Nama_Kategori,
        );

        // Cek apakah data kategori tersedia/tidak
        $cek = $this->model->CekUpdateKategori($parameter, $data["Id_Kategori"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data kategori
            $this->model->updateDataKategori(
                $data["Id_Kategori"],
                $data["Nama_Kategori"],
                $parameter
            );
            // tampilkan pesan
            $status = "1";
            $pesan = "Data Berhasil di Ubah";
        }
        // Jika data tidak ditemukan
        else {
            $status = 0;
            $pesan = "Data Gagal Diubah ! (Id_Kategori Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}

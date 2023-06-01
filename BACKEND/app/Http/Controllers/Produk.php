<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MProduk;

class Produk extends Controller
{
    function __construct()
    {
        $this->model = new MProduk();
    }

    // Function Untuk Tampil Data
    function tampil()
    {   // ambil fungsi dari viewData(dari Mkaryawan)
        $data = $this->model->tampilData();

        // tampikan hasil dari "tbkaryawan"
        return response([
            "Produk" => $data
        ], http_response_code());
    }

    function detail($parameter)
    {   // ambil fungsi dari viewData(dari Mkaryawan)
        $data = $this->model->detailData($parameter);

        // tampikan hasil dari "tbkaryawan"
        return response([
            "Produk" => $data
        ], http_response_code());
    }

    // buat fungsi untuk delete data
    function delete($parameter)
    {
        // cek data dari tbl_karyawan
        //(berdasarkan nik)
        $data = $this->model->detailData($parameter);

        // jika data ditemukan
        if (count($data) != 0) {
            // lakukan penghapusan data
            $data = $this->model->deleteData($parameter);
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
    function insert(Request $req)
    {
        // ambil data hasil input
        $data = array(
            "Id_Produk" => $req->Id_Produk,
            "Nama_Produk" => $req->Nama_Produk,
            "Harga" => $req->Harga,
            "Stok_Produk" => $req->Stok_Produk,
            "Spesifikasi" => $req->Spesifikasi,
            "Foto_Produk" => $req->Foto_produk,
            "Kategori" => $req->Kategori,
            "Model" => $req->Model,

        );
        // baruu
        $parameter =($data["Id_Produk"]);
        // cek apakah data karyawan (nik) sudah pernah tersimpan/belum
        $check = $this->model->detailData($parameter);


        // jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukan proses penyimpanan
            $this->model->saveData($data["Id_Produk"], $data["Nama_Produk"], $data["Harga"], $data["Stok_Produk"], $data["Spesifikasi"], $data["Foto_Produk"],$data["Kategori"], $data["Model"]);
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
    function updateProduk(
        $parameter,
        Request $req
    ) {
        // Ambil data hasil input
        $data = array(
            "Id_Produk" => $req->Id_Produk,
            "Nama_Produk" => $req->Nama_Produk,
            "Harga" => $req->Harga,
            "Stok_Produk" => $req->Stok_Produk,
            "Spesifikasi" => $req->Spesifikasi,
            "Foto_Produk" => $req->Foto_Produk,
            "Kategori" => $req->Kategori,
            "Model" => $req->Model,
        );

        // Cek apakah data kamar tersedia/tidak
        $cek = $this->model->checkUpdate($parameter, $data["Id_Produk"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data kamar
            $this->model->updateData(
                $data["Id_Produk"],
                $data["Nama_Produk"],
                $data["Harga"],
                $data["Stok_Produk"],
                $data["Spesifikasi"],
                $data["Foto_Produk"],
                $data["Kategori"],
                $data["Model"],
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

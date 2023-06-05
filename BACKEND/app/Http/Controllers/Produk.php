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

     // Function untuk view detail data tbl_pesan join tbl_users join tbl_kamar join tbl_pesan
     function tampilRelasi()
     {
         // ambil function viewDataSewaJoin dari SewaModel
         $data = $this->model->tampilRelasiDataProduk();
 
         // Tampilkan hasil dari "tbl_sewa" join "tbl_users" join "tbl_kamar" join "tbl_pesan"
         return response([
             "Detail Tampil Data Relasi" => $data
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
            "Merek" => $req->Merek,

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

    // buat function untuk insert data
    function uploadgambar(Request $req)
    {
        // ambil data hasil input
        $data = array(
            "Id_Produk" => $req->Id_Produk,
            "Nama_Produk" => $req->Nama_Produk,
            "Harga" => $req->Harga,
            "Stok_Produk" => $req->Stok_Produk,
            "Spesifikasi" => $req->Spesifikasi,
            "Foto_Produk" => $req->file('Foto_Produk')->store('public/gambar'),
            "Kategori" => $req->Kategori,
            "Merek" => $req->Merek,

        );


        // baruu
        $parameter =($data["Id_Produk"]);
        // cek apakah data karyawan (nik) sudah pernah tersimpan/belum
        $check = $this->model->detailData($parameter);


        // jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukan proses penyimpanan
            $this->model->saveData($data["Id_Produk"], $data["Nama_Produk"], $data["Harga"], $data["Stok_Produk"], $data["Spesifikasi"], $data["Foto_Produk"],$data
            ["Kategori"], $data["Merek"]);
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

        // $result = $req->file('Foto_Produk')->store('public/img');
        // return ["result"=>$result];
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
            "Merek" => $req->Merek,
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
                $data["Merek"],
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


    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampillaptop()
    {
        // ambil function tampilLaptop dari MProduk
        $data = $this->model->tampilLaptop();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Laptop" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilmonitor()
    {
        // ambil function tampilMonitor dari MProduk
        $data = $this->model->tampilMonitor();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Monitor" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilkeyboard()
    {
        // ambil function tampilKeyboard dari MProduk
        $data = $this->model->tampilKeyboard();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Keyboard" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilmouse()
    {
        // ambil function tampilMouse dari MProduk
        $data = $this->model->tampilMouse();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Mouse" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilprinter()
    {
        // ambil function tampilPrinter dari MProduk
        $data = $this->model->tampilPrinter();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Printer" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilspeaker()
    {
        // ambil function tampilSpeaker dari MProduk
        $data = $this->model->tampilSpeaker();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Speaker" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilheadset()
    {
        // ambil function tampilHeadset dari MProduk
        $data = $this->model->tampilHeadset();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Headset" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilcatridge()
    {
        // ambil function tampilCatridge dari MProduk
        $data = $this->model->tampilCatridge();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Catridge" => $data
        ], http_response_code());
    } 

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilhardisk()
    {
        // ambil function tampilHardisk dari MProduk
        $data = $this->model->tampilHardisk();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Hardisk" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilflashdisk()
    {
        // ambil function tampilFlashdisk dari MProduk
        $data = $this->model->tampilFlashdisk();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Flashdisk" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilram()
    {
        // ambil function tampilRAM dari MProduk
        $data = $this->model->tampilRAM();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil RAM" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilpowersupply()
    {
        // ambil function tampilPowersupply dari MProduk
        $data = $this->model->tampilPowersupply();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Powersupply" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilmotherboard()
    {
        // ambil function tampilMotherboard dari MProduk
        $data = $this->model->tampilMotherboard();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Motherboard" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilprocessor()
    {
        // ambil function tampilProcessor dari MProduk
        $data = $this->model->tampilProcessor();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Processor" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilcooler()
    {
        // ambil function tampilCooler dari MProduk
        $data = $this->model->tampilCooler();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Cooler" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilcasingpc()
    {
        // ambil function tampilCasingPC dari MProduk
        $data = $this->model->tampilCasingPC();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil CasingPC" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilnetworkadapter()
    {
        // ambil function tampilNetworkAdapter dari MProduk
        $data = $this->model->tampilNetworkAdapter();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil NetworkAdapter" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilwebcam()
    {
        // ambil function tampilWebcam dari MProduk
        $data = $this->model->tampilWebcam();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Webcam" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilasus()
    {
        // ambil function tampilAsus dari MProduk
        $data = $this->model->tampilAsus();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Asus" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilacer()
    {
        // ambil function tampilAcer dari MProduk
        $data = $this->model->tampilAcer();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Acer" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampiltoshiba()
    {
        // ambil function tampilToshiba dari MProduk
        $data = $this->model->tampilToshiba();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Toshiba" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilmsi()
    {
        // ambil function tampilMSI dari MProduk
        $data = $this->model->tampilMSI();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil MSI" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilapple()
    {
        // ambil function tampilApple dari MProduk
        $data = $this->model->tampilApple();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Apple" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilsamsung()
    {
        // ambil function tampilSamsung dari MProduk
        $data = $this->model->tampilSamsung();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Samsung" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampilhp()
    {
        // ambil function tampilHP dari MProduk
        $data = $this->model->tampilHP();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil HP" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
    function tampillenovo()
    {
        // ambil function tampilLenovo dari MProduk
        $data = $this->model->tampilLenovo();

        // Tampilkan hasil dari tbl_produk join tbl_kategori join tbl_merek
        return response([
            "Tampil Lenovo" => $data
        ], http_response_code());
    }
}










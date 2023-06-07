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
    {   // ambil fungsi dari tampilData(dari MProduk)
        $data = $this->model->tampilData();

        // tampikan hasil dari "tbl_produk"
        return response([
            "Tampil Produk" => $data
        ], http_response_code());
    }

     // Function untuk view detail data tbl_produk join tbl_kategori join tbl_merek
     function tampilRelasi()
     {
         // ambil function tampilRelasiDataProduk dari MProduk
         $data = $this->model->tampilRelasiDataProduk();
 
         // Tampilkan hasil dari "tbl_produk" join "tbl_kategori" join "tbl_merek"
         return response([
             "Detail Tampil Data Relasi" => $data
         ], http_response_code());
     }

    function detail($parameter)
    {   // ambil fungsi dari detailData(dari MProduk)
        $data = $this->model->detailData($parameter);

        // tampikan hasil dari "tb_produk"
        return response([
            "Tampil Detail Produk" => $data
        ], http_response_code());
    }

    // buat fungsi untuk delete data
    function delete($parameter)
    {
        // cek data dari tbl_produk
        //(berdasarkan Id_Produk)
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
            $pesan = "Data Gagal di Hapus ! (Id_Produk tidak ditemukan !)";
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
        // cek apakah data produk (Id_Produk) sudah pernah tersimpan/belum
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
            "Foto_Produk" => $req->file('Foto_Produk')->move('foto'),
            "Kategori" => $req->Kategori,
            "Merek" => $req->Merek,

        );


        // baruu
        $parameter =($data["Id_Produk"]);
        // cek apakah data produk (Id_Produk) sudah pernah tersimpan/belum
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

    // Function untuk Update Data Produk
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

        // Cek apakah data Produk tersedia/tidak
        $cek = $this->model->checkUpdate($parameter, $data["Id_Produk"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data produk
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
            $pesan = "Data Gagal Diubah ! (Id_Produk Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }


    // Function untuk tampil produk per kategori laptop
    function tampillaptop()
    {
        // ambil function tampilLaptop dari MProduk
        $data = $this->model->tampilLaptop();

        // Tampilkan hasil produk per kategori Laptop
        return response([
            "Tampil Laptop" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori monitor
    function tampilmonitor()
    {
        // ambil function tampilMonitor dari MProduk
        $data = $this->model->tampilMonitor();

        // Tampilkan hasil produk per kategori Monitor
        return response([
            "Tampil Monitor" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori keyboard
    function tampilkeyboard()
    {
        // ambil function tampilKeyboard dari MProduk
        $data = $this->model->tampilKeyboard();

        // Tampilkan hasil produk per kategori Keyboard
        return response([
            "Tampil Keyboard" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori mouse
    function tampilmouse()
    {
        // ambil function tampilMouse dari MProduk
        $data = $this->model->tampilMouse();

        // Tampilkan hasil produk per kategori Mouse
        return response([
            "Tampil Mouse" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori printer
    function tampilprinter()
    {
        // ambil function tampilPrinter dari MProduk
        $data = $this->model->tampilPrinter();

        // Tampilkan hasil produk per kategori Printer
        return response([
            "Tampil Printer" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori speaker
    function tampilspeaker()
    {
        // ambil function tampilSpeaker dari MProduk
        $data = $this->model->tampilSpeaker();

        // Tampilkan hasil produk per kategori Speaker
        return response([
            "Tampil Speaker" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori headset
    function tampilheadset()
    {
        // ambil function tampilHeadset dari MProduk
        $data = $this->model->tampilHeadset();

        // Tampilkan hasil produk per kategori Headset
        return response([
            "Tampil Headset" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori catridge
    function tampilcatridge()
    {
        // ambil function tampilCatridge dari MProduk
        $data = $this->model->tampilCatridge();

        // Tampilkan hasil produk per kategori Catridge
        return response([
            "Tampil Catridge" => $data
        ], http_response_code());
    } 

    // Function untuk tampil produk per kategori hardisk
    function tampilhardisk()
    {
        // ambil function tampilHardisk dari MProduk
        $data = $this->model->tampilHardisk();

        // Tampilkan hasil produk per kategori Hardisk
        return response([
            "Tampil Hardisk" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori flashdisk
    function tampilflashdisk()
    {
        // ambil function tampilFlashdisk dari MProduk
        $data = $this->model->tampilFlashdisk();

        // Tampilkan hasil produk per kategori Flashdisk
        return response([
            "Tampil Flashdisk" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori RAM
    function tampilram()
    {
        // ambil function tampilRAM dari MProduk
        $data = $this->model->tampilRAM();

        // Tampilkan hasil produk per kategori RAM
        return response([
            "Tampil RAM" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori powersupply
    function tampilpowersupply()
    {
        // ambil function tampilPowersupply dari MProduk
        $data = $this->model->tampilPowersupply();

        // Tampilkan hasil produk per kategori Powersupply
        return response([
            "Tampil Powersupply" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori motherboard
    function tampilmotherboard()
    {
        // ambil function tampilMotherboard dari MProduk
        $data = $this->model->tampilMotherboard();

        // Tampilkan hasil produk per kategori Motherboard
        return response([
            "Tampil Motherboard" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori processor
    function tampilprocessor()
    {
        // ambil function tampilProcessor dari MProduk
        $data = $this->model->tampilProcessor();

        // Tampilkan hasil produk per kategori Processor
        return response([
            "Tampil Processor" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori cooler
    function tampilcooler()
    {
        // ambil function tampilCooler dari MProduk
        $data = $this->model->tampilCooler();

        // Tampilkan hasil produk per kategori Cooler
        return response([
            "Tampil Cooler" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori casingpc
    function tampilcasingpc()
    {
        // ambil function tampilCasingPC dari MProduk
        $data = $this->model->tampilCasingPC();

        // Tampilkan hasil produk per kategori CasingPC
        return response([
            "Tampil CasingPC" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori networkadapter
    function tampilnetworkadapter()
    {
        // ambil function tampilNetworkAdapter dari MProduk
        $data = $this->model->tampilNetworkAdapter();

        // Tampilkan hasil produk per kategori NetworkAdapter
        return response([
            "Tampil NetworkAdapter" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per kategori webcam
    function tampilwebcam()
    {
        // ambil function tampilWebcam dari MProduk
        $data = $this->model->tampilWebcam();

        // Tampilkan hasil produk per kategori Webcam
        return response([
            "Tampil Webcam" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek asus 
    function tampilasus()
    {
        // ambil function tampilAsus dari MProduk
        $data = $this->model->tampilAsus();

        // Tampilkan hasil produk per merek ASUS
        return response([
            "Tampil Asus" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek acer
    function tampilacer()
    {
        // ambil function tampilAcer dari MProduk
        $data = $this->model->tampilAcer();

        // Tampilkan hasil produk per merek ACER
        return response([
            "Tampil Acer" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek toshiba
    function tampiltoshiba()
    {
        // ambil function tampilToshiba dari MProduk
        $data = $this->model->tampilToshiba();

        // Tampilkan hasil produk per merek Toshiba
        return response([
            "Tampil Toshiba" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek MSI
    function tampilmsi()
    {
        // ambil function tampilMSI dari MProduk
        $data = $this->model->tampilMSI();

        // Tampilkan hasil produk per merek MSI
        return response([
            "Tampil MSI" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek apple
    function tampilapple()
    {
        // ambil function tampilApple dari MProduk
        $data = $this->model->tampilApple();

        // Tampilkan hasil produk per merek Apple
        return response([
            "Tampil Apple" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek samsung
    function tampilsamsung()
    {
        // ambil function tampilSamsung dari MProduk
        $data = $this->model->tampilSamsung();

        // Tampilkan hasil produk per merek Samsung
        return response([
            "Tampil Samsung" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek HP
    function tampilhp()
    {
        // ambil function tampilHP dari MProduk
        $data = $this->model->tampilHP();

        // Tampilkan hasil produk per merek HP
        return response([
            "Tampil HP" => $data
        ], http_response_code());
    }

    // Function untuk tampil produk per merek Lenovo
    function tampillenovo()
    {
        // ambil function tampilLenovo dari MProduk
        $data = $this->model->tampilLenovo();

        // Tampilkan hasil produk per merek Lenovo
        return response([
            "Tampil Lenovo" => $data
        ], http_response_code());
    }
}










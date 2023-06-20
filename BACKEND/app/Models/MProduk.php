<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MProduk extends Model
{
    protected $table ='tbl_produk';

    protected $fillable = ['Id_Produk','Nama_Produk', 'Harga', 'Stok_Produk', 'Spesifikasi','Foto_Produk', 'Kategori', 'Merek'];
    // buat fungsi tambah data produk
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
                "Merek"
            )
            ->orderBy("Id_Produk")
            ->get();

        return $query;
    }

    // Tampil Data tbl_produk Join tb_produk join tbl_kategori join tbl_merek
    function tampilRelasiDataProduk()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->get();

        return $query;
    }


    // buat fungsi detail data produk
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
                "Merek", 
        )
        ->where(DB::raw("Id_produk"), "=", $parameter)
        ->orderBy("Id_Produk")
        ->get();

        return $query;
    }

    // buat fungsi delete data produk
    function deleteData($parameter)
    {
        DB::table("tbl_produk")
            ->where(DB::raw("Id_Produk"), '=', $parameter)
            ->delete();
    }
    
    // buat fungsi tambah data produk
    function saveData($Id_produk, $Nama_Produk, $Harga, $Stok_Produk, $Spesifikasi, $Foto_Produk,$Kategori, $Merek)
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
            "Merek" => $Merek
        ]);
    }

    // Fungsi Untuk Cek Ubah Data produk
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

    // Update Data Produk
    function updateData(
        $Id_Produk,
        $Nama_Produk, 
        $Harga, 
        $Stok_Produk, 
        $Spesifikasi, 
        $Foto_Produk, 
        $Kategori, 
        $Merek,
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
            "Merek" => $Merek
            ]);
    }

    // tampil produk laptop
    function tampilLaptop()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk',
        'tbl_produk.Harga','tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Laptop')
        ->get();

        return $query;
    }

    // tampil produk monitor    
    function tampilMonitor()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Monitor')
        ->get();

        return $query;
    }

    // tampil produk keyboard    
    function tampilKeyboard()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Keyboard')
        ->get();

        return $query;
    }

    // tampil produk mouse    
    function tampilMouse()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'MOUSE')
        ->get();

        return $query;
    }

    // tampil produk printer    
    function tampilPrinter()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Printer')
        ->get();

        return $query;
    }

    // tampil produk catridge    
    function tampilCatridge()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Catridge')
        ->get();

        return $query;
    }

    // tampil produk speaker   
    function tampilSpeaker()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Speaker')
        ->get();

        return $query;
    }

    // tampil produk headset    
    function tampilHeadset()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Headset')
        ->get();

        return $query;
    }

    // tampil produk hardisk    
    function tampilHardisk()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Hardisk')
        ->get();

        return $query;
    }

    // tampil produk flashdisk   
    function tampilFlashdisk()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Flashdisk')
        ->get();

        return $query;
    }

    // tampil produk ram   
    function tampilRAM()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'RAM')
        ->get();

        return $query;
    }

    // tampil produk powersupply   
    function tampilPowersupply()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Powersupply')
        ->get();

        return $query;
    }

    // tampil produk motherboard   
    function tampilMotherboard()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Motherboard')
        ->get();

        return $query;
    }

    // tampil produk processor   
    function tampilProcessor()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Processor')
        ->get();

        return $query;
    }

    // tampil produk cooler   
    function tampilCooler()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Cooler')
        ->get();

        return $query;
    }

    // tampil produk casingpc   
    function tampilCasingPC()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'CasingPC')
        ->get();

        return $query;
    }

    // tampil produk networkadapter   
    function tampilNetworkAdapter()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'NetworkAdapter')
        ->get();

        return $query;
    }

    // tampil produk webcam   
    function tampilWebcam()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.Id_Kategori', '=', 'tbl_produk.Kategori')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_kategori.Nama_Kategori','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
        'tbl_kategori.Nama_Kategori', 'tbl_produk.Merek')
        ->where('Nama_Kategori', 'Webcam')
        ->get();

        return $query;
    }

    // tampil produk merek ACER   
    function tampilAcer()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'Acer')
        ->get();

        return $query;
    }

    // tampil produk merek ASUS   
    function tampilAsus()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'Asus')
        ->get();

        return $query;
    }

    // tampil produk merek TOSHIBA   
    function tampilToshiba()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'Toshiba')
        ->get();

        return $query;
    }

    // tampil produk merek MSI   
    function tampilMSI()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'MSI')
        ->get();

        return $query;
    }

    // tampil produk merek apple   
    function tampilApple()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'Apple')
        ->get();

        return $query;
    }

    // tampil produk merek samsung   
    function tampilSamsung()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'Samsung')
        ->get();

        return $query;
    }

    // tampil produk merek hp   
    function tampilHP()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'HP')
        ->get();

        return $query;
    }

    // tampil produk merek lenovo   
    function tampilLenovo()
    {
        $query = DB::table('tbl_produk')
        ->join('tbl_merek', 'tbl_merek.Id_Merek', '=', 'tbl_produk.Merek')
        ->select('tbl_produk.Id_Produk','tbl_merek.Nama_Merek','tbl_produk.Nama_Produk','tbl_produk.Harga',
        'tbl_produk.Stok_Produk','tbl_produk.Spesifikasi','tbl_produk.Foto_Produk','tbl_produk.Kategori',
         'tbl_produk.Merek')
        ->where('Nama_Merek', 'Lenovo')
        ->get();

        return $query;
    }
}










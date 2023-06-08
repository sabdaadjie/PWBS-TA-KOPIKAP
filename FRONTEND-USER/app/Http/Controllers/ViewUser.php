<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str; 
class ViewUser extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat Fungsi index (tampil data kayrawan)
    // function brand()
    // {
    //     // $this->client = new \GuzzleHttp\Client();
    //     // echo env("API_URL");

    //     // untuk get dari data server
    //     $url = env("API_URL") . "tampillaptop";
    //     // echo $url;


    //     // ambil service "get" dari server
    //     $request = $this->client->get($url);


    //     // menampilkan hasil
    //     $response = $request->getBody();

    //     // tampilkan data
    //     // foreach (json_decode($response)->karyawan as $hasil) {
    //     //     echo $hasil->nama_karyawan."<br>";
    //     // }

    //     $data["result"] = json_decode($response);

    //     // panggil view "vw_karyawan"

    //     return view("brand", $data);
    // }

    function brand()
    {
        $client = new \GuzzleHttp\Client();
    
        // Mengambil data dari server pertama
        $url1 = env("API_URL") . "tampillaptop";
        $request1 = $client->get($url1);
        $response1 = $request1->getBody();
        $data1["result1"] = json_decode($response1);
    
        // Mengambil data dari server kedua
        $url2 = env("API_URL") . "tampilasus";
        $request2 = $client->get($url2);
        $response2 = $request2->getBody();
        $data2["result2"] = json_decode($response2);
    
        // Menggabungkan data dari kedua server
        $data = array_merge($data1, $data2);
    
        // Panggil view "brand" dan kirimkan data
        return view("brand", $data);
    }
    
    // Pepindahan link
    function kategori()
    {
        
        return view("kategori");
    }
    function about()
    {
   
        return view("about");
    }
    function contact()
    {
   
        return view("contact");
    }
}

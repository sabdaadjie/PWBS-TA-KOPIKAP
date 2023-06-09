<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        // untuk get dari data server
        $url = env("API_URL")."view";
        

        // ambil service "get" dari server
        $request = $this->client->get($url);
     
        // menampilkan hasil
        $response = $request->getBody();

        // tampilkan data
        // foreach (json_decode($response)->karyawan as $hasil) {
        //     echo $hasil->nama_karyawan."<br>";
        // }

        $data["result"] = json_decode($response);

        // panggil view "dashboard"

        return view("dashboard",$data);
    }

    function add()
    {
        // tampilkan view "vw_user"
        return view("vw_user");
    }
    
}

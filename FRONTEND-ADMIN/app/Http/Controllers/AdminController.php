<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();

    }

    function index()
    {
        // menampilkan halaman dashboard
        return view('layout.dashboard');
    }

       // buat fungsi tampil merek
    function merek()
    {
        // untuk get dari data server
        $url = env("API_URL")."tampilmerek";

        // ambil service "get" dari server
        $request = $this->client->get($url);

        // menampilkan hasil
        $response = $request->getBody();

        $data["result"] = json_decode($response);

        // panggil view "merek"
        return view("vw_merk",$data);
    }

    // buat fungsi tampil kategori
    function kategori()
    {
        // untuk get dari data server
        $url = env("API_URL")."tampilkategori";


        // ambil service "get" dari server
        $request = $this->client->get($url);

        // menampilkan hasil
        $response = $request->getBody();

        $data["result"] = json_decode($response);

        // panggil view "kategori"
        return view("vw_kategori",$data);
    }

    // buat fungsi tampil produk
    function produk()
    {
        // untuk get dari data server
        $url = env("API_URL")."tampilproduk";


        // ambil service "get" dari server
        $request = $this->client->get($url);

        // menampilkan hasil
        $response = $request->getBody();

        $data["result"] = json_decode($response);

        // panggil view "produk"
        return view("vw_produk",$data);
    }
    
    // buat fungsi tampil user
    function user()
    {
        // untuk get dari data server
        $url = env("API_URL")."tampiluser";


        // ambil service "get" dari server
        $request = $this->client->get($url);

        // menampilkan hasil
        $response = $request->getBody();

        $data["result"] = json_decode($response);

        // panggil view "user"
        return view("vw_user",$data);
    }
    
    function profile()
    {
        // tampilkan view "vw_profile"
        return view("vw_profile");

    }

    // buat fungsi untuk simpan data
    function insert(Request $req)
    {
        // untuk post data ke server
        $url = env("API_URL")."insert";

        // ambil service "post" dari server
        $request = $this->client->post($url,[
            "form_params" => [
                "Id_Merek" => $req->Id_Merek,
                "Nama_Merek" => $req->Nama_Merek
            ]
        ]);

        // menampilkan hasil dari post server
        $response = $request->getBody();

        echo $response;
    }

        // fungsi untuk hapus data merek
        function delete($parameter)
        {
            $kode = base64_encode($parameter);
            // url untuk delete dari data server
            $url = env("API_URL")."delete/". $Id_Merek;
    
            // ambil service "delete" dari server
            $request = $this->client->delete($url);
    
            // menampilkan hasil dari delete server
            $response = $request->getBody();
            
            echo $response;
        }
    
}

<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function __construct()
    {
        $this->admin = new \GuzzleHttp\Client();

    }

    function home()
    {
        // menampilkan halaman dashboard
        return view('home');
    }
       // buat fungsi index (tampil )
    function merek()
    {
        // untuk get dari data server
        $url = env("API_URL")."tampilmerek";

        // ambil service "get" dari server
        $request = $this->admin->get($url);

        // menampilkan hasil
        $response = $request->getBody();

        $data["result"] = json_decode($response);

        // panggil view "merek"
        return view("vw_merk",$data);
    }

    function kategori()
    {
        // untuk get dari data server
        $url = env("API_URL")."tampilkategori";


        // ambil service "get" dari server
        $request = $this->admin->get($url);

        // menampilkan hasil
        $response = $request->getBody();

        $data["result"] = json_decode($response);

        // panggil view "kategori"
        return view("vw_kategori",$data);
    }

    function dashboard()
    {
        // menampilkan halaman dashboard
        return view('layout.dashboard');
    }
    
    function user()
    {
        // tampilkan view "vw_user"
        return view("vw_user");

    }

    function produk()
    {
        // tampilkan view "vw_produk"
        return view("vw_produk");

    }
    
    
    function profile()
    {
        // tampilkan view "vw_profile"
        return view("vw_profile");

    }
    
}

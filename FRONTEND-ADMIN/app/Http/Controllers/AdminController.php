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

        $data["result"] = json_decode($response);

        // panggil view "home"

        return view("home",$data);
    }

    public function dashboard()
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
    
    function kategori()
    {
        // tampilkan view "vw_kategori"
        return view("vw_kategori");

    }
    
    function merk()
    {
        // tampilkan view "vw_merk"
        return view("vw_merk");

    }
    
    function profile()
    {
        // tampilkan view "vw_profile"
        return view("vw_profile");

    }
    
}

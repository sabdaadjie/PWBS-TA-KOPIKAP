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

       // buat fungsi tampil merek
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

    // buat fungsi tampil kategori
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

    // buat fungsi untuk simpan data
    function insert(Request $req)
    {
        // untuk post data ke server
        $url = env("API_URL")."insert";

        // ambil service "post" dari server
        $request = $this->admin->post($url,[
            "form_params" => [
                "Id_Merek" => $req->Id_Merek,
                "Nama_Merek" => $req->Nama_Merek
            ]
        ]);

        // menampilkan hasil dari post server
        $response = $request->getBody();

        // kirim hasil service "post" ke "en_karyawan"
        echo $response;
    }

        // fungsi untuk hapus data karyawan
        function delete($parameter)
        {
            $kode = base64_encode($parameter);
            // url untuk delete dari data server
            $url = env("API_URL")."delete/". $kode;
    
            // ambil service "delete" dari server
            $request = $this->admin->delete($url);
    
            // menampilkan hasil dari delete server
            $response = $request->getBody();
            
            // kirim hasil service "delete" ke "vw_karyawan"
            echo $response;
        }
    
}

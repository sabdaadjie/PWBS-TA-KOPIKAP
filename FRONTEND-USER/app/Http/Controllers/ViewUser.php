<?php



namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Gpn273\LaravelPsr18HttpBridge\Psr18Client;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
class ViewUser extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    function brand()
    {
        $client = new \GuzzleHttp\Client();
    
        // Mengambil data dari server pertama
        $url1 = env("API_URL") . "tampil";
        $request1 = $client->get($url1);
        $response1 = $request1->getBody();
        $data1["result1"] = json_decode($response1);
    
        // Mengambil data dari server kedua
        $url2 = env("API_URL") . "tampillaptop";
        $request2 = $client->get($url2);
        $response2 = $request2->getBody();
        $data2["result2"] = json_decode($response2);

        // Mengambil data dari server kedua
        $url3 = env("API_URL") . "tampilmonitor";
        $request3 = $client->get($url3);
        $response3 = $request3->getBody();
        $data3["result3"] = json_decode($response3);
        
        // Menggabungkan data dari kedua server
        $data = array_merge($data1, $data2, $data3);
        $data["productsUrl"] = "/get-products"; // URL untuk pemanggilan produk
        // Panggil view "brand" dan kirimkan data
        return view("home", $data);
    }

    function kategorilaptop()
    {
        $client = new \GuzzleHttp\Client();
    
        // Mengambil data dari server pertama
        $url1 = env("API_URL") . "tampilasus";
        $request1 = $client->get($url1);
        $response1 = $request1->getBody();
        $data1["result1"] = json_decode($response1);
    
        // Mengambil data dari server kedua
        $url2 = env("API_URL") . "tampilacer";
        $request2 = $client->get($url2);
        $response2 = $request2->getBody();
        $data2["result2"] = json_decode($response2);

        // Mengambil data dari server kedua
        $url3 = env("API_URL") . "tampillenovo";
        $request3 = $client->get($url3);
        $response3 = $request3->getBody();
        $data3["result3"] = json_decode($response3);
        
        // Menggabungkan data dari kedua server
        $data = array_merge($data1, $data2, $data3);
        $data["productsUrl"] = "/get-products"; // URL untuk pemanggilan produk
        // Panggil view "brand" dan kirimkan data
        return view("kategori   ", $data);
    }
    


    // fungsi untuk detail data user
    function detail($parameter)
    {
        $kode = ($parameter);
        // url untuk detail_user dari data server
        $url = env("API_URL") . "detail/" . $kode;

        // ambil service "detail_user" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_user server
        $response = $request->getBody();
        
        // tampilkan data
        
        $data["result"] = json_decode($response);
        
        // panggil view "detail_user"
        
        return view("detail", $data);
    }
    


    public function search(Request $request)
    {
        
        $keyword = $request->input('Nama_Produk');

        // Jika ada keyword, lakukan pencarian
        if ($keyword) {
        $client = new \GuzzleHttp\Client();
           
            $url = env("API_URL") . "search1/" . $keyword;
            $response = $client->get($url);
            $data["result"] = json_decode($response->getBody());
        } else {
            $data["result"] = [];
        }

        return view("search", $data);
    }

    
    // Pepindahan link

    function about()
    {
   
        return view("about");
    }
    function contact()
    {
   
        return view("contact");
    }
}

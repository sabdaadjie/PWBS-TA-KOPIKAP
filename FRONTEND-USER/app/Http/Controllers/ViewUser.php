<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewUser extends Controller
{
    // Pepindahan link
    function kategori()
    {
        // tampilkan view "env_karyawan"
        return view("Vuser/kategori");
    }
    function brand()
    {
        // tampilkan view "env_karyawan"
        return view("Vuser/brand");
    }
    function lokasitoko()
    {
        // tampilkan view "env_karyawan"
        return view("Vuser/lokasi");
    }
    function contact()
    {
        // tampilkan view "env_karyawan"
        return view("Vuser/contact");
    }
}

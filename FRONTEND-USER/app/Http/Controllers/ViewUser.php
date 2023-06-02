<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewUser extends Controller
{
    // Pepindahan link
    function kategori()
    {
        
        return view("kategori");
    }
    function brand()
    {
   
        return view("brand");
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

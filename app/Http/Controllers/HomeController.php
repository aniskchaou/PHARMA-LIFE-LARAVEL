<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');  
    }


    public function shop()
    {
        return view('home.shop');  
    }

    public function cart()
    {
        return view('home.cart');  
    }

    public function contact()
    {
        return view('home.contact');  
    }

    public function about()
    {
        return view('home.about');  
    }

    public function viewProduct()
    {
        return view('home.view');  
    }

    public function dashboard()
    {
        return view('admin.pages.dashboard.index');  
    }

    

}

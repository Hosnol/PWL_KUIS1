<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function blog(){
        return view('blog');
    }

    public function post(){
        return view('post-details');
    }

    public function contact(){
        return view('contact');
    }

    public function barang(){
        return view('barang');
    }

    public function pelanggan(){
        return view('pelanggan');
    }

    public function pegawai(){
        return view('pegawai');
    }

    public function supplier(){
        return view('supplier');
    }
}

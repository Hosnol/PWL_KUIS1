<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Pelanggan;
use App\Models\Pegawai;

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
        return view('barang',['brg'=> Barang::tampil()]);
    }

    public function pelanggan(){
        return view('pelanggan',['plgn'=> Pelanggan::tampil()]);
    }

    public function pegawai(){
        return view('pegawai',['pgi'=> Pegawai::tampil()]);
    }

    public function supplier(){
        return view('supplier',['spr'=> Supplier::tampil()]);
    }
}

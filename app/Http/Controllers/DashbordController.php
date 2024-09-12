<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index(){
        return view ('dashboard.index');
    }

    public function dataPengguna(){
        return view ('dashboard.dataPengguna');
    }

    public function dataBarang(){
        return view ('dashboard.dataBarang');
    }

    public function dataSupplier(){
        return view ('dashboard.dataSupplier');
    }
}

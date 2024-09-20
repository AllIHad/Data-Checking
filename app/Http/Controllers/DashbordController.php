<?php

namespace App\Http\Controllers;

use App\Models\DataProduk;
use App\Models\DataSuplier;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index(){
        return view ('dashboard.index',);
    }

    public function dataPengguna(){
        // $dataPengguna = ;

        return view ('dashboard.dataPengguna', [

        ]);
    }

    public function dataBarang(){
        $dataBarang = DataProduk::all();

        return view ('dashboard.dataBarang', [
            'dataBarang' => $dataBarang,
        ]);
    }

    public function dataSupplier(){
        $dataSupplier = DataSuplier::all();

        return view ('dashboard.dataSupplier', [
            'dataSupplier' => $dataSupplier,
        ]);
    }

    public function kategoriBarang(){
        $kategoriBarang = KategoriBarang::all();

        return view ('dashboard.kategoriBarang', [
            'kategoriBarang' => $kategoriBarang,
        ]);
    }
}

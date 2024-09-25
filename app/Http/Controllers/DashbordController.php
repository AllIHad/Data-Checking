<?php

namespace App\Http\Controllers;

use App\Models\DataProduk;
use App\Models\DataSuplier;
use App\Models\KategoriBarang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DashbordController extends Controller
{
    public function index()
    {
        return view('dashboard.index',);
    }

    public function dataPengguna()
    {
        $dataPengguna = User::all();

        return view('dashboard.dataPengguna', [
            'dataPengguna' => $dataPengguna
        ]);
    }

    public function kategoriBarang()
    {
        $kategoriBarang = KategoriBarang::where('status', '=', Null)->get();

        return view('dashboard.kategoriBarang', [
            'kategoriBarang' => $kategoriBarang,
        ]);
    }

    public function waitings()
    {
        $kategoriBarang = KategoriBarang::whereIn(
            'status',
            [
                'Persetujuan Pembuatan Kategori Barang',
                'Persetujuan Penghapusan Kategori Barang',
                'Persetujuan Edit Kategori Barang',
            ]
        )->get();

        $dataBarang = DataProduk::whereIn(
            'status',
            [
                'Persetujuan Pembuatan Data Barang',
                'Persetujuan Penghapusan Data Barang',
                'Persetujuan Edit Data Barang',
            ]
        )->get();

        $dataSupplier = DataSuplier::whereIn(
            'status',
            [
                'Persetujuan Pembuatan Data Supplier',
                'Persetujuan Penghapusan Data Supplier',
                'Persetujuan Edit Data Supplier',
            ]
        )->get();
        // dd($kategoriBarang);

        return view('modification.index', [
            'kategoriBarang' => $kategoriBarang,
            'dataBarang' => $dataBarang,
            'dataSupplier' => $dataSupplier
        ]);
    }

    public function kategoriBarangDelete($id)
    {
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $id)->firstOrFail();
        $kategoriBarang->status = 'Persetujuan Penghapusan Kategori Barang';
        $kategoriBarang->save();

        return redirect('/kategori-barang')->with('success', 'kategori Barang Deleted');
    }

    public function formKategoriBarang()
    {

        return view('form.kategoriBarangForm');
    }

    public function kategoriBarangCreated(Request $request)
    {
        $request->validate([
            'id_kategori_barang' => 'required',
            'kategori_barang' => 'required',
        ]);

        KategoriBarang::create([
            'id_kategori_barang' => $request->id_kategori_barang,
            'kategori_barang' => $request->kategori_barang,
            'status' => 'Persetujuan Pembuatan Kategori Barang',
        ]);

        return redirect('/kategori-barang')->with('success', 'Kategori Barang created');
    }
    
    public function editKategoriBarang($slug){
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $slug)->firstOrFail();
        
        return view('form.kategoriBarangForm', [
            'kategoriBarang' => $kategoriBarang
        ]);
    }

    public function editedKategoriBarang($slug, Request $request)
    {
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $slug)->firstOrFail();

        $kategoriBarang->update([
            'id_kategori_barang' => $request->id_kategori_barang,
            'kategori_barang' => $request->kategori_barang,
            'status' => 'Persetujuan Edit Kategori Barang',
        ]);

        return redirect('/kategori-barang')->with('success', 'Data Has Updated');
    }
}

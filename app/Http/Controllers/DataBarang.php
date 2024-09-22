<?php

namespace App\Http\Controllers;

use App\Models\DataProduk;
use Illuminate\Http\Request;

class DataBarang extends Controller
{
    //
    public function dataBarang()
    {
        $dataBarang = DataProduk::where('status', '=', Null)->get();

        return view('dashboard.dataBarang', [
            'dataBarang' => $dataBarang,
        ]);
    }

    public function dataBarangDelete($id)
    {
        $dataBarang = DataProduk::where('id_produk', $id)->firstOrFail();
        $dataBarang->status = 'Persetujuan Penghapusan Data Barang';
        $dataBarang->save();

        return redirect('/data-barang')->with('success', 'data Barang Deleted');
    }

    public function formDataBarang()
    {
        return view('form.dataBarangForm');
    }

    public function dataBarangCreated(Request $request)
    {
        $request->validate([
            'id_produk' => 'required',
            'rak' => 'required',
            'id_kategori_barang' => 'required',
            'id_supplier' => 'required',
            'stok' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'nama_produk' => 'required',
        ]);

        DataProduk::create([
            'id_produk' => $request->id_produk,
            'rak' => $request->rak,
            'id_kategori_barang' => $request->id_kategori_barang,
            'id_supplier' => $request->id_supplier,
            'stok' => $request->stok,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'nama_produk' => $request->nama_produk,
            'status' => 'Persetujuan Pembuatan Data Barang',
        ]);

        return redirect('/data-barang')->with('success', 'Data Barang created');
    }
}
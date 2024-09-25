<?php

namespace App\Http\Controllers;

use App\Models\DataProduk;
use App\Models\DataSuplier;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class Pemilik extends Controller
{
    // Kategori Barang 
    public function approvalKategoriBarang($slug)
    {
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $slug)->firstOrFail();

        $kategoriBarang->status = NULL;
        $kategoriBarang->save();

        return redirect('/waitings')->with('success', 'Pemilik Approved Kategori Barang');
    }

    public function refusalKategoriBarang($slug)
    {
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $slug)->firstOrFail();
        $kategoriBarang->delete();

        return redirect('/waitings')->with('success', 'Pemilik Approved Kategori Barang');
    }

    public function approvalDeleteKategoriBarang($slug)
    {
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $slug)->firstOrFail();
        $kategoriBarang->delete();

        return redirect('/waitings')->with('success', 'Pemilik Approved To Delete Kategori Barang');
    }

    public function refusalDeleteKategoriBarang($slug)
    {
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $slug)->firstOrFail();
        $kategoriBarang->status = NULL;
        $kategoriBarang->save();

        return redirect('/waitings')->with('success', 'Pemilik Approved To Delete Kategori Barang');
    }

    public function approvalEditKategoriBarang($slug) {
        $kategoriBarang = KategoriBarang::where('id_kategori_barang', $slug)->firstOrFail();

        $kategoriBarang->update([
            'status' => null,
        ]);

        return redirect('/waitings')->with('success', 'Pemilik Approved To Edit Kategori Barang');
    }

    // Data Barang
    public function approvalDataBarang($slug)
    {
        $dataBarang = DataProduk::where('id_produk', $slug)->firstOrFail();

        $dataBarang->status = NULL;
        $dataBarang->save();

        return redirect('/waitings')->with('success', 'Pemilik Approved Kategori Barang');
    }

    public function refusalDataBarang($slug)
    {
        $dataBarang = DataProduk::where('id_produk', $slug)->firstOrFail();
        $dataBarang->delete();

        return redirect('/waitings')->with('success', 'Pemilik Approved Data Barang');
    }

    public function approvalDeleteDataBarang($slug)
    {
        $dataBarang = DataProduk::where('id_produk', $slug)->firstOrFail();
        $dataBarang->delete();

        return redirect('/waitings')->with('success', 'Pemilik Approved To Delete Data Barang');
    }

    public function refusalDeleteDataBarang($slug)
    {
        $dataBarang = DataProduk::where('id_produk', $slug)->firstOrFail();
        $dataBarang->status = NULL;
        $dataBarang->save();

        return redirect('/waitings')->with('success', 'Pemilik Approved To Delete Data Barang');
    }

    public function approvalEditDataBarang($slug) {
        $dataBarang = DataProduk::where('id_produk', $slug)->firstOrFail();

        $dataBarang->update([
            'status' => null,
        ]);

        return redirect('/waitings')->with('success', 'Pemilik Approved To Edit Data Barang');
    }

    //Data Supplier
    public function approvalDataSupplier($slug)
    {
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();

        $dataSupplier->status = NULL;
        $dataSupplier->save();

        return redirect('/waitings')->with('success', 'Pemilik Approved Data Supplier');
    }

    public function refusalDataSupplier($slug)
    {
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();
        $dataSupplier->delete();

        return redirect('/waitings')->with('success', 'Pemilik Approved Data Supplier');
    }

    public function approvalDeleteDataSupplier($slug)
    {
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();
        $dataSupplier->delete();

        return redirect('/waitings')->with('success', 'Pemilik Approved To Delete Data Supplier');
    }

    public function refusalDeleteDataSupplier($slug)
    {
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();
        $dataSupplier->status = NULL;
        $dataSupplier->save();

        return redirect('/waitings')->with('success', 'Pemilik Approved To Delete Data Supplier');
    }

    public function approvalEditDataSupplier($slug){
        $dataSupplier = DataSuplier::where('id_supplier', $slug)->firstOrFail();

        $dataSupplier->update([
            'status' => null,
        ]);

        return redirect('/waitings')->with('success', 'Pemilik Approved To Edit Data Supplier');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DataProduk;
use App\Models\DataSuplier;
use App\Models\KategoriBarang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use PDO;

class DashbordController extends Controller
{
    public function index()
    {
        return view('dashboard.index',);
    }

    public function dataPengguna()
    {
        $dataPengguna = User::where('status', '=', Null)->get();

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

        $dataUser = User::whereIn(
            'status',
            [
                'Persetujuan Pembuatan Data Pengguna',
                'Persetujuan Penghapusan Data Pengguna'
            ]
        )->get();
        // dd($dataUser);

        return view('modification.index', [
            'kategoriBarang' => $kategoriBarang,
            'dataBarang' => $dataBarang,
            'dataSupplier' => $dataSupplier,
            'dataUser' => $dataUser
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

    public function editKategoriBarang($slug)
    {
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

    public function profile()
    {

        return view('form.profileForm');
    }

    public function editProfile($slug, Request $request)
    {
        $dataUser = User::where('id_admin', $slug)->firstOrFail();

        $request->validate([
            'id_admin' => 'required',
            'nama_admin' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
        ]);

        $dataUser->update([
            'id_admin' => $request->id_admin,
            'nama_admin' => $request->nama_admin,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);


        return redirect('/dashboard')->with('success', 'Data Has Updated');
    }

    public function destroyDataPengguna($slug)
    {
        $dataUser = User::where('id_admin', $slug)->firstOrFail();

        $dataUser->update([
            'status' => 'Persetujuan Penghapusan Data Pengguna',
        ]);

        return redirect('/data-pengguna')->with('success', 'Data Has Updated');
    }

    public function formDataPengguna()
    {

        return view('form.dataPenggunaForm');
    }

    public function dataPenggunaCreated(Request $request)
    {
        $request->validate([
            'id_admin' => 'required',
            'nama_admin' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|confirmed',
            'level' => 'required',
        ]);
        // dd($request->all());
        User::create([
            'id_admin' => $request->id_admin,
            'nama_admin' => $request->nama_admin,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'status' => 'Persetujuan Pembuatan Data Pengguna',
        ]);

        return redirect('/data-pengguna')->with('success', 'Data Pengguna created');
    }
}

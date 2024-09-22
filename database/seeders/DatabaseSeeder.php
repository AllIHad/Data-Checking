<?php

namespace Database\Seeders;

use App\Models\DataProduk;
use App\Models\DataSuplier;
use App\Models\KategoriBarang;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DataProduk::create([
            'id_produk' => 'PRO20240805091414744',
            'rak' => '2',
            'id_kategori_barang' => 'KAT20240805091343102',
            'id_supplier' => 'SUP20240805090952447',
            'stok' => '80',
            'harga_beli' => '9000',
            'harga_jual' => '10000',
            'nama_produk' => 'Produk 1',
        ]);

        User::create([
            'id_admin' => 'ADM0001',
            'nama_admin' => 'admin',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'sugai bahar',
            'no_hp' => '2342134234',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'level' => 'admin',
        ]);

        User::create([
            'id_admin' => 'ADM20240813055932749',
            'nama_admin' => 'In esse sit mollitia',
            'jenis_kelamin' => 'perempuan',
            'alamat' => 'In cupiditate consec',
            'no_hp' => '1232435234',
            'email' => 'pemilik@mailinator.com',
            'username' => 'pemilik',
            'password' => Hash::make('pemilik'),
            'level' => 'pemilik',
        ]);

        User::create([
            'id_admin' => 'tt',
            'nama_admin' => 'tt kasir gg',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'tt',
            'no_hp' => '32432',
            'email' => 'tt@mail.com',
            'username' => 'kasir',
            'password' => Hash::make('kasir'),
            'level' => 'kasir',
        ]);

        KategoriBarang::create([
            'id_kategori_barang' => 'KAT20240805091343102',
            'kategori_barang' => 'fgbcxvb',
        ]);

        DataSuplier::create([
            'id_supplier' => 'SUP2024080509095244',
            'nama_supplier' => 'Ea ut iusto et volup',
            'alamat' => 'Consequat Dolorem s',
            'telepon' => '3241234',
        ]);
    }
}

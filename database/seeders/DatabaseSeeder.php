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
            'username' => 'pemilik',
            'nama' => 'Pemilik',
            'nama' => 'Pemilik',
            'password' => Hash::make('pemilik'),
            'role' => '1',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_produk',
        'rak',
        'id_kategori_barang',
        'id_supplier',
        'stok',
        'harga_beli',
        'harga_jual',
        'nama_produk',
        'status'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSuplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_supplier',
        'nama_supplier',
        'alamat',
        'telepon',
        'status',
    ];

    protected $table = 'data_supplier';
}

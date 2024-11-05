<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataManagement extends Model
{
    //

    protected $fillable = [
        'user_id',
        'user_name',
        'link',
        'post',
        'view'
    ];

    protected $table = 'data_management';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    protected $table = "products";
    protected $fillable = [
        'merk_sepatu', 'jenis_sepatu', 'no_sepatu', 'foto_sepatu', 'stok_sepatu', 'status'
    ];

    use SoftDeletes;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    protected $table = "customer";
    protected $fillable = [
        'first_name', 'last_name', 'address', 'email', 'username', 'password', 'profil'
    ];

    use SoftDeletes;
}

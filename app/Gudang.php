<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alamat', 'kapasitas', 'pic',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}

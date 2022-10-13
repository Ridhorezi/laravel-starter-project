<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'gudang_nama',
        'gudang_alamat',
        'gudang_kota',
        'gudang_propinsi'
    ];

    protected $hidden = [
      
    ];
}

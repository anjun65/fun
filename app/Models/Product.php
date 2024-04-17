<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sistem',
        'link',
        'warna',
        'kategori_id',
        'sub_kategori_id',
        'stok',
        'harga',
        'harga_promo',
        'deskripsi',
    ];
}

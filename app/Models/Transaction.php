<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'harga',
        'diskon',
        'harga_setelah',
        'tanggal_pesanan',
        'tanggal_start_tempo',
        'tanggal_akhir_tempo',
        'description',
        'status',
    ];
}

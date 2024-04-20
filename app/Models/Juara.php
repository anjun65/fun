<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juara extends Model
{
    use HasFactory;

    protected $fillable = [
        'years',
        'provinsi',
        'kota',
        'juara',
    ];

    public function prov()
    {
        return $this->belongsTo(Province::class, 'provinsi', 'id');
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'kota', 'id');
    }
}

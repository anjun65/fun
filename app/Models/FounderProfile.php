<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FounderProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tempat',
        'tanggal_lahir',
        'pendidikan',
        'profesi',
        'jabatan',
    ];
}

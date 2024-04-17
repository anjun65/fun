<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'asal',
        'tanggal_lahir',
        'no_hp',
        'instgram',
        'facebook',
        'alamat',
        'tahun_bergabung'
        'total_tf',
        'status',
    ];

}

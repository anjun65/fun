<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

     protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'handphone',
        'message',
        'is_penetration',
        'is_consulting',
        'is_training',
        'status',
    ];

    const STATUSES = [
        'Queue' => 'Queue',
        'Process' => 'Process',
        'Done' => 'Done',
    ];


}

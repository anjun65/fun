<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'description',
    ];

    public function file()
    {
        return $this->hasMany(ResponsibilityGallery::class, 'responsibility_id');
    }
}

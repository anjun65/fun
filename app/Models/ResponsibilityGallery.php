<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsibilityGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'responsibility_id',
        'photo',
    ];

    public function event()
    {
        return $this->belongsTo(Responsibility::class, 'responsibility_id', 'id');
    }
}

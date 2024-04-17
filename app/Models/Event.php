<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'category',
        'description',
    ];

    public function file()
    {
        return $this->hasMany(EventGallery::class, 'event_id');
    }
}

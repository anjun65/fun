<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'photo',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}

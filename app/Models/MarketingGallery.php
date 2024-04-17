<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'marketing_id',
        'photo',
    ];

    public function marketing()
    {
        return $this->belongsTo(Marketing::class, 'marketing_id', 'id');
    }
}

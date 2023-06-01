<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'eve_fin_event' => 'datetime',
    ];

    public function eve_ime(){
        return $this->belongsTo(Image_event::class);
    }
}

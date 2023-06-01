<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_event extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime_nom',
        'ime_lien',
    ];

    public function event()
    {
        return $this->hasMany(Image_event::class);
    }
}

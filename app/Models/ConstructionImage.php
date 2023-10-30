<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'construction_id',
        'image',

    ];

    public function construction()
    {
        return $this->belongsTo(Construction::class , 'construction_id');
    }
}

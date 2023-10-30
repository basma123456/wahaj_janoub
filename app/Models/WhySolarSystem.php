<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhySolarSystem extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'user_id',
            'title_one',
            'image_one',
            'description_one',
            'last_h',
            'accordion_text',
            'accordion_text_2',
            'accordion_text_3',
            'accordion_text_4',
            'accordion_text_5',
            'accordion_text_6',

        ];
}

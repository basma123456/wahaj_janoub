<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable =
        [
        'user_id',
        'title_one',
        'description_one',
        'more_description_one',
        'image_one',
        'title_two',
        'description_two',
        'image_two',
        'last_h',
        'right_bottom_title',
        'right_bottom_desc',
        'left_bottom_title',

        'left_bottom_desc',

    ];
}

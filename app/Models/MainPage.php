<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory;

    protected $fillable  = [

        'user_id',
        'logo',
        'file',
        'main_title',
        'main_desc',
        'right_bottom_desc',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linkedin_link',
        'email',
        'whatsapp',
        'contact_us_link',
        'num_of_projects',
        'num_of_employees',
        'num_of_customers',
        'num_of_mega_watts',
        'about_us_desc',


    ];
}

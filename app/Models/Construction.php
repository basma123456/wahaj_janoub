<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    use HasFactory;

    protected $fillable =
        [
        'user_id',
        'construction_classifications_id',
        'partner_id',
        'title',
        'region',
        'city',
        'image',
        'video',
        'number_of_constructions',
        'power',
        'duration_time',
        'is_on_main_page',
            'description',

    ];


    public function images()
    {
        return $this->hasMany(ConstructionImage::class , 'construction_id');
    }

    public function classification()
    {
        return $this->belongsTo(ConstructionClassification::class , 'construction_classifications_id');

    }

    public function partner()
    {
        return $this->belongsTo(Contracting::class , 'partner_id');

    }
}

<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_classifications_id',
        'title',
        'details',
        'image',
        'price',
        'popularity',
        'discount',
        'price_before_discount',
        'more_description',

    ];

    public function classification()
    {
        return $this->belongsTo(ProductClassification::class , 'product_classifications_id');
    }


}

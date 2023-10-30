<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [

                    'name' , 'phone' , 'email' , 'message' , 'status' , 'admin_id' , 'notes_by_admin','table_name' , 'foreign_id',

    ];

    public function admin()
    {
        return $this->belongsTo(User::class , 'admin_id');
    }

    public function product(){


            return $this->belongsToMany(Product::class, 'quotation_product_construction', 'quotation_id', 'foreign_id')->withPivot('table_name');

      }

      public function construction(){
          return $this->belongsToMany(Construction::class, 'quotation_product_construction' , 'quotation_id', 'foreign_id')->withPivot('table_name' );

      }



//$product = $order->product()->find($productId);
//$product->pivot->price = 12.34;
//$product->pivot->save();
//
//// or
//$order->product()->updateExistingPivot($productId, ['price'=>12.34]);
}

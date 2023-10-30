<?php

namespace App\Repository;

use App\Models\Product;
 use App\RepositoryInterface\ProductRepositoryInterface;

class DBProductRepository implements ProductRepositoryInterface{
    public function all()
    {
         return Product::all();
    }
    public function create($attributes)
    {
        return Product::create($attributes);
    }


    public function update($attributes , $id)
    {
        return Product::find($id)->update($attributes);
    }

    public function getByClassification($id)
    {
        return Product::where('product_classifications_id' , $id)->latest()->get();
    }

    public function show($id)
    {
        return Product::with('classification')->find($id);
    }
}

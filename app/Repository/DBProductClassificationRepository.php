<?php

namespace App\Repository;

use App\Models\ProductClassification;
 use App\RepositoryInterface\ProductClassificationRepositoryInterface;

class DBProductClassificationRepository implements ProductClassificationRepositoryInterface{
    public function all()
    {
         return ProductClassification::latest()->get();
    }
    public function create($attributes)
    {
        return ProductClassification::create($attributes);
    }


    public function update($attributes , $id)
    {
        return ProductClassification::find($id)->update($attributes);
    }


    public function getLastSix()
    {
        return ProductClassification::latest()->limit(6)->get();
    }

    public function getName($id)
    {
        return ProductClassification::where('id' , $id)->value('name');

    }

}

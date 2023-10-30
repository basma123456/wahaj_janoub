<?php

namespace App\Repository;

use App\Models\News;
use App\Models\Product;
use App\RepositoryInterface\NewsRepositoryInterface;
use App\RepositoryInterface\ProductRepositoryInterface;

class DBNewsRepository implements NewsRepositoryInterface{
    public function all()
    {
         return News::all();
    }
    public function create($attributes)
    {
        return News::create($attributes);
    }

    public function edit(  $id)
    {
        return News::find($id);
    }

    public function update($attributes , $id)
    {
        return News::find($id)->update($attributes);
    }

    public function getLastThree()
    {
        return News::latest()->limit(3)->get();
    }

    public function show($id)
    {
        return News::find($id);
    }



}

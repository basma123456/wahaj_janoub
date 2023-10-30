<?php

namespace App\Repository;



use App\Http\Controllers\Admin\ConstructionClassificationController;
use App\Models\ConstructionClassification;
use App\Models\WhySolarSystem;
use App\RepositoryInterface\ConstructionClassificationRepositoryInterface;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;
class DBConstructionClassificationRepository  implements ConstructionClassificationRepositoryInterface{
    public function index()
    {
         return ConstructionClassification::latest()->get();
    }
    public function create($attributes)
    {
        return ConstructionClassification::create($attributes);
    }


    public function update($attributes , $id)
    {
        return ConstructionClassification::find($id)->update($attributes);
    }
    public function edit(  $id)
    {
        return ConstructionClassification::find($id);
    }



}

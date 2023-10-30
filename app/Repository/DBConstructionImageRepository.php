<?php

namespace App\Repository;



use App\Http\Controllers\Admin\ConstructionImageController;
use App\Models\ConstructionImage;
 use App\Models\WhySolarSystem;
use App\RepositoryInterface\ConstructionImageRepositoryInterface;
 use App\RepositoryInterface\WhySolarSystemRepositoryInterface;
class DBConstructionImageRepository  implements ConstructionImageRepositoryInterface{
    public function index($id)
    {
         return ConstructionImage::where('construction_id' , $id)->latest()->get();
    }
    public function create($attributes , $id)
    {
        return ConstructionImage::where('construction_id' , $id)->create($attributes);
    }


    public function update($attributes , $id , $bigId)
    {
        return ConstructionImage::where('construction_id' , $bigId)->find($id)->update($attributes);
    }
    public function edit(  $id , $bigId)
    {
        return ConstructionImage::where('construction_id' , $bigId)->find($id);
    }



}

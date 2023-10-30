<?php

namespace App\Repository;



use App\Models\WhySolarSystem;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;

class DBWhySolarSystemRepository  implements WhySolarSystemRepositoryInterface{
    public function getLastPage()
    {
         return WhySolarSystem::latest()->first();
    }
    public function create($attributes)
    {
        return WhySolarSystem::create($attributes);
    }


    public function update($attributes , $id)
    {
        return WhySolarSystem::find($id)->update($attributes);
    }
    public function edit(  $id)
    {
        return WhySolarSystem::find($id);
    }



}

<?php

namespace App\Repository;

use App\Models\AboutUs;

use App\RepositoryInterface\AboutUsRepositoryInterface;

class DBAboutUsRepository  implements AboutUsRepositoryInterface{
    public function getLastPage()
    {
         return AboutUs::latest()->first();
    }
    public function create($attributes)
    {
        return AboutUs::create($attributes);
    }


    public function update($attributes , $id)
    {
        return AboutUs::find($id)->update($attributes);
    }
    public function edit(  $id)
    {
        return AboutUs::find($id);
    }



}

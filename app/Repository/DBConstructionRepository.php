<?php

namespace App\Repository;



 use App\Models\Construction;
   use App\RepositoryInterface\ConstructionRepositoryInterface;
 class DBConstructionRepository  implements ConstructionRepositoryInterface{
    public function index()
    {
         return Construction::latest()->get();
    }
    public function create($attributes)
    {
        return Construction::create($attributes);
    }


    public function update($attributes , $id)
    {
        return Construction::find($id)->update($attributes);
    }
    public function edit(  $id)
    {
        return Construction::find($id);
    }

     public function show(  $id)

     {
         return Construction::with('images' , 'classification' , 'partner')->find($id);
     }

     public function getOfmainPage()
     {
         return Construction::where('is_on_main_page' , 1)->latest()->first();
     }

     public function getLastTwo()
     {
         return Construction::latest()->limit(2)->get();

     }
     public function getLastThree()
     {
         return Construction::with('classification')->latest()->limit(3)->get();

     }


     public function getByClassification($id)
     {
         return Construction::with('classification')->latest()->where('construction_classifications_id' , $id)->get();

     }

}

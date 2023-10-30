<?php

namespace App\Repository;



 use App\Models\Contracting;
 use App\RepositoryInterface\ContractingRepositoryInterface;
 class DBContractingRepository  implements ContractingRepositoryInterface{
    public function index()
    {
         return Contracting::latest()->get();
    }
    public function create($attributes)
    {
        return Contracting::create($attributes);
    }


    public function update($attributes , $id)
    {
        return Contracting::find($id)->update($attributes);
    }
    public function edit(  $id)
    {
        return Contracting::find($id);
    }

     public function getLastEight()
     {
         return Contracting::latest()->limit(8)->get();

     }


}

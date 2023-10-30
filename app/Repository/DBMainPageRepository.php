<?php

namespace App\Repository;

use App\Models\MainPage;
  use App\RepositoryInterface\MainPageRepositoryInterface;

class DBMainPageRepository implements MainPageRepositoryInterface{
    public function getLastRecord()
    {
         return MainPage::latest()->first();
    }
    public function create($attributes)
    {
        return MainPage::create($attributes);
    }


    public function update($attributes , $id)
    {
        return MainPage::find($id)->update($attributes);
    }
    public function edit(  $id)
    {
        return MainPage::find($id);
    }



}

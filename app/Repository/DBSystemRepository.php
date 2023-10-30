<?php

namespace App\Repository;

use App\Models\MainPage;
use App\Models\System;
use App\RepositoryInterface\MainPageRepositoryInterface;
use App\RepositoryInterface\SystemRepositoryInterface;

class DBSystemRepository implements SystemRepositoryInterface{
    public function index()
    {
         return System::latest()->get();
    }
    public function create($attributes)
    {
        return System::create($attributes);
    }


    public function update($attributes , $id)
    {
        return System::find($id)->update($attributes);
    }
    public function edit(  $id)
    {
        return System::find($id);
    }


    public function lastThree()
    {
        return System::latest()->limit(3)->get();
    }

    public function show($id)
    {
        return  System::find($id);
    }
}

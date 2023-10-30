<?php

namespace App\RepositoryInterface;


interface MainPageRepositoryInterface{


    public function getLastRecord();
    public function create($attributes);
    public function update($attributes , $id);
    public function edit(  $id);

}

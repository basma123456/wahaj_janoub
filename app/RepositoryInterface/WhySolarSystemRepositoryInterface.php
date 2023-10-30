<?php

namespace App\RepositoryInterface;


interface WhySolarSystemRepositoryInterface{


    public function getLastPage();
    public function create($attributes);
    public function update($attributes , $id);
    public function edit(  $id);

}

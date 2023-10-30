<?php

namespace App\RepositoryInterface;


interface ConstructionClassificationRepositoryInterface{


    public function index();
    public function create($attributes);
    public function update($attributes , $id);
    public function edit(  $id);

}

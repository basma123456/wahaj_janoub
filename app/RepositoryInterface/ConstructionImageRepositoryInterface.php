<?php

namespace App\RepositoryInterface;


interface ConstructionImageRepositoryInterface{


    public function index($id);
    public function create($attributes , $id);
    public function update($attributes , $id , $bigId);
    public function edit(  $id , $bigId);

}

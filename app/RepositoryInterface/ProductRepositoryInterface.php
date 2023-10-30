<?php

namespace App\RepositoryInterface;


interface ProductRepositoryInterface{


    public function all();
    public function create($attributes);
    public function update($attributes , $id);
    public function getByClassification($id);
    public function show($id);

}

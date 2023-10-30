<?php

namespace App\RepositoryInterface;


interface ProductClassificationRepositoryInterface{


    public function all();
    public function create($attributes);
    public function update($attributes , $id);
    public function  getLastSix();
    public function getName($id);
}

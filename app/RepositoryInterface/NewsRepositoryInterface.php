<?php

namespace App\RepositoryInterface;


interface NewsRepositoryInterface{

    public function all();
    public function create($attributes);
    public function edit($id);
    public function update($attributes , $id);
    public function getLastThree();
    public function show($id);
}

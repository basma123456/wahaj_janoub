<?php

namespace App\RepositoryInterface;


interface SystemRepositoryInterface{


    public function index();
    public function create($attributes);
    public function update($attributes , $id);
    public function edit(  $id);
    public function lastThree();
    public function show($id);

}

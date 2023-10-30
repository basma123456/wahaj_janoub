<?php

namespace App\RepositoryInterface;


interface ContractingRepositoryInterface{


    public function index();
    public function create($attributes);
    public function update($attributes , $id);
    public function edit(  $id);
    public function getLastEight();
}

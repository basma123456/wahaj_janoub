<?php

namespace App\RepositoryInterface;


interface ConstructionRepositoryInterface{


    public function index();
    public function create($attributes);
    public function update($attributes , $id);
    public function edit(  $id);
    public function show(  $id);
    public function getOfmainPage();


    public  function getLastTwo();

    public function getLastThree();
    public function getByClassification($id);



}

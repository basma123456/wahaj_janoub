<?php

namespace App\RepositoryInterface;


interface AboutUsRepositoryInterface{


    public function getLastPage();
    public function create($attributes);
    public function update($attributes , $id);
    public function edit(  $id);

}

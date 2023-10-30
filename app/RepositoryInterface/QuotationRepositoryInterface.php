<?php

namespace App\RepositoryInterface;


interface QuotationRepositoryInterface{

    public function index();

     public function create($attributes);
    public function update($attributes ,$id);
    public function edit(  $type,$id);
    public function show( $tpe, $id);

}

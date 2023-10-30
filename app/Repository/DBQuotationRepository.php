<?php

namespace App\Repository;



use App\Models\Quotation;
use App\Models\WhySolarSystem;
 use App\RepositoryInterface\QuotationRepositoryInterface;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;

class DBQuotationRepository  implements QuotationRepositoryInterface {
    public function index()
    {
         return Quotation::with('product' , 'construction' )->latest()->get();
    }
    public function create($attributes)
    {
        return Quotation::create($attributes);
    }


    public function update($attributes ,$id)
    {        return Quotation::find($id)->update($attributes);
    }
    public function edit(  $type,$id)
    {
        if($type == 'product') {
            return Quotation::with('product')->find($id);
        }elseif($type == 'construction'){
            return Quotation::with('construction')->find($id);
        }
    }
    public function show( $type, $id)
    {
        if($type == 'product') {
            return Quotation::with('product')->find($id);
        }elseif ($type=='construction'){
            return Quotation::with('construction')->find($id);
        }
    }




}

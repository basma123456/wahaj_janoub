<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;
use Illuminate\Http\Request;
use App\RepositoryInterface\ProductClassificationRepositoryInterface;
use App\RepositoryInterface\ProductRepositoryInterface;
class ProductController extends Controller
{
    private $ProductClassificationRepositoryInterface;
    private $ProductRepositoryInterface;
    private $WhySolarSystemRepositoryInterface;

    public function __construct(
        ProductClassificationRepositoryInterface $ProductClassificationRepositoryInterface,
        ProductRepositoryInterface $ProductRepositoryInterface,
        WhySolarSystemRepositoryInterface $WhySolarSystemRepositoryInterface
    )
    {
        $this->ProductRepositoryInterface = $ProductRepositoryInterface;
        $this->ProductClassificationRepositoryInterface = $ProductClassificationRepositoryInterface;
        $this->WhySolarSystemRepositoryInterface = $WhySolarSystemRepositoryInterface;
    }


    public function index($id)
    {
         $products =   $this->ProductRepositoryInterface->getByClassification($id);
         $classificationName = $this->ProductClassificationRepositoryInterface->getName($id);
           return view('front/products/index' , compact('products' , 'classificationName'));
    }
    public function show($id)
    {
        $product =   $this->ProductRepositoryInterface->show($id);
        $whySolarSystem = $this->WhySolarSystemRepositoryInterface->getLastPage();
         return view('front/products/details' , compact('product' , 'whySolarSystem'));
    }

    public function allClassifications()
    {
        $classifications =   $this->ProductClassificationRepositoryInterface->all();
        return view('front/products/all_product_classifications' , compact('classifications'));
    }


}

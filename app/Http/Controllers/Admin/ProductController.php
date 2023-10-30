<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\Product;
use App\Models\ProductClassification;
use App\RepositoryInterface\ProductClassificationRepositoryInterface;
use App\RepositoryInterface\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageTrait;
    private $productRepository;
    private  $productClassificationRepositoryInterface;

    public function  __construct( ProductRepositoryInterface $productRepository , ProductClassificationRepositoryInterface $productClassificationRepositoryInterface )
    {
        $this->productRepository    = $productRepository;
        $this->productClassificationRepositoryInterface = $productClassificationRepositoryInterface;
    }




    public function index()
    {
        $products = $this->productRepository->all();
        return view('admin/products/index' , compact('products'));
    }


    public function create()
    {
//        $product_classifications = ProductClassification::latest()->get();
        $product_classifications = $this->productClassificationRepositoryInterface->all();


        return view('admin/products/add' , compact('product_classifications'));
    }

    public function store(Request $request)
    {

        $arr =  array(


            'user_id' => auth()->id(),
            'product_classifications_id' => $request->product_classifications_id,
            'title' => json_encode(['ar'=>$request->title_ar , 'en' => $request->title_en]),
            'details'=> json_encode(['ar'=>$request->details_ar , 'en' => $request->details_en]),
            'image' => $request->image,
            'price' => $request->price,
            'popularity' => $request->popularity,
            'discount'=> $request->discount,
            'price_before_discount'=> $request->price_before_discount,
            'more_description'=>   json_encode(['ar'=>$request->more_description_ar , 'en' => $request->more_description_en]),

        );

        $this->productRepository->create($arr);

        $this->storeImage($request ,'/images/products' );
        return redirect()->back();
    }

    /***************************************/

    public function edit($id)
    {
        $product = Product::find($id);
        $product_classifications = ProductClassification::get();
        return view('admin/products/edit' , compact('product' , 'product_classifications'));
    }


    public function update(Request $request , $id){

        $arr =  array(

            'user_id' => auth()->id(),
            'product_classifications_id' => $request->product_classifications_id,
            'title' => json_encode(['ar'=>$request->title_ar , 'en' => $request->title_en]),
            'details'=> json_encode(['ar'=>$request->details_ar , 'en' => $request->details_en]),
            'price' => $request->price,
            'popularity' => $request->popularity,
            'discount'=> $request->discount,
            'price_before_discount'=> $request->price_before_discount,
            'more_description'=>   json_encode(['ar'=>$request->more_description_ar , 'en' => $request->more_description_en]),

        );

        if($request->image){

             $arr['image'] =   $this->updateImage( $request , Product::class , $id , '/images/products');
          }

        $this->productRepository->update($arr , $id);
         return redirect()->back();

    }





}

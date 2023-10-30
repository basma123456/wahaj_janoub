<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductClassification;
use App\RepositoryInterface\ProductClassificationRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;

class ProductClassificationController extends Controller
{
    use ImageTrait;
    private $productClassificationRepository;

    public function  __construct( ProductClassificationRepositoryInterface $productClassificationRepository)
    {
      $this->productClassificationRepository    = $productClassificationRepository;
    }


    public function index()

    {
        $product_classifications = $this->productClassificationRepository->all();
         return view('admin/product_classification/index' , compact('product_classifications'));
    }


    public function create()
    {
        return view('admin/product_classification/add');
    }

    public function store(Request $request)
    {

        $arr =  array(
            'name' => json_encode(['ar'=>$request->name_ar , 'en' => $request->name_en]),
            'user_id' => auth()->id(),
            'image' => $this->storeImage2( $request ,  '/images/product_classifications/' , $request->image , 'image')
      );

        $this->productClassificationRepository->create($arr);
        return redirect()->back();
    }

    /***************************************/

    public function update(Request $request , $id){
         $arr =  array(
            'name' => json_encode(['ar'=>$request->name_ar , 'en' => $request->name_en]),
            'user_id' => auth()->id(),
//            'image' => $request->image
        );
         if($request->image){
                      $arr['image'] =   $this->updateImage2( $request , ProductClassification::class , $id , '/images/product_classifications/' , $request->image , 'image');
         }

        $this->productClassificationRepository->update($arr , $id);
        return redirect()->back();

    }

    public function edit($id)
    {
         $product_classification = ProductClassification::find($id);
         return view('admin/product_classification/edit' , compact('product_classification'));
    }

}

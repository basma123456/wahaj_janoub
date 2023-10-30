<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\ConstructionImage;
use App\RepositoryInterface\ConstructionRepositoryInterface;
use Illuminate\Http\Request;
use App\RepositoryInterface\ConstructionImageRepositoryInterface;

class ConstructionImageController extends Controller
{
    use ImageTrait;
    private $constructionImageRepositoryInterface;
    private $constructionRepositoryInterface;
    public function __construct(ConstructionImageRepositoryInterface $constructionImageRepositoryInterface , ConstructionRepositoryInterface $constructionRepositoryInterface)
    {
        $this->constructionImageRepositoryInterface = $constructionImageRepositoryInterface;
        $this->constructionRepositoryInterface = $constructionRepositoryInterface;
    }



//    public function index($id)
//    {
//        $images = $this->constructionImageRepositoryInterface->index($id);
//        return view('admin/construction_images/add' , compact('images' , 'id'));
//    }

     public function store(Request $request , $id)
    {
        $arrImages = $this->storeImageMulti($request, '/images/construction_images/', $request->file('image'), 'image');

        $arr = [];

        foreach ($request->image as $key => $val) {
            if(isset($arrImages[$key])) {
                $m = [
                    'user_id' => auth()->id(),
                    'image' => $arrImages[$key],
                    'construction_id' => $id,
                ];
                $arr[] = $m;
                $this->constructionImageRepositoryInterface->create($m, $id);
            }
        }
      return redirect()->back();



    }



    public function edit(Request $request , $id , $bigId)
    {
        //$id not used
       $images = $this->constructionImageRepositoryInterface->index( $bigId);
         return view('admin/construction_images/edit' , compact('images','id' , 'bigId'));
    }

        public function update(Request $request , $id , $bigId)
    {
        //$id not used
        if($request->image) {
            $arrImages = $this->updateImageMulti($request, ConstructionImage::class,$request->id,'/images/construction_images/', $request->file('image'), 'image');
            $arr = [];

            foreach ($request->image as $key => $val) {
                 if (isset($arrImages[0][$key]) && isset($arrImages[1][$key])      ) {

                      $m = [
                        'user_id' => auth()->id(),
                        'image' => $arrImages[0][$key],
                        'construction_id' => $bigId,
                    ];
                    $arr[] = $m;
                    $this->constructionImageRepositoryInterface->update($m, (int)$arrImages[1][$key], $bigId);
                 }
            }
        }

        if($request->image_new) {
            $arrImages = $this->storeImageMulti($request,  '/images/construction_images/', $request->file('image_new'), 'image_new');
            $arr = [];


            foreach ($request->image_new as $key => $val) {
                if (isset($arrImages[$key])) {
                    $m = [
                        'user_id' => auth()->id(),
                        'image' => $arrImages[$key],
                        'construction_id' => $bigId,
                    ];
                    $arr[] = $m;
                    $this->constructionImageRepositoryInterface->create($m,  $bigId);
                }
            }
        }

        return redirect()->back();



    }

}

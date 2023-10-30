<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConstructionClassification;
use App\RepositoryInterface\ConstructionClassificationRepositoryInterface;
use Illuminate\Http\Request;

class ConstructionClassificationController extends Controller
{

   private $constructionClassificationRepositoryInterface;

    public function __construct(ConstructionClassificationRepositoryInterface $constructionClassificationRepositoryInterface)
    {
        $this->constructionClassificationRepositoryInterface = $constructionClassificationRepositoryInterface;
    }




    public function index()
    {

        $constructionClassifications = $this->constructionClassificationRepositoryInterface->index();
        return view('admin/construction_classification/index' , compact('constructionClassifications'));
    }

    public function create()
    {
        return view('admin/construction_classification/add');

    }

    public function store(Request $request)
    {
        $arr = [
            'user_id' => auth()->id(),
            'name' => json_encode(['ar'=>$request->name_ar , 'en'=>$request->name_en])
        ];

        $this->constructionClassificationRepositoryInterface->create($arr);
        return redirect( route('construction-classification.index'))->with('success' , 'you have updated this classification successfully');

    }

    public function edit($id)
    {
       $constructionClassification = $this->constructionClassificationRepositoryInterface->edit($id);
        return view('admin/construction_classification/edit' , compact('constructionClassification'));
    }


    public function update(Request $request ,$id)
    {
        $arr = [
            'user_id' => auth()->id(),
            'name' => json_encode(['ar'=>$request->name_ar , 'en'=>$request->name_en])
        ];

        $this->constructionClassificationRepositoryInterface->update( $arr , $id);
        return redirect()->back()->with('success' , 'you have updated this classification successfully');
    }

}

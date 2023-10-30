<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\Construction;
use App\Models\Contracting;
use App\RepositoryInterface\ConstructionClassificationRepositoryInterface;
use App\RepositoryInterface\ConstructionRepositoryInterface;
use App\RepositoryInterface\ContractingRepositoryInterface;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    use ImageTrait;
    private $constructionRepositoryInterface;
    private $constructionClassificationRepositoryInterface;
    private $contractingRepositoryInterface;

    public function __construct(ConstructionRepositoryInterface $constructionRepositoryInterface , ConstructionClassificationRepositoryInterface $constructionClassificationRepositoryInterface , ContractingRepositoryInterface $contractingRepositoryInterface )
    {
        $this->constructionRepositoryInterface = $constructionRepositoryInterface;
        $this->constructionClassificationRepositoryInterface = $constructionClassificationRepositoryInterface;
        $this->contractingRepositoryInterface = $contractingRepositoryInterface;
    }




    public function index()
    {

        $constructions = $this->constructionRepositoryInterface->index();

        return view('admin/construction/index' , compact('constructions'));
    }

    public function create()
    {
        $classifications = $this->constructionClassificationRepositoryInterface->index();
        $partners = $this->contractingRepositoryInterface->index();
        return view('admin/construction/add' , compact(  'classifications' , 'partners'));

    }

    public function store(Request $request)
    {

        $arr =
            [
            'user_id'=> auth()->id(),
            'construction_classifications_id' => $request->construction_classifications_id,
            'partner_id' => $request->partner_id,
            'title' => json_encode(['ar'=>$request->title_ar , 'en'=>$request->title_en]),
            'region'=> json_encode(['ar'=>$request->region_ar , 'en'=>$request->region_en]),
            'city'=> json_encode(['ar'=>$request->city_ar , 'en'=>$request->city_en]),
            'image' => $this->storeImage2($request , '/images/constructions/' , $request->image , 'image'),
            'video' => $this->storeImage2($request , '/videos/constructions/' , $request->video , 'video'),
            'number_of_constructions'=>$request->number_of_constructions,
            'power'=>$request->power,
            'duration_time'=>$request->duration_time,
                'is_on_main_page' => $request->is_on_main_page,
                'description' => json_encode(['ar'=>$request->description_ar , 'en'=>$request->description_en]),

            ];



        $this->constructionRepositoryInterface->create($arr);
        return redirect( route('construction.index'))->with('success' , 'you have updated this construction successfully');

    }

    public function edit($id)
    {
        $classifications = $this->constructionClassificationRepositoryInterface->index();
        $construction = $this->constructionRepositoryInterface->edit($id);
        $partners = $this->contractingRepositoryInterface->index();

        return view('admin/construction/edit' , compact('construction' , 'classifications' , 'partners'));
    }


    public function update(Request $request ,$id)
    {

        $arr =
            [
                'user_id'=> auth()->id(),
                'construction_classifications_id' => $request->construction_classifications_id,
                'partner_id' => $request->partner_id,
                'title' => json_encode(['ar'=>$request->title_ar , 'en'=>$request->title_en]),
                'region'=> json_encode(['ar'=>$request->region_ar , 'en'=>$request->region_en]),
                'city'=> json_encode(['ar'=>$request->city_ar , 'en'=>$request->city_en]),
                'number_of_constructions'=>$request->number_of_constructions,
                'power'=>$request->power,
                'duration_time'=>$request->duration_time,
                'is_on_main_page' => $request->is_on_main_page,
                'description' => json_encode(['ar'=>$request->description_ar , 'en'=>$request->description_en]),

            ];

        if($request->image){
           $arr ['image' ]= $this->updateImage2($request , Construction::class ,$id,'/images/constructions/' , $request->image , 'image');
        }

        if($request->video){
             $arr ['video' ]= $this->updateImage2($request , Construction::class ,$id,'/videos/constructions/' , $request->video , 'video');

        }

        $this->constructionRepositoryInterface->update( $arr , $id);
        return redirect()->back()->with('success' , 'you have updated this construction successfully');
    }


    public function show($id)
    {
        $classifications = $this->constructionRepositoryInterface->index();
        $construction = $this->constructionRepositoryInterface->show($id);
        $partners = $this->contractingRepositoryInterface->index();

        return view('admin/construction/show' , compact('construction' , 'classifications' , 'partners'));
    }


}

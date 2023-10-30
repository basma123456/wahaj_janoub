<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\RepositoryInterface\ConstructionClassificationRepositoryInterface;
use App\RepositoryInterface\ConstructionRepositoryInterface;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    private $ConstructionRepositoryInterface;
    private $ConstructionClassificationRepositoryInterface;

    public function __construct(
        ConstructionRepositoryInterface $ConstructionRepositoryInterface,
        ConstructionClassificationRepositoryInterface $ConstructionClassificationRepositoryInterface


    )
    {
        $this->ConstructionRepositoryInterface = $ConstructionRepositoryInterface;
        $this->ConstructionClassificationRepositoryInterface = $ConstructionClassificationRepositoryInterface;
    }

    public function index()
    {
        $constructions = $this->ConstructionRepositoryInterface->getLastTwo();
        $classifications = $this->ConstructionClassificationRepositoryInterface->index();
        return  view('front/constructions/index_all' , compact('classifications' , 'constructions'));
    }

    public function indexByClassification($id)
    {
        $constructions = $this->ConstructionRepositoryInterface->getByClassification($id);
        if( $constructions->count()) {
            return view('front/constructions/index', compact('constructions'));
        }else{
            return view('front/no_data');
        }
    }


    public function show($id)
    {
        $construction = $this->ConstructionRepositoryInterface->show($id);
        $other_constructions = $this->ConstructionRepositoryInterface->getLastThree();
         if($construction && $construction->count()) {
            return view('front/constructions/details', compact('construction' , 'other_constructions'));
        }else{
             return view('front/no_data');
        }
    }

}

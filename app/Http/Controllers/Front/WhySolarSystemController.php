<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;
use Illuminate\Http\Request;

class WhySolarSystemController extends Controller
{
     private $WhySolarSystemRepositoryInterface;

    public function __construct(
        WhySolarSystemRepositoryInterface $WhySolarSystemRepositoryInterface
    ){
         $this->WhySolarSystemRepositoryInterface = $WhySolarSystemRepositoryInterface;
    }


    public function index()
    {
        //    resources/views/front/why_solar_system/index.blade.php
        $WhySolarSystem = $this->WhySolarSystemRepositoryInterface->getLastPage();
        return view('front/why_solar_system/index' , compact('WhySolarSystem'));
    }
}

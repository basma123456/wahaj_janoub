<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\System;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;
use Illuminate\Http\Request;
use App\RepositoryInterface\SystemRepositoryInterface;
class SystemController extends Controller
{
    private $SystemRepositoryInterface;
    private $WhySolarSystemRepositoryInterface;

    public function __construct(SystemRepositoryInterface $SystemRepositoryInterface,
    WhySolarSystemRepositoryInterface $WhySolarSystemRepositoryInterface
    ){
         $this->SystemRepositoryInterface = $SystemRepositoryInterface;
         $this->WhySolarSystemRepositoryInterface = $WhySolarSystemRepositoryInterface;
    }

    public function index()
    {
        $systems =  $this->SystemRepositoryInterface->index();
         return view('front/systems/index' , compact('systems'));
    }
    public function show($id)
    {
        $system =  $this->SystemRepositoryInterface->show($id);
        $why_solar_system =  $this->WhySolarSystemRepositoryInterface->getLastPage();


        return view('front/systems/details' , compact('system' , 'why_solar_system'));
    }



 }

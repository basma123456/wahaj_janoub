<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RepositoryInterface\NewsRepositoryInterface;
class NewsController extends Controller
{
    private $NewsRepositoryInterface;

    public function __construct(NewsRepositoryInterface $NewsRepositoryInterface)
    {
        $this->NewsRepositoryInterface = $NewsRepositoryInterface;

    }
    public function index()
    {
        $news =  $this->NewsRepositoryInterface->all();
        return view('front/news/index'  , compact('news'));
    }


    public function show($id)
    {
        $new =  $this->NewsRepositoryInterface->show($id);
        $lastThree = $this->NewsRepositoryInterface->getLastThree();
         return view('front/news/show'  , compact('new' , 'lastThree'));

    }
 }

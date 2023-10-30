<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\RepositoryInterface\AboutUsRepositoryInterface;
use Illuminate\Http\Request;
class AboutUsController extends Controller
{
    private $AboutUsRepositoryInterface;

    public function __construct(AboutUsRepositoryInterface $AboutUsRepositoryInterface)
    {
        $this->AboutUsRepositoryInterface = $AboutUsRepositoryInterface;
    }


    public function index()
    {
        $aboutUs = $this->AboutUsRepositoryInterface->getLastPage();
         return view('front/about_us/index' , compact('aboutUs'));

    }
}

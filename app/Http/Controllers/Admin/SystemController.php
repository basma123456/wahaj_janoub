<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\System;
use App\RepositoryInterface\SystemRepositoryInterface;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    use  ImageTrait;
    private $systemRepository;

    public function  __construct( SystemRepositoryInterface  $systemRepository)
    {
        $this->systemRepository    = $systemRepository;
    }


    public function index()
    {
      $systems = $this->systemRepository->index();
      return view('admin/systems/index' , compact('systems'));
    }


    public function create()
    {
         return view('admin/systems/add' );
    }



    public function store(Request $request)
    {

        $arr = [
            'user_id' => auth()->id(),
            'title' => json_encode(['ar' => $request->title_ar ,  'en' => $request->title_en]),
            'description'=>  json_encode(['ar' => $request->description_ar ,  'en' => $request->description_en]),
            'image' =>  $this->storeImage2($request , '/images/systems/' , $request->image , 'image'),
            'video'=>  $this->storeImage2($request , '/videos/systems/' , $request->video , 'video'),
           ];

        $this->systemRepository->create($arr );
        return redirect()->route('systems.index')->with('success' , 'you entered this system successfully');


    }



    public function update(Request $request , $id){
        $arr =  array(
            'title' => json_encode(['ar'=>$request->title_ar , 'en' => $request->title_en]),
            'description' => json_encode(['ar'=>$request->description_ar , 'en' => $request->description_en]),
            'user_id' => auth()->id(),

        );

        if($request->image) {
            $arr['image'] = $this->updateImage2($request, System::class, $id, '/images/systems/', $request->image, 'image');
           }
        if($request->video) {
            $arr['video' ]= $this->updateImage2($request, System::class, $id, '/videos/systems/', $request->video, 'video');
            }

        $this->systemRepository->update($arr , $id);
        return redirect()->back()->with('success' , 'you have updated this system successfully');

    }

    public function edit($id)
    {
        $system = $this->systemRepository->edit($id);
        return view('admin/systems/edit' , compact('system'));
    }



}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\WhySolarSystem;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;
use Illuminate\Http\Request;

class WhySolarSystemController extends Controller
{
    use ImageTrait;
    private $whySolarSystemRepositoryInterface;
    public function  __construct(WhySolarSystemRepositoryInterface $whySolarSystemRepositoryInterface )
    {
        $this->whySolarSystemRepositoryInterface = $whySolarSystemRepositoryInterface;
    }



    public function index()
    {
        $why_solar_system =  $this->whySolarSystemRepositoryInterface->getLastPage();
        return view('admin/why_solar_system/index' , compact('why_solar_system'));
    }


    public function create()
    {
        return view('admin/why_solar_system/add' );

    }

    public function store(Request $request)
    {
        $arr = [
            'user_id' => auth()->id(),
            'title_one' => json_encode(['ar' => $request->title_one_ar , 'en' => $request->title_one_en]),
            'image_one' => $this->storeImage2($request , '/images/why_solar_system/' , $request->image_one , 'image_one' ),
            'description_one' => json_encode(['ar' => $request->description_one_ar , 'en' => $request->description_one_en]),
            'last_h' => json_encode(['ar' => $request->last_h_ar , 'en' => $request->last_h_en]),
            'accordion_text' => json_encode(['ar' => $request->accordion_text_ar , 'en' => $request->accordion_text_en]),
            'accordion_text_2'=> json_encode(['ar' => $request->accordion_text_2_ar , 'en' => $request->accordion_text_2_en]),
            'accordion_text_3' =>  json_encode(['ar' => $request->accordion_text_3_ar , 'en' => $request->accordion_text_3_en]),
            'accordion_text_4'=> json_encode(['ar' => $request->accordion_text_4_ar , 'en' => $request->accordion_text_4_en]),
            'accordion_text_5'=> json_encode(['ar' => $request->accordion_text_5_ar , 'en' => $request->accordion_text_5_en]),
            'accordion_text_6'=> json_encode(['ar' => $request->accordion_text_6_ar , 'en' => $request->accordion_text_6_en]),

        ];

        $this->whySolarSystemRepositoryInterface->create($arr);

        return view('admin/why_solar_system/edit' , compact('why_solar_system') );

    }


    public function edit($id)
    {
        $why_solar_system =  $this->whySolarSystemRepositoryInterface->edit($id);

        return view('admin/why_solar_system/edit' , compact('why_solar_system') );

    }

    public function update(Request $request , $id)
    {
             $arr = [
            'user_id' => auth()->id(),
            'title_one' => json_encode(['ar' => $request->title_one_ar , 'en' => $request->title_one_en]),
            'description_one' => json_encode(['ar' => $request->description_one_ar , 'en' => $request->description_one_en]),
            'last_h' => json_encode(['ar' => $request->last_h_ar , 'en' => $request->last_h_en]),
            'accordion_text' => json_encode(['ar' => $request->accordion_text_ar , 'en' => $request->accordion_text_en]),
            'accordion_text_2'=> json_encode(['ar' => $request->accordion_text_2_ar , 'en' => $request->accordion_text_2_en]),
            'accordion_text_3' =>  json_encode(['ar' => $request->accordion_text_3_ar , 'en' => $request->accordion_text_3_en]),
            'accordion_text_4'=> json_encode(['ar' => $request->accordion_text_4_ar , 'en' => $request->accordion_text_4_en]),
            'accordion_text_5'=> json_encode(['ar' => $request->accordion_text_5_ar , 'en' => $request->accordion_text_5_en]),
            'accordion_text_6'=> json_encode(['ar' => $request->accordion_text_6_ar , 'en' => $request->accordion_text_6_en]),

            ];

        if($request->image_one){
           $arr[  'image_one'] = $this->updateImage2($request ,  WhySolarSystem::class  ,$id ,'/images/why_solar_system/' , $request->image_one , 'image_one' );
        }

        $this->whySolarSystemRepositoryInterface->update($arr , $id);

        return redirect()->route('why-solar-system.index')->with('success' , 'you have entered this page successfully');

    }


//[
//'user_id',
//'title_one',
//'image_one',
//'description_one',
//'last_h',
//'accordion_text',
//];

}

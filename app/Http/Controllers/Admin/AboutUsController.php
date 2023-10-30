<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\AboutUs;
use App\RepositoryInterface\AboutUsRepositoryInterface;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    use ImageTrait;

    private $aboutUsRepositoryInterface;
    public function  __construct( AboutUsRepositoryInterface $aboutUsRepositoryInterface)
    {
        $this->aboutUsRepositoryInterface    = $aboutUsRepositoryInterface;
    }

    public function index()
    {
        $aboutUs = $this->aboutUsRepositoryInterface->getLastPage();
         return view('admin/about_us/index' , compact('aboutUs'));
    }

    public function create()
    {

        if(! $this->aboutUsRepositoryInterface->getLastPage()) {
            return view('admin/about_us/add');
        }else{
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
         $arr =  [
            'user_id' => auth()->id(),
            'title_one' => json_encode(['ar' => $request->title_one_ar , 'en' => $request->title_one_en]),
            'description_one' => json_encode(['ar' => $request->description_one_ar , 'en' => $request->description_one_en]),
            'more_description_one' => json_encode(['ar' => $request->more_description_one_ar , 'en' => $request->more_description_one_en]),
            'image_one' => $this->storeImage2($request , '/images/about_us/' ,$request->image_one , 'image_one' ),
            'title_two' => json_encode(['ar' => $request->title_two_ar , 'en' => $request->title_two_en]),
            'description_two' => json_encode(['ar' => $request->description_two_ar , 'en' => $request->description_two_en]),
            'image_two' => $this->storeImage2($request , '/images/about_us/' ,$request->image_two , 'image_two'),
            'last_h' => json_encode(['ar' => $request->last_h_ar , 'en' => $request->last_h_en]),
            'right_bottom_title' => json_encode(['ar' => $request->right_bottom_title_ar , 'en' => $request->right_bottom_title_en]),
            'right_bottom_desc' => json_encode(['ar' => $request->right_bottom_desc_ar , 'en' => $request->right_bottom_desc_en]),
            'left_bottom_title' => json_encode(['ar' => $request->left_bottom_title_ar , 'en' => $request->left_bottom_title_en]),
            'left_bottom_desc' => json_encode(['ar' => $request->left_bottom_desc_ar , 'en' => $request->left_bottom_desc_en]),


        ];
          $this->aboutUsRepositoryInterface->create($arr);
          return redirect()->route('about-us.index');
    }


    public function edit($id)
    {
        $aboutUs = $this->aboutUsRepositoryInterface->edit($id);
        return view('admin/about_us/edit' , compact('aboutUs'));
    }


    public function update(Request $request , $id)
    {
      $arr =  [
          'user_id' => auth()->id(),
          'title_one' => json_encode(['ar' => $request->title_one_ar , 'en' => $request->title_one_en]),
          'description_one' => json_encode(['ar' => $request->description_one_ar , 'en' => $request->description_one_en]),
          'more_description_one' => json_encode(['ar' => $request->more_description_one_ar , 'en' => $request->more_description_one_en]),
          'title_two' => json_encode(['ar' => $request->title_two_ar , 'en' => $request->title_two_en]),
          'description_two' => json_encode(['ar' => $request->description_two_ar , 'en' => $request->description_two_en]),
          'last_h' => json_encode(['ar' => $request->last_h_ar , 'en' => $request->last_h_en]),
          'right_bottom_title' => json_encode(['ar' => $request->right_bottom_title_ar , 'en' => $request->right_bottom_title_en]),
          'right_bottom_desc' => json_encode(['ar' => $request->right_bottom_desc_ar , 'en' => $request->right_bottom_desc_en]),
          'left_bottom_title' => json_encode(['ar' => $request->left_bottom_title_ar , 'en' => $request->left_bottom_title_en]),
          'left_bottom_desc' => json_encode(['ar' => $request->left_bottom_desc_ar , 'en' => $request->left_bottom_desc_en]),


      ];

           if($request->image_one) {
              $arr['image_one'] = $this->updateImage2($request, AboutUs::class, $id, '/images/about_us/', $request->image_one, 'image_one');
           }
            if($request->image_two) {
                $arr['image_two'] = $this->updateImage2($request, AboutUs::class, $id, '/images/about_us/', $request->image_two, 'image_two');
            }
          $this->aboutUsRepositoryInterface->update($arr , $id);

        return redirect()->back()->with('success' , 'you have updated this page successfully');

    }

}

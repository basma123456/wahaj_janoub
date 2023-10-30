<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\MainPage;
use App\Models\Product;
use App\RepositoryInterface\MainPageRepositoryInterface;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    use ImageTrait;

    private $mainPageRepositoryInterface;
    public function  __construct( MainPageRepositoryInterface $mainPageRepositoryInterface)
    {
        $this->mainPageRepositoryInterface    = $mainPageRepositoryInterface;
    }

    public function index()
    {
        $mainPage =  $this->mainPageRepositoryInterface->getLastRecord();
         return view('admin.main_page.index' , compact('mainPage'));

    }

    public function create()
    {
        if(! $this->mainPageRepositoryInterface->getLastRecord()  ) {
            return view('admin.main_page.add' );
        }else{
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
//
            $arr = [

                'user_id' => auth()->id(),
                'logo' => $this->storeImage2($request, '/images/main_page', $request->logo, 'logo'),
                'file' => $this->storeImage2($request, '/images/main_page', $request->file, 'file'),
                'main_title' => json_encode(['ar' => $request->main_title_ar, 'en' => $request->main_title_en]),
                'main_desc' => json_encode(['ar' => $request->main_desc_ar, 'en' => $request->main_desc_en]),
                'about_us_desc' => json_encode(['ar' => $request->about_us_desc_ar, 'en' => $request->about_us_desc_en]),
                'right_bottom_desc' => json_encode(['ar' => $request->right_bottom_desc_ar, 'en' => $request->right_bottom_desc_en]),
                'facebook_link' => $request->facebook_link,
                'instagram_link' => $request->instagram_link,
                'twitter_link' => $request->twitter_link,
                'linkedin_link' => $request->linkedin_link,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'contact_us_link' => $request->contact_us_link,
                'num_of_projects' => $request->num_of_projects,
                'num_of_employees' => $request->num_of_employees,
                'num_of_customers' => $request->num_of_customers,
                'num_of_mega_watts' => $request->num_of_mega_watts,

            ];
            $this->mainPageRepositoryInterface->create($arr);

    }

    public function edit($id)
    {

        $mainPage = $this->mainPageRepositoryInterface->edit(  $id);

         return view('admin.main_page.edit' , compact('mainPage') );

    }


    public function update(Request $request , $id){

        $arr = [

            'user_id' => auth()->id(),
//            'logo'  => $this->storeImage2($request , '/images/main_page' , $request->logo , 'logo'),
//            'file' => $this->storeImage2($request , '/images/main_page' , $request->file , 'file'),
            'main_title' => json_encode(['ar'=>$request->main_title_ar , 'en' => $request->main_title_en]),
            'main_desc'=> json_encode(['ar'=>$request->main_description_ar , 'en' => $request->main_description_en]),
            'about_us_desc' => json_encode(['ar' => $request->about_us_desc_ar , 'en' =>$request->about_us_desc_en]),
            'right_bottom_desc'=> json_encode(['ar'=>$request->right_bottom_desc_ar , 'en' => $request->right_bottom_desc_en]),
            'facebook_link'=> $request->facebook_link,
            'instagram_link'=>$request->instagram_link,
            'twitter_link'=>$request->twitter_link,
            'linkedin_link'=>$request->linkedin_link,
            'email'=>$request->email,
            'whatsapp'=>$request->whatsapp,
            'contact_us_link'=>$request->contact_us_link,
            'num_of_projects' =>$request->num_of_projects,
            'num_of_employees' =>$request->num_of_employees,
            'num_of_customers' =>$request->num_of_customers,
            'num_of_mega_watts' =>$request->num_of_mega_watts,


        ];

        if($request->logo){

            $arr['logo'] =   $this->updateImage2( $request , Product::class , $id , '/images/main_page/' , $request->logo , 'logo');
        }
        if($request->file){

            $arr['file'] =   $this->updateImage2( $request , Product::class , $id , '/images/main_page/' , $request->file , 'file');
        }


        $this->mainPageRepositoryInterface->update($arr , $id);
        return redirect()->back();

    }

}

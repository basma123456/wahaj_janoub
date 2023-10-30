<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use App\Models\News;
use Illuminate\Http\Request;
use App\RepositoryInterface\NewsRepositoryInterface;


class NewsController extends Controller
{
    use ImageTrait;
    private $newsRepositoryInterface;



    public function __construct(NewsRepositoryInterface $newsRepositoryInterface)
    {
        $this->newsRepositoryInterface = $newsRepositoryInterface;
    }

    public function index()
    {
        $newss =  $this->newsRepositoryInterface->all();
        return view('admin/news/index' , compact('newss'));
    }


    public function create()
    {
         return view('admin/news/add');
    }

    public function store(Request $request)
    {
        $arr = [
            'title' => json_encode(['ar' => $request->title_ar , 'en' => $request->title_en]) ,
            'description' => json_encode(['ar' => $request->description_ar , 'en' => $request->description_en]) ,
            'image' => $this->storeImage2($request , '/images/news/' , $request->image , 'image'),
            'date' => $request->date,
            'user_id' =>auth()->id(),

        ];
        $this->newsRepositoryInterface->create($arr);

        return redirect()->route('news.index');
    }


    public function edit($id)
    {
        $news = $this->newsRepositoryInterface->edit($id);
        return view('admin/news/edit' , compact('news'));
    }


    public function update(Request $request ,$id)
    {
        $arr = [
            'title' => json_encode(['ar' => $request->title_ar , 'en' => $request->title_en]) ,
            'description' => json_encode(['ar' => $request->description_ar , 'en' => $request->description_en]) ,
            'date' => $request->date,
            'user_id' =>auth()->id(),
        ];


        if($request->image) {
            $arr['image'] = $this->updateImage2($request,News::class , $id ,'/images/news/', $request->image, 'image');
        }
        $this->newsRepositoryInterface->update($arr , $id);
        return redirect()->route('news.index')->with('success' , 'you updated this news successfully');
    }

}

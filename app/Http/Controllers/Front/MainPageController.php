<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Construction;
use App\Models\Product;
use App\Models\Quotation;
use App\RepositoryInterface\NewsRepositoryInterface;
use App\RepositoryInterface\ProductClassificationRepositoryInterface;
use App\RepositoryInterface\QuotationRepositoryInterface;
use App\RepositoryInterface\SystemRepositoryInterface;
use Illuminate\Http\Request;
use App\RepositoryInterface\MainPageRepositoryInterface;
use App\RepositoryInterface\ContractingRepositoryInterface;
use App\RepositoryInterface\ConstructionRepositoryInterface;
class MainPageController extends Controller
{
    private $mainPageRepositoryInterface;
    private $systemRepositoryInterface;
    private $productClassificationRepositoryInterface;
    private $contractingRepositoryInterface;
    private $constructionRepositoryInterface;
    private $newsRepositoryInterface;
    private $QuotationRepositoryInterface;
//    private $promotionClientRequirement

    public function __construct(MainPageRepositoryInterface $mainPageRepositoryInterface ,
                                SystemRepositoryInterface $systemRepositoryInterface,
                                ProductClassificationRepositoryInterface  $productClassificationRepositoryInterface,
                                ContractingRepositoryInterface  $contractingRepositoryInterface,
                                ConstructionRepositoryInterface $constructionRepositoryInterface,
                                NewsRepositoryInterface $newsRepositoryInterface,
                                QuotationRepositoryInterface $QuotationRepositoryInterface


    )
    {
        $this->mainPageRepositoryInterface = $mainPageRepositoryInterface;
        $this->systemRepositoryInterface = $systemRepositoryInterface;
        $this->productClassificationRepositoryInterface = $productClassificationRepositoryInterface;
        $this->contractingRepositoryInterface = $contractingRepositoryInterface;
        $this->constructionRepositoryInterface =$constructionRepositoryInterface;
        $this->newsRepositoryInterface =$newsRepositoryInterface;
        $this->QuotationRepositoryInterface = $QuotationRepositoryInterface;

    }

    public function index()
    {
         $main = $this->mainPageRepositoryInterface->getLastRecord();
        $systems = $this->systemRepositoryInterface->lastThree();
        $productClassifications = $this->productClassificationRepositoryInterface->getLastSix();
        $partners = $this->contractingRepositoryInterface->getLastEight();
        $constructions = $this->constructionRepositoryInterface->getLastTwo();
        $getOfmainPageConstruction = $this->constructionRepositoryInterface->getOfmainPage();
        $newss = $this->newsRepositoryInterface->getLastThree();

        return view('front/main_page/index' , compact('main' , 'systems' , 'productClassifications' , 'partners' , 'constructions' , 'getOfmainPageConstruction' , 'newss'));
    }


    public function promotionClientRequirement(Request $request) //constructions
    {
        $arr = [

           'name'=>$request->name ,
           'phone'=>$request->phone ,
           'email' =>$request->email,
           'message' =>$request->message,
           'status'=>0,
           'table_name' =>'constructions' ,
           'foreign_id'=> $request->foreign_id
       ];

        $m = $this->QuotationRepositoryInterface->create($arr);
        $m->construction()->attach( ['foreign_id' =>$request->foreign_id
        ], ['table_name' => 'constructions' , 'foreign_id'=> $request->foreign_id , 'quotation_id' => $m->id]);


           if($m) {
           return redirect()->back()->with('success', 'quotation have been sent successfully');
       }else{
           return redirect()->back()->with('error', 'sorry , quotation have not been sent');
       }
    }



    public function promotionClientRequirementProduct(Request $request) //product
    {
        $arr = [

            'name'=>$request->name ,
            'phone'=>$request->phone ,
            'email' =>$request->email,
            'message' =>$request->message,
            'status'=>0,
            'table_name' =>'products' ,
            'foreign_id'=> $request->foreign_id
        ];

        $m = $this->QuotationRepositoryInterface->create($arr);
        $m->product()->attach( ['foreign_id' =>$request->foreign_id
        ], ['table_name' => 'products' , 'foreign_id'=> $request->foreign_id , 'quotation_id' => $m->id]);


        if($m) {
            return redirect()->back()->with('success', 'quotation have been sent successfully');
        }else{
            return redirect()->back()->with('error', 'sorry , quotation have not been sent');
        }
    }

}

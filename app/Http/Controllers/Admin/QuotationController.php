<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\RepositoryInterface\QuotationRepositoryInterface;
use Illuminate\Support\Facades\DB;

class QuotationController extends Controller
{
    private $QuotationRepositoryInterface;

    public function __construct(QuotationRepositoryInterface $QuotationRepositoryInterface)
    {
       $this->QuotationRepositoryInterface = $QuotationRepositoryInterface;
    }


    public function index()
    {
        $quotations = $this->QuotationRepositoryInterface->index();
         return view('admin/quotations/index' , compact('quotations'));
    }


    public function create()
    {
         return view('admin/quotations/add' );
    }

    public function show($type , $id)
    {
         $quotation = $this->QuotationRepositoryInterface->show($type,$id);
         $item = DB::table('quotation_product_construction')->where('quotation_id' , $id)->first();

        $arr = [
            'status' => 1,
            'admin_id' => auth()->id(),
        ];

        $this->QuotationRepositoryInterface->update($arr , $id);

        return view('admin/quotations/show'  , compact('quotation'));
    }


    public function edit($type , $id)
    {
        $item = DB::table('quotation_product_construction')->where('quotation_id' , $id)->first();



        $quotation = $this->QuotationRepositoryInterface->edit($type,$id);
        return view('admin/quotations/edit'  , compact('quotation'));
    }

    public function update(Request $request , $id)
    {
        $arr = [
            'status' => $request->status,
            'admin_id' => auth()->id(),
            'notes_by_admin' => $request->notes_by_admin,
         ];

        $this->QuotationRepositoryInterface->update($arr , $id);
        return redirect()->back();

    }



}

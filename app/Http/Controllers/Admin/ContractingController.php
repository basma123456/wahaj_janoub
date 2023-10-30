<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contracting;
use App\RepositoryInterface\ContractingRepositoryInterface;
use Illuminate\Http\Request;

class ContractingController extends Controller
{
    private $contractingRepositoryInterface;

    public function __construct(ContractingRepositoryInterface $contractingRepositoryInterface)
    {
        $this->contractingRepositoryInterface = $contractingRepositoryInterface;
    }


    public function index()
    {
        $partners  = $this->contractingRepositoryInterface->index();
        return view('admin/partners/index' , compact('partners'));
    }

    public function create()
    {
         return view('admin/partners/add');
    }


    public function store(Request $request)
    {
        $arr = [
            'name' => json_encode(['ar' => $request->name_ar , 'en' => $request->name_en ])
        ];
        $this->contractingRepositoryInterface->create($arr);
        return redirect()->back();
    }



    public function edit($id)
    {
        $partner = $this->contractingRepositoryInterface->edit($id);
        return view('admin/partners/edit' , compact('partner'));
    }


    public function update(Request $request , $id)
    {

        $arr = [
            'name' => json_encode(['ar' => $request->name_ar , 'en' => $request->name_en ])
        ];
        $this->contractingRepositoryInterface->update($arr , $id);

        return redirect()->route('partners.index')->with('success' , 'you have entered this partner successfully');
    }




}

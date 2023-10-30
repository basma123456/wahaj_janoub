@extends('admin.app')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Quotations</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item">Form Widgets</li>
                            <li class="breadcrumb-item active">Default Forms</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <!-- Bookmark Start-->
                        <div class="bookmark">
                            <ul>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                                    <form class="form-inline search-form">
                                        <div class="form-group form-control-search">
                                            <input readonly type="text" placeholder="Search..">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>













            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">

                    <!---------start----------->
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h5> Quotations </h5>
                                    </div>
                                    <div class="card-body">
                                        <div  class="theme-form mega-form"  >
                                             <h6>Quotation</h6>
{{--                                            [--}}

{{--                                            'name' , 'phone' , 'email' , 'message' , 'status' , 'admin_id' , 'notes_by_admin','table_name' , 'foreign_id',--}}

{{--                                            ]--}}
                                            <div class="mb-3">
                                                <label class="col-form-label">    name     </label>
                                                <input readonly value="{{$quotation->name}}" class="form-control" name="name" type="text" placeholder=" name    ">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    phone     </label>
                                                <input readonly value="{{$quotation->phone}}" class="form-control" name="phone" type="text" placeholder=" phone    ">
                                            </div>

 <!----------------------------------------->


                                            <div class="mb-3">
                                                <label class="col-form-label">    email     </label>
                                                <input readonly value="{{$quotation->email}}" class="form-control" name="email" type="email" placeholder=" email    ">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    message     </label>
                                                <textarea readonly  class="form-control" name="message" >
                                                {{$quotation->message}}
                                                </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    status     </label>
                                                <select readonly  class="form-control" name="status" >
                                                <option value="">...</option>
                                                    <option {{$quotation->status === 1 ? 'selected' : ''}} value="1">seen</option>
                                                    <option {{$quotation->status === 2 ? 'selected' : ''}} value="2">called</option>
                                                    <option {{$quotation->status === 3 ? 'selected' : ''}}  value="3">postponed</option>
                                                    <option {{$quotation->status === 4 ? 'selected' : ''}}  value="4">accepted</option>
                                                    <option {{$quotation->status === 5 ? 'selected' : ''}}  value="5">rejected</option>

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    admin     </label>
                                                <input readonly value="{{$quotation->admin && $quotation->admin->count() ? $quotation->admin->name : ''}}" class="form-control"   type="text"  >
                                                 <input readonly value="{{$quotation->admin_id}}" class="form-control" name="admin_id" type="text"  >

                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    notes by admin     </label>
                                                <textarea  readonly  class="form-control" name="notes_by_admin"  > {{$quotation->notes_by_admin}}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    table name     </label>
                                                <input readonly value="{{$quotation->table_name}}" class="form-control" name="table_name" type="text" >
                                            </div>
                                         @if($quotation->table_name === 'products')
                                            <div class="mb-3">
                                                <label class="col-form-label">    product      </label>
                                                <input readonly value="{{$quotation->product && $quotation->product->count() ? convertLanguageToLocale($quotation->product[0]->title) : ''}}" class="form-control"  type="text" >
                                            </div>
                                            @elseif($quotation->table_name === 'constructions')
                                                <div class="mb-3">
                                                    <label class="col-form-label">     construction     </label>
                                                    <input readonly value="{{$quotation->construction && $quotation->construction->count() ? convertLanguageToLocale($quotation->construction[0]->title) : ''}}" class="form-control"  type="text" >
                                                </div>

                                            @endif
                                            <input readonly class="form-control d-none" name="foreign_id" value="{{$quotation->foreign_id}}" type="number" >




                                            <div class="card-footer">
{{--                                                <button class="btn btn-primary">Submit</button>--}}
                                                <a  href="{{route('quotation.index')}}" class="btn btn-secondary">return back</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------end ----------------->
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
    </div>
@endsection

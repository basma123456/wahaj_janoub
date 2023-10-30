@extends('admin.app')

@section('content')

    <div class="page-body-wrapper horizontal-menu">
          <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>quotations list</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">dashboard</li>
                                <li class="breadcrumb-item active">quotations list</li>
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
                                                <input type="text" placeholder="Search..">
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!-- Bookmark Ends-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row construction-cards">
                    <div class="col-md-12 construction-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 p-0">
                                    <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>
                                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a></li>
                                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Done</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 p-0">
{{--                                    <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="{{route('quotation.create')}}"> <i data-feather="plus-square"> </i>Create New quotations</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                        <div class="row">
                                             @if(!empty($quotations))
                                            @foreach($quotations as $quotation)
                                                @if($quotation->table_name == 'constructions' && $quotation->construction && $quotation->construction->count() )
                                                 <div class="col-xxl-4 col-lg-6">

                                                    <div class="construction-box"><a  href="{{url('quotation-edit/construction/'.$quotation->id)}}" class="badge badge-primary">Edit</a><a  href="{{url('quotation/construction/'.$quotation->id)}}" class="badge badge-warning">show</a>
                                                        <h6> {{$quotation->name ?? ''}}  <br> construction :  {{ convertLanguageToLocale($quotation->construction[0]->title) ?? ''}}  </h6>
                                                     </div>
                                                </div>
                                                    @endif

                                                         @if($quotation->table_name == 'products' && $quotation->product && $quotation->product->count() )

                                                        <div class="col-xxl-4 col-lg-6">

                                                                <div class="construction-box"><a  href="{{url('quotation-edit/product/'.$quotation->id)}}" class="badge badge-primary">Edit</a><a  href="{{url('quotation/product/'.$quotation->id)}}" class="badge badge-warning">show</a>
                                                                    <h6> {{$quotation->name ?? ''}}  <br>  product :  {{convertLanguageToLocale($quotation->product[0]->title)   }}  </h6>
                                                                </div>
                                                            </div>
                                                        @endif

                                                    @endforeach
                                            @endif
                                        </div>


                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
      </div>

@endsection

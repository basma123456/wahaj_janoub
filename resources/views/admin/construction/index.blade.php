@extends('admin.app')

@section('content')

    <div class="page-body-wrapper horizontal-menu">
          <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Construction  list</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">dashboard</li>
                                <li class="breadcrumb-item active">Construction  list</li>
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
                                    <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="{{route('construction.create')}}"> <i data-feather="plus-square"> </i>Create New Construction </a>
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
                                             @if(!empty($constructions))
                                             @foreach($constructions as $construction)
                                                <div class="col-xxl-4 col-lg-6">

                                                    <div class="construction-box">
                                                        <a  href="{{route('construction.edit',$construction->id)}}" class="badge badge-primary">Edit</a>
                                                        <a  href="{{route('construction.show',$construction->id)}}" class="badge badge-info">show</a>

                                                        <a href="{{route('construction-image.edit' , ['id'=>1,'bigId'=>$construction->id])}}" class="badge badge-warning">images</a>
                                                        <h6> {{convertLanguageToEnglish($construction->title) ?? ''}}  <br> {{convertLanguageToArabic($construction->title) ?? ''}}  </h6>
                                                     </div>
                                                </div>
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

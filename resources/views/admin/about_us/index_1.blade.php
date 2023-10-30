@extends('admin.app')

@section('content')

<div class="page-body-wrapper horizontal-menu">
    <!-- Page Sidebar Start-->
     <!-- Page Sidebar Ends-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>About Us </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">dashboard</li>
                            <li class="breadcrumb-item active">project list</li>
                        </ol>
                    </div>
                 </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row project-cards">
                <div class="col-md-12 project-list">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6 p-0">
                                <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
{{--                                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>--}}
{{--                                    <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a></li>--}}
{{--                                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Done</a></li>--}}
                                </ul>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="{{route('about-us.create')}}"> <i data-feather="plus-square"> </i>Create New About Us</a>
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

                                        @foreach($aboutUss as $aboutUs)
                                        <div class="col-xxl-4 col-lg-6">

                                            <div class="project-box"> <a href="{{route('about-us.edit' , $aboutUs->id)}}" class="badge badge-primary">Edit</a>
                                                <h6> {{convertLanguageToEnglish($aboutUs->title) ?? ''}}  <br> {{convertLanguageToArabic($aboutUs->title) ?? ''}}  </h6>
                                                <div class="media"><img class="img-20 me-2 rounded-circle" src="{{asset('public/images/systems/' . $aboutUs->image)}}" alt="" data-original-title="" title="">
                                                    <div class="media-body">
                                                        <p>   </p>
                                                    </div>
                                                </div>

                                                <p>
                                                    {{convertLanguageToEnglish($aboutUs->description)  }}
                                                    {{convertLanguageToArabic($aboutUs->description)  }}
                                                </p>
                                                 <div class="customers">
                                                 </div>
                                             </div>
                                        </div>
                                        @endforeach

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

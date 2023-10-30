@extends('admin.app')

@section('content')

<div class="page-body-wrapper horizontal-menu">
    <!-- Page Sidebar Start-->
     <!-- Page Sidebar Ends-->
    <div class="page-body">
         <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row project-cards">
                <div class="col-md-12 project-list">
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
                                <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="{{route('news.create')}}"> <i data-feather="plus-square"> </i>Create News</a>
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

                                        @foreach($newss as $news)
                                        <div class="col-xxl-4 col-lg-6">

                                            <div class="project-box"><a href="{{route('news.edit' , $news->id)}}" class="badge badge-primary">Edit</a>
                                                <h6> {{convertLanguageToEnglish($news->title) ?? ''}}  <br> {{convertLanguageToArabic($news->title) ?? ''}}  </h6>
                                                 <div class="media"><img  class="img-20 me-2 rounded-circle" src="{{asset('public/images/news/'.$news->image)}}" alt="kk" data-original-title="" title="ll">
                                                    <div class="media-body">
                                                        <p> {{convertLanguageToEnglish($news->details) }} <br>{{convertLanguageToArabic($news->details)}}  </p>
                                                    </div>
                                                </div>
                                                <p>{{convertLanguageToEnglish($news->more_description)}}. <br> {{convertLanguageToArabic($news->more_description)}}</p>
{{--                                                <div class="row details">--}}
{{--                                                    <div class="col-6"><span>Issues </span></div>--}}
{{--                                                    <div class="col-6 font-primary">12 </div>--}}
{{--                                                    <div class="col-6"> <span>Resolved</span></div>--}}
{{--                                                    <div class="col-6 font-primary">5</div>--}}
{{--                                                    <div class="col-6"> <span>Comment</span></div>--}}
{{--                                                    <div class="col-6 font-primary">7</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="customers">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>--}}
{{--                                                        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>--}}
{{--                                                        <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>--}}
{{--                                                        <li class="d-inline-block ms-2">--}}
{{--                                                            <p class="f-12">+10 More</p>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
                                                <div class="project-status mt-4">
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

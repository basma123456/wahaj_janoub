
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
                            <h3>Main Page Profile</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Users</li>
                                <li class="breadcrumb-item active">Main Page Profile</li>
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
                <div class="user-profile">
                    <div class="row">
                        <!-- user profile header start-->
                        <div class="col-sm-12">
{{--                            <div class="card profile-header"><img class="img-fluid bg-img-cover" src="{{asset('public/admin_layouts/assets/images/user-profile/bg-profile.jpg')}}" alt="">--}}
{{--                                <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="{{asset('public/admin_layouts/assets/images/user-profile/bg-profile.jpg')}}" alt=""></div>--}}

                            <div class="card profile-header"><img class="img-fluid bg-img-cover" src="{{asset('public/images/main_page/' . $mainPage->logo)}}" alt="">
                                <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="{{asset('public/images/main_page/' . $mainPage->logo)}}" alt=""></div>

                                <div class="userpro-box">
                                    <div class="img-wrraper">
{{--                                        <div class="avatar"><img class="img-fluid" alt="" src="{{asset('public/admin_layouts/assets/images/user/7.jpg')}}"></div><a class="icon-wrapper" href="edit-profile.html"><i class="icofont icofont-pencil-alt-5"></i></a>--}}
                                        <div class="avatar"><img class="img-fluid" alt="" src="{{asset('public/images/main_page/' . $mainPage->logo)}}"></div><a class="icon-wrapper" alt="edit" href="{{route('main-page.edit' , $mainPage->id)}}"><i class="icofont icofont-pencil-alt-5"></i></a>

                                    </div>
                                    <div class="user-designation">
                                        <div class="title">
                                            <a target="_blank" href="">
                                                <h6> Main Title</h6>
                                                <h4>{{convertLanguageToEnglish($mainPage->main_title)}}  <br>   {{convertLanguageToArabic($mainPage->main_title)}}</h4>
                                                </a></div>



                                        <br><br>
                                        <h6> Links  </h6>

                                        <div class="social-media">
                                            <ul class="user-list-social">
                                                <li><a title="facebook" href="{{$mainPage->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
{{--                                                <li><a href="{{$mainPage->main_title}}"><i class="fa fa-google-plus"></i></a></li>--}}
                                                <li><a  title="twitter" href="{{$mainPage->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
                                                <li><a  title="instagram" href="{{$mainPage->instagram_link}}"><i class="fa fa-instagram"></i></a></li>
                                                <li>

                                                    <a  title="contact us link" href="{{$mainPage->contact_us_link}}" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg></a>
                                                </li>
                                                <li><a  title="whatsapp" href="{{url("https://wa.me//" .$mainPage->whatsapp . "?text=hello") }}"><i class="fa fa-whatsapp"></i></a></li>
                                                <li><a   title="linkedin"href="{{$mainPage->instagram_link}}"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a  title="email" href="{{$mainPage->instagram_link}}"><i class="fa fa-envelope"></i></a></li>

                                                {{--                                                linkedin_link--}}
{{--                                                whatsapp--}}
{{--                                                email--}}

                                            </ul>
                                        </div>

                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- user profile header end-->
                         <div class="col-xl-9 col-lg-12 col-md-7 xl-65">
                                 <!-- profile post end-->
                                <!-- profile post start-->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="profile-post">
                                            <div class="post-header">
                                                <div class="media"><img class="img-thumbnail rounded-circle me-3" src="{{asset('public/images/main_page/' . $mainPage->logo)}}" alt="Generic placeholder image">
                                                    <div class="media-body align-self-center"><a href=" ">
                                                            <h5 class="user-name">Main Description  </h5></a>
                                                     </div>
                                                </div>
                                                <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
                                            </div>
                                            <div class="post-body">
                                                <div class="img-container">
                                                    <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
                                                         <div class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="" itemprop="contentUrl" data-size="1600x950"> </a>
                                                            <div itemprop="caption description"> </div>
                                                        </div>
                                                        <div class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="" itemprop="contentUrl" data-size="1600x950"> </a>
                                                            <div itemprop="caption description"> </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                 <p>{{convertLanguageToEnglish($mainPage->main_desc)}}</p>
                                                <p>{{convertLanguageToArabic($mainPage->main_desc)}}</p>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile post end   -->
                                <!-- profile post start-->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="profile-post">
                                            <div class="post-header">
                                                <div class="media"><img class="img-thumbnail rounded-circle me-3" src="{{asset('public/images/main_page/' . $mainPage->logo)}}" alt="Generic placeholder image">
                                                    <div class="media-body align-self-center"><a href=" ">
                                                            <h5 class="user-name">About Us   description    </h5></a>
                                                     </div>
                                                </div>
                                                <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
                                            </div>
                                            <div class="post-body">
                                                <div class="img-container">
                                                    <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
                                                         <div class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="" itemprop="contentUrl" data-size="1600x950"> </a>
                                                            <div itemprop="caption description"> </div>
                                                        </div>
                                                        <div class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="" itemprop="contentUrl" data-size="1600x950"> </a>
                                                            <div itemprop="caption description"> </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                 <p>{{convertLanguageToEnglish($mainPage->about_us_desc)}}</p>
                                                <p>{{convertLanguageToArabic($mainPage->about_us_desc)}}</p>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile post end                           -->

{{--                             lllllllllllllll--}}

                         <!-- profile post start-->
                             <div class="col-sm-12">
                                 <div class="card">
                                     <div class="profile-post">
                                         <div class="post-header">
                                             <div class="media"><img class="img-thumbnail rounded-circle me-3" src="{{asset('public/images/main_page/' . $mainPage->logo)}}" alt="Generic placeholder image">
                                                 <div class="media-body align-self-center"><a href=" ">
                                                         <h5 class="user-name">Numbers          </h5></a>
                                                 </div>
                                             </div>
                                             <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
                                         </div>
                                         <div class="post-body">
                                             <div class="img-container">
                                                 <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
                                                     <div class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="" itemprop="contentUrl" data-size="1600x950"> </a>
                                                         <div itemprop="caption description"> </div>
                                                     </div>
                                                     <div class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="" itemprop="contentUrl" data-size="1600x950"> </a>
                                                         <div itemprop="caption description"> </div>
                                                     </div>

                                                 </div>
                                             </div>
                                             <div class="follow">
                                                 <ul class="follow-list">
                                                     <li class="col">
                                                         <div class="follow-num counter">{{$mainPage->num_of_projects}}</div><span>Projects</span>
                                                     </li>
                                                     <li class="col">
                                                         <div class="follow-num counter">{{$mainPage->num_of_employees}}</div><span>employees</span>
                                                     </li >
                                                     <li class="col">
                                                         <div class="follow-num counter">{{$mainPage->num_of_customers}}</div><span>customers</span>
                                                     </li>
                                                     <li class="col">
                                                         <div class="follow-num counter">{{$mainPage->num_of_mega_watts}}</div><span>mega watts</span>
                                                     </li>

                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- profile post end                           -->
                             <a class="btn btn-warning"  href="{{route('main-page.edit' , $mainPage->id)}}">Edit</a>

                         </div>


                        <!-- Container-fluid Ends-->
        </div>

@endsection

@extends('front.includes.app')
@section('content')

    <div style="
background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/panels.jpg')}});
width: 100%;
padding: 50px 0px;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
position: relative;">
        @include('front/includes/nav')



    <div class="container">
        <div class="row">



            <div class="col-md-6 mt-3">
                <div class="p-3">
                    <h2 class="text-white mt-50 fw-bold">{{convertLanguageToLocale($main->main_title)}}</h2>
                    <p class="text-white mt-5">
                        {{convertLanguageToLocale($main->main_desc)}}
                     </p>
                    <div class="d-flex px-3 pt-3 div-width">
                        <a href="{{url('product-classifications-list')}}" class="btn btn-contact red-btn-contact"> <i class="fa-solid fa-gears px-1"></i>
                            @lang('main_page.our_services') </a>
                        <!-- <div class="px-3"> -->
                        <a href="" class="btn btn-contact"> <i class="fa-regular fa-paper-plane px-1"></i> @lang('main_page.contact_us')
                             </a>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="text-center mt-3" data-aos="fade-down" data-aos-duration="5000" data-aos-delay="500">
                    <img src="{{asset('public/content/assets/images/first-img.png')}}" alt="" class="w-100">
                </div>
            </div>

        </div>
    </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="dynamic-logo text-center">
{{--                    <img src="{{asset('public/content/assets/images/logo.png')}}" alt="">--}}
                    <img src="{{asset('public/images/main_page/' . mainPage()->logo)}}" alt="">

                </div>
            </div>
            <div class="col-md-6 mt-3 ">
                <div class="about-company" data-aos="fade-left" data-aos-duration="5000" data-aos-delay="500">
                    <div class="about-child p-5">
                        <h2>        @lang('main_page.about_company')</h2>
                        <p class="mt-4">
                            {{convertLanguageToLocale($main->about_us_desc)}}
                          </p>

                        <div class="text-center">
                            <a href="{{url('about-our-company')}}" class="btn btn-green">    @lang('main_page.more_about_company')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="
    background: linear-gradient(to bottom, rgba(232, 233, 242, 0.927) 0%, rgb(232, 233, 242,  0.927) 0%), url({{asset('public/content/assets/images/circle-bg.png')}});
    width: 100%;

    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
   ">

        <div class="container py-5">
            <div class="counter-section text-center">
                <h2 class="fw-bold pb-2"> {{convertLanguageToLocale($main->main_title)}}</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">{{$main->num_of_projects}}</h2>
                                <p>   @lang('main_page.finished_project') </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">{{$main->num_of_employees}}</h2>
                                <p> @lang('main_page.employees')</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">{{$main->num_of_customers}}</h2>
                                <p>@lang('main_page.happy_customers')  </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">{{$main->num_of_mega_watts}}</h2>
                                <p>    @lang('main_page.mega_watts')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-5">
        <div class="container">
            <div class="system-header">
                <h2>    @lang('main_page.systems_title')</h2>
                <p>@lang('main_page.systems_desc')</p>
            </div>
            <div class="row">
                @forelse($systems as $system)
                <div class="col-md-4 mt-3 ">
                    <div class="system-card" data-aos="zoom-in-up" data-aos-delay="500">
                        <div class="system-card-img">
                            <img src="{{asset('public/images/systems/' . $system->image)}}" alt="">
                        </div>
                        <div class="system-content text-center p-3">
                            <h3> {{convertLanguageToLocale($system->title)}}    </h3>
                            <p>
                                {{convertLanguageToLocale($system->description)}}
                            </p>
                            <a href="{{url('systems-details/' . $system->id)}}" class="btn btn-green"> <i class="fa-solid fa-sliders px-1"></i>   @lang('main_page.system_details')
                            </a>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
{{--                <div class="col-md-4 mt-3 ">--}}
{{--                    <div class="system-card" data-aos="zoom-in-up" data-aos-delay="1000">--}}
{{--                        <div class="system-card-img">--}}
{{--                            <img src="content/assets/images/Solar-Systems-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="system-content text-center p-3">--}}
{{--                            <h3>نظام الري بالطاقة الشمسية</h3>--}}
{{--                            <p>نظام مستقل تماماً عن شبكة شركة الكهرباء حيث أنه يعمل على تشغيل جميع أنواع المضخات نهاراً--}}
{{--                                وبشكل مباشر مثل المضخات الغاطسة والسطحية. هذا النظام هو الأكثر كفاءة من حيث التوفير</p>--}}
{{--                            <a href="" class="btn btn-green"> <i class="fa-solid fa-sliders px-1"></i> تفاصيل النظام--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 mt-3 ">--}}
{{--                    <div class="system-card" data-aos="zoom-in-up" data-aos-delay="1500">--}}
{{--                        <div class="system-card-img">--}}
{{--                            <img src="content/assets/images/Solar-Systems-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="system-content text-center p-3">--}}
{{--                            <h3>نظام الري بالطاقة الشمسية</h3>--}}
{{--                            <p>نظام مستقل تماماً عن شبكة شركة الكهرباء حيث أنه يعمل على تشغيل جميع أنواع المضخات نهاراً--}}
{{--                                وبشكل مباشر مثل المضخات الغاطسة والسطحية. هذا النظام هو الأكثر كفاءة من حيث التوفير</p>--}}
{{--                            <a href="" class="btn btn-green"> <i class="fa-solid fa-sliders px-1"></i> تفاصيل النظام--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="text-center py-4">
                <h2>@lang('main_page.products')</h2>
                <div class="row">
                    <!------------------------------>
                    @forelse($productClassifications as $productClassification)
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="product-card">
                            <a href="{{route('products_list.index' , $productClassification->id)}}">
                                <div class="p-2">
{{--                                    <img src="{{asset('public/content/assets/images/sheets.png')}}" alt="">--}}
                                    <img src="{{asset('public/images/product_classifications/' . $productClassification->image)}}" alt="">

                                </div>
                                <h2>   {{convertLanguageToLocale($productClassification->name)}}</h2>
                            </a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                   <!--------------------------------------->

                    <div class="col-12 mt-5">
                        <div class="text-center">
                            <a href="{{route('product_classifications_list.show')}}" class="btn btn-green moving-btn">
                                <i class="fa-solid fa-code-branch fa-rotate-180"></i>
                               @lang('main_page.explore_our_products')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-partners">
        <div class="container">
            <div class="text-center pt-5">
                <h2 class="fw-bold">@lang('main_page.our_partners')</h2>

            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">
                         @forelse($partners as $partner)
                        <div class="mx-3 post-slide  ">

                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="{{asset('public/Content/assets/images/Tech-Partners-6.png')}}" alt="" class="mt-2">

                            </div>

                        </div>
                            @empty
                        @endforelse
                     </div>
                </div>
            </div>
        </div>
    </div>

     <div class="our-projects">
        <div class="text-center">
            <h2 class="text-white pt-5 fw-bold">@lang('main_page.projects')</h2>
        </div>
        <div class="container">
            <div class="row">

                 @forelse($constructions as $construction)
                <div class="col-lg-6 col-12 mt-3">
                    <div class="project-card">
                        <div class="project-title-header">
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">
                                        {{convertLanguageToLocale($construction->title)}}
                                         </span>
                                </div>
                            </div>
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">   {{convertLanguageToLocale($construction->region)}} -   {{convertLanguageToLocale($construction->city)}}    </span>
                                </div>
                            </div>
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">  {{$construction->power}}   mega watt</span>
                                </div>
                            </div>
                        </div>
{{--                        <div class="bg-land" style="background-image: url('public/content/assets/images/bgland.png');width: 100%;--}}
                        <div class="bg-land" style="background-image: url('public/images/constructions/{{$construction->image}}');width: 100%;
                        height: 50vh;
                        background-size: contain;
                        background-repeat: no-repeat; position: relative;border-radius: 15px;">
                            <a id="play-video" class="video-play-button" href="{{asset('public/videos/constructions/' . $construction->video)}}" data-bs-toggle="modal"
                                data-bs-target="#exampleModalll">
                                <span></span>
                            </a>


                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">&times;</a>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="viedo-one">
                            <div class="modal fade" id="exampleModalll" tabindex="-1"
                                aria-labelledby="exampleModalllLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="">

                                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
{{--                                        getOfmainPage--}}
                                        <div class="modal-body">
                                            <video class="w-100" controls>
{{--                                                <source src="content/assets/Videos/mov_bbb.mp4" type="video/mp4">--}}
{{--                                                <source src="mov_bbb.ogg" type="video/ogg">--}}
                                                <source src="{{asset('public/videos/constructions/' . $construction->video)}}" type="video/mp4">
                                                <source src="{{$construction->video}}" type="video/ogg">

                                            </video>

                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    @endforelse



                 <div class="col-12 mt-5">
                    <div class="text-center py-5">
                        <a href="" class="btn btn-green moving-btn">
                            <i class="fa-solid fa-play"></i>
                            @lang('main_page.more_about_projects')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="info-super-parent">
        <div class="info-first-child"></div>
        <div class="info-title">
            <h2> {{$getOfmainPageConstruction ? convertLanguageToLocale($getOfmainPageConstruction->title) : ''}}</h2>
        </div>
        <div class="info-main">
            <div class="info-main-child">
                <a id="play-video" class="video-play-button2" href="{{asset('public/videos/constructions/'.$getOfmainPageConstruction->video)}}" data-bs-toggle="modal"
                    data-bs-target="#exampleModalllgg">
                    <span></span>
                </a>


                <div id="video-overlay" class="video-overlay2">
                    <a class="video-overlay-close2">&times;</a>
                </div>
            </div>
            <!-- Modal -->
            <div class="viedo-one">
                <div class="modal fade" id="exampleModalllgg" tabindex="-1" aria-labelledby="exampleModalllggLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="">

                                <button type="button" class="btn-close " data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if($getOfmainPageConstruction)

                                <video class="w-100" controls>
{{--                                    <source src="content/assets/Videos/mov_bbb.mp4" type="video/mp4">--}}
{{--                                    <source src="mov_bbb.ogg" type="video/ogg">--}}
                                    <source src="{{asset('public/videos/constructions/'.$getOfmainPageConstruction->video)}}" type="video/mp4">
                                    <source src="{{$getOfmainPageConstruction->video}}" type="video/ogg">

                                </video>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-second-child">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="m-90">
                            <h2 class="fw-bold">  @lang('main_page.latest_news')</h2>
                        </div>
                    </div>
                    @forelse($newss as $news)
                    <div class="col-lg-4 col-md-6 col-12 mt-3 p-3">
                        <div class="news-card">
                            <div class="news-card-img">
{{--                                $news--}}
{{--                                <img src="content/assets/images/solar.webp" alt="">--}}
                                <img src="{{asset('public/images/news/' . $news->image)}}" alt="">

                            </div>
                            <div class="news-card-content p-3">
                                <h4><a href="">        {{convertLanguageToLocale($news->title)}}  </a></h4>
                                <p class="">       {{date("F jS, Y", strtotime($construction->date)) }}
                                    SLE</p>
                                <p><a href="{{url('news-details/'.$news->id)}}">  @lang('main_page.read_article')</a> <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    @empty
                     @endforelse
                      <div class="py-5 col-12">
                        <div class="text-center">
                            <a href="{{url('news-list')}}" class="btn btn-green moving-btn">
                                <i class="fa-solid fa-copy"></i>

                                @lang('main_page.all_news')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

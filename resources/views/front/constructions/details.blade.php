@extends('front/includes/app')
@section('content')
<div style="
background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/solpaneler-1.jpg')}});
width: 100%;
height: 40vh;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
position: relative;">

@include('front/includes/nav')

    @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">{{session()->get('error')}}</div>
    @endif

    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">       {{convertLanguageToLocale($construction->title)}}</h2>
        <p class="directing pt-4"><a href="{{url('/')}}"> <i class="fa-solid fa-house"> </i></a> <span> > </span> <span> <a
                    href="{{url('/construction-list-all')}}">@lang('constructions.constructions')</a> </span> <span> > </span> <span> <a href="#">
                     {{$construction->classification ? convertLanguageToLocale($construction->classification->name) : ''}}
                                </a> </span> </p>
    </div>
</div>
<div class="project-details py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 col-12 mt-3">
                <div class="project-details-cardd p-3">
                    <div class="project-details-title text-center">
                        <h2>     @lang('constructions.construction_details')</h2>
                    </div>
                    <div class="project-details-info">
                        <span><i class="fa-solid fa-pen-to-square"></i></span>
                        <span>    @lang('constructions.name') :</span>
                        <span>   {{convertLanguageToLocale($construction->title)}}  </span>
                    </div>
                    <div class="project-details-info">
                        <span><i class="fa-regular fa-user"></i></span>
                        <span>  @lang('constructions.partner')   :</span>
                        <span>     {{$construction->partner ? convertLanguageToLocale($construction->partner->name) : ''}}</span>
                    </div>
                    <div class="project-details-info">
                        <span><i class="fa-solid fa-list"></i></span>
                        <span>  @lang('constructions.number')    : </span>
                        <span> {{$construction->number_of_constructions }}
                            </span>
                    </div>
                    <div class="project-details-info">
                        <span><i class="fa-solid fa-sliders fa-rotate-270"></i></span>
                        <span>    @lang('constructions.type') :</span>
                        <span>    {{$construction->classification ? convertLanguageToLocale($construction->classification->name) : ''}}</span>
                    </div>
                    <div class="project-details-info">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>    @lang('constructions.location') :</span>
                        <span> {{ convertLanguageToLocale($construction->city ) }}</span>
                    </div>
                    <div class="project-details-info">
                        <span><i class="fa-solid fa-gear"></i></span>
                        <span>    @lang('constructions.power') :</span>
                        <span> {{$construction->power}}     @lang('constructions.kilo_watt') </span>
                    </div>
                    <div class="project-details-info">
                        <span><i class="fa-solid fa-database"></i></span>
                        <span>    @lang('constructions.durartion_time') :</span>
                        <span>{{$construction->duration_time}}    @lang('constructions.days')</span>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12 mt-3">
                <div class="project-details-img">
                    <img src="{{asset('public/images/constructions/' . $construction->image)}}" alt="">

                    {{--                    <img src="{{asset('public/content/assets/images/project-details.png')}}" alt="">--}}
                </div>
            </div>


        </div>
    </div>
</div>
<div class="project-information  ">
    <div class="project-information-card   text-center">
        <div class="project-details-title text-center">
            <h2>      {{convertLanguageToLocale($construction->title)}}</h2>
        </div>
        <h3 class="py-4 fw-bold title">     @lang('constructions.construction_details')</h3>
        <p> {{convertLanguageToLocale($construction->description)}}</p>
    </div>
</div>

<div class="project-images py-5">
    <div class="text-center py-4">
        <h2 class="fw-bold title">     @lang('constructions.photos')</h2>

    </div>
    <div class="container">
        <div class="row">
            @forelse($construction->images as $image)
            <div class="col-md-4 col-12 mt-3">
                <div class="project-immg">
                    <a href="" type="button" data-bs-toggle="modal" data-bs-target="#projectGallary">
                        <img src="{{asset('public/images/construction_images/' . $image->image)}}" alt="">
                    </a>
                </div>
            </div>
                @empty
            @endforelse
         </div>
    </div>
</div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="project-gallary">
    <div class="modal fade" id="projectGallary" tabindex="-1" aria-labelledby="projectGallaryLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner text-center active">

                        @forelse($construction->images as $key => $val)
                            <div class="carousel-item @if($key === 0 ) active @endif ">
                                <img src="{{asset('public/images/construction_images/' . $construction->images[$key]->image)}}" class="  " alt="...">
                            </div>
                                @empty
                            @endforelse
{{--                            <div class="carousel-item">--}}
{{--                                <img src="content/assets/images/jedda.png" class=" " alt="...">--}}
{{--                            </div>--}}
                        </div>
                        <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="system-container py-5">
    <div class="col-12 text-center pt-5 pb-3">
        <h2 class="fw-bold title">  @lang('constructions.contact_us')</h2>
        <h2 class="fw-bold title">      @lang('quotation.ask_about_quotation')</h2>
    </div>
    <form class="system-form p-3" method="post" enctype="multipart/form-data" action="{{route('promotion.client.requirement')}}">
        @csrf
        <div class="row p-3">

            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.name') </label>
                    <span class="text-danger"> * </span>
                    <input type="text" name="name" class="form-control  p-3 form-input" id="" required="">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label">   @lang('quotation.mobile') </label>
                    <span class="text-danger"> * </span>
                    <input type="text" name="phone" class="form-control p-3 form-input" id="" required="">
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.email') </label>
                    <span class="text-danger"> * </span>
                    <input type="email" name="email" class="form-control p-3 form-input" id="" required="">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.message')</label>

                    <textarea class="form-control form-input" name="message" id="" rows="4"></textarea>
                </div>
            </div>

             <input type="hidden" name="foreign_id" value="{{$construction->id}}">
            <div class="col-12">
                <button class="btn btn-send px-5 py-2"> @lang('quotation.send')</button>
            </div>

        </div>
    </form>
</div>


<div class="share-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <span> @lang('constructions.share')</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 py-3">
                <div class="row">
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a class="text-white"  target="_blank"  href="{{url('' . mainPage()->facebook_link)}}"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a class="text-white"  target="_blank"   href="{{url('' . mainPage()->twitter_link)}}"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a  class="text-white"  target="_blank"   href="{{url('' . mainPage()->linkedin_link)}}"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <span><i class="fa-solid fa-paper-plane"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a  class="text-white" target="_blank" href="{{url('' . mainPage()->whatsapp)}}"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a  class="text-white"  target="_blank"  href="{{url('' . mainPage()->contact_us_link)}}"><i class="fa-regular fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 mt-3">
                <a href="" class="pervious-project">
                    <div class="d-flex ">
                        <div class="pervious-project-img">
                            <img src="{{asset('public/content/assets/images/prev.jpg')}}" alt="">
                            <div class="overlay-child">
                                <span><i class="fa-solid fa-arrow-left"></i></span>
                            </div>
                        </div>
                        <div class="pervious-project-info px-3 pt-3">
                            <p class="m-0">المشروع السابق</p>
                            <p class="m-0">مشروع مزارع الملوحي
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mt-3"></div>
        </div>
    </div>
</div>

<div class="other-projects">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h2 class="fw-bold text-white">   @lang('constructions.other_projects')</h2>
            </div>
            @forelse($other_constructions as $other)
            <div class="col-md-4 col-12 mt-3">
                <a href="">
                    <div class="other-project-card">
                        <img src="{{asset('public/images/constructions/' . $other->image)}}" alt="">
                        <div class="p-3">
                            <p>     {{convertLanguageToLocale($other->title)}}</p>
                            <p class="bg-danger">     {{   convertLanguageToLocale($other->classification->name)}}</p>
                        </div>
                    </div>
                </a>
            </div>
                @empty
            @endforelse
         </div>
    </div>
</div>





<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

 @endsection

@extends('front.includes.app')
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


    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">مشاريعنا </h2>
    </div>
</div>



<div class="our-projects">
    <div class="text-center">
        <h2 class="text-white pt-5 fw-bold">آخر مشاريعنا</h2>
    </div>
    @if(session()->has('error'))
        <span class="alert alert-danger">{{session()->get('error')}}</span>
    @endif

    <div class="container pb-5">
        <div class="row">
            @forelse($constructions as $construction)
{{--                'user_id',--}}
{{--                'construction_classifications_id',--}}
{{--                'partner_id',--}}
{{--                'title',--}}
{{--                'region',--}}
{{--                'city',--}}
{{--                'image',--}}
{{--                'video',--}}
{{--                'number_of_constructions',--}}
{{--                'power',--}}
{{--                'duration_time',--}}
{{--                'is_on_main_page',--}}

                <div class="col-lg-6 col-12 mt-3">
                <div class="project-card">
                    <div class="project-title">
                        <div class="d-flex">
                                <span class="projects-icon align-self-center"><i
                                        class="fa-regular fa-paper-plane"></i></span>
                            <span class="projects-tittle">               {{convertLanguageToLocale($construction->title)}}</span>
                        </div>
                    </div>
                    <div class="project-title">
                        <div class="d-flex">
                                <span class="projects-icon align-self-center"><i
                                        class="fa-regular fa-paper-plane"></i></span>
                            <span class="projects-tittle">{{convertLanguageToLocale($construction->city)}} -   {{convertLanguageToLocale($construction->region)}}</span>
                        </div>
                    </div>
                    <div class="project-title">
                        <div class="d-flex">
                                <span class="projects-icon align-self-center"><i
                                        class="fa-regular fa-paper-plane"></i></span>
                            <span class="projects-tittle">   بقوة    {{$construction->power}} ميجا وات</span>
                        </div>
                    </div>
{{--                    <div class="bg-land" style="background-image: url('content/assets/images/bgland.png');width: 100%;--}}
                    <div class="bg-land" style="background-image: url({{asset('public/images/constructions/' . $construction->image)}});width: 100%;
                        height: 50vh;
                        background-size: contain;
                        background-repeat: no-repeat; position: relative;border-radius: 15px;">
                        <a id="play-video" class="video-play-button" href="#" data-bs-toggle="modal"
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
                                    <div class="modal-body">
                                        <video class="w-100" controls>
{{--                                            <source src="content/assets/Videos/mov_bbb.mp4" type="video/mp4">--}}
                                            <source src="{{asset('public/videos/constructions/'. $construction->video)}}" type="video/mp4">
                                            <source src="mov_bbb.ogg" type="video/ogg">

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

        </div>
    </div>
</div>


<div class="our-projects-section">
    <div class="container-custom2 py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-bold title">تصفح المشاريع حسب تصنيفها</h2>
            </div>
            @forelse($classifications as $classification)
            <div class="col-md-6 col-12 mt-3">
                <div class="project-card2 p-3">
                    <a href="{{route('constructions_list.index' , $classification->id)}}">
                        <img src="{{asset('public/content/assets/images/project.jpg')}}" alt="">

                    </a>
                    <h3>         {{convertLanguageToLocale($classification->name)}}</h3>
                </div>
            </div>
                @empty
                @endforelse
         </div>
    </div>
</div>






 @endsection

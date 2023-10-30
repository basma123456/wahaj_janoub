@extends('front.includes.app')
@section('content')


<div style="
background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/solpaneler-1.jpg')}});
width: 100%;
padding:0px 0px 100px 0px;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
position: relative;">


    @include('front/includes/nav')

    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">  @lang('about_us.about_us')</h2>
    </div>
</div>
    @isset($aboutUs)
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <div class="dynamic-logo text-center">
                <img src="{{asset('public/images/main_page/' . mainPage()->logo)}}" alt="">
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="about-company">
                <div class="about-child p-5">
                    <h2> {{convertLanguageToLocale($aboutUs->title_one)}}        </h2>
                    <p class="mt-4">
                        {{convertLanguageToLocale($aboutUs->description_one)}}
                    </p>
{{--                    <br>--}}
                    <p class="mt-4">
                        {{convertLanguageToLocale($aboutUs->more_description_one)}}
                    </p>

                    {{--                    <div class="text-center">--}}
{{--                        <a href="" class="btn btn-green">المزيد عن الشركة</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="abut-us-section">
    <div class="container-custom">
        <div class="py-5">
            <h2 class="text-center fw-bold about-title pt-5 pb-3">       {{convertLanguageToLocale($aboutUs->title_two)}}</h2>
            <div class="about-us-content">
                <div class="text-center">
                    <img src="{{asset('public/images/main_page/' . mainPage()->logo)}}" alt="" >
                </div>
                <p class="pt-3 about-text">
                    {{convertLanguageToLocale($aboutUs->description_two)}}

                 </p>
                <p class="fw-bold"> {{convertLanguageToLocale($aboutUs->last_h)}}</p>
{{--                <p class="m-0 fw-bold">رئيس مجلس الادارة</p>--}}
{{--                <p class="fw-bold">المهندس خالد الحربي </p>--}}
{{--                <p class="fw-bold">ديسمبر 2017</p>--}}
            </div>
        </div>
    </div>
</div>

<div class="container-custom py-5">
    <div class="row">
        <div class="col-md-6 mt-2 p-3">
            <div class="p-4 about-second">
                <p class="title-icon"><i class="fa-solid fa-eye"></i></p>
                <h3 class="fw-bold">{{convertLanguageToLocale($aboutUs->right_bottom_title)}}</h3>
                <p class="pt-4">
                    {{convertLanguageToLocale($aboutUs->right_bottom_desc)}}
                   </p>
            </div>
        </div>
        <div class="col-md-6 mt-2 p-3">
            <div class="p-4 about-second">
                <p class="title-icon2"><i class="fa-solid fa-chart-line"></i></p>
                <h3 class="fw-bold">{{convertLanguageToLocale($aboutUs->left_bottom_title)}}</h3>
                <p class="pt-4">
                    {{convertLanguageToLocale($aboutUs->left_bottom_title)}}
                </p>
            </div>
        </div>
    </div>
</div>
    @endisset






@endsection


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
        @if(session()->has('error'))
<span class="alert alert-danger">{{session()->get('error')}}</span>
        @endif
    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">     {{$constructions && $constructions[0] && $constructions[0]->classification ? convertLanguageToLocale($constructions[0]->classification->name ): ''}}</h2>
        <p class="directing pt-4"><a href="{{url('/')}}"> <i class="fa-solid fa-house"> </i></a> <span> > </span> <span> <a
                    href="{{'construction-list-all'}}">  @lang('constructions.constructions')</a> </span> <span> > </span> <span> <a href="#">
                              {{$constructions && $constructions[0] && $constructions[0]->classification ? convertLanguageToLocale($constructions[0]->classification->name ): ''}}  </a> </span> </p>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        @forelse($constructions as $construction)
        <div class="col-md-4 col-12 mt-3">
            <div class="project-cardd-3 text-center">
                <img src="{{asset('public/images/constructions/' . $construction->image)}}" alt="">
                <h4 class="fw-bold title pt-3">       {{convertLanguageToLocale($construction->title)}}</h4>
                <p class="m-0 py-3"><span>   {{date("F jS, Y", strtotime($construction->created_at)) }}      </span> <span> - </span>  <span
                        class="projrct-connected"><a href="#">    {{convertLanguageToLocale($construction->classification->name)}}</a></span></p>
                <div class="text-center py-3">
                    <a href="{{route('constructions_show.front' , $construction->id)}}" class="btn btn-read-esay">    @lang('constructions.read_article') <i class="fa-solid fa-arrow-left"></i></a>
                </div>
            </div>
        </div>
        @empty
            @endforelse
{{--        <div class="col-md-6 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="content/assets/images/project-1.png" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مشروع الدفاع المدني بجدة</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">مشاريع متصلة بالشبكة</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="content/assets/images/project-1.png" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مشروع الدفاع المدني بجدة</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">مشاريع متصلة بالشبكة</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="content/assets/images/project-1.png" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مشروع الدفاع المدني بجدة</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">مشاريع متصلة بالشبكة</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="content/assets/images/project-1.png" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مشروع الدفاع المدني بجدة</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">مشاريع متصلة بالشبكة</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</div>


@endsection

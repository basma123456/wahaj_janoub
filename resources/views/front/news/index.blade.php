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


    @include('front.includes.nav')

    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">@lang('news.news')</h2>
        <p class="directing pt-4"><a href="{{url('/')}}"> <i class="fa-solid fa-house"> </i></a> <span> > </span> <span> <a
                    href="#">@lang('news.news')</a> </span> </p>
    </div>
</div>
<div class="container py-5">
    <div class="row">
{{--        <div class="col-md-6 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="{{asset('public/content/assets/images/SLE-13-Capital-News-1-1-768x402.png')}}" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مستقبل الطاقة الشمسية في العالم العربي</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">sle</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="news-details.html" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="{{asset('public/content/assets/images/SLE-13-Capital-News-1-1-768x402.png')}}" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مستقبل الطاقة الشمسية في العالم العربي</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">sle</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="news-details.html" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="{{asset('public/content/assets/images/SLE-13-Capital-News-1-1-768x402.png')}}" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مستقبل الطاقة الشمسية في العالم العربي</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">sle</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="news-details.html" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="{{asset('public/content/assets/images/SLE-13-Capital-News-1-1-768x402.png')}}" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مستقبل الطاقة الشمسية في العالم العربي</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">sle</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="news-details.html" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-12 mt-3">--}}
{{--            <div class="project-cardd-3 text-center">--}}
{{--                <img src="{{asset('public/content/assets/images/SLE-13-Capital-News-1-1-768x402.png')}}" alt="">--}}
{{--                <h4 class="fw-bold title pt-3">مستقبل الطاقة الشمسية في العالم العربي</h4>--}}
{{--                <p class="m-0 py-3"><span>نوفمبر 27, 2022 </span> <span> - </span> <span--}}
{{--                        class="projrct-connected"><a href="">sle</a></span></p>--}}
{{--                <div class="text-center py-3">--}}
{{--                    <a href="news-details.html" class="btn btn-read-esay">قرأة المقال <i class="fa-solid fa-arrow-left"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


        <!--------------------------------------------------------->




        @foreach($news as $new)
            <div class="col-md-4 col-12 mt-3">
                <div class="project-cardd-3 text-center">
{{--                    <img src="{{asset('public/content/assets/images/SLE-13-Capital-News-1-1-768x402.png')}}" alt="">--}}
                    <img src="{{asset('public/images/news/' . $new->image)}}" alt="">
                    <h4 class="fw-bold title pt-3">          {{convertLanguageToLocale($new->title)}} </h4>
                    <p class="m-0 py-3"><span>     {{date("F jS, Y", strtotime($new->date)) }}    </span>  <span> - </span> <span
                            class="projrct-connected"><a href="">sle</a></span></p>
                    <div class="text-center py-3">
                        <a href="{{url('news-details/'  . $new->id)}}" class="btn btn-read-esay">  @lang('news.read_article') <i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection

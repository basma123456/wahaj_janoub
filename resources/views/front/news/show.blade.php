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
        <h2 class="fw-bold text-white mt-4">       {{convertLanguageToLocale($new->title)}}</h2>
        <p class="directing pt-4"><span> <i class="fa-solid fa-house"> </i></span>
            <span> > </span>
            <span> <a
                    href="{{url('news-list')}}">@lang('news.news')</a>
            </span>
            <span> > </span>
            <span> <a href="#">
                        {{convertLanguageToLocale($new->title)}}</a> </span> </p>
    </div>
</div>


<div class=" ">
    <div class="container-custom">
        <div class="py-5">

            <div class="about-us-content shadow">
                <div class="text-center">
{{--                    <img src="{{asset('public/content/assets/images/panels.jpg')}}" alt="" class="w-100">--}}
                    <img src="{{asset('public/images/news/' . $new->image)}}" alt="" class="w-100">

                </div>
                <div class="row">
                    <div class="col-12 text-center py-3">
                        <span>@lang('news.share')</span>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-md-2 col-4 mt-2">
                                <div class="social-iccon">
                                    <a class="text-white" target="_blank"  href="{{url("" .mainPage()->facebook_link)}}" ><svg class="svg-inline--fa fa-facebook" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg><!-- <i class="fa-brands fa-facebook"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-2">
                                <div class="social-iccon">
                                    <a  class="text-white"  target="_blank"  href="{{url("" .mainPage()->twitter_link)}}"><svg class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fa-brands fa-twitter"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-2">
                                <div class="social-iccon">
                                    <a  class="text-white"  target="_blank"  href="{{url("" .mainPage()->linkedin_link)}}"> <svg class="svg-inline--fa fa-linkedin" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg><!-- <i class="fa-brands fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-2">
                                <div class="social-iccon">
                                    <a  class="text-white"  target="_blank"  href="{{url("" .mainPage()->instagram_link)}}"> <svg class="svg-inline--fa fa-paper-plane" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path></svg><!-- <i class="fa-solid fa-paper-plane"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-2">
                                <div class="social-iccon">
                                    <a class="text-white"   target="_blank"  href="{{url("" .mainPage()->whatsapp)}}"><svg class="svg-inline--fa fa-whatsapp" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg><!-- <i class="fa-brands fa-whatsapp"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-2">
                                <div class="social-iccon">
                                    <a  class="text-white" target="_blank" href="{{url("" .mainPage()->contact_us_link)}}"><svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"></path></svg><!-- <i class="fa-regular fa-envelope"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <p class="pt-3 about-text">
                    {{convertLanguageToLocale($new->description)}}
                    <br>
                    <br>
                    {{date("F jS, Y", strtotime($new->date)) }}
                </p>

            </div>
        </div>
    </div>
</div>





<div class="share-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <span>@lang('news.share')</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 py-3">
                <div class="row">
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a class="text-white" href="{{url("" .mainPage()->facebook_link)}}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a  href="{{url("" .mainPage()->twitter_link)}}"  target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a  href="{{url("" .mainPage()->linkedin_link)}}"  target="_blank" class="text-white"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a href="{{url("" .mainPage()->instagram_link)}}"  target="_blank" class="text-white"><i class="fa-solid fa-paper-plane"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a href="{{url("" .mainPage()->whatsapp)}}"  target="_blank" class="text-white"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 mt-2">
                        <div class="social-iccon">
                            <a href="{{url("" .mainPage()->contact_us_link)}}"  target="_blank"  class="text-white"><i class="fa-regular fa-envelope"></i></a>
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
                <h2 class="fw-bold text-white">   @lang('news.similar_articles')</h2>
            </div>

            @forelse($lastThree as $item)
                @if($item->id !== $new->id)
            <div class="col-md-4 col-12 mt-3">
                <a href="{{url('news-details/'.$item->id)}}">
                    <div class="other-project-card">
{{--                        <img src="{{asset('public/content/assets/images/pro.jpg')}}" alt="">--}}
                        <img src="{{asset('public/images/news/' . $item->image)}}" alt="">
                        <div class="p-3">
                            <p> {{convertLanguageToLocale($item->title)}}    </p>
                            <p>   {{date("F jS, Y", strtotime($new->date)) }}      </p>
                        </div>
                    </div>
                </a>
            </div>
                @endif
            @empty
                @endforelse

        </div>
    </div>
</div>

@endsection


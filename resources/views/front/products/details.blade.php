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

    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">           {{convertLanguageToLocale($product->title)}}  </h2>
        <p class="directing pt-4"><a href="{{url('/')}}"> <i class="fa-solid fa-house"> </i></a> <span> > </span> <span> <a
                    href="{{url('product-classifications-list')}}">@lang('product_details.store')</a> </span> <span> > </span> <span> <a href="#">  {{convertLanguageToLocale($product->title)}}</a> </span> </p>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 col-12 mt-3">
            <div class="productt-details">
                <div class="poduct-img">
{{--                    <img src="content/assets/images/transs.png" alt="">--}}
                    <img src="{{asset('public/images/products/' . $product->image)}}" alt="">

                    {{--                    {{convertLanguageToLocale($product->title)}}--}}
                </div>
                <div class="search-modal">
                        <span><a href="" type="button" data-bs-toggle="modal" data-bs-target="#projectGallary"><i
                                    class="fa-solid fa-magnifying-glass"></i></a></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 mt-3">
            <div class="productt-details p-4">
                <div class="productt-details-info">
                    <h2 class="title fw-bold">   {{convertLanguageToLocale($product->title)}}  </h2>
                    <p>@lang('product_details.price'):</p>
                    @if($product->price_before_discount)
                    <del>{{$product->price_before_discount}}</del>
                    @endif
                    <p>   {{$product->price}}  </p>

                    @if($product->discount)
                    <p>@lang('product_details.discount'):</p>
                    <p>   {{$product->discount}}  </p>
                    @endif


                    <br>
                    <p class="pb-3">    {{convertLanguageToLocale($product->details)}}</p>
                    <p class="pb-3">    {{convertLanguageToLocale($product->more_description)}}</p>

                </div>
                <div class="productt-details-footer">
                    <p class="pt-3"><span>@lang('product_details.classification'): </span> <span class="gray-text"><a href="">

                                {{$product->classification   ? convertLanguageToLocale($product->classification->name) : ''}}
                             </a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active ">
                                <img src="{{asset('public/content/assets/images/jedda.png')}}" class="  " alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{asset('public/content/assets/images/jedda.png')}} " class=" " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('public/content/assets/images/jedda.png')}}" class=" " alt="...">
                            </div>
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

<div class="container">
{{--    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">--}}
{{--        <li class="nav-item" role="presentation">--}}
{{--            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"--}}
{{--                    role="tab" aria-controls="home" aria-selected="true">الوصف</button>--}}
{{--        </li>--}}
{{--        <li class="nav-item" role="presentation">--}}
{{--            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"--}}
{{--                    role="tab" aria-controls="profile" aria-selected="false">المراجعات</button>--}}
{{--        </li>--}}

{{--    </ul>--}}
{{--    <div class="tab-content" id="myTabContent">--}}
{{--        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">--}}


{{--            <div class="container py-5">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <h4 class="fw-bold title">الوصف</h4>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-12 mt-3">--}}
{{--                        <div class="p-3">--}}
{{--                            <div class="productt-details hoverable-productt-details  text-center p-3">--}}
{{--                                <h3 class="title"> {{convertLanguageToLocale($product->title)}}</h3>--}}
{{--                            </div>--}}
{{--                            <div class="productt-details hoverable-productt-details bg-warning  p-3 mt-3">--}}
{{--                                 <p>المميزات:</p>--}}
{{--                                <p> {{convertLanguageToLocale($product->more_description)}} </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center pt-5">--}}
{{--                            <a href="#price" class="btn btn-green"> احصل على عرض سعر</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-12 mt-3">--}}
{{--                        <div class="productt-details">--}}
{{--                            <div class="poduct-img">--}}
{{--                                <img src="content/assets/images/transs.png" alt="">--}}
{{--                                <img src="{{asset('public/images/products/' . $product->image)}}" alt="">--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 mt-3">--}}
{{--                        <div class="download-book p-4">--}}
{{--                            <h3>كتيب المواصفات</h3>--}}

{{--                            <p> للاطلاع على كتيب المواصفات الفنية الخاص بالمنتج وتحميله اضغط الزر بالاسفل</p>--}}

{{--                            <div class="text-center pt-5">--}}
{{--                                <a href="#price" class="btn btn-green"> احصل على عرض سعر</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

    <div class="col-12 mt-3">
        <div class="download-book p-4">
            <h3>  @lang('product_details.book_of_details_text')</h3>

            <p>  @lang('product_details.book_of_details_desc')</p>

            <div class="text-center pt-5">
                <a href="#price" class="btn btn-green"> @lang('product_details.contact_us')</a>
            </div>
        </div>
    </div>
</div>
    <br>



{{--        </div>--}}
{{--        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>--}}

{{--    </div>--}}
{{--</div>--}}
<div style="
    background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url(content/assets/images/solpaneler-1.jpg);
    width: 100%;

    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;">




    <div class="text-center">
        <h2 class="fw-bold text-white pt-5">      @lang('why_solar_system.why_solar_system')</h2>
    </div>


    <div class="container-custom py-5">
        @if($whySolarSystem)
        <div class="custom-accordion">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            @lang('why_solar_system.first')
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the first item's accordion body.</strong> It is shown by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($whySolarSystem->accordion_text)}}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            @lang('why_solar_system.second')
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the second item's accordion body.</strong> It is hidden by default,--}}
{{--                            until--}}
{{--                            the collapse plugin adds the appropriate classes that we use to style each element.--}}
{{--                            These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}

                            {{convertLanguageToLocale($whySolarSystem->accordion_text_2)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            @lang('why_solar_system.third')
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($whySolarSystem->accordion_text_3)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            @lang('why_solar_system.fourth')
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($whySolarSystem->accordion_text_4)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            @lang('why_solar_system.fifth')
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($whySolarSystem->accordion_text_5)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            @lang('why_solar_system.sixth')
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($whySolarSystem->accordion_text_6)}}

                        </div>
                    </div>
                </div>
             </div>
        </div>
            @endif
    </div>
</div>

<div class="system-container py-5">
    <div class="col-12 text-center pt-5 pb-3">
        <h2 class="fw-bold title">     @lang('quotation.ask_about_quotation')</h2>
    </div>
    <form action="{{route('promotion.client.requirement.product')}}" method="post"  class="system-form p-3">
        @csrf
        <div class="row p-3">

            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label">@lang('quotation.name') </label>
                    <span class="text-danger"> * </span>
                    <input type="text" name="name" class="form-control  p-3 form-input" id="" required="">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label">  @lang('quotation.mobile') </label>
                    <span class="text-danger"> * </span>
                    <input type="text" name="phone" class="form-control p-3 form-input" id="" required="">
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="mb-3">
                    <label for="" class="form-label">@lang('quotation.email') </label>
                    <span class="text-danger"> * </span>
                    <input type="email" name="email" class="form-control p-3 form-input" id="" required="">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label">@lang('quotation.message')</label>

                    <textarea class="form-control form-input" name="message" id="" rows="4"></textarea>
                </div>
            </div>

            <input type="hidden" name="foreign_id" value="{{$product->id}}">
            <div class="col-12">
                <button class="btn btn-send px-5 py-2">@lang('quotation.send')</button>
            </div>

        </div>
    </form>

</div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>


 @endsection

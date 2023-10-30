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


    @include('front/includes/nav' )
    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">          {{convertLanguageToLocale($system->title)}} </h2>
    </div>
</div>




<div class=" why-section">
    <div class="container-custom">
        <div class="py-5">

            <div class="system-us-content">
                <div class="text-center">
{{--                    <img src="{{asset('public/content/assets/images/sle-image.jpg')}}" alt="" class="w-100">--}}
                    <img src="{{asset('public/images/systems/' . $system->image)}}" alt="" class="w-100">

                </div>
                <div class="p-3 text-center">
                    <h2 class="fw-bold title">     {{convertLanguageToLocale($system->title)}}</h2>
                </div>
                <p class="pt-3 about-text text-center">
                    {{convertLanguageToLocale($system->description)}}
{{--                    تقوم الالواح الشمسية باستقبال ضوء الشمس وتحويلة الي كهرباء يمكن استخدامها لتشغيل أي جهاز كهربائي--}}
{{--                    الطاقة المولدة من الالواح الشمسية مستقلة تماما عن شبكة الكهرباء الحكومية--}}
{{--                    ويتم شحن البطاريات بالطاقة المنتجة من الالواح الشمسية وذلك لاستخدام الكهرباء ليلا--}}
{{--                    <br>--}}
{{--                    <strong>  مميزات النظام:</strong>--}}
{{--                    <br>--}}
{{--                    مثالي لتوفير احتياجك من الكهرباء للمواقع المنعزلة والبعيدة عن مصادر الكهرباء الحكومية--}}
{{--                    مستقل تماما عن تعريفة الكهرباء الحكومية--}}
{{--                    بديل جيد ومثالي عن مولدات الديزل--}}
{{--                    <br>--}}
{{--                    مكونات النظام:--}}

{{--                    الالواح الشمسية: تقوم باستقبال ضوء الشمس وتحويلة الى تيار مستمر--}}
{{--                    نظام التثبيت: مصنوع من الألومنيوم وهو الهيكل الذي تثبت الالواح الشمسية عليه--}}
{{--                    شاحن تحكم: يتحكم في مدخلات الطاقة من الالواح الشمسية الى البطاريات--}}
{{--                    البطاريات: تخزن الكهرباء المولدة بواسطة الالواح الشمسية لاستخدامها لاحقا--}}
{{--                    المحول الكهربائي: يحول التيار المستمر المنتج من الالواح الى تيار متردد لتشغيل كافة الأجهزة الكهربائية--}}
{{--                    الكابلات: مصنعة خصيصا لربط مكونات النظام الشمسي--}}
                </p>
            </div>
        </div>
    </div>
</div>

<div style="
    background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/solpaneler-1.jpg')}});
    width: 100%;

    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;">




    <div class="text-center">
        <h2 class="fw-bold text-white pt-5"> @lang('why_solar_system.why_solar_system')</h2>
    </div>


    <div class="container-custom py-5">
        <div class="custom-accordion">
{{--            'accordion_text',--}}
{{--            'accordion_text_2',--}}
{{--            'accordion_text_3',--}}
{{--            'accordion_text_4',--}}
{{--            'accordion_text_5',--}}
{{--            'accordion_text_6',--}}

        @if($why_solar_system)
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            @lang('why_solar_system.first')
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the first item's accordion body.</strong> It is shown by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                      {{convertLanguageToLocale($why_solar_system->accordion_text)}}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            @lang('why_solar_system.second')
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                            {{convertLanguageToLocale($why_solar_system->accordion_text_2)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            @lang('why_solar_system.third')
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($why_solar_system->accordion_text_3)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            @lang('why_solar_system.fourth')
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($why_solar_system->accordion_text_4)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            @lang('why_solar_system.fifth')
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($why_solar_system->accordion_text_5)}}

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            @lang('why_solar_system.sixth')
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
                            {{convertLanguageToLocale($why_solar_system->accordion_text_6)}}

                        </div>
                    </div>
                </div>
{{--                <div class="accordion-item">--}}
{{--                    <h2 class="accordion-header" id="headingseven">--}}
{{--                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">--}}
{{--                            Accordion Item #7--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">--}}
{{--                        <div class="accordion-body">--}}
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
{{--                            {{convertLanguageToLocale($why_solar_system->accordion_text_7)}}--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
                @endif
        </div>
    </div>
</div>







<div class="system-container py-5">
    <div class="col-12 text-center pt-5 pb-3">
        <h2 class="fw-bold title">  @lang('quotation.ask_about_quotation')</h2>
    </div>
    <div class="system-form p-3">
        <div class="row p-3">

            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.name')</label>
                    <span class="text-danger"> * </span>
                    <input type="text" class="form-control  p-3 form-input" id="" required>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label">   @lang('quotation.mobile') </label>
                    <span class="text-danger"> * </span>
                    <input type="text" class="form-control p-3 form-input" id="" required>
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.email') </label>
                    <span class="text-danger"> * </span>
                    <input type="email" class="form-control p-3 form-input" id="" required>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.message')</label>

                    <textarea class="form-control form-input" id="" rows="4"></textarea>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-send px-5 py-2"> @lang('quotation.send')</button>
            </div>

        </div>
    </div>
</div>






<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

 @endsection

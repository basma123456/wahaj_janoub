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
        <h2 class="fw-bold text-white mt-4">      @lang('why_solar_system.why_solar_system')</h2>
    </div>
</div>



<div class="abut-us-section why-section">
    <div class="container-custom">
        <div class="py-5">

            <div class="about-us-content">
                <div class="text-center">
                    <img src="{{asset('public/images/why_solar_system/' . $WhySolarSystem->image_one )}}" alt="" class="w-100">
                </div>



{{--                'user_id',--}}
{{--                'title_one',--}}
{{--                'image_one',--}}
{{--                'description_one',--}}
{{--                'last_h',--}}
{{--                'accordion_text',--}}
{{--                'accordion_text_2',--}}
{{--                'accordion_text_3',--}}
{{--                'accordion_text_4',--}}
{{--                'accordion_text_5',--}}
{{--                'accordion_text_6',--}}



                <p class="pt-3 about-text">
                    {{convertLanguageToLocale($WhySolarSystem->description_one)}}
                 </p>

                <p class="fw-bold">                          {{convertLanguageToLocale($WhySolarSystem->last_h)}}
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
        <h2 class="fw-bold text-white pt-5">لماذا الطاقة الشمسية؟</h2>
    </div>


    <div class="container-custom py-5">
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
                        {{convertLanguageToLocale($WhySolarSystem->accordion_text)}}

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
                            {{convertLanguageToLocale($WhySolarSystem->accordion_text_2)}}

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
                            {{convertLanguageToLocale($WhySolarSystem->accordion_text_3)}}

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
                            {{convertLanguageToLocale($WhySolarSystem->accordion_text_4)}}

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
                            {{convertLanguageToLocale($WhySolarSystem->accordion_text_5)}}

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
                            {{convertLanguageToLocale($WhySolarSystem->accordion_text_6)}}

                        </div>
                    </div>
                </div>
{{--                <div class="accordion-item">--}}
{{--                    <h2 class="accordion-header" id="headingseven">--}}
{{--                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
{{--                                data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">--}}
{{--                            Accordion Item #7--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"--}}
{{--                         data-bs-parent="#accordionExample">--}}
{{--                        <div class="accordion-body">--}}
{{--                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until--}}
{{--                            the--}}
{{--                            collapse plugin adds the appropriate classes that we use to style each element. These--}}
{{--                            classes control the overall appearance, as well as the showing and hiding via CSS--}}
{{--                            transitions. You can modify any of this with custom CSS or overriding our default--}}
{{--                            variables.--}}
{{--                            It's also worth noting that just about any HTML can go within the--}}
{{--                            <code>.accordion-body</code>, though the transition does limit overflow.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

    @endsection




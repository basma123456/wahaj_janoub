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
            <h2 class="fw-bold text-white mt-4">@lang('contact_us.contact_us')</h2>
            <p class="directing pt-4"><span> <i class="fa-solid fa-house"> </i></span> <span> > </span> <span> <a
                        href="index.html">@lang('contact_us.store')</a> </span> <span> > </span> <span> <a href="store.html">
                            @lang('contact_us.contact_us')</a> </span> </p>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-6 text-center pt-5 pb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29687.46399261962!2d39.153636!3d21.549475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3db455c0c8867%3A0xd253971808ccc4c9!2z2LTYsdmD2Kkg2KfYsdi2INin2YTYt9in2YLYqSDYp9mE2LTZhdiz2YrYqSAtINin2YTYp9iv2KfYsdip!5e0!3m2!1sen!2ssa!4v1696203861899!5m2!1sen!2ssa"   style="border:0;width:100%;height:450px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-6 text-center pt-5 pb-3">
                <div class="footer-parent">
                    <div class="footer-child">
                        <div class="text-center pt-4">
                            <div class="imp-links"  style="text-align:right">
                                <span><i class="fa fa-home"  style="padding:5px;"></i>dsfdsfds</span>
                            </div>
                            <div class="imp-links"  style="text-align:right">
                                <span><i class="fa fa-phone"  style="padding:5px;"></i>0122</span>
                            </div>
                            <div class="imp-links"  style="text-align:right">
                                <span><i class="fa fa-envelope"  style="padding:5px;"></i>dsfdsfds</span>
                            </div>


                            <div class="text-center pt-4"><span class="text-fill fs-4 padding-x"><svg class="svg-inline--fa fa-facebook" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg><!-- <i class="fa-brands fa-facebook"></i> Font Awesome fontawesome.com --></span>
                                <span class="text-fill  fs-4 padding-x"><svg class="svg-inline--fa fa-instagram" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="fa-brands fa-instagram"></i> Font Awesome fontawesome.com --></span>
                                <span class="text-fill  fs-4 padding-x"><svg class="svg-inline--fa fa-linkedin" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg><!-- <i class="fa-brands fa-linkedin"></i> Font Awesome fontawesome.com --></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="system-container py-5">
        <div class="container py-5">
            <div class="row">

                <div class="col-12 text-center pt-5 pb-3">
                    <h2 class="fw-bold title">تواصل معنا</h2>
                </div>
                <div class="col-5">
                    <h2>
                        تواصل معنا
                    </h2>
                    <h3>نسعد بخدمتك طوال الوقت</h3>
                    <p>اذا كان لديك سؤال او استفسار لا تتردد في التواصل معنا اي وقت. فضلا املأ بياناتك مع ترك تفاصيل رسالتك وسنقوم بالرد عليك في أقرب وقت</p>
                </div>
                <div class="system col-7">
                    <div class="row p-3">

                        <div class="col-md-6 ">
                            <div class="mb-3">
                                <label for="" class="form-label">الاسم </label>
                                <span class="text-danger"> * </span>
                                <input type="text" class="form-control  p-3 form-input" id="" required="">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="mb-3">
                                <label for="" class="form-label">رقم الجوال </label>
                                <span class="text-danger"> * </span>
                                <input type="text" class="form-control p-3 form-input" id="" required="">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="mb-3">
                                <label for="" class="form-label">الايميل </label>
                                <span class="text-danger"> * </span>
                                <input type="email" class="form-control p-3 form-input" id="" required="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">رسالتك</label>

                                <textarea class="form-control form-input" id="" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-send px-5 py-2">ارسال</button>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection

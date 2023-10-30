<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap version 5.2 -->
    <link rel="stylesheet" href="{{asset('public/content/CSS/bootstrap.min.css')}}">
    <!-- font awsome version 6.2 -->
    <link rel="stylesheet" href="{{asset('public/content/CSS/all.min.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- custom css Arabic-->
     @if(app()->getLocale() === 'ar')
     <link rel="stylesheet" href="{{asset('public/content/CSS/style.css')}}">
     @elseif(app()->getLocale() === 'en')
     <link rel="stylesheet" href="{{asset('public/content/CSS/style-ltr.css')}}">
     @endif
    <title>الرئيسية</title>
</head>

<body>

<header class="d-lg-block d-md-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-2">
{{--                <a href="https://sle.sa/wp-content/uploads/SLE-Profile.pdf" target="_blank" class="company-file">حمل--}}
{{--                    ملف الشركة</a>--}}
                <a href="{{url('public/images/main_page/' . mainPage()->file)}}" target="_blank" class="company-file">
                    @lang('nav.download_file')
                       </a>

            </div>
            <div class="col-lg-4 text-center p-2">
                <div>



                    <!-- Button trigger modal -->
                    <button type="button" class="login-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-regular fa-circle-user px-3"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="modal-body p-4">
                                    <nav>
                                        <div class="nav nav-tabs w-100" id="nav-tab" role="tablist">
                                            <button class="nav-link active w-50" id="nav-home-tab"
                                                    data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                                                    role="tab" aria-controls="nav-home" aria-selected="true">تسجيل
                                                دخول</button>
                                            <button class="nav-link w-50" id="nav-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-profile" type="button" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false">انشاء
                                                حساب</button>

                                        </div>
                                    </nav>
                                    <div class="tab-content " id="nav-tabContent">
                                        <div class="tab-pane fade show active text-end" id="nav-home"
                                             role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="mt-5">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">اسم المستخدم
                                                        او البريد الالكتروني</label>
                                                    <input type="email" class="form-control green-border"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">كلمة
                                                        المرور</label>
                                                    <input type="password" class="form-control green-border"
                                                           id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <label class="" for="exampleCheck1">تذكرني</label>
                                                    <input type="checkbox" class="" id="">
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">تسجيل
                                                    دخول</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade  text-end" id="nav-profile" role="tabpanel"
                                             aria-labelledby="nav-profile-tab">
                                            <div class="mt-5">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">اسم المستخدم
                                                        او البريد الالكتروني</label>
                                                    <input type="email" class="form-control green-border"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">كلمة
                                                        المرور</label>
                                                    <input type="password" class="form-control green-border"
                                                           id="exampleInputPassword1">
                                                </div>
                                                <p>سيتم استخدام بياناتك الشخصية لدعم تجربتك في جميع أنحاء هذا الموقع
                                                    ، وإدارة الوصول إلى حسابك ، ولأغراض أخرى موصوفة في <a
                                                        href="">سياسة الخصوصية</a> الخاصة بنا.</p>
                                                <button type="submit" class="btn btn-primary w-100">
                                                    انشاء حساب</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a href="" class="cart-page">
                        0.00 رس
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-start p-2">
                <a href="{{url('' . mainPage()->facebook_link)}}" class="text-fill fs-4 padding-x"><i class="fa-brands fa-facebook"></i></a>
                <a href="{{url('' . mainPage()->twitter_link)}}" class="text-fill  fs-4 padding-x"><i class="fa-brands fa-twitter"></i></a>
                <a href="{{url('' . mainPage()->instagram_link)}}" class="text-fill  fs-4 padding-x"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{url('' . mainPage()->linkedin_link)}}" class="text-fill  fs-4 padding-x"><i class="fa-brands fa-linkedin"></i></a>
                <a href="{{url('#')}}" class="text-fill  fs-4 padding-x"><i class="fa-brands fa-pinterest"></i></a>
                <a href="{{url('' . mainPage()->whatsapp)}}" class="text-fill  fs-4 padding-x"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="{{url('' . mainPage()->whatsapp)}}" class="text-fill  fs-4 padding-x"><i class="fa-solid fa-square-phone"></i></a>
                <a href="{{url('' . mainPage()->contact_us_link)}}" class="text-fill  fs-4 padding-x"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </div>
</header>

{{--<div style="--}}
{{--background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/panels.jpg')}});--}}
{{--width: 100%;--}}
{{--padding: 50px 0px;--}}
{{--background-size: cover;--}}
{{--background-repeat: no-repeat;--}}
{{--background-attachment: fixed;--}}
{{--position: relative;">--}}
{{--@include('front/includes/nav)--}}
{{--</div>--}}
{{--    <nav class="navbar navbar-expand-lg navbar-light nav-bg">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="#">--}}
{{--                <img src="{{asset('public/content/assets/images/logo.png')}}" alt="logo" class="logo-imge">--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"--}}
{{--                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                    aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse " id="navbarSupportedContent">--}}
{{--                <ul class="navbar-nav m-auto mb-2 mb-lg-0 nav-linkks">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="aboutUs.html">عن الشركة</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="why-us.html"> لماذا الطاقة الشمسية</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="systems.html" id="navbarDropdown" role="button"--}}
{{--                           data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            الانظمة--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <li><a class="dropdown-item" href="independent-system.html">النظام المستقل عن الشبكة--}}
{{--                                    off-Grid</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="linking-system.html">نظام الربط على شبكة الكهرباء--}}
{{--                                </a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="solar-irrigation -system.html">نظام الري بالطاقة--}}
{{--                                    الشمسية</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="store.html" id="navbarDropdown" role="button"--}}
{{--                           data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            المتجر--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <li><a class="dropdown-item" href="store-solar-panels.html">الالواح الشمسية</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="Off-Grid-Inverters.html">المحولات المنفصلة عن--}}
{{--                                    الشبكة</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="On-Grid-Iverters.html">المحولات المتصلة بالشبكة</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="solar-air-conditioners.html"> مكيفات الطاقة الشمسية--}}
{{--                                </a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="Installation-Systems.html"> انظمة التثبيت </a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="Protections.html"> انظمة الحماية </a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="battaries.html"> البطاريات </a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="capules.html"> الكيابل </a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="Accessories.html"> الملحقات </a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="projectts.html" id="navbarDropdown" role="button"--}}
{{--                           data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            مشاريعنا--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <li><a class="dropdown-item" href="projects-connectedto-network.html">مشاريع متصلة--}}
{{--                                    بالشبكة</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="projected-separated-network.html">مشاريع منفصلة عن--}}
{{--                                    الشبكة</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="Solar-irrigation-projects.html">مشاريع الري بالطاقة--}}
{{--                                    الشمسية</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="news.html"> الاخبار</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <span><img src="{{asset('public/content/assets/images/us.png')}}" alt=""></span>--}}
{{--                            <span>English</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="d-flex">--}}
{{--                    <!-- Button trigger modal -->--}}
{{--                    <button type="button" class="btn-search" data-bs-toggle="modal" data-bs-target="#exampleModal2">--}}
{{--                        <i class="fa-solid fa-magnifying-glass text-white"></i>--}}
{{--                    </button>--}}

{{--                    <a href="" class="btn btn-contact">تواصل معانا</a>--}}

{{--                </div>--}}
{{--                <!-- Modal -->--}}
{{--                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label"--}}
{{--                     aria-hidden="true">--}}
{{--                    <div class="modal-dialog modal-dialog-centered">--}}
{{--                        <div class="modal-content">--}}

{{--                            <div class="modal-body">--}}
{{--                                ...--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}





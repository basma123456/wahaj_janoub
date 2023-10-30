@extends('front.includes.app')
@section('content')





    <div style="
    background: linear-gradient(to bottom, rgba(232, 233, 242, 0.927) 0%, rgb(232, 233, 242,  0.927) 0%), url({{asset('public/content/assets/images/circle-bg.png')}});
    width: 100%;

    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
   ">
 
    @include('front/includes/nav')


    <div class="container py-5">
            <div class="counter-section text-center">
                <h2 class="fw-bold pb-2">شركة وهج الجنوب للطاقة الشمسية في أرقام</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">60</h2>
                                <p> مشروع منفذ </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">20</h2>
                                <p> مهندس و فني</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">60</h2>
                                <p>عميل سعيد</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <div class="counter">
                                <h2 class="counter-count">2000</h2>
                                <p>ميجا وات شهريا</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-5">
        <div class="container">
            <div class="system-header">
                <h2>انظمة الطاقة الشمسية</h2>
                <p>شركة ارض الطاقة الشمسية توفر لك العديد من خيارات توليد الطاقة الشمسية والتي تناسب جميع القطاعات،
                    الخاص
                    والحكومي والزراعي، تعرف على انظمة الطاقة التي نوفرها لك واختر ما يناسبك</p>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3 ">
                    <div class="system-card" data-aos="zoom-in-up" data-aos-delay="500">
                        <div class="system-card-img">
                            <img src="content/assets/images/Solar-Systems-6.jpg" alt="">
                        </div>
                        <div class="system-content text-center p-3">
                            <h3>نظام الري بالطاقة الشمسية</h3>
                            <p>نظام مستقل تماماً عن شبكة شركة الكهرباء حيث أنه يعمل على تشغيل جميع أنواع المضخات نهاراً
                                وبشكل مباشر مثل المضخات الغاطسة والسطحية. هذا النظام هو الأكثر كفاءة من حيث التوفير</p>
                            <a href="" class="btn btn-green"> <i class="fa-solid fa-sliders px-1"></i> تفاصيل النظام
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 ">
                    <div class="system-card" data-aos="zoom-in-up" data-aos-delay="1000">
                        <div class="system-card-img">
                            <img src="content/assets/images/Solar-Systems-3.jpg" alt="">
                        </div>
                        <div class="system-content text-center p-3">
                            <h3>نظام الري بالطاقة الشمسية</h3>
                            <p>نظام مستقل تماماً عن شبكة شركة الكهرباء حيث أنه يعمل على تشغيل جميع أنواع المضخات نهاراً
                                وبشكل مباشر مثل المضخات الغاطسة والسطحية. هذا النظام هو الأكثر كفاءة من حيث التوفير</p>
                            <a href="" class="btn btn-green"> <i class="fa-solid fa-sliders px-1"></i> تفاصيل النظام
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 ">
                    <div class="system-card" data-aos="zoom-in-up" data-aos-delay="1500">
                        <div class="system-card-img">
                            <img src="content/assets/images/Solar-Systems-2.jpg" alt="">
                        </div>
                        <div class="system-content text-center p-3">
                            <h3>نظام الري بالطاقة الشمسية</h3>
                            <p>نظام مستقل تماماً عن شبكة شركة الكهرباء حيث أنه يعمل على تشغيل جميع أنواع المضخات نهاراً
                                وبشكل مباشر مثل المضخات الغاطسة والسطحية. هذا النظام هو الأكثر كفاءة من حيث التوفير</p>
                            <a href="" class="btn btn-green"> <i class="fa-solid fa-sliders px-1"></i> تفاصيل النظام
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="text-center py-4">
                <h2>منتجاتنا</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="product-card">
                            <a href="">
                                <div class="p-2">
                                    <img src="content/assets/images/sheets.png" alt="">
                                </div>
                                <h2>الالواح الشمسية</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="product-card">
                            <a href="">
                                <div class="p-2">
                                    <img src="content/assets/images/sys.png" alt="">
                                </div>
                                <h2> انظمة التثبيت</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="product-card">
                            <a href="">
                                <div class="p-2">
                                    <img src="content/assets/images/trans.png" alt="">
                                </div>
                                <h2>المحولات</h2>

                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="product-card">
                            <a href="">
                                <div class="p-2">
                                    <img src="content/assets/images/add.png" alt="">
                                </div>
                                <h2>الملحقات</h2>

                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="product-card">
                            <a href="">
                                <div class="p-2">
                                    <img src="content/assets/images/capule.png" alt="">
                                </div>
                                <h2>الكيابل</h2>

                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3">
                        <div class="product-card">
                            <a href="">
                                <div class="p-2">
                                    <img src="content/assets/images/battaries.png" alt="">
                                </div>
                                <h2>البطاريات</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="text-center">
                            <a href="" class="btn btn-green moving-btn">
                                <i class="fa-solid fa-code-branch fa-rotate-180"></i>
                                تصفح كل المنتجات
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-partners">
        <div class="container">
            <div class="text-center pt-5">
                <h2 class="fw-bold">شركاؤنا التقنيون</h2>

            </div>
            <div class="row ltr-section">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">
                        <div class="mx-3 post-slide  ">

                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-1.png" alt="" class="mt-2">

                            </div>

                        </div>

                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-2.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-3.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-4.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-5.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-6.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-7.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-7.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-8.png" alt="" class="mt-2">

                            </div>
                        </div>
                        <div class="mx-3 post-slide  ">


                            <div class="product-img post-img text-center customer-img mt-3">
                                <img src="Content/assets/images/Tech-Partners-9.png" alt="" class="mt-2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-projects">
        <div class="text-center">
            <h2 class="text-white pt-5 fw-bold">مشاريعنا</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mt-3">
                    <div class="project-card">
                        <div class="project-title-header">
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">مشروع توريد وتركيب محطة طاقة شمسية بمزارع
                                        الملوحي</span>
                                </div>
                            </div>
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">بالقصيم- مدينة عنيزة</span>
                                </div>
                            </div>
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">بقدرة 100 ميجا وات</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-land" style="background-image: url('content/assets/images/bgland.png');width: 100%;
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
                                                <source src="content/assets/Videos/mov_bbb.mp4" type="video/mp4">
                                                <source src="mov_bbb.ogg" type="video/ogg">

                                            </video>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-3">
                    <div class="project-card">
                        <div class="project-title-header">
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">مشروع توريد وتركيب محطة طاقة شمسية بمزارع
                                        الملوحي</span>
                                </div>
                            </div>
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">بالقصيم- مدينة عنيزة</span>
                                </div>
                            </div>
                            <div class="project-title">
                                <div class="d-flex">
                                    <span class="projects-icon align-self-center"><i
                                            class="fa-regular fa-paper-plane"></i></span>
                                    <span class="projects-tittle">بقدرة 100 ميجا وات</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-land" style="background-image: url('content/assets/images/bgland.png');width: 100%;
                        height: 50vh;
                        background-size: contain;
                        background-repeat: no-repeat; position: relative;border-radius: 15px;">
                            <a id="play-video" class="video-play-button" href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModalllg">
                                <span></span>
                            </a>


                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">&times;</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="viedo-one">
                            <div class="modal fade" id="exampleModalllg" tabindex="-1"
                                aria-labelledby="exampleModalllgLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="">

                                            <button type="button" class="btn-close " data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <video class="w-100" controls>
                                                <source src="content/assets/Videos/mov_bbb.mp4" type="video/mp4">
                                                <source src="mov_bbb.ogg" type="video/ogg">

                                            </video>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="text-center py-5">
                        <a href="" class="btn btn-green moving-btn">
                            <i class="fa-solid fa-play"></i>
                            المزيد من المشاريع
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="info-super-parent">
        <div class="info-first-child"></div>
        <div class="info-title">
            <h2>أرض الطاقة الشمسية تشارك بمعرض BIG5 بالمملكة العربية السعودية</h2>
        </div>
        <div class="info-main">
            <div class="info-main-child">
                <a id="play-video" class="video-play-button2" href="#" data-bs-toggle="modal"
                    data-bs-target="#exampleModalllgg">
                    <span></span>
                </a>


                <div id="video-overlay" class="video-overlay2">
                    <a class="video-overlay-close2">&times;</a>
                </div>
            </div>
            <!-- Modal -->
            <div class="viedo-one">
                <div class="modal fade" id="exampleModalllgg" tabindex="-1" aria-labelledby="exampleModalllggLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="">

                                <button type="button" class="btn-close " data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <video class="w-100" controls>
                                    <source src="content/assets/Videos/mov_bbb.mp4" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">

                                </video>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-second-child">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="m-90">
                            <h2 class="fw-bold">آخر الأخبار</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3 p-3">
                        <div class="news-card">
                            <div class="news-card-img">
                                <img src="content/assets/images/solar.webp" alt="">
                            </div>
                            <div class="news-card-content p-3">
                                <h4><a href="">مستقبل الطاقة الشمسية في العالم العربي</a></h4>
                                <p class="">يوليو 13, 2023
                                    SLE</p>
                                <p><a href="">اقرأ المقال</a> <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3 p-3">
                        <div class="news-card">
                            <div class="news-card-img">
                                <img src="content/assets/images/panels-1-300x300.jpg" alt="">
                            </div>
                            <div class="news-card-content p-3">
                                <h4><a href="">كيف تساعد الطاقة الشمسية في انتقال الطاقة في المملكة العربية السعودية</a>
                                </h4>
                                <p class="">يوليو 13, 2023
                                    SLE</p>
                                <p><a href="">اقرأ المقال</a> <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-3 p-3">
                        <div class="news-card">
                            <div class="news-card-img">
                                <img src="content/assets/images/news-post-solar-panels-1-1-300x300.jpg" alt="">
                            </div>
                            <div class="news-card-content p-3">
                                <h4><a href="">تطبيقات الطاقة الشمسية بالسعودية</a></h4>
                                <p class="">يوليو 13, 2023
                                    SLE</p>
                                <p><a href="">اقرأ المقال</a> <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 col-12">
                        <div class="text-center">
                            <a href="" class="btn btn-green moving-btn">
                                <i class="fa-solid fa-copy"></i>
                                كل الاخبار
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

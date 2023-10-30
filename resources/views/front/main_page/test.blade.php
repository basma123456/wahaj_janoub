<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap version 5.2 -->
    <link rel="stylesheet" href="content/CSS/bootstrap.min.css">
    <!-- font awsome version 6.2 -->
    <link rel="stylesheet" href="content/CSS/all.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- custom css Arabic-->
    <link rel="stylesheet" href="content/CSS/style.css">
    <!-- English css -->
    <!--<link rel="stylesheet" href="content/CSS/style-ltr.css">-->
    <title>الرئيسية</title>
</head>

<body>

<header class="d-lg-block d-md-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-2">
                <a href="https://sle.sa/wp-content/uploads/SLE-Profile.pdf" target="_blank" class="company-file">حمل
                    ملف الشركة</a>
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
                <span class="text-fill fs-4 padding-x"><i class="fa-brands fa-facebook"></i></span>
                <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-twitter"></i></span>
                <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-instagram"></i></span>
                <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-linkedin"></i></span>
                <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-pinterest"></i></span>
                <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-whatsapp"></i></span>
                <span class="text-fill  fs-4 padding-x"><i class="fa-solid fa-square-phone"></i></span>
                <span class="text-fill  fs-4 padding-x"><i class="fa-solid fa-envelope"></i></span>
            </div>
        </div>
    </div>
</header>

<div style="
background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url(content/assets/images/panels.jpg);
width: 100%;
padding: 50px 0px;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
position: relative;">


    <nav class="navbar navbar-expand-lg navbar-light nav-bg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="content/assets/images/logo.png" alt="logo" class="logo-imge">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 nav-linkks">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.html">عن الشركة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="why-us.html"> لماذا الطاقة الشمسية</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="systems.html" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            الانظمة
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="independent-system.html">النظام المستقل عن الشبكة
                                    off-Grid</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="linking-system.html">نظام الربط على شبكة الكهرباء
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="solar-irrigation -system.html">نظام الري بالطاقة
                                    الشمسية</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="store.html" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            المتجر
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="store-solar-panels.html">الالواح الشمسية</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Off-Grid-Inverters.html">المحولات المنفصلة عن
                                    الشبكة</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="On-Grid-Iverters.html">المحولات المتصلة بالشبكة</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="solar-air-conditioners.html"> مكيفات الطاقة الشمسية
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Installation-Systems.html"> انظمة التثبيت </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Protections.html"> انظمة الحماية </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="battaries.html"> البطاريات </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="capules.html"> الكيابل </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Accessories.html"> الملحقات </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="projectts.html" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            مشاريعنا
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="projects-connectedto-network.html">مشاريع متصلة
                                    بالشبكة</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="projected-separated-network.html">مشاريع منفصلة عن
                                    الشبكة</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Solar-irrigation-projects.html">مشاريع الري بالطاقة
                                    الشمسية</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.html"> الاخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span><img src="content/assets/images/us.png" alt=""></span>
                            <span>English</span>
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-search" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                    </button>

                    <a href="" class="btn btn-contact">تواصل معانا</a>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-body">
                                ...
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="p-3">
                    <h2 class="text-white mt-50 fw-bold">شركة وهج الجنوب للطاقة الشمسية</h2>
                    <p class="text-white mt-5">متخصصون في هندسة وإنشاءات وتصميم أنظمة الطاقة الشمسية المربوطة بشبكة
                        الكهرباء والمستقلة عنها وأنظمة الري بالطاقة الشمسية.
                        نقدم لعملائنا حلول وابتكار وخدمات الدعم الفني فيما يتعلق بالطاقة الشمسية
                    </p>
                    <div class="d-flex px-3 pt-3 div-width">
                        <a href="" class="btn btn-contact red-btn-contact"> <i class="fa-solid fa-gears px-1"></i>
                            خدماتنا </a>
                        <!-- <div class="px-3"> -->
                        <a href="" class="btn btn-contact"> <i class="fa-regular fa-paper-plane px-1"></i> تواصل
                            معانا</a>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="text-center mt-3" data-aos="fade-down" data-aos-duration="5000" data-aos-delay="500">
                    <img src="content/assets/images/first-img.png" alt="" class="w-100">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <div class="dynamic-logo text-center">
                <img src="content/assets/images/logo.png" alt="">
            </div>
        </div>
        <div class="col-md-6 mt-3 ">
            <div class="about-company" data-aos="fade-left" data-aos-duration="5000" data-aos-delay="500">
                <div class="about-child p-5">
                    <h2>عن شركة ارض الطاقة الشمسية</h2>
                    <p class="mt-4">نقدم لعملائنا حلول وابتكار وخدمات الدعم الفني فيما يتعلق بالطاقة الشمسية ومن
                        منطلق مبدأ (العروض والحلول) فهدفنا توفير الاحتياجات البديلة للطاقة للحد من استهلاك رأس المال
                        وزيادة الأرباح، واثبات ذلك بشكل وثيق مع عملائنا لتحقيق الأهداف المالية.</p>
                    <div class="text-center">
                        <a href="" class="btn btn-green">المزيد عن الشركة</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div style="
    background: linear-gradient(to bottom, rgba(232, 233, 242, 0.927) 0%, rgb(232, 233, 242,  0.927) 0%), url(content/assets/images/circle-bg.png);
    width: 100%;

    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
   ">

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

<footer>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4 col-12 mt-3">
                <div class="footer-parent">
                    <div class="footer-child">
                        <img src="content/assets/images/logo.png" alt="">
                        <p>متخصصون في هندسة وإنشاءات وتصميم أنظمة الطاقة الشمسية المربوطة بشبكة الكهرباء والمستقلة
                            عنها وأنظمة الري بالطاقة الشمسية</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mt-3">
                <div class="footer-parent">
                    <div class="footer-child">
                        <h4 class="fw-bold">راوابط هامة</h4>
                        <div class="imp-links">
                            <span><i class="fa-solid fa-bolt-lightning"></i><a href="index.html">الرئيسية</a></span>
                        </div>
                        <div class="imp-links">
                            <span><i class="fa-solid fa-bolt-lightning"></i><a href="index.html">الانظمة</a></span>
                        </div>
                        <div class="imp-links">
                            <span><i class="fa-solid fa-bolt-lightning"></i><a href="index.html">المتجر</a></span>
                        </div>
                        <div class="imp-links">
                            <span><i class="fa-solid fa-bolt-lightning"></i><a href="index.html">الاخبار</a></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mt-3">
                <div class="footer-parent">
                    <div class="footer-child">
                        <h4 class="fw-bold"> تواصل معنا</h4>
                        <div class="text-center mt-3">
                            <a href="" class="btn btn-green">
                                <i class="fa-regular fa-envelope"></i>
                                تواصل معنا
                            </a>
                        </div>
                        <div class="text-center pt-4"><span class="text-fill fs-4 padding-x"><i
                                    class="fa-brands fa-facebook"></i></span>
                            <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-instagram"></i></span>
                            <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-twitter"></i></span>
                            <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-linkedin"></i></span>
                            <span class="text-fill  fs-4 padding-x"><i class="fa-brands fa-pinterest"></i></span>

                            <span class="text-fill  fs-4 padding-x"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-sec">
    <div class="container text-center">
        جميع الحقوق محفوظة © 2023 - SLE ارض الطاقة الشمسية
    </div>
</div>
<div class="whatsapp">
    <a href="https://wa.me//0201550278122?text=hello">
            <span class=" fs-1"><svg class="svg-inline--fa fa-whatsapp" aria-hidden="true" focusable="false"
                                     data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512" data-fa-i2svg="">
                    <path fill="currentColor"
                          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                    </path>
                </svg><!-- <i class="fa-brands fa-whatsapp"></i> Font Awesome fontawesome.com --></span>
    </a>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

<!-- bootstrap version 5.2 -->
<script src="content/JS/bootstrap.bundle.js"></script>
<!-- font awsome version 6.2 -->
<script src="content/JS/all.min.js"></script>
<!-- jquery -->
<script src="content/JS/jquery.min.js"></script>
<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<!-- aos.js -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- custom Js -->
<script src="content/JS/app.js"></script>
</body>

</html>

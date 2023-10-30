<nav class="navbar navbar-expand-lg navbar-light nav-bg">
    <div class="container">
        <a class="navbar-brand" href="#">
{{--            <img src="{{asset('public/content/assets/images/logo.png')}}" alt="logo" class="logo-imge">--}}
            <img src="{{asset('public/images/main_page/' . mainPage()->logo)}}" alt="logo" class="logo-imge">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 nav-linkks">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">@lang('nav.main_page')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about-our-company')}}"> @lang('nav.about_us')  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('why_solar_system_page.front')}}"> @lang('nav.why_solar_energy')</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('systems-list')}}" id="navbarDropdown" >
                        @lang('nav.systems')
                    </a>
                </li>

                {{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="{{url('systems-list')}}" id="navbarDropdown" role="button"--}}
{{--                       data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        الانظمة--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="independent-system.html">النظام المستقل عن الشبكة--}}
{{--                                off-Grid</a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="linking-system.html">نظام الربط على شبكة الكهرباء--}}
{{--                            </a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="solar-irrigation -system.html">نظام الري بالطاقة--}}
{{--                                الشمسية</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="store.html" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        @lang('nav.store')
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @forelse(productClassifications() as $product)
{{--                        <li><a class="dropdown-item" href="store-solar-panels.html">   {{convertLanguageToLocale($product->name)}}</a></li>--}}
                            <li><a class="dropdown-item" href="{{route('products_list.index' , $product->id)}}">   {{convertLanguageToLocale($product->name)}}</a></li>
                            <li>
                            <hr class="dropdown-divider">
                        </li>
                        @empty
                            @endforelse


{{--                        <li><a class="dropdown-item" href="Off-Grid-Inverters.html">المحولات المنفصلة عن الشبكة</a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="On-Grid-Iverters.html">المحولات المتصلة بالشبكة</a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="solar-air-conditioners.html"> مكيفات الطاقة الشمسية </a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="Installation-Systems.html"> انظمة التثبيت </a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="Protections.html"> انظمة الحماية </a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="battaries.html"> البطاريات </a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="capules.html"> الكيابل </a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="Accessories.html"> الملحقات </a></li>--}}
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="projectts.html" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        @lang('nav.projects')
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       @forelse(constructionsClassifications() as $construct)
{{--                        <li><a class="dropdown-item" href="projects-connectedto-network.html">مشاريع متصلة بالشبكة</a></li>--}}
                            <li><a class="dropdown-item" href="{{route('constructions_list.index',$construct->id)}}">    {{convertLanguageToLocale($construct->name)}}</a></li>
                            <li>
                            <hr class="dropdown-divider">
                        </li>
                        @empty
                        @endforelse

{{--                        <li><a class="dropdown-item" href="projected-separated-network.html">مشاريع منفصلة عن الشبكة</a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="Solar-irrigation-projects.html">مشاريع الري بالطاقة الشمسية</a></li>--}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('news-list')}}"> @lang('nav.news')</a>
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="store.html" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
{{--                        المتجر--}}
                        {{ LaravelLocalization::getCurrentLocaleNative() }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach


{{--                    @forelse(productClassifications() as $product)--}}
{{--                            --}}{{--                        <li><a class="dropdown-item" href="store-solar-panels.html">   {{convertLanguageToLocale($product->name)}}</a></li>--}}
{{--                            <li><a class="dropdown-item" href="{{route('products_list.index' , $product->id)}}">   {{convertLanguageToLocale($product->name)}}</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                        @empty--}}
{{--                        @endforelse--}}


                        {{--                        <li><a class="dropdown-item" href="Off-Grid-Inverters.html">المحولات المنفصلة عن الشبكة</a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <hr class="dropdown-divider">--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="dropdown-item" href="On-Grid-Iverters.html">المحولات المتصلة بالشبكة</a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <hr class="dropdown-divider">--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="dropdown-item" href="solar-air-conditioners.html"> مكيفات الطاقة الشمسية </a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <hr class="dropdown-divider">--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="dropdown-item" href="Installation-Systems.html"> انظمة التثبيت </a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <hr class="dropdown-divider">--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="dropdown-item" href="Protections.html"> انظمة الحماية </a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <hr class="dropdown-divider">--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="dropdown-item" href="battaries.html"> البطاريات </a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <hr class="dropdown-divider">--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="dropdown-item" href="capules.html"> الكيابل </a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <hr class="dropdown-divider">--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="dropdown-item" href="Accessories.html"> الملحقات </a></li>--}}
                    </ul>
                </li>

                {{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <span><img src="content/assets/images/us.png" alt=""></span>--}}
{{--                        <span>English</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
            <div class="d-flex">
                <!-- Button trigger modal -->
{{--                <button type="button" class="btn-search" data-bs-toggle="modal" data-bs-target="#exampleModal2">--}}
{{--                    <i class="fa-solid fa-magnifying-glass text-white"></i>--}}
{{--                </button>--}}

                <a href="{{route('contact_us_front.index')}}" class="btn btn-contact">  @lang('nav.contact_us')</a>

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

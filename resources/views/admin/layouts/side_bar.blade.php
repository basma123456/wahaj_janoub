<div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('public/admin_layouts/assets/images/dashboard/1.png')}}" alt="">
    <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
        <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->name}}</h6></a>
    <p class="mb-0 font-roboto">{{auth()->user()->email}}</p>
    <ul>
{{--        <li><span><span class="counter">19.8</span>k</span>--}}
{{--            <p>Follow</p>--}}
{{--        </li>--}}
{{--        <li><span>2 year</span>--}}
{{--            <p>Experince</p>--}}
{{--        </li>--}}
{{--        <li><span><span class="counter">95.2</span>k</span>--}}
{{--            <p>Follower </p>--}}
{{--        </li>--}}
    </ul>
</div>
<nav>
    <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>

        <div id="mainnav">
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                    <div>

                        <h6>Actions               </h6>
                    </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Product classifications   </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{url('product-classification')}}">Product classifications   </a></li>
                        <li><a href="{{url('product-classification-create')}}">create classification</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Products</span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('product.index')}}">Products</a></li>
{{--                        <li><a href="chart-widget.html">Chart</a></li>--}}
                    </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Main page</span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('main-page.index')}}">Main page</a></li>
                        <li><a href="{{route('main-page.create')}}">Main page create</a></li>

                        {{--                        <li><a href="chart-widget.html">Chart</a></li>--}}
                    </ul>
                </li>

                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>systems  </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('systems.index')}}">systems  </a></li>
                        <li><a href="{{route('systems.create')}}">  add  system</a></li>

                        {{--                        <li><a href="chart-widget.html">Chart</a></li>--}}
                    </ul>
                </li>
                 <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>about-us  </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('about-us.index')}}">about-us page </a></li>
                        <li><a href="{{route('about-us.create')}}">  add about-us page   </a></li>

                        {{--                        <li><a href="chart-widget.html">Chart</a></li>--}}
                    </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>why solar system  </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('why-solar-system.index')}}">why solar system  page </a></li>
                        <li><a href="{{route('why-solar-system.create')}}">  add why solar system  page   </a></li>

                     </ul>
                </li>


                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span> Construction  Classifications    </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('construction-classification.index')}}">Construction Classifications </a></li>
                        <li><a href="{{route('construction-classification.create')}}">  add Construction Classification </a></li>

                    </ul>
                </li>


                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span> Constructions       </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('construction.index')}}">Constructions   </a></li>
                        <li><a href="{{route('construction.create')}}">  add Construction   </a></li>

                    </ul>
                </li>


                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span> Partners       </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('partners.index')}}">partners   </a></li>
                        <li><a href="{{route('partners.create')}}">  add partner   </a></li>

                    </ul>
                </li>

                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span> news       </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('news.index')}}">news   </a></li>
                        <li><a href="{{route('news.create')}}">  add news   </a></li>

                    </ul>
                </li>

                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span> Quotations       </span></a>
                    <ul class="nav-submenu menu-content">
                        <li><a href="{{route('quotation.index')}}">Quotations   </a></li>

                    </ul>
                </li>


                {{--                --}}

                {{--                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Main page  </span></a>--}}
{{--                    <ul class="nav-submenu menu-content">--}}
{{--                        <li><a href="box-layout.html">Boxed</a></li>--}}
{{--                        <li><a href="layout-rtl.html">RTL</a></li>--}}
{{--                        <li><a href="layout-dark.html">Dark</a></li>--}}
{{--                        <li><a href="footer-light.html">Footer Light</a></li>--}}
{{--                        <li><a href="footer-dark.html">Footer Dark</a></li>--}}
{{--                        <li><a href="footer-fixed.html">Footer Fixed</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="sidebar-main-title">--}}
{{--                    <div>--}}
{{--                        <h6>Components             </h6>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>--}}
{{--                    <ul class="nav-submenu menu-content">--}}
{{--                        <li><a href="state-color.html">State color</a></li>--}}
{{--                        <li><a href="typography.html">Typography</a></li>--}}
{{--                        <li><a href="avatars.html">Avatars</a></li>--}}
{{--                        <li><a href="helper-classes.html">helper classes</a></li>--}}
{{--                        <li><a href="grid.html">Grid</a></li>--}}
{{--                        <li><a href="tag-pills.html">Tag & pills</a></li>--}}
{{--                        <li><a href="progress-bar.html">Progress</a></li>--}}
{{--                        <li><a href="modal.html">Modal</a></li>--}}
{{--                        <li><a href="alert.html">Alert</a></li>--}}
{{--                        <li><a href="popover.html">Popover</a></li>--}}
{{--                        <li><a href="tooltip.html">Tooltip</a></li>--}}
{{--                        <li><a href="loader.html">Spinners</a></li>--}}
{{--                        <li><a href="dropdown.html">Dropdown</a></li>--}}
{{--                        <li><a href="according.html">Accordion</a></li>--}}
{{--                        <li><a class="submenu-title" href="javascript:void(0)">Tabs<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>--}}
{{--                            <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>--}}
{{--                                <li><a href="tab-material.html">Line Tabs</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="navs.html">Navs</a></li>--}}
{{--                        <li><a href="box-shadow.html">Shadow</a></li>--}}
{{--                        <li><a href="list.html">Lists</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>--}}
{{--                    <ul class="nav-submenu menu-content">--}}
{{--                        <li><a href="scrollable.html">Scrollable</a></li>--}}
{{--                        <li><a href="tree.html">Tree view</a></li>--}}
{{--                        <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>--}}
{{--                        <li><a href="rating.html">Rating</a></li>--}}
{{--                        <li><a href="dropzone.html">dropzone</a></li>--}}
{{--                        <li><a href="tour.html">Tour</a></li>--}}
{{--                        <li><a href="sweet-alert2.html">SweetAlert2</a></li>--}}
{{--                        <li><a href="modal-animated.html">Animated Modal</a></li>--}}
{{--                        <li><a href="owl-carousel.html">Owl Carousel</a></li>--}}
{{--                        <li><a href="ribbons.html">Ribbons</a></li>--}}
{{--                        <li><a href="pagination.html">Pagination</a></li>--}}
{{--                        <li><a href="steps.html">Steps</a></li>--}}
{{--                        <li><a href="breadcrumb.html">Breadcrumb</a></li>--}}
{{--                        <li><a href="range-slider.html">Range Slider</a></li>--}}
{{--                        <li><a href="image-cropper.html">Image cropper</a></li>--}}
{{--                        <li><a href="sticky.html">Sticky         </a></li>--}}
{{--                        <li><a href="basic-card.html">Basic Card</a></li>--}}
{{--                        <li><a href="creative-card.html">Creative Card</a></li>--}}
{{--                        <li><a href="tabbed-card.html">Tabbed Card</a></li>--}}
{{--                        <li><a href="dragable-card.html">Draggable Card</a></li>--}}
{{--                        <li><a class="submenu-title" href="javascript:void(0)">Timeline<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>--}}
{{--                            <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                <li><a href="timeline-v-1.html">Timeline 1</a></li>--}}
{{--                                <li><a href="timeline-v-2.html">Timeline 2</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}



                <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
</nav>
</header>
<!-- Page Sidebar Ends-->

@extends('admin.app')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>about us  </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item">Form Widgets</li>
                            <li class="breadcrumb-item active">Default Forms</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <!-- Bookmark Start-->
                        <div class="bookmark">
                            <ul>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                                    <form class="form-inline search-form">
                                        <div class="form-group form-control-search">
                                            <input type="text" placeholder="Search..">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>













            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">

                    <!---------start----------->
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h5> about us  </h5>
                                    </div>
                                    <div class="card-body">

                                        @if($aboutUs)
                                            <img width="200" height="100"  src="{{asset('public/images/about_us/' . $aboutUs->image_one)}}">
                                            <img width="200" height="100"  src="{{asset('public/images/about_us/' . $aboutUs->image_two)}}">
                                        <form action="{{route('about-us.update' , $aboutUs->id)}}" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <h6>system   Information</h6>
                                            <div class="mb-3">
                                                <label class="col-form-label">    title_one  arabic  </label>
                                                <input class="form-control" value="{{convertLanguageToArabic($aboutUs->title_one)}}" name="title_one_ar" type="text" placeholder=" title one arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    title_one  english  </label>
                                                <input class="form-control" value="{{convertLanguageToEnglish($aboutUs->title_one)}}" name="title_one_en" type="text" placeholder=" title one english">
                                            </div>



                                            <div class="mb-3">
                                                <label class="col-form-label">    description_one  arabic  </label>
                                                <textarea   rows="5" class="form-control" name="description_one_ar" >  {{convertLanguageToArabic($aboutUs->description_one)}}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    description_one  english  </label>
                                                <textarea   rows="5" class="form-control" name="description_one_en"  >{{convertLanguageToEnglish($aboutUs->description_one)}} </textarea>
                                            </div>




                                            <div class="mb-3">
                                                <label class="col-form-label">    more_description_one  arabic  </label>
                                                <textarea   rows="5" class="form-control" name="more_description_one_ar" >{{convertLanguageToEnglish($aboutUs->more_description_one)}}  </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    more_description_one  english  </label>
                                                <textarea   rows="5" class="form-control" name="more_description_one_en"  > {{convertLanguageToArabic($aboutUs->more_description_one)}} </textarea>
                                            </div>



                                            <div class="mb-3">
                                                <label class="col-form-label">    title_two  arabic  </label>
                                                <input class="form-control" value="{{convertLanguageToArabic($aboutUs->title_two)}}" name="title_two_ar" type="text" placeholder=" title_two   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    title_two  english  </label>
                                                <input class="form-control"  value="{{convertLanguageToEnglish($aboutUs->title_two)}}" name="title_two_en" type="text" placeholder=" title_two   english">
                                            </div>


                                            <div class="mb-3">
                                                <label class="col-form-label">    description_two  arabic  </label>
                                                <textarea   rows="5" class="form-control" name="description_two_ar" > {{convertLanguageToArabic($aboutUs->description_two)}}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    description_two  english  </label>
                                                <textarea   rows="5" class="form-control" name="description_two_en"  >{{convertLanguageToEnglish($aboutUs->description_two)}} </textarea>
                                            </div>



                                            <div class="mb-3">
                                                <label class="col-form-label">    last_h  arabic  </label>
                                                <input class="form-control" value="{{convertLanguageToArabic($aboutUs->last_h)}}" name="last_h_ar" type="text" placeholder=" last_h   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    last_h  english  </label>
                                                <input class="form-control" value="{{convertLanguageToEnglish($aboutUs->last_h)}}" name="last_h_en" type="text" placeholder=" last_h   english">
                                            </div>


                                            <div class="mb-3">
                                                <label class="col-form-label">    right_bottom_title  arabic  </label>
                                                <input class="form-control" value="{{convertLanguageToArabic($aboutUs->right_bottom_title)}}" name="right_bottom_title_ar" type="text" placeholder=" right_bottom_title   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    right_bottom_title  english  </label>
                                                <input class="form-control" value="{{convertLanguageToEnglish($aboutUs->right_bottom_title)}}" name="right_bottom_title_en" type="text" placeholder=" right_bottom_title   english">
                                            </div>



                                            {{--                                              --}}


                                            <div class="mb-3">
                                                <label class="col-form-label">    right_bottom_desc  arabic  </label>
                                                <textarea   rows="5" class="form-control" name="right_bottom_desc_ar" >{{convertLanguageToArabic($aboutUs->right_bottom_desc)}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    right_bottom_desc  english  </label>
                                                <textarea   rows="5" class="form-control" name="right_bottom_desc_en"  >{{convertLanguageToEnglish($aboutUs->right_bottom_desc)}} </textarea>
                                            </div>



                                            {{--                                              --}}

                                            <div class="mb-3">
                                                <label class="col-form-label">    left_bottom_title  arabic  </label>
                                                <input class="form-control" value="{{convertLanguageToArabic($aboutUs->left_bottom_title)}}" name="left_bottom_title_ar" type="text" placeholder=" left_bottom_title   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    left_bottom_title  english  </label>
                                                <input class="form-control" value="{{convertLanguageToEnglish($aboutUs->left_bottom_title)}}" name="left_bottom_title_en" type="text" placeholder=" left_bottom_title   english">
                                            </div>



                                            <div class="mb-3">
                                                <label class="col-form-label">    left_bottom_desc  arabic  </label>
                                                <input class="form-control" value="{{convertLanguageToArabic($aboutUs->left_bottom_desc)}}" name="left_bottom_desc_ar" type="text" placeholder=" left_bottom_desc   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    left_bottom_desc  english  </label>
                                                <input class="form-control" name="left_bottom_desc_en" value="{{convertLanguageToEnglish($aboutUs->left_bottom_desc)}}" type="text" placeholder=" left_bottom_desc   english">
                                            </div>





                                            <div class="mb-3">
                                                <label class="col-form-label">image_one    </label>
                                                <input class="form-control" name="image_one" type="file" placeholder=" image_one">
                                            </div>

                                            <div class="mb-3">
                                                <label class="col-form-label">image_two    </label>
                                                <input class="form-control" name="image_two" type="file" placeholder=" image_two">
                                            </div>

                                            <div class="card-footer">
                                                <button class="btn btn-primary">Submit</button>
                                                <a  href="{{route('about-us.index')}}" class="btn btn-secondary">Cancel</a>
                                            </div>

                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------end ----------------->
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
    </div>
@endsection

@extends('admin.app')

@section('content')
    <div class="page-body">
        <div class="container-fluid">













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
                                            <div   class="theme-form mega-form"  >
                                                 <h6>About Us   Page</h6>
                                                <br>
                                                <a href="{{route('about-us.edit' , $aboutUs->id)}}" class="btn btn-warning">edit</a>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    title_one  arabic  </label>
                                                    <input class="form-control" readonly value="{{convertLanguageToArabic($aboutUs->title_one)}}" name="title_one_ar" type="text" placeholder=" title one arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    title_one  english  </label>
                                                    <input class="form-control" readonly value="{{convertLanguageToEnglish($aboutUs->title_one)}}" name="title_one_en" type="text" placeholder=" title one english">
                                                </div>



                                                <div class="mb-3">
                                                    <label class="col-form-label">    description_one  arabic  </label>
                                                    <textarea class="form-control" readonly name="description_one_ar" >  {{convertLanguageToArabic($aboutUs->description_one)}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    description_one  english  </label>
                                                    <textarea class="form-control" readonly name="description_one_en"  >{{convertLanguageToEnglish($aboutUs->description_one)}} </textarea>
                                                </div>




                                                <div class="mb-3">
                                                    <label class="col-form-label">    more_description_one  arabic  </label>
                                                    <textarea class="form-control" readonly name="more_description_one_ar" >{{convertLanguageToEnglish($aboutUs->more_description_one)}}  </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    more_description_one  english  </label>
                                                    <textarea class="form-control" readonly name="more_description_one_en"  > {{convertLanguageToArabic($aboutUs->more_description_one)}} </textarea>
                                                </div>



                                                <div class="mb-3">
                                                    <label class="col-form-label">    title_two  arabic  </label>
                                                    <input class="form-control" readonly value="{{convertLanguageToArabic($aboutUs->title_two)}}" name="title_two_ar" type="text" placeholder=" title_two   arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    title_two  english  </label>
                                                    <input class="form-control" readonly  value="{{convertLanguageToEnglish($aboutUs->title_two)}}" name="title_two_en" type="text" placeholder=" title_two   english">
                                                </div>


                                                <div class="mb-3">
                                                    <label class="col-form-label">    description_two  arabic  </label>
                                                    <textarea readonly class="form-control" name="description_two_ar" > {{convertLanguageToArabic($aboutUs->description_two)}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    description_two  english  </label>
                                                    <textarea readonly class="form-control" name="description_two_en"  >{{convertLanguageToEnglish($aboutUs->description_two)}} </textarea>
                                                </div>



                                                <div class="mb-3">
                                                    <label class="col-form-label">    last_h  arabic  </label>
                                                    <input readonly class="form-control" value="{{convertLanguageToArabic($aboutUs->last_h)}}" name="last_h_ar" type="text" placeholder=" last_h   arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    last_h  english  </label>
                                                    <input readonly class="form-control" value="{{convertLanguageToEnglish($aboutUs->last_h)}}" name="last_h_en" type="text" placeholder=" last_h   english">
                                                </div>


                                                <div class="mb-3">
                                                    <label class="col-form-label">    right_bottom_title  arabic  </label>
                                                    <input readonly class="form-control" value="{{convertLanguageToArabic($aboutUs->right_bottom_title)}}" name="right_bottom_title_ar" type="text" placeholder=" right_bottom_title   arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    right_bottom_title  english  </label>
                                                    <input readonly class="form-control" value="{{convertLanguageToEnglish($aboutUs->right_bottom_title)}}" name="right_bottom_title_en" type="text" placeholder=" right_bottom_title   english">
                                                </div>



                                                {{--                                              --}}


                                                <div class="mb-3">
                                                    <label class="col-form-label">    right_bottom_desc  arabic  </label>
                                                    <textarea readonly class="form-control" name="right_bottom_desc_ar" >{{convertLanguageToArabic($aboutUs->right_bottom_desc)}} </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    right_bottom_desc  english  </label>
                                                    <textarea readonly class="form-control" name="right_bottom_desc_en"  >{{convertLanguageToEnglish($aboutUs->right_bottom_desc)}} </textarea>
                                                </div>



                                                {{--                                              --}}

                                                <div class="mb-3">
                                                    <label class="col-form-label">    left_bottom_title  arabic  </label>
                                                    <input readonly class="form-control" value="{{convertLanguageToArabic($aboutUs->left_bottom_title)}}" name="left_bottom_title_ar" type="text" placeholder=" left_bottom_title   arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    left_bottom_title  english  </label>
                                                    <input readonly class="form-control" value="{{convertLanguageToEnglish($aboutUs->left_bottom_title)}}" name="left_bottom_title_en" type="text" placeholder=" left_bottom_title   english">
                                                </div>



                                                <div class="mb-3">
                                                    <label class="col-form-label">    left_bottom_desc  arabic  </label>
                                                    <input readonly class="form-control" value="{{convertLanguageToArabic($aboutUs->left_bottom_desc)}}" name="left_bottom_desc_ar" type="text" placeholder=" left_bottom_desc   arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    left_bottom_desc  english  </label>
                                                    <input   readonly class="form-control" name="left_bottom_desc_en" value="{{convertLanguageToEnglish($aboutUs->left_bottom_desc)}}" type="text" placeholder=" left_bottom_desc   english">
                                                </div>






                                                <div class="card-footer">
{{--                                                    <button class="btn btn-primary">Submit</button>--}}
{{--                                                    <a  href="{{route('about-us.index')}}" class="btn btn-secondary">Cancel</a>--}}
                                                </div>

                                            </div>
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

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
                                        <h5> Why solar system     </h5>
                                    </div>
                                    <div class="card-body">
                                        @if($why_solar_system)
                                            <img width="200" height="100" src="{{asset('public/images/why_solar_system/' . $why_solar_system->image_one)}}">


                                         <br>
                                        <br>
                                            <a href="{{route('why-solar-system.edit' , $why_solar_system->id)}}" class="btn btn-warning">  edit   </a>
                                            <div>
                                                 <h6>why solar system   Information</h6>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    title_one  arabic  </label>
                                                    <input  readonly     class="form-control" value="{{convertLanguageToArabic($why_solar_system->title_one)}}" name="title_one_ar" type="text" placeholder=" title one arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    title_one  english  </label>
                                                    <input  readonly      class="form-control" value="{{convertLanguageToEnglish($why_solar_system->title_one)}}" name="title_one_en" type="text" placeholder=" title one english">
                                                </div>



                                                <div class="mb-3">
                                                    <label class="col-form-label">    description_one  arabic  </label>
                                                    <textarea  readonly class="form-control" name="description_one_ar" > {{convertLanguageToArabic($why_solar_system->description_one)}} </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    description_one  english  </label>
                                                    <textarea  readonly class="form-control" name="description_one_en"  > {{convertLanguageToEnglish($why_solar_system->description_one)}} </textarea>
                                                </div>
















                                                <div class="mb-3">
                                                    <label class="col-form-label">    last_h  arabic  </label>
                                                    <input  readonly   class="form-control" value="{{convertLanguageToArabic($why_solar_system->last_h)}}" name="last_h_ar" type="text" placeholder=" last_h   arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    last_h  english  </label>
                                                    <input  readonly   class="form-control" value="{{convertLanguageToEnglish($why_solar_system->last_h)}}" name="last_h_en" type="text" placeholder=" last_h   english">
                                                </div>






                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text  arabic  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_ar" >{{convertLanguageToArabic($why_solar_system->accordion_text)}} </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text  english  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_en"  >{{convertLanguageToEnglish($why_solar_system->accordion_text)}} </textarea>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_2  arabic  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_2_ar" > {{convertLanguageToArabic($why_solar_system->accordion_text_2)}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_2  english  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_2_en"  >{{convertLanguageToEnglish($why_solar_system->accordion_text_2)}} </textarea>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_3  arabic  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_3_ar" > {{convertLanguageToArabic($why_solar_system->accordion_text_3)}} </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_3  english  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_3_en"  > {{convertLanguageToEnglish($why_solar_system->accordion_text_3)}} </textarea>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_4  arabic  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_4_ar" >{{convertLanguageToArabic($why_solar_system->accordion_text_4)}} </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_4  english  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_4_en"  >{{convertLanguageToEnglish($why_solar_system->accordion_text_4)}} </textarea>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_5  arabic  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_5_ar" > {{convertLanguageToArabic($why_solar_system->accordion_text_5)}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_5  english  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_5_en"  >{{convertLanguageToEnglish($why_solar_system->accordion_text_5)}} </textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_6  arabic  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_6_ar" >{{convertLanguageToArabic($why_solar_system->accordion_text_6)}} </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    accordion_text_6  english  </label>
                                                    <textarea  readonly class="form-control" name="accordion_text_6_en"  >{{convertLanguageToEnglish($why_solar_system->accordion_text_6)}} </textarea>
                                                </div>









                                                <div class="card-footer">
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

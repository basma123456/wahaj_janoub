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
                                        <h5> construction     </h5>
                                    </div>
                                    <div class="card-body">
                                        @if($construction)
                                             @if($construction->video)


                                                <video  class="d-inline-block"  width="320" height="240" autoplay>
                                                    <source src="{{asset('public/videos/constructions/' . $construction->video)}}" type="video/mp4">
                                                    <source src="{{asset('public/videos/constructions/' . $construction->video)}}" type="video/ogg">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif

                                                @if($construction->image)
                                                <img src="{{asset('public/images/constructions/' . $construction->image)}}" width="200" height="100">
                                                @endif

                                            <form action="{{route('construction.update' , $construction->id)}}" method="post" class="theme-form mega-form" enctype="multipart/form-data" >
                                            @csrf
                                            @method('put')
                                            <h6>construction       Information</h6>
                                            <div class="mb-3">
                                                <label class="col-form-label">    title  arabic  </label>
                                                <input value="{{convertLanguageToArabic($construction->title)}}" class="form-control" name="title_ar" type="text" placeholder=" title   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    title  english  </label>
                                                <input value="{{convertLanguageToEnglish($construction->title)}}" class="form-control" name="title_en" type="text" placeholder=" title   english">
                                            </div>



                                                <div class="mb-3">
                                                    <label class="col-form-label">    desc  arabic  </label>
                                                    <input value="{{convertLanguageToArabic($construction->description)}}"  class="form-control" name="description_ar" type="text" placeholder=" description   arabic">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label">    desc  english  </label>
                                                    <input value="{{convertLanguageToArabic($construction->description)}}"  class="form-control" name="description_en" type="text" placeholder=" description   english">
                                                </div>


                                                <!----------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    region  arabic  </label>
                                                <input value="{{convertLanguageToArabic($construction->region)}}" class="form-control" name="region_ar" type="text" placeholder=" region   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    region  english  </label>
                                                <input value="{{convertLanguageToEnglish($construction->region)}}" class="form-control" name="region_en" type="text" placeholder=" region   english">
                                            </div>

                                            <!---------------->

                                            <!----------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    city  arabic  </label>
                                                <input value="{{convertLanguageToArabic($construction->city)}}" class="form-control" name="city_ar" type="text" placeholder=" city   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    city  english  </label>
                                                <input value="{{convertLanguageToEnglish($construction->city)}}" class="form-control" name="city_en" type="text" placeholder=" city   english">
                                            </div>

                                            <!---------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    construction classification     </label>
                                                <select class="form-control" name="construction_classifications_id"  >
                                                @foreach($classifications as $classification)
                                                    <option {{$classification->id == $construction->construction_classification_id ? 'selected' :''}} value="{{$classification->id}}">{{$classification->id}}</option>
                                                @endforeach
                                                </select>
                                            </div>


                                            <!---------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    partner       </label>

{{--                                                <select class="form-control" name="construction_classifications_id"  >--}}
{{--                                                    @forelse($partners as $partner)--}}
{{--                                                        <option   value="{{$partner->id}}">{{convertLanguageToArabic($partner->name)}} / {{convertLanguageToEnglish($partner->name)}}</option>--}}
{{--                                                    @empty--}}
{{--                                                    @endforelse--}}
{{--                                                </select>--}}
{{--                                                <select class="form-control" name="contracting"  >--}}
{{--                                                    @forelse($partners as $partner)--}}
{{--                                                        <option   value="{{$partner->id}}">{{convertLanguageToArabic($partner->name)}} / {{convertLanguageToEnglish($partner->name)}}</option>--}}
{{--                                                    @empty--}}
{{--                                                    @endforelse--}}
{{--                                                </select>--}}
                                                <select   name="partner_id"  class="form-control">
                                                    @foreach($partners as $partner)
                                                        <option value="{{$partner->id}}" type="number" {{$construction->partner_id === $partner->id ? 'selected' :''}} class="form-control"  >{{convertLanguageToEnglish($partner->name)}} </option>
                                                    @endforeach
                                                </select>

                                            </div>



                                            <!---------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    number of constructions       </label>
                                                <input type="number" class="form-control" name="number_of_constructions"  value="{{$construction->number_of_constructions}}" >
                                            </div>



                                            <!---------------->
                                                <div class="mb-3">
                                                    <label class="col-form-label">     is on main page           </label>
                                                    <select class="form-control" name="is_on_main_page">
                                                        <option {{$construction->is_on_main_page  == null ? 'selected' : ''}} value=""> not on main page </option>
                                                        <option  {{$construction->is_on_main_page  == 1 ? 'selected' : ''}}  value="1"> is on main page </option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                <label class="col-form-label">    power       </label>
                                                <input type="number" class="form-control" name="power" step="any"  value="{{$construction->power}}" >
                                            </div>



                                            <!---------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    duration time       </label>
                                                <input type="number" step="any" class="form-control" name="duration_time"  value="{{$construction->duration_time}}" >
                                            </div>





                                            <!---------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    image       </label>
                                                <input type="file" class="form-control" name="image"    >
                                            </div>



                                            <!---------------->

                                            <!---------------->
                                            <div class="mb-3">
                                                <label class="col-form-label">    video       </label>
                                                <input type="file" class="form-control" name="video"     >
                                            </div>



                                            <!---------------->


                                            <div class="card-footer">
                                                <button class="btn btn-primary">Submit</button>
                                                <a  href="{{route('construction.index')}}" class="btn btn-secondary">Cancel</a>
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

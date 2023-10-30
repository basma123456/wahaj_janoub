@extends('admin.app')

@section('content')
         <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Construction  s</h3>
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
                                          <h5> construction   </h5>
                                      </div>
                                      <div class="card-body">
                                          <form action="{{route('construction.store' )}}" method="post" class="theme-form mega-form" enctype="multipart/form-data" >
                                              @csrf
                                               <h6>construction       Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title  arabic  </label>
                                                  <input value="" class="form-control" name="title_ar" type="text" placeholder=" title   arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title  english  </label>
                                                  <input value="" class="form-control" name="title_en" type="text" placeholder=" title   english">
                                              </div>



                                              <div class="mb-3">
                                                  <label class="col-form-label">    desc  arabic  </label>
                                                  <input value="" class="form-control" name="description_ar" type="text" placeholder=" description   arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    desc  english  </label>
                                                  <input value="" class="form-control" name="description_en" type="text" placeholder=" description   english">
                                              </div>



                                              <!----------------->
                                              <div class="mb-3">
                                                  <label class="col-form-label">    region  arabic  </label>
                                                  <input value="" class="form-control" name="region_ar" type="text" placeholder=" region   arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    region  english  </label>
                                                  <input value="" class="form-control" name="region_en" type="text" placeholder=" region   english">
                                              </div>

                                              <!---------------->

                                              <!----------------->
                                              <div class="mb-3">
                                                  <label class="col-form-label">    city  arabic  </label>
                                                  <input value="" class="form-control" name="city_ar" type="text" placeholder=" city   arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    city  english  </label>
                                                  <input value="" class="form-control" name="city_en" type="text" placeholder=" city   english">
                                              </div>

                                              <!---------------->
                                              <div class="mb-3">
                                                  <label class="col-form-label">    construction classification     </label>
                                                  <select class="form-control" name="construction_classifications_id"  >
                                                      @forelse($classifications as $classification)
                                                          <option   value="{{$classification->id}}">{{$classification->id}}</option>
                                                      @empty
                                                      @endforelse
                                                  </select>
                                              </div>


                                              <!---------------->
                                              <div class="mb-3">
                                                  <label class="col-form-label">           </label>
                                                  <input type="number" class="form-control" name="partner_id"  value="" >
                                              </div>


                                              <div class="mb-3">
                                                  <label class="col-form-label">    partner     </label>
                                                  <select class="form-control" name="contracting"  >
                                                      @forelse($partners as $partner)
                                                          <option   value="{{$partner->id}}">{{convertLanguageToArabic($partner->name)}} / {{convertLanguageToEnglish($partner->name)}}</option>
                                                      @empty
                                                      @endforelse
                                                  </select>
                                              </div>

                                              <!---------------->
                                              <div class="mb-3">
                                                  <label class="col-form-label">    number of constructions       </label>
                                                  <input type="number" class="form-control" name="number_of_constructions"  value="" >
                                              </div>



                                              <!---------------->
                                              <!---------------->
                                              <div class="mb-3">
                                                  <label class="col-form-label">     is on main page           </label>
                                                    <select class="form-control" name="is_on_main_page">
                                                        <option value=""> not on main page </option>
                                                        <option value="1"> is on main page </option>

                                                    </select>
                                              </div>



                                              <!---------------->

                                              <div class="mb-3">
                                                  <label class="col-form-label">    power       </label>
                                                  <input type="number" class="form-control" name="power" step="any"  value="" >
                                              </div>



                                              <!---------------->
                                              <div class="mb-3">
                                                  <label class="col-form-label">    duration time       </label>
                                                  <input type="number" step="any" class="form-control" name="duration_time"  value="" >
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


                                              <div class="card-footer">
                                                  <button class="btn btn-primary">Submit</button>
                                                  <a  href="{{route('construction.index')}}" class="btn btn-secondary">Cancel</a>
                                              </div>

                                          </form>

                                          {{--                                          <form action="{{route('construction.store')}}" method="post" class="theme-form mega-form"  >--}}
{{--                                          @csrf--}}
{{--                                              <h6>construction     Information</h6>--}}
{{--                                              <div class="mb-3">--}}
{{--                                                  <label class="col-form-label">    name  arabic  </label>--}}
{{--                                                  <input class="form-control" name="name_ar" type="text" placeholder=" name   arabic">--}}
{{--                                              </div>--}}
{{--                                              <div class="mb-3">--}}
{{--                                                  <label class="col-form-label">    name  english  </label>--}}
{{--                                                  <input class="form-control" name="name_en" type="text" placeholder=" name   english">--}}
{{--                                              </div>--}}




{{--                                              <div class="card-footer">--}}
{{--                                                  <button class="btn btn-primary">Submit</button>--}}
{{--                                                  <a  href="{{route('construction.index')}}" class="btn btn-secondary">Cancel</a>--}}
{{--                                              </div>--}}

{{--                                           </form>--}}
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

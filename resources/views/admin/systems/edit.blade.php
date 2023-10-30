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
                                          <h5> Systems     </h5>
                                      </div>
                                      <div class="card-body">
                                          @if($system->image)
                                          <img alt="image"  class="d-inline-block" width="100" height="200" src="{{asset('public/images/systems/' . $system->image)}}" />
                                          @endif
                                          @if($system->video)
                                           <video  class="d-inline-block"  width="320" height="240" autoplay>
                                              <source src="{{asset('public/videos/systems/' . $system->video)}}" type="video/mp4">
                                              <source src="{{asset('public/videos/systems/' . $system->video)}}" type="video/ogg">
                                              Your browser does not support the video tag.
                                          </video>
                                          @endif
                                          <form action="{{route('systems.update' , $system->id)}}" method="post" enctype="multipart/form-data" class="theme-form mega-form">
                                           @method('put')
                                           @csrf
                                               <h6>Systems   </h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title  arabic  </label>
                                                  <input class="form-control" value="{{convertLanguageToArabic($system->title)}}" name="title_ar" type="text" placeholder=" title arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title  english  </label>
                                                  <input class="form-control" value="{{convertLanguageToEnglish($system->title)}}" name="title_en" type="text" placeholder=" title english">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    description  arabic  </label>
                                                  <textarea class="form-control"  name="description_ar"  > {{convertLanguageToArabic($system->description)}}</textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    description  english  </label>
                                                  <textarea class="form-control"  name="description_en"  > {{convertLanguageToEnglish($system->description)}}</textarea>
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">image    </label>
                                                  <input class="form-control" name="image" type="file" placeholder=" image">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">video    </label>
                                                  <input class="form-control" name="video" type="file" placeholder=" video">
                                              </div>


                                              <div class="card-footer">
                                                  <button class="btn btn-primary">Submit</button>
                                                  <a href="{{route('systems.index')}}" class="btn btn-secondary">Cancel</a>
                                              </div>

                                           </form>
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

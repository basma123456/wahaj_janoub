@extends('admin.app')

@section('content')

    <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>mainProducts  </h3>
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
                                          <h5> mainProducts  </h5>
                                      </div>
                                      <div class="card-body">
                                          @isset($mainPage)
                                          <form action="{{route('main-page.update' , $mainPage->id)}}" method="post" enctype="multipart/form-data" class="theme-form mega-form">
                                             @csrf
                                              @method('put')

                                              <h6>Main Page Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">main title arabic </label>
                                                  <input value="{{convertLanguageToArabic($mainPage->main_title)}}" name="main_title_ar"   class="form-control" type="text" placeholder="main title arabic  ">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">title english  </label>
                                                  <input value="{{convertLanguageToEnglish($mainPage->main_title)}}" name="main_title_en" class="form-control" type="text" placeholder="main title english  ">
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">main description arabic </label>
                                                  <textarea   rows="5" class="form-control"  name="main_description_ar">{{convertLanguageToArabic($mainPage->main_desc)}} </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">main description  english </label>
                                                  <textarea   rows="5" class="form-control"  name="main_description_en"> {{convertLanguageToEnglish($mainPage->main_desc)}}</textarea>
                                              </div>



                                              <div class="mb-3">
                                                  <label class="col-form-label">about_us_desc   arabic </label>
                                                  <textarea   rows="5" class="form-control"  name="about_us_desc_ar">{{convertLanguageToArabic($mainPage->about_us_desc)}} </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">main description  english </label>
                                                  <textarea   rows="5" class="form-control"  name="about_us_desc_en"> {{convertLanguageToEnglish($mainPage->about_us_desc)}}</textarea>
                                              </div>

                                              {{--                                              --}}
{{--                                              <div class="mb-3">--}}
{{--                                                  <label class="col-form-label">right bottom description arabic </label>--}}
{{--                                                  <textarea   rows="5" class="form-control"  name="right_bottom_desc_ar">{{convertLanguageToArabic($mainPage->right_bottom_desc)}} </textarea>--}}
{{--                                              </div>--}}
{{--                                              <div class="mb-3">--}}
{{--                                                  <label class="col-form-label">right_bottom_desc english </label>--}}
{{--                                                  <textarea   rows="5" class="form-control"  name="right_bottom_desc_en"> {{convertLanguageToEnglish($mainPage->right_bottom_desc)}}</textarea>--}}
{{--                                              </div>--}}



                                              <hr class="mt-4 mb-4">

                                              <h6>more Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">Logo  </label>
                                                  <input name="logo"  class="form-control" type="file"  >
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">File  </label>
                                                  <input name="file"  class="form-control" type="file"  >
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">email  </label>
                                                  <input class="form-control" value="{{$mainPage->email}}" name="email" type="email"  placeholder="email">
                                              </div>

                                              <hr class="mt-4 mb-4">
                                              <h6 class="pb-3 mb-0">Links</h6>

                                              <div class="d-flex">
                                                  <div class="col-auto">
                                                      <input class="form-control" value="{{$mainPage->facebook_link}}"  name="facebook_link"   placeholder="facebook link ">
                                                  </div>
                                                  <div class="col-auto">
                                                      <input class="form-control" name="instagram_link"  value="{{$mainPage->instagram_link}}"    placeholder="instagram link">
                                                  </div>
                                                  <div class="col-auto">
                                                      <input class="form-control" placeholder="twitter link"  value="{{$mainPage->twitter_link}}"    name="twitter_link">
                                                  </div>
                                                  <div class="col-auto">
                                                      <input class="form-control" placeholder="linked in link"  value="{{$mainPage->linkedin_link}}"     name="linkedin_link">
                                                  </div>

                                                  <div class="col-auto">
                                                      <input class="form-control" placeholder="Contact us link" value="{{$mainPage->contact_us_link}}"      name="contact_us_link">
                                                  </div>
                                                  <div class="col-auto">
                                                      <input class="form-control" placeholder=" whatsapp number"  value="{{$mainPage->whatsapp}}"     name="whatsapp">
                                                  </div>


                                                  <br>

                                                  {{--                                                  'num_of_projects' =>$request->num_of_projects,--}}
{{--                                                  'num_of_employees' =>$request->num_of_employees,--}}
{{--                                                  'num_of_customers' =>$request->num_of_customers,--}}
{{--                                                  'num_of_mega_watts' =>$request->num_of_mega_watts,--}}


                                                  <br>
                                                  <br>
                                                  <br>
                                              </div>
                                              <br>
                                              <h6 class="pb-3 mb-0">numbers</h6>

                                              <div class="d-flex">

                                                  <div class="col-auto">
                                                      <label> projects number</label>
                                                      <input class="form-control"   type="number" step="any"   placeholder="  projects number"  value="{{$mainPage->num_of_projects}}"     name="num_of_projects">
                                                  </div>
                                                  <div class="col-auto">
                                                      <label> employees number</label>
                                                      <input class="form-control"   type="number" step="any"   placeholder=" employees number"  value="{{$mainPage->num_of_employees}}"     name="num_of_employees">
                                                  </div>
                                                  <div class="col-auto">
                                                      <label> customers number</label>
                                                      <input class="form-control"   type="number" step="any"   placeholder=" customers number"  value="{{$mainPage->num_of_customers}}"     name="num_of_customers">
                                                  </div>
                                                  <div class="col-auto">
                                                      <label> mega watts number</label>
                                                      <input class="form-control"   type="number" step="any"   placeholder=" mega watts number"  value="{{$mainPage->num_of_mega_watts}}"     name="num_of_mega_watts">
                                                  </div>
                                              </div>


                                              <br>
                                              <div class="card-footer">
                                                  <button class="btn btn-primary">Submit</button>
                                                  <a href="{{route('main-page.index' )}}" class="btn btn-secondary">Cancel</a>
                                              </div>

                                           </form>
                                          @endisset

                                      </div>
                                  </div>
                              </div>
{{--                              <div class="col-xl-12">--}}
{{--                                  <div class="card">--}}
{{--                                      <div class="card-header pb-0">--}}
{{--                                          <h5>Inline Form</h5><span>Use<code>.form-inline</code>class in the form to style with inline fields.</span>--}}
{{--                                      </div>--}}
{{--                                      <div class="card-body">--}}
{{--                                          <h6>Inline Form with Label</h6>--}}
{{--                                          <form class="row theme-form mt-3">--}}
{{--                                              <div class="col-xxl-4 mb-3 d-flex">--}}
{{--                                                  <label class="col-form-label pe-2" for="inputInlineUsername">Username</label>--}}
{{--                                                  <input class="form-control" id="inputInlineUsername" type="text" name="inputUsername" placeholder="Username" autocomplete="off">--}}
{{--                                              </div>--}}
{{--                                              <div class="col-xxl-4 mb-3 d-flex">--}}
{{--                                                  <label class="col-form-label pe-2" for="inputInlinePassword">Password</label>--}}
{{--                                                  <input class="form-control" id="inputInlinePassword" type="password" name="inputPassword" placeholder="Password" autocomplete="off">--}}
{{--                                              </div>--}}
{{--                                              <div class="col-xxl-4 mb-3 d-flex">--}}
{{--                                                  <button class="btn btn-primary">Login</button>--}}
{{--                                              </div>--}}
{{--                                          </form>--}}
{{--                                          <h6>Inline Form without Label</h6>--}}
{{--                                          <form class="row row-cols-sm-3 theme-form mt-3 form-bottom">--}}
{{--                                              <div class="mb-3 d-flex">--}}
{{--                                                  <input class="form-control" type="text" name="inputUnlabelUsername" placeholder="Username" autocomplete="off">--}}
{{--                                              </div>--}}
{{--                                              <div class="mb-3 d-flex">--}}
{{--                                                  <input class="form-control" id="inputUnlabelPassword" type="password" name="inputPassword" placeholder="Password" autocomplete="off">--}}
{{--                                              </div>--}}
{{--                                              <div class="mb-3 d-flex">--}}
{{--                                                  <button class="btn btn-secondary">Login</button>--}}
{{--                                              </div>--}}
{{--                                          </form>--}}
{{--                                      </div>--}}
{{--                                  </div>--}}
{{--                              </div>--}}
                          </div>
                      </div>
                      <!-----------------end ----------------->
                  </div>
              </div>
              <!-- Container-fluid Ends-->

          </div>
        </div>
@endsection

@extends('admin.app')

@section('content')
         <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>systems  </h3>
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
                                          <h5> systems  </h5>
                                      </div>
                                      <div class="card-body">
                                          <form action="{{route('systems.store')}}" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                          @csrf
                                              <h6>system   Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title  arabic  </label>
                                                  <input class="form-control" name="title_ar" type="text" placeholder=" title arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title  english  </label>
                                                  <input class="form-control" name="title_en" type="text" placeholder=" title english">
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
                                                  <a  href="{{route('systems.index')}}" class="btn btn-secondary">Cancel</a>
                                              </div>

                                           </form>
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

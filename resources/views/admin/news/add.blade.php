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
                                          <h5> newss  </h5>
                                      </div>
                                      <div class="card-body">
                                          <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data" class="theme-form mega-form">
                                             @csrf

                                              <h6>News Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">image   </label>
                                                  <input name="image" class="form-control" type="file" >
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">date   </label>
                                                  <input name="date" class="form-control" type="date" >
                                              </div>




                                              <div class="mb-3">
                                                  <label class="col-form-label">title arabic </label>
                                                  <input name="title_ar" class="form-control" type="text" placeholder="title arabic  ">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">title english  </label>
                                                  <input name="title_en" class="form-control" type="text" placeholder="title english  ">
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">description arabic </label>
                                                  <textarea   rows="5" class="form-control"  name="description_ar"> </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">description english </label>
                                                  <textarea   rows="5" class="form-control"  name="description_en"> </textarea>
                                              </div>





                                           <div class="card-footer">
                                              <button class="btn btn-primary">Submit</button>
                                              <a href="{{route('news.index')}}" class="btn btn-secondary">Cancel</a>
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

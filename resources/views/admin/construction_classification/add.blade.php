@extends('admin.app')

@section('content')
         <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Construction classifications</h3>
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
                                          <h5> construction classification </h5>
                                      </div>
                                      <div class="card-body">
                                          <form action="{{route('construction-classification.store')}}" method="post" class="theme-form mega-form"  >
                                          @csrf
                                              <h6>construction classification   Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    name  arabic  </label>
                                                  <input class="form-control" name="name_ar" type="text" placeholder=" name   arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    name  english  </label>
                                                  <input class="form-control" name="name_en" type="text" placeholder=" name   english">
                                              </div>




                                              <div class="card-footer">
                                                  <button class="btn btn-primary">Submit</button>
                                                  <a  href="{{route('construction-classification.index')}}" class="btn btn-secondary">Cancel</a>
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

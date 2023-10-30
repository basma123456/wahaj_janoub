@extends('admin.app')

@section('content')
         <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Products  </h3>
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
                                          <h5> Product classification   </h5>
                                      </div>
                                      <div class="card-body">
                                          <form action="{{route('product_classification.update' , $product_classification->id)}}" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                           @method('put')
                                           @csrf
                                               <h6>Product classification Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    Name  arabic  </label>
                                                  <input class="form-control" value="{{json_decode($product_classification->name , true)['ar']}}" name="name_ar" type="text" placeholder=" Name arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    Name  english  </label>
                                                  <input class="form-control" value="{{json_decode($product_classification->name , true)['en']}}" name="name_en" type="text" placeholder=" Name english">
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">image    </label>
                                                  <input class="form-control" name="image" type="file" placeholder=" image">
                                              </div>

                                              <div class="card-footer">
                                                  <button class="btn btn-primary">Submit</button>
                                                  <button class="btn btn-secondary">Cancel</button>
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

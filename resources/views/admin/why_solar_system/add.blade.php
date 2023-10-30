@extends('admin.app')

@section('content')
         <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>about us  </h3>
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
                                          <h5> about us  </h5>
                                      </div>
                                      <div class="card-body">
                                          <form action="{{route('why-solar-system.store')}}" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                          @csrf
                                              <h6>system   Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title_one  arabic  </label>
                                                  <input class="form-control" name="title_one_ar" type="text" placeholder=" title one arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    title_one  english  </label>
                                                  <input class="form-control" name="title_one_en" type="text" placeholder=" title one english">
                                              </div>



                                              <div class="mb-3">
                                                  <label class="col-form-label">    description_one  arabic  </label>
                                                  <textarea   rows="5" class="form-control" name="description_one_ar" > </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    description_one  english  </label>
                                                  <textarea   rows="5" class="form-control" name="description_one_en"  > </textarea>
                                              </div>
















                                              <div class="mb-3">
                                                  <label class="col-form-label">    last_h  arabic  </label>
                                                  <input class="form-control" name="last_h_ar" type="text" placeholder=" last_h   arabic">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    last_h  english  </label>
                                                  <input class="form-control" name="last_h_en" type="text" placeholder=" last_h   english">
                                              </div>






                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text  arabic  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_ar" > </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text  english  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_en"  > </textarea>
                                              </div>


                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_2  arabic  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_2_ar" > </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_2  english  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_2_en"  > </textarea>
                                              </div>


                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_3  arabic  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_3_ar" > </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_3  english  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_3_en"  > </textarea>
                                              </div>


                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_4  arabic  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_4_ar" > </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_4  english  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_4_en"  > </textarea>
                                              </div>


                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_5  arabic  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_5_ar" > </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_5  english  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_5_en"  > </textarea>
                                              </div>

                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_6  arabic  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_6_ar" > </textarea>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    accordion_text_6  english  </label>
                                                  <textarea   rows="5" class="form-control" name="accordion_text_6_en"  > </textarea>
                                              </div>







                                              <div class="mb-3">
                                                  <label class="col-form-label">image_one    </label>
                                                  <input class="form-control" name="image_one" type="file" placeholder=" image_one">
                                              </div>


                                              <div class="card-footer">
                                                  <button class="btn btn-primary">Submit</button>
                                                  <a  href="{{route('why-solar-system.index')}}" class="btn btn-secondary">Cancel</a>
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

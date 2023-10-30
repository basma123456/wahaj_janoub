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
                                          <h5> construction images </h5>
                                      </div>
                                      <div class="card-body">
                                          <form action="{{route('construction-image.store' , $id)}}" method="post" enctype="multipart/form-data" class="theme-form mega-form"  >
                                          @csrf
                                              <h6>construction images   Information</h6>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    image    </label>
                                                  <input class="form-control" name="image[]" type="file" >
                                              </div>
                                              <div class="mb-3">
                                                  <label class="col-form-label">    image     </label>
                                                  <input class="form-control" name="image[]" type="file"  >
                                              </div>




                                              <div class="card-footer">
                                                  <button class="btn btn-primary">Submit</button>
                                                  <a  href="{{route('construction-image.index' , $id)}}" class="btn btn-secondary">Cancel</a>
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

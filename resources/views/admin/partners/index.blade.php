@extends('admin.app')

@section('content')

    <div class="page-body-wrapper horizontal-menu">
          <div class="page-body">
             <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row construction-cards">
                    <div class="col-md-12 construction-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 p-0">
                                    <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>
                                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a></li>
                                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Done</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 p-0">
                                    <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="{{route('partners.create')}}"> <i data-feather="plus-square"> </i>Create New Construction classification</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                        <div class="row">
                                             @if(!empty($partners))
                                            @foreach($partners as $partner)
                                                <div class="col-xxl-4 col-lg-6">

                                                    <div class="construction-box"><a  href="{{route('partners.edit',$partner->id)}}" class="badge badge-primary">Edit</a>
                                                        <h6> {{convertLanguageToEnglish($partner->name) ?? ''}}  <br> {{convertLanguageToArabic($partner->name) ?? ''}}  </h6>
                                                     </div>
                                                </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
      </div>

@endsection

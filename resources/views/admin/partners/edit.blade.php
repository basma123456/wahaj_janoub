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
                                        <h5> Partner </h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('partners.update' , $partner->id)}}" method="post" class="theme-form mega-form"  >
                                            @csrf
                                            @method('put')
                                            <h6>Partner   Information</h6>
                                            <div class="mb-3">
                                                <label class="col-form-label">    name  arabic  </label>
                                                <input value="{{convertLanguageToArabic($partner->name)}}" class="form-control" name="name_ar" type="text" placeholder=" name   arabic">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">    name  english  </label>
                                                <input value="{{convertLanguageToEnglish($partner->name)}}" class="form-control" name="name_en" type="text" placeholder=" name   english">
                                            </div>




                                            <div class="card-footer">
                                                <button class="btn btn-primary">Submit</button>
                                                <a  href="{{route('partners.index')}}" class="btn btn-secondary">Cancel</a>
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

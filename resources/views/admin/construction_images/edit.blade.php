@extends('admin.app')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Construction Images</h3>
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
                                        <h5> construction images </h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('construction-image.update' , [1 , $bigId])}}" enctype="multipart/form-data" method="post" class="theme-form mega-form"  >
                                            @csrf
                                            @method('put')
                                            <h6>construction classification   images</h6>
                                            @foreach($images as $image)
                                                <div class="mb-3">
                                                    <img width="200" height="100" src="{{asset('public/images/construction_images/' . $image->image)}}">
                                                    <label class="col-form-label">    image     </label>
                                                    <input   class="form-control" name="image[]" type="file" >
                                                    <input type="hidden" name="id[]" value="{{$image->id}}">
                                                </div>
                                             @endforeach


                                            <span class="btn btn-success" onclick="addNew()">add</span>


                                             <div id="new_content">

                                            </div>





                                            <div class="card-footer">
                                                <button class="btn btn-primary">Submit</button>
                                                <a  href="{{route('construction.index' )}}" class="btn btn-secondary">Cancel</a>
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

    <script>
        function addNew() {
     const line =  ' <div class="mb-3"> <label class="col-form-label">    image     </label> <input   class="form-control" name="image_new[]" type="file" ><span onclick="deleteRow(this)" class="btn btn-danger btn-sm">delete</span> </div>';

      document.getElementById('new_content').innerHTML += line;
     //kk
        }

        function deleteRow(obj) {
            $(obj).parent().remove();
        }
    </script>
@endsection

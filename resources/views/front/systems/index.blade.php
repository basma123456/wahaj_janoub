@extends('front.includes.app')
@section('content')
    <div style="
background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/solpaneler-1.jpg')}});
width: 100%;
padding-bottom: 100px;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
position: relative;">

@include('front.includes.nav')

    <div class="text-center">
        <h2 class="fw-bold text-white mt-4">    @lang('systems.title')</h2>
    </div>
</div>


<div class="text-center py-5">
    <div class="container">
        <div class="system-header">
            <h2> @lang('systems.title')</h2>
            <p> @lang('systems.desc')</p>
        </div>
        <div class="row">
            @forelse($systems as $system)
            <div class="col-md-4 mt-3 ">
                <div class="system-card" data-aos="zoom-in-up" data-aos-delay="500">
                    <div class="system-card-img">
{{--                        <img src="{{asset('public/content/assets/images/Solar-Systems-6.jpg')}}" alt="">--}}
                        <img src="{{asset('public/images/systems/'.$system->image)}}" alt="">


                    </div>
                    <div class="system-content text-center p-3">
                        <h3>{{convertLanguageToLocale($system->title)}}</h3>
                        <p>
                        {{convertLanguageToLocale($system->description)}}
                        </p>
                        <a href="{{url('systems-details/' . $system->id)}}" class="btn btn-green"> <i class="fa-solid fa-sliders px-1"></i>
                            @lang('systems.details')
                        </a>
                    </div>
                </div>
            </div>
            @empty
                @endforelse
         </div>
    </div>
</div>
<div class="system-container py-5">
    <div class="col-12 text-center pt-5 pb-3">
        <h2 class="fw-bold title">     @lang('quotation.ask_about_quotation')</h2>
    </div>
    <div class="system-form p-3">
        <div class="row p-3">

            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.name') </label>
                    <span class="text-danger"> * </span>
                    <input type="text" class="form-control  p-3 form-input" id="" required >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="" class="form-label">    @lang('quotation.mobile') </label>
                    <span class="text-danger"> * </span>
                    <input type="text" class="form-control p-3 form-input" id="" required>
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="mb-3">
                    <label for="" class="form-label"> @lang('quotation.email') </label>
                    <span class="text-danger"> * </span>
                    <input type="email" class="form-control p-3 form-input" id="" required>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label form-input"> @lang('quotation.message')</label>

                    <textarea class="form-control" id="" rows="4"></textarea>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-send px-5 py-2" href=" "> @lang('quotation.send')</a>
            </div>

        </div>
    </div>
</div>




 @endsection

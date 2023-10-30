@extends('front/includes/app')
@section('content')
    <div style="
        background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/solpaneler-1.jpg')}});
        width: 100%;
        height: 40vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;">

        @include('front/includes/nav')

        <div class="text-center">
            <h2 class="fw-bold text-white mt-4">    No data   </h2>
            <p class="directing pt-4"><a href="{{url('/')}}"> <i class="fa-solid fa-house"> </i></a> <span> > </span> </p>
        </div>
    </div>
    <div class="project-details py-5">
        <div class="container py-5">
            <div class="row">


                <h2>No data found here</h2>
            </div>
        </div>
    </div>













@endsection

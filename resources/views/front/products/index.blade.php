@extends('front.includes.app')
@section('content')


    <div style="
        background: linear-gradient(to bottom, rgba(1, 11, 86, 0.907) 0%, rgba(0, 10, 66, 0.907) 0%), url({{asset('public/content/assets/images/panels.jpg')}});
        width: 100%;
        padding: 50px 0px;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;">

    @include('front/includes/nav')

    <div class="text-center">
{{--        <h2 class="fw-bold text-white mt-4">المحولات المتصلة بالشبكة</h2>--}}

        <h2 class="fw-bold text-white mt-4">    {{convertLanguageToLocale($classificationName) }}</h2>

        <p class="directing pt-4"><a  href="{{url('/')}}"> <i class="fa-solid fa-house"> </i></a> <span> > </span> <span> <a
                    href="{{route('product_classifications_list.show')}}">@lang('products_list.store')</a> </span> <span> > </span> <span> <a href="#">
                               {{convertLanguageToLocale($classificationName) }}  </a> </span> </p>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mt-3">
            <span>    @lang('products_list.show_all') </span>
        </div>
        <div class="col-md-5 mt-3"></div>
        <div class="col-md-3 mt-3">
{{--            'default_order' => 'Default Order  ',--}}
{{--            'sort_by_popularity' => '    Sort By : Popularity',--}}
{{--            'sort_by_rating' => 'Sort By : Rating    ',--}}
{{--            'sort_by_newest' => 'Sort by : newest    ',--}}
{{--            'from_low_to_high' => ' Sort By : Lowest price to high    ',--}}
{{--            'from_high_to_low' => ' Sort By : Highest Price to Lowest    ',--}}


            <!-----------------options----------------------->
            <select class="form-select" aria-label="Default select example">
                <option selected> @lang('options.default_order') </option>
                <option value="1">  @lang('options.sort_by_popularity')</option>
                <option value="2"> @lang('options.sort_by_rating') </option>
                <option value="3">  @lang('options.sort_by_newest')</option>
                <option value="4">  @lang('options.from_low_to_high')</option>
                <option value="5">  @lang('options.from_high_to_low')</option>


            </select>
            <!-----------------options----------------------->

        </div>

        @forelse($products as $product)
        <div class="col-lg-4 col-md-6 col-12 mt-3">

            <div class="store-card text-center">
                <a href="{{route('products_show.front' , $product->id)}}">



                    <img src="{{asset('public/images/products/'. $product->image)}}" alt="">
                    <h5>       {{convertLanguageToLocale($product->title)}}     </h5>

                    <div class="d-flex justify-content-center top-border">
                        <div class=" price p-2">
                            <p class="text-center">
                                <a href="{{route('products_show.front' , $product->id)}}">  @lang('products_list.show_more')</a>
                            </p>
                        </div>
                    </div>

                </a>
            </div>

        </div>

        @empty
        @endforelse











    </div>
</div>




@endsection

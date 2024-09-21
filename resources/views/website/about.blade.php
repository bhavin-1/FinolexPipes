@extends('layouts.web')
@section('title', 'About')
@section('content')
<div class="dlab-bnr-inr overlay-black-middle text-center bg-pt header-bg-img">
    <div class="container">
        <div class="dlab-bnr-inr-entry text-center">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row ">
                <ul class="list-inline">
                    <li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><a href="{{route('home')}}">Home</a></li>
                    <li class="wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">About</li>
                </ul>
                <h2 class="text-white wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms" data-wow-delay="0.5s">About</h2>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>


@foreach($about as $key => $about)  
@if ($key == 0)
    <section class="py-2 py-md-3 py-lg-4  ">
    <div class="container">
        <div class="row aline-center justify-content-between ">
            <div class="col-12 col-lg-6  content-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img class="img-fluid" src="{{asset('upload/about/'.$about->image)}}">
            </div>
            <div class="col-12 col-lg-6 aline-center ">
            <!-- <div class="col-12 col-lg-6 aline-center pb-0 pb-sm-0 pb-md-1 pb-lg-4 pb-xl-4 p-1 p-sm-2 p-md-3 p-lg-4 p-xl-5"> -->
                <div class="ft-section-title headline pera-content wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <span class="sub-title">{{$about->title}}</span>
                </div>
                <h3 class="text-start mb-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Welcome To Ambition Pipes</h3>
                <p class="mb-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    {{$about->description}}
                </p>
            </div>
            <!-- <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0"> -->
            <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <p>
                    {!! $about->long_description !!}
                </p>
            </div>
        </div>
    </div>
</section>
@else
    <section class="py-4 @if(($key == 1) || ($key == 3) || ($key == 5) || ($key == 7)) order-md-0 secton-bg @endif">
    <div class="container">
        <div class="row align-center">
            <div class="col-12 col-md-6 col-lg-6 content-center @if(($key == 0) || ($key == 2) || ($key == 4) || ($key == 6)) order-md-0 order-lg-0  @else order-lg-1 order-md-1 @endif wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img class="img-fluid text-center" src="{{asset('upload/about/'.$about->image)}}">
            </div>
            <div class="col-12 col-md-6 col-lg-6 text-justify @if(($key == 0) || ($key == 2) || ($key == 4) || ($key == 6))  order-lg-1 @else order-lg-0 @endif wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <h4 class="contact-title title-contact">{{$about->title}}</h4>
                <p>{{$about->description}}</p>
            </div>
        </div>
    </div>
</section>
@endif  
@endforeach
{{-- @foreach ($about as $index => $about )
    
@if ($index == 0)
    <section class="py-2 py-md-3 py-lg-4">
    <div class="container">
        <div class="row aline-center justify-content-between ">
            <div class="col-12 col-lg-6  content-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img class="img-fluid" src="{{asset('upload/about/'.$about->image)}}">
            </div>
            <div class="col-12 col-lg-6 aline-center ">
            <!-- <div class="col-12 col-lg-6 aline-center pb-0 pb-sm-0 pb-md-1 pb-lg-4 pb-xl-4 p-1 p-sm-2 p-md-3 p-lg-4 p-xl-5"> -->
                <div class="ft-section-title headline pera-content wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <span class="sub-title">{{$about->title}}</span>
                </div>
                <h3 class="text-start mb-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Welcome To Radix Technocast</h3>
                <p class="mb-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    {{$about->description}}
                </p>
            </div>
            <!-- <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0"> -->
            <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <p>
                    {!! $about->long_description !!}
                </p>
            </div>
        </div>
    </div>

</section>
@elseif ($index == 1 || $index == 3)
<section class="py-2 py-md-3 py-lg-4" style="background-color: rgba(0, 128, 0, 0.205)">
    <div class="container">
        <div class="row aline-center justify-content-between ">
            <div class="col-12 col-lg-6  content-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img class="img-fluid" src="{{asset('upload/about/'.$about->image)}}">
            </div>
            <div class="col-12 col-lg-6 aline-center ">
            <!-- <div class="col-12 col-lg-6 aline-center pb-0 pb-sm-0 pb-md-1 pb-lg-4 pb-xl-4 p-1 p-sm-2 p-md-3 p-lg-4 p-xl-5"> -->
                <div class="ft-section-title headline pera-content wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <span class="sub-title">{{$about->title}}</span>
                </div>
                <h3 class="text-start mb-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Welcome To Radix Technocast</h3>
                <p class="mb-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    {{$about->description}}
                </p>
            </div>
            <!-- <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0"> -->
            <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <p>
                    {!! $about->long_description !!}
                </p>
            </div>
        </div>
    </div>
</section>
@elseif ($index == 2 || $index == 4)
<section class="py-2 py-md-3 py-lg-4" style="background-color: rgba(0, 128, 0, 0.205)">
    <div class="container">
        <div class="row aline-center justify-content-between ">
            <div class="col-12 col-lg-6  content-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img class="img-fluid" src="{{asset('upload/about/'.$about->image)}}">
            </div>
            <div class="col-12 col-lg-6 aline-center ">
            <!-- <div class="col-12 col-lg-6 aline-center pb-0 pb-sm-0 pb-md-1 pb-lg-4 pb-xl-4 p-1 p-sm-2 p-md-3 p-lg-4 p-xl-5"> -->
                <div class="ft-section-title headline pera-content wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <span class="sub-title">{{$about->title}}</span>
                </div>
                <h3 class="text-start mb-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Welcome To Radix Technocast</h3>
                <p class="mb-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    {{$about->description}}
                </p>
            </div>
            <!-- <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0"> -->
            <div class="col-12 pt-0 pt-sm-0 pt-md-0 pt-lg-2 pt-xl-0 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <p>
                    {!! $about->long_description !!}
                </p>
            </div>
        </div>
    </div>
</section>
@endif

@endforeach --}}
@endsection
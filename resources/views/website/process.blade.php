@extends('layouts.web')
@section('title', 'Process')
@section('content')
<div class="dlab-bnr-inr overlay-black-middle text-center bg-pt header-bg-img ">
    <div class="container">
        <div class="dlab-bnr-inr-entry text-center">
            <div class="breadcrumb-row ">
                <ul class="list-inline">
                    <li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" data-wow-delay="0.1s"><a href="{{route('home')}}">Home</a></li>
                    <li class="wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">Application</li>
                </ul>
                <h2 class="text-white wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">Application</h2>
            </div>
        </div>
    </div>
</div>

<section id="ft-thx-work-process" class="ft-thx-work-process-section position-relative bg-map pb-0">
    <!-- <span class="ft-thx-work-process-shape position-absolute"></span> -->
    <div class="container">
        <div class="pr-cor-section-title  pera-content middle-align text-center  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <h3 class="mb-1">Application</h3>
        </div>
        <div class="td-sv-work-step-content position-relative">
            <span class="td-sv-ws-arrow1 position-absolute"><img src="{{asset('website/image/ars1.png')}}" alt=""></span>
            <span class="td-sv-ws-arrow2 position-absolute"><img src="{{asset('website/image/ars2.png')}}" alt=""></span>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="td-sv-work-step-inner-item text-center">
                        <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('website/image/Plumbing.png')}}">
                        </div>
                        <div class="td-sv-work-step-text pera-content">
                            <h4>Plumbing</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="td-sv-work-step-inner-item text-center">
                        <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('website/image/Sewerage.png')}}">
                        </div>
                        <div class="td-sv-work-step-text pera-content">
                            <h4>Sewerage</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="td-sv-work-step-inner-item text-center">
                        <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('website/image/sustainable.png')}}">
                        </div>
                        <div class="td-sv-work-step-text pera-content">
                            <h4>Residential </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="td-sv-work-step-content position-relative">
            <span class="td-sv-ws-arrow3 position-absolute"><img src="{{asset('website/image/ars1.png')}}" alt=""></span>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="td-sv-work-step-inner-item text-center">
                        <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('website/image/Agriculture.png')}}">
                        </div>
                        <div class="td-sv-work-step-text pera-content">
                            <h4>Agriculture</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="td-sv-work-step-inner-item text-center">
                        <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('website/image/Industrial.png')}}">
                        </div>
                        <div class="td-sv-work-step-text pera-content">
                            <h4>Industrial</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row py-1 pt-3">
            <div class="col-12">
                <h3 class="text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">{{$process->title}}</h3>
                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! $process->description !!}</p>
            </div>
        </div>
    </div>
</section>
@foreach($process->processmeta as $key => $item)
<section class="py-4 @if(($key == 0) || ($key == 2) || ($key == 4) || ($key == 6)) order-md-0 secton-bg @endif">
    <div class="container">
        <div class="row align-center">
            <div class="col-12 col-md-6 col-lg-6 content-center @if(($key == 0) || ($key == 2) || ($key == 4) || ($key == 6)) order-md-0 order-lg-0  @else order-lg-1 order-md-1 @endif wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img class="img-fluid text-center" src="{{asset('upload/process/process_meta/'.$item->meta_image)}}">
            </div>
            <div class="col-12 col-md-6 col-lg-6 text-justify @if(($key == 0) || ($key == 2) || ($key == 4) || ($key == 6))  order-lg-1 @else order-lg-0 @endif wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <h4 class="contact-title title-contact">{{$item->meta_title}}</h4>
                <p>{{$item->meta_description}}</p>
            </div>
        </div>
    </div>
</section>
@endforeach



@endsection
@extends('layouts.web')
@section('title', 'Product')
@section('content')
<div class="dlab-bnr-inr overlay-black-middle text-center bg-pt header-bg-img">
    <div class="container">
        <div class="dlab-bnr-inr-entry text-center">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row ">
                <ul class="list-inline">
                    <li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><a href="{{route('home')}}">Home</a></li>
                    <li class="wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">Product</li>
                </ul>
                <h2 class="text-white wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">Product</h2>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>

<!-- Start Product section -->
<section id="ft-testimonial" class="ft-testimonial-section position-relative py-3 py-md-4 py-lg-4">
    <!-- <span class="ft-testimonial-map text-center position-absolute"></span> -->
    <div class="container">
        <div class="ft-section-title headline pera-content text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">Product</span>
        </div>
        <h3 class="text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">Ambition Pipes Our Products
        </h3>
        <div class="ft--slider-wrapper">
            <div class=" row">
                @foreach($product as $item)
                <div class="ft-item-innerbox col-12 col-md-6 col-lg-3 py-2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms ">
                    <div class="ft-testimonial-item-innerbox">
                        <a class="" href="{{url('single-product/'.$item->slug)}}">
                            <div class="product-center">
                                <img src="{{asset('upload/product/'.$item->image)}}" class="img-fluid " width="150" height="150" alt="">
                            </div>
                            <div class="ft-testimonial-name headline position-relative">
                                <span class="ft-testimonial-shape "></span>
                                <h3>{{$item->title}}</h3>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End of Product section -->
@endsection
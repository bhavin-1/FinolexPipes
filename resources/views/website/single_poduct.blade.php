@extends('layouts.web')
@section('title', 'Singal Product')
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
                <h3 class="text-white wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">{{$product->title}}</h3>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>
<!-- Start of Product Details section-->
<section id="ft-blog-feed-details" class="ft-blog-feed-details-section page-padding py-5">
    <div class="container">
        <div class="ft-blog-feed-details-content">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-details-img-text-wrapper">
                        <div class="blog-details-img position-relative text-center main-bg">
                            <img src="{{asset('upload/product/'.$product->image)}}" alt="">
                        </div>
                        <div class="ft-blog-details-item">
                            <div class="blog-details-text headline">
                                <div class="ftd-blog-meta-2  position-relative text-capitalize">
                                    <h3 class="p-0">{{$product->title}}</h3>
                                </div>
                                @if(!is_null($product->description))
                                <blockquote>
                                    {!! $product->description !!}
                                </blockquote>
                                @endif
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="ft-side-bar-wrapper top-stikcy">
                        <div class="ft-side-bar-widget-area">

                            <div class="ft-side-bar-widget headline ul-li-block">
                                <div class="category-widget">
                                    <h3 class="widget-title position-relative">Other Product</h3>
                                    <ul>
                                        @foreach($products as $item)

                                        <li><a class="" href="{{url('single-product/'.$item->slug)}}">{{$item->title}} <span></span></a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.web')
@section('title', 'Home')
@section('content')

<!-- Start of Slider section -->
<section id="ft-thx-slider" class="ft-thx-slider-section">
    <rs-module-wrap id="rev_slider_30_1_wrapper" data-alias="slider-9" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_30_1" data-version="6.5.8">
            <rs-slides>
                @foreach($slider as $key => $item)
                <rs-slide style="position: absolute;" data-key="rs-{{$key}}" data-title="Slide" data-thumb="{{asset('upload/slider/thumbnail/'.$item->image)}}" data-anim="e:slidingoverlay;ms:1510;" data-in="o:0;x:100%;" data-out="a:false;">
                    <img src="{{asset('upload/slider/'.$item->image)}}" width="1920" height="700" class="rev-slidebg tp-rs-img" data-no-retina>
                    @if(!is_null($item->title))
                    <rs-layer id="slider-30-slide-79-layer-{{$key}}" data-type="text" data-color="#162832" data-rsp_ch="on" data-xy="x:c;yo:220px,253px,192px,118px;" data-text="w:normal;s:24,19,14,16;l:25,20,15,24;fw:500;" data-frame_0="o:1;" data-frame_0_chars="d:5;x:105%;o:1;rY:45deg;rZ:90deg;" data-frame_0_mask="u:t;" data-frame_1="st:630;sp:1200;sR:630;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:4070;" style="z-index:8;font-family:'Roboto';">{{$item->title}}
                    </rs-layer>
                    @endif
                    @if(!is_null($item->short_description))
                    <rs-layer id="slider-30-slide-79-layer-{{$key}}" data-type="text" data-color="#d2a154" data-rsp_ch="on" data-xy="x:c;yo:260px,287px,218px,150px;" data-text="w:normal;s:60,49,37,36;l:70,57,43,40;fw:700;a:center;" data-frame_0="o:1;" data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;" data-frame_1="st:1310;sp:1750;sR:1310;" data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;sR:3540;" style="z-index:9;font-family:'Poppins'; color:#666666" class="text-muted">{{$item->short_description}}
                    </rs-layer>
                    @endif
                    <!-- <a id="slider-30-slide-79-layer-{{$key}}" class="rs-layer rev-btn" href="{{route('process')}}" target="_self" data-type="button" data-rsp_ch="on" data-xy="x:c;xo:-100px,-82px,-62px,-61px;yo:400px,488px,370px,300px;" data-text="w:normal;s:18,14,10,14;l:50,41,31,36;fw:500;a:center;" data-dim="w:auto,auto,auto,99px;h:auto,auto,auto,37px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bor:3px,3px,3px,3px;" data-frame_0="x:-50,-41,-31,-19;" data-frame_1="st:4770;sp:1000;sR:4770;" data-frame_999="o:0;st:w;sR:3230;" data-frame_hover="bgc:#162832;bor:3px,3px,3px,3px;sp:100;e:power1.inOut;bri:120%;" style="z-index:12;background-color:#d2a154;font-family:'Poppins';">Process
                    </a> -->
                    <rs-layer id="slider-30-slide-79-layer-{{$key}}" data-type="text" data-rsp_ch="on" data-xy="xo:363px,299px,227px,31px;yo:502px,414px,314px,232px;" data-text="w:normal;s:18,14,10,15;l:28,23,17,26;a:center;" data-dim="h:72px,59px,44px,auto;" data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;" data-frame_1="y:9px,7px,5px,3px;e:power3.out;st:3650;sp:1500;sR:3650;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:3850;" style="z-index:10;font-family:'Roboto';"><br />

                    </rs-layer>
                    <!-- <a id="slider-30-slide-79-layer-{{$key}}" class="rs-layer rev-btn" href="{{route('about-us')}}" target="_self" data-type="button" data-rsp_ch="on" data-xy="x:c;xo:81px,66px,50px,56px;yo:400px,488px,370px,301px;" data-text="w:normal;s:18,14,10,14;l:50,41,31,36;fw:500;a:center;" data-dim="w:auto,auto,auto,102px;h:auto,auto,auto,38px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bor:3px,3px,3px,3px;" data-frame_0="x:50,41,31,19;" data-frame_1="st:5230;sp:1000;sR:5230;" data-frame_999="o:0;st:w;sR:2770;" data-frame_hover="bgc:#162832;bor:3px,3px,3px,3px;sp:100;e:power1.inOut;bri:120%;" style="z-index:11;background-color:#d2a154;font-family:'Poppins';">About Us
                    </a> -->
                </rs-slide>
                @endforeach
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
</section>
<!-- End of Slider section -->

<!-- start about -->
<section class="pt-3">
    <div class="container">
        <div class="row aline-center">
            <div class="col-12 col-lg-6  content-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img class="img-fluid" src="{{asset('upload/about/'.$about->image)}}">  
            </div>
            <div class="col-12 col-lg-6 padding-4 aline-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="ft-section-title headline pera-content">
                    <span class="sub-title">{{$about->title}}</span>
                </div>
                <h3 class="text-start mb-1 ">Welcome To Ambition Pipes</h3>
                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    {!! $about->description !!}
                </p>
                <a href="{{route('about-us')}}" class="btn btn-theme flot-right save">Read More</a>
            </div>
        </div>
    </div>

</section>
<!-- end about -->


<!-- Start Product section -->
<section id="ft-testimonial" class="ft-testimonial-section position-relative py-2 py-md-3 py-lg-3">
    <!-- <span class="ft-testimonial-map text-center position-absolute"></span> -->
    <div class="container">
        <div class="ft-section-title headline pera-content text-center">
            <span class="sub-title">Product</span>

        </div>
        <h3 class="text-center mb-1">Finolex Pipes Our Products
        </h3>


        <div class="ft-testimonial-slider-wrapper">
            <div class="ft-testimonial-slider-area row">
                @foreach($product as $item)
                <div class="ft-item-innerbox padding-0-15 col-12 col-md-6 col-lg-3">
                    <a class="" href="{{url('single-product/'.$item->slug)}}">
                        <div class="ft-testimonial-item-innerbox">
                            <div class="product-center">
                                <img src="{{asset('upload/product/'.$item->image)}}" width="150" height="150" class="img-fluid " alt="">
                            </div>
                            <div class="ft-testimonial-name headline position-relative">
                                <span class="ft-testimonial-shape1"></span>
                                <h3>{{$item->title}}</h3>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- End of Product section -->

<!-- Start Process Section -->
<section id="ft-thx-work-process" class="ft-thx-work-process-section position-relative bg-map py-1">
    <span class="ft-thx-work-process-shape position-absolute"></span>
    <div class="container">
        <!-- <div class="pr-cor-section-title headline pera-content middle-align text-center  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        </div> -->
        <h3 class="text-center py-2">Application</h3>

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
                            <h4>Sewerage </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="td-sv-work-step-inner-item text-center">
                        <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="{{asset('website/image/sustainable.png')}}">
                        </div>
                        <div class="td-sv-work-step-text pera-content">
                            <h4>Residential</h4>
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
<!-- End Process Section -->

<!-- Start of Why choose us section
	============================================= -->
<section id="ft-thx-why-choose-us" class="ft-thx-why-choose-us-section">
    <div class="container">
        <div class="ft-thx-why-choose-us-content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="pr-an-why-choose-feature">
                        <div class="row">
                            <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img class="img-fluid " src="{{asset('upload/chooseus/'.$chooseus->image)}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="pr-an-why-choose-text-wrapper">
                        <div class="pr-cor-section-title pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="pr-cor-title-tag1 main-text">{{$chooseus->title}}</span>
                            <h3>{{$chooseus->short_description}}</h3>
                            <!-- <p>{{$chooseus->short_description}}</p> -->
                        </div>
                        <div class="pr-an-why-choose-list ul-li-block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            {!! $chooseus->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Why choose us  section
	============================================= -->



@endsection
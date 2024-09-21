<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    @php $seo = seo(Request::segment(1)); @endphp
   
    @if(!is_null($seo))
	<title>{{ $seo->title }} | FINOLEX PIPES</title>
	<meta name="keyword" content="{{ $seo->keyword }}">
	<meta name="description" content="{{ $seo->description }}">
	@else
	<title>@yield('title')</title>
	<meta name="keyword" content="@yield('keyword')">
	<meta name="description" content="@yield('description')">
	@endif
    <link rel="shortcut icon" href="{{asset('img/Ambition.png')}}" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Css Fils -->
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/boostrep/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/extensions/ext-component-toastr.css')}}">

    <!--  -->
    <link rel="stylesheet" href="{{asset('website/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/video.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/rs6.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/slick-theme.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('website/css/style-1.css')}}"> -->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">

</head>
<body class="">

         
    <header id="header" class="sticky-top bg-light shadow">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="container-fluid p-0">
                        <nav class="navbar navbar-expand-lg ">
                            <div id="logo" class="w-210">
                                <a href="{{route('home')}}"><img src="{{asset('img/Ambition.png')}}" class="img-fluid w-100 radix-logo logo-img wow animate__animated animate__fadeInUp animate__delay-0.8s"  alt="Ambition pipes" title="Ambition pipes" /></a>
                            </div>
                            <button class="navbar-toggler menu-icon p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                                <ul class="main-menu navbar-nav wow animate__animated animate__fadeInUp animate__delay-0.8s">
                                    <li class="nav-item px-1 @if(Request::segment(1) == '') first @endif">
                                        <a class="nav-link" href="{{route('home')}}">HOME</a>
                                    </li>
                                    <li class="nav-item px-1 @if(Request::segment(1) == 'about-us') first @endif">
                                        <a class="nav-link" href="{{route('about-us')}}">ABOUT</a>
                                    </li>
                                    <li class="nav-item px-1 @if(Request::segment(1) == 'process'): first @endif">
                                        <a class="nav-link" href="{{route('process')}}">PROCESS</a>
                                    </li>
                                    <li class="nav-item px-1 @if(Request::segment(1) == 'products'): first @endif">
                                        <a class="nav-link" href="{{route('products')}}">PRODUCT</a>
                                    </li>

                                    <li class="nav-item px-1  @if(Request::segment(1) == 'contact-us'): first @endif">
                                        <a class="nav-link" href="{{route('contact-us')}}">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Main Header -->

    @yield('content')
    <footer class="">
        <div class="container">
            <div class="row footer-bg">
                <div class="col-12 col-sm-12 col-md-4 col-xl-3 ">
                    <div class="logo-white wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <a class="" href="{{route('home')}}"><img src="{{asset('img/Ambition.png')}}" class="img-fluid radix-logo" alt="Ambition pipes"></a>
                    </div>
                    <!-- <p>Quality Is Our Top Priority</p> -->
                    <hr class="w-75">
                   
                    <p class="text-justify text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> FINOLEX PIPES is one the best PIPE & FITTINGS industries founded in RAJKOT, we have a wide experienced team. We provided an ultimate pipe & fittings solution to various companies of Gujarat.</p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                    <div class="footer-head wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4>Contact</h4>
                        <div class="line"></div>
                    </div>
                    <div class="dt-sc-contact-info contact-info-second-card p-0">
                        <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <i class="fa fa-map-marker pr-15 main-text"></i>
                            <a href="https://maps.app.goo.gl/J2vTfxaeFk1V2dtf7" target="_blank"><span class="text-white">Finolex Pipes Plot No. 11, Shubh Ind. Zone, Nr. Makhavad Chowkdi, Khambha, Ta. Lodhika, Dist. Rajkot (Gujarat)</span></a>
                        </div>
                        <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <i class="fa fa-phone  pr-15  main-text"></i>
                            <span class="text-white"><a href="tel:+91 1234567890" class="text-white" target="_blank">+91 1234567890 </a> <br> </span>
                        </div>
                        <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <i class="fa fa-envelope  pr-15  main-text"></i>
                            <span class="text-white"><a href="mailto:23mca029@gardividyapith.ac.in" class="text-white" target="_blank">23mca029@gardividyapith.ac.in</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-xl-3">
                    <div class="footer-head wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4>Pages</h4>
                        <div class="line"></div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><a href="{{route('home')}}">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><a href="{{route('about-us')}}">About</a></li>
                        <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><a href="{{route('products')}}">Product</a></li>
                        <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms"><a href="{{route('process')}}">Process</a></li>
                        <li class="wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms"><a href="{{route('contact-us')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Style Two -->


    <!-- For Js Library -->
    <script src="{{asset('website/js/jquery.min.js')}}"></script>

    <script src="{{asset('asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>

    <script src="{{asset('asset/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('asset/js/scripts/extensions/ext-component-toastr.js')}}"></script>


    <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('website/js/popper.min.js')}}"></script>
    <script src="{{asset('website/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('website/js/appear.js')}}"></script>
    <script src="{{asset('website/js/slick.js')}}"></script>
    <script src="{{asset('website/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('website/js/waypoints.min.js')}}"></script>
    <script src="{{asset('website/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.filterizr.js')}}"></script>
    <script src="{{asset('website/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('website/js/wow.min.js')}}"></script>
    <script src="{{asset('website/js/jquery.cssslider.min.js')}}"></script>
    <script src="{{asset('website/js/rbtools.min.js')}}"></script>
    <script src="{{asset('website/js/rs6.min.js')}}"></script>
    <script src="{{asset('website/js/script.js')}}"></script>


    @yield('pagescript')

</body>

</html>
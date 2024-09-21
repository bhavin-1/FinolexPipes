<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="Ambition Admin">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Ambition">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('img/Ambition.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/vendors.min.css')}}">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/extensions/ext-component-sweet-alerts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendors/css/extensions/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jquery-ui/css/jquery-ui.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery/jquery.fancybox.min.css')}}" />

    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <div class="centered d-none">
        <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
    </div>

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder"></span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{asset('img/user.png')}}" alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><i class="me-50" data-feather="power"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row no-wrap">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="#">
                        <span class="brand-logo">
                            <img src="{{asset('img/Ambition.png')}}">
                        </span>
                        <img src="{{asset('img/Ambition.png')}}" class="logo-admin radix-logo" alt="Ambition pipes" title="Ambition pipes">
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                        <i class="d-block d-xl-none secondry-text toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  secondry-text" data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item @if(Request::segment(1) == 'home' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('home2')}}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Dashboards">Deshbord</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(1) == 'slider' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('slider.index')}}">
                        <i data-feather="sliders"></i>
                        <span class="menu-title text-truncate">Slider</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(1) == 'about' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('about.index')}}">
                        <i data-feather='slack'></i>
                        <span class="menu-title text-truncate">About</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(1) == 'proceses' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('proceses.index')}}">
                        <i data-feather='alert-octagon'></i>
                        <span class="menu-title text-truncate">Process</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(1) == 'product' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('product.index')}}">
                        <i data-feather='codesandbox'></i>
                        <span class="menu-title text-truncate">Product</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(1) == 'chooseus' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('chooseus.index')}}">
                        <i data-feather='trello'></i>
                        <span class="menu-title text-truncate">Choose Us</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(1) == 'seo' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('seo.index')}}">
                        <i data-feather='command'></i>
                        <span class="menu-title text-truncate">SEO Master</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(1) == 'contact' || Request::segment(1) == '' ): active @endif">
                    <a class="d-flex align-items-center" href="{{route('contact.index')}}">
                        <i data-feather='message-circle'></i>
                        <span class="menu-title text-truncate">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay">
        </div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="{{asset('asset/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('asset/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('asset/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('asset/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('asset/vendors/js/tables/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('asset/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>
    <script src="{{asset('asset/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('asset/js/scripts/extensions/ext-component-toastr.js')}}"></script>
    <script src="{{asset('asset/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('plugins/jquery/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('asset/js/scripts/forms/form-repeater.js')}}"></script>
    <script src="{{asset('asset/js/core/app-menu.js')}}"></script>
    <script src="{{asset('asset/js/core/app.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>



    @yield('pagescript')


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

        $(document).ready(function() {

            $('.main-menu').addClass('expanded');

        });
    </script>
</body>

</html>
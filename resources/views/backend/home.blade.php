@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section id="dashboard-analytics">
    <div class="row match-height">

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class=" card-flex p-2">
                    <div class="">
                        <div class="avatar bg-light-theme p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="sliders" class="font-medium-5"></i>
                            </div>
                        </div>
                    </div>
                    <div class="pl-15">
                        <h2 class="fw-bolder main-text m-0">{{$slider}}</h2>
                        <p class="card-text">Slider</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class=" card-flex p-2">
                    <div class="">
                        <div class="avatar bg-light-theme p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="codesandbox" class="font-medium-5"></i>
                            </div>
                        </div>
                    </div>
                    <div class="pl-15">
                        <h2 class="fw-bolder main-text m-0">{{$product}}</h2>
                        <p class="card-text">Product</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class=" card-flex p-2">
                    <div class="">
                        <div class="avatar bg-light-theme p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="alert-octagon" class="font-medium-5"></i>
                            </div>
                        </div>
                    </div>
                    <div class="pl-15">
                        <h2 class="fw-bolder main-text m-0">{{$process}}</h2>
                        <p class="card-text">Process</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class=" card-flex p-2">
                    <div class="">
                        <div class="avatar bg-light-theme p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="message-circle" class="font-medium-5"></i>
                            </div>
                        </div>
                    </div>
                    <div class="pl-15">
                        <h2 class="fw-bolder  main-text m-0">{{$contact}}</h2>
                        <p class="card-text">Contact</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
@endsection

@section('pagescript')
<script type="text/javascript">

</script>
@endsection
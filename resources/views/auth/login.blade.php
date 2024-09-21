@extends('layouts.guest')
@section('title', 'AMBITION PIPES')
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <div class="auth-wrapper auth-basic px-2">
            <div class="auth-inner my-2">
                <!-- Login basic -->
                <div class="card mb-0">
                    <div class="card-body">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <span class="brand-logo mb-0">
                                <img src="{{asset('img/Ambition.png')}}" class="w-75" alt="Ambition Pipes" title="Ambition Pipes">
                            </span>
                            <!-- <h2 class="brand-text ms-1 text-center" style="color:#00c37d">FILEO</h2> -->
                        </a>

                        <h4 class="card-title mb-1">Welcome to Ambition Pipes ADMIN! 👋</h4>
                        <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                        <form class="form form-horizontal" action="{{route('login')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">
                                                    <span class="fa fa-envelope"></span>
                                                </span>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" />
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">
                                                    <span class="fa fa-lock"></span>
                                                </span>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.fontend')

<!-- Bootstrap CSS -->
    <link href="{{asset('user')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('user')}}/assets/css/app.css" rel="stylesheet">
    <link href="{{asset('user')}}/assets/css/icons.css" rel="stylesheet">
@section('fontend-content')

<section class="">
                    <div class="container">
                        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                            <div class="row row-cols-1 row-cols-xl-2">
                                <div class="col mx-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="border p-4 rounded">
                                                <div class="text-center">
                                                    <h3 class="">Sign in</h3>
                                                    <p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
                                                    </p>
                                                </div>
                                                <!-- <div class="d-grid">
                                                    <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                                                        <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                                                        <span>Sign in with Google</span>
                                                        </span>
                                                    </a> <a href="javascript:;" class="btn btn-white"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
                                                </div> -->
                                                <!-- <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                                    <hr>
                                                </div> -->
                                                <div class="form-body">
                                                    <form class="row g-3" action="{{ route('login') }}" method="POST">
                                                        @csrf
                                                        <div class="col-12">
                                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                            <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
                                                        </div>
                                                         @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="col-12">
                                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                            <div class="input-group" id="show_hide_password">
                                                                <input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Forgot Password ?</a>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-grid">
                                                                <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </section>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
<script src="{{asset('user')}}/assets/js/app.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('user')}}/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{asset('user')}}/assets/js/jquery.min.js"></script>
    <!--Password show & hide js -->
    <script src="{{asset('user')}}/assets/js/show-hide-password.js"></script>
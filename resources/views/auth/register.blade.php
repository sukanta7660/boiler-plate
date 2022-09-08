<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Doctorino - Register</title>
    <link href="{{ asset('admin_asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin_asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="">
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5" style="margin-top: 9rem !important;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"
                             style="background-image: url({{ asset('admin_asset/img/doctor-2027768_960_720.webp') }});
                             background-size: contain;
                             background-repeat: no-repeat;">

                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Doctorino Register') }}</h1>
                                </div>
                                <form method="POST" action="{{ route('register') }}" class="user">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-12 col-form-label">{{ __('Name') }}</label>

                                        <div class="col-md-12">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" type="submit"> {{ __('Register') }}</button>
                                </form>
                                <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}"> {{ __('If already have an account. Please Login') }}</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('admin_asset/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('admin_asset/js/sb-admin-2.min.js') }}"></script>
</body>
</html>

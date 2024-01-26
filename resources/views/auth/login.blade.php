@extends('layouts.auth')
@section('title', 'Login')

@section('content')
    <div class="bg-body-dark">
        <div class="row mx-0 justify-content-center">
            <div class="hero-static col-lg-6 col-xl-4">
                <div class="content content-full overflow-hidden">

                    <div class="py-4 text-center">
                        <a class="link-fx fw-bold" href="{{ url('/') }}">
                            <i class="fa fa-fire"></i>
                            {!! splitAndWrapAppName() !!}
                        </a>
                        <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Your Dashboard</h1>
                        <h2 class="h5 fw-medium text-muted mb-0">It's a great day today!</h2>
                    </div>

                    <form class="js-validation-signin" action="{{ route('login.store') }}" method="POST">
                        @csrf

                        <div class="block block-themed block-rounded block-fx-shadow">
                            <div class="block-header bg-gd-dusk">
                                <h3 class="block-title">Please Sign In</h3>
                            </div>
                            <div class="block-content">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter your email" id="login-email" name="email">
                                    <label class="form-label" for="login-email">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        required autocomplete="current-password" placeholder="Enter your password"
                                        id="login-password" name="password">
                                    <label class="form-label" for="login-password">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 d-sm-flex align-items-center push">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="login-remember-me" name="remember_me">
                                            <label class="form-check-label" for="login-remember-me">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-end push">
                                        <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                                            Sign In
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                                <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
                                    href="">
                                    Forgot Password
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        class Validation {
            static initSignIn() {
                Codebase.helpers("jq-validation");
                $(".js-validation-signin").validate({
                    rules: {
                        "email": {
                            required: true,
                            minlength: 3,
                            email: true
                        },
                        "password": {
                            required: true,
                            minlength: 5
                        },
                    },
                    messages: {
                        "email": {
                            required: "Please enter an email",
                            minlength: "Your email must consist of at least 3 characters",
                            email: "Please enter a valid email address"
                        },
                        "password": {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",
                        },
                    },
                });
            }
        }

        Codebase.onLoad(() => Validation.initSignIn());
    </script>
@endpush

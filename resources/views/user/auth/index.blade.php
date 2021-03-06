@extends('layouts.user-layout.master')

@section('content')

<div class="mb-4">
    <h1 class="text-center">My Account</h1>
</div>
<div class="my-4 my-xl-8">
    <div class="row">
        <div class="col-md-5 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0">
            <!-- Title -->
            <div class="border-bottom border-color-1 mb-6">
                <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
            </div>
            <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>
            <!-- End Title -->
            <form class="js-validate" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="form-label" for="signinSrEmailExample3">Email address
                        <span class="text-danger">*</span>
                    </label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                        id="signinSrEmailExample3" placeholder="Email address" aria-label="Username or Email address"
                        required data-msg="Please enter a valid email address." data-error-class="u-has-error"
                        data-success-class="u-has-success">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="form-label" for="signinSrPasswordExample2">Password <span
                            class="text-danger">*</span></label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                        id="signinSrPasswordExample2" placeholder="Password" aria-label="Password" required
                        data-msg="Your password is invalid. Please try again." data-error-class="u-has-error"
                        data-success-class="u-has-success">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="js-form-message mb-3">
                    <div class="custom-control custom-checkbox d-flex align-items-center">
                        <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="remember"
                            data-error-class="u-has-error" data-success-class="u-has-success" {{ old('remember')
                            ? 'checked' : '' }}>
                        <label class="custom-control-label form-label" for="rememberCheckbox">
                            Remember me
                        </label>
                    </div>
                </div>
                <!-- End Checkbox -->

                <!-- Button -->
                <div class="mb-1">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
                    </div>
                    <div class="mb-2">
                        <a class="text-blue" href="{{ route('password.request') }}">Lost your password?</a>
                    </div>
                </div>
                <!-- End Button -->
            </form>
        </div>
        <div class="col-md-1 d-none d-md-block">
            <div class="flex-content-center h-100">
                <div class="width-1 bg-1 h-100"></div>
                <div
                    class="width-50 height-50 border border-color-1 rounded-circle flex-content-center font-italic bg-white position-absolute">
                    or</div>
            </div>
        </div>
        <div class="col-md-5 ml-md-auto ml-xl-0 mr-xl-auto">
            <!-- Title -->
            <div class="border-bottom border-color-1 mb-6">
                <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Register</h3>
            </div>
            <p class="text-gray-90 mb-4">Create new account today to reap the benefits of a personalized shopping
                experience.</p>
            <!-- End Title -->
            <!-- Form Group -->
            <form class="js-validate" novalidate="novalidate" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="js-form-message form-group mb-5">
                    <label class="form-label" for="name">Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Name" aria-label="Name" required data-msg="Please enter a valid name."
                        data-error-class="u-has-error" data-success-class="u-has-success">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="js-form-message form-group mb-5">
                    <label class="form-label" for="email">Email address
                        <span class="text-danger">*</span>
                    </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" placeholder="Email address" aria-label="Email address" required
                        data-msg="Please enter a valid email address." data-error-class="u-has-error"
                        data-success-class="u-has-success">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="password">Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" aria-label="Password" required
                                data-msg="Please enter a password." data-error-class="u-has-error"
                                data-success-class="u-has-success">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="password_confirmation">Confirm Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                                aria-label="Confirm Password" required data-msg="Please enter a same password."
                                data-error-class="u-has-error" data-success-class="u-has-success">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Button -->
                <div class="mb-6">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary-dark-w px-5">Register</button>
                    </div>
                </div>
                <!-- End Button -->
            </form>
        </div>
    </div>
</div>
@endsection
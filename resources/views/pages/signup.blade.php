@extends('layouts.default')
@section('title', 'home')
@section('content')

    <div class="main">
        <section class="gradient-overly-right ptb-100 height-lg-100vh d-flex align-items-center"
            style="background: url('img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                    <div class="col-md-6 col-lg-5">
                        <div class="card login-signup-card shadow-lg mb-0">
                            <div class="card-body px-md-5 py-5">
                                <div class="mb-5">
                                    <h5 class="h3">Create account</h5>
                                    <p class="text-muted mb-0">Made with love by developers for developers.</p>
                                </div>
                                <form class="login-signup-form">
                                    <div class="form-group mb-3">
                                        <!-- Label -->
                                        <label class="pb-1">
                                            Your Name
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-user color-primary"></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <!-- Label -->
                                        <label class="pb-1">
                                            Email Address
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-email color-primary"></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="name@address.com">
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="pb-1">
                                            Password
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-lock color-primary"></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Enter your password">
                                        </div>
                                    </div>

                                    <div class="my-4">
                                        <div class="custom-control custom-checkbox d-flex align-items-center gap-2 mb-3">
                                            <input type="checkbox" class="custom-control-input" id="check-terms">
                                            <label class="custom-control-label" for="check-terms">I agree to the <a
                                                    href="{{route('terms-of-service')}}" class="text-decoration-none">terms and
                                                    conditions</a></label>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-block primary-solid-btn border-radius mt-4 mb-3">
                                        Sign up
                                    </button>
                                </form>

                            </div>
                            <div class="card-footer px-md-5 bg-transparent border-top"><small>Already have an
                                    acocunt?</small>
                                <a href="{{route('login')}}" class="small text-decoration-none">Sign in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

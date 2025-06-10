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
                                <!-- Heading -->
                                <div class="mb-5">
                                    <h5 class="h3">Password Reset</h5>
                                    <p class="text-muted mb-0">Enter your email to get a password reset link.</p>
                                </div>
                                <!-- Form -->
                                <form class="login-signup-form">
                                    <div class="form-group">
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <span class="ti-email color-primary"></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="name@address.com">
                                        </div>
                                    </div>
                                    <!-- Submit -->
                                    <button class="btn btn-block primary-solid-btn border-radius mt-4 mb-3">
                                        Reset Password
                                    </button>

                                    <!-- Link -->
                                    <div class="text-center">
                                        <small class="text-muted text-center">
                                            Already have account ? <a class="text-decoration-none" href="{{route('login')}}">Log
                                                in</a>.
                                        </small>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

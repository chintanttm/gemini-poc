@extends('frontend.layouts.login')

@section('title', __(''))

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-7 col-lg-10 col-md-12">
        <div class="pb-4 mb-xl-4 text-center">
            <h1 class="h2 fw-bold">Sign in to your Account</h1>
            <p class="lead">Free access to our dashboard.</p>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-lg-5 col-md-5">
                <form class="row g-2">
                    <div class="col-md-12 col-sm-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" placeholder="Email address">
                            <label>Email address</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-floating">
                            <input type="password" class="form-control" placeholder="Password">
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="col-12 d-grid">
                        <button type="submit" class="btn btn-lg bg-primary-gradient text-uppercase border-0 d-flex justify-content-between align-items-center">
                            Sigin to your Account
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 d-md-flex align-items-center justify-content-center text-center">
                <span class="fs-6">OR</span>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="row g-2 d-grid">
                    <a class="col-12 text-start btn btn-lg btn-light-secondary fs-6" href="#">
                        <i class="fa fa-google me-2"></i>
                        Sign in with Google
                    </a>
                    <a class="col-12 text-start btn btn-lg btn-light-secondary fs-6" href="#">
                        <i class="fa fa-facebook me-2"></i>
                        Sign in with Facebook
                    </a>
                    <a class="col-12 text-start btn btn-lg btn-light-secondary fs-6" href="#">
                        <i class="fa fa-apple me-2"></i>
                        Sign in with Apple Account
                    </a>
                </div>
            </div>
        </div>
        <div class="py-4 text-center">
            <a class="color-400 h6 text-decoration-underline" href="#">Forgot Password?</a>
        </div>
    </div>
</div> <!-- End Row -->
@endsection

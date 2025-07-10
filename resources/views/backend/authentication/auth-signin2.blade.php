@extends('frontend.layouts.login')

@section('title', __(''))

@section('content')
<div class="row g-0 justify-content-center">
    <div class="col-xl-4 col-lg-5 col-md-7 col-sm-8">
        <!-- Form -->
        <form class="row g-1 rounded-3 p-lg-5 p-4">
            <div class="col-12 text-center mb-5">
                <h1>Sign in</h1>
                <span>Free access to our dashboard.</span>
            </div>
            <div class="col-12 text-center mb-4 d-grid">
                <a class="btn btn-lg btn-outline-secondary" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                        <img class="avatar xs me-2" src="{{ url('/') }}/assets/images/google.svg" alt="Image Description">
                        Sign in with Google
                    </span>
                </a>
                <span class="dividers text-muted mt-4">OR</span>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <input type="email" class="form-control" placeholder="name@example.com">
                    <label>Email address</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <input type="password" class="form-control" placeholder="Password">
                    <label>Password</label>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="Rememberme">
                    <label class="form-check-label" for="Rememberme">Remember me</label>
                </div>
                <a class="text-primary small" href="#">Forgot Password?</a>
            </div>
            <div class="col-12 text-center mt-4 d-grid">
                <a class="btn btn-lg bg-primary-gradient lift text-uppercase" href="{{ route('admin.dashboard') }}" title="">SIGN IN</a>
            </div>
            <div class="col-12 text-center mt-4">
                <span class="text-muted">Don't have an account yet? <a href="#">Sign up here</a></span>
            </div>
        </form>
        <!-- End Form -->
    </div>
</div>
@endsection

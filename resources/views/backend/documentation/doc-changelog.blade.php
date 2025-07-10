@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><i class="fa fa-hand-o-right me-2"></i>Changelog</h5>
                </div>
                
                <!-- start: v1.0.0 -->
                <div class="card-body py-2">
                    <h6 class="d-inline-block"><span class="badge bg-info fw-light">v1.0.0</span></h6>
                    <span class="text-muted">&nbsp;&nbsp;&nbsp;-- Feb 27, 2023</span>
                    <ul class="ms-5">
                        <li>Initial release of LUNO! Lots more coming soon though 😁</li>
                        <li>
                            <span class="badge rounded-pill bg-light text-dark">LUNO Version</span>
                            <ul>
                                <li>Laravel <span class="badge rounded-pill bg-light text-success">v8X</span></li>
                                <li>Bootstrap <span class="badge rounded-pill bg-light text-success">v5X</span></li>
                                <li>PHP <span class="badge rounded-pill bg-light text-success">v8X</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
            <div class="card text-center">
                <div class="card-body">
                    <p class="lead">If you want more information, we are just a message far.</p>
                    <a class="btn text-uppercase btn-dark w-100" href="https://tawk.to/chat/5c6d4867f324050cfe342c69/default" target="_blank">Chat with us</a>
                </div>
            </div>
        </div>
        <!-- start: navigation btn -->
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
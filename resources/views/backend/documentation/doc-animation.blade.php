@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><i class="fa fa-hand-o-right me-2"></i>Animation</h5>
                </div>
                <div class="card-body">
                    <!-- Animation: .btn -->
                    <h6 class="card-title">Button Hover <span class="small text-muted">Example</span></h6>
                    <div class="row g-1 mb-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn mx-2 btn-primary btn-animate-1">
                                        <span>Click me</span>
                                        <i class="fa fa-long-arrow-right"></i>
                                    </button>
                                    <button class="btn mx-2 px-4 py-2 btn-outline-primary btn-animate-3" data-hover="click me!"><div>Hover me!</div></button>
                                    <button class="btn mx-2 px-4 py-2 btn-primary btn-animate-4"><span>Resize</span></button>
                                    <button class="btn mx-2 px-4 py-2 btn-dark lift">.btn .lift</button>
                                    <button class="btn btn-animate-5">
                                        <svg aria-hidden="true" width="70" height="70" viewBox="0 0 70 70">
                                            <path class="circle" d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"></path>
                                            <path class="path" d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z" pathLength="1"></path>
                                        </svg>
                                        <span>Go</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="btn m-1 btn-lg btn-dark btn-animate-6">
                                        <span class="btntext">READY?</span>
                                        <div class="btninfo bg-primary">GO!</div>
                                    </div>
                                    <div class="btn m-1 btn-lg btn-dark btn-animate-6">
                                        <span class="btntext">CANCEL</span>
                                        <div class="btninfo bg-danger"><i class="fa fa-close"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg btn-dark btn-animate-6">
                                        <span class="btntext">SUCCESS</span>
                                        <div class="btninfo bg-success"><i class="fa fa-check"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg btn-dark btn-animate-6">
                                        <span class="btntext">DOWNLOAD</span>
                                        <div class="btninfo bg-warning"><i class="fa fa-cloud-download"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg rounded-pill btn-dark btn-animate-6">
                                        <span class="btntext">READY?</span>
                                        <div class="btninfo bg-primary">GO!</div>
                                    </div>
                                    <div class="btn m-1 btn-lg rounded-pill btn-dark btn-animate-6">
                                        <span class="btntext">CANCEL</span>
                                        <div class="btninfo bg-danger"><i class="fa fa-close"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg rounded-pill btn-dark btn-animate-6">
                                        <span class="btntext">SUCCESS</span>
                                        <div class="btninfo bg-success"><i class="fa fa-check"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg rounded-pill btn-dark btn-animate-6">
                                        <span class="btntext">DOWNLOAD</span>
                                        <div class="btninfo bg-warning"><i class="fa fa-cloud-download"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg btn-light btn-animate-6">
                                        <span class="btntext">READY?</span>
                                        <div class="btninfo bg-primary">GO!</div>
                                    </div>
                                    <div class="btn m-1 btn-lg btn-light btn-animate-6">
                                        <span class="btntext">CANCEL</span>
                                        <div class="btninfo bg-danger"><i class="fa fa-close"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg btn-light btn-animate-6">
                                        <span class="btntext">SUCCESS</span>
                                        <div class="btninfo bg-success"><i class="fa fa-check"></i></div>
                                    </div>
                                    <div class="btn m-1 btn-lg btn-light btn-animate-6">
                                        <span class="btntext">DOWNLOAD</span>
                                        <div class="btninfo bg-warning"><i class="fa fa-cloud-download"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn px-4 py-2 btn-animate-2 fill">Fill In</button>
                                    <button class="btn px-4 py-2 btn-animate-2 pulse">Pulse</button>
                                    <button class="btn px-4 py-2 btn-animate-2 close">Close</button>
                                    <button class="btn px-4 py-2 btn-animate-2 raise">Raise</button>
                                    <button class="btn px-4 py-2 btn-animate-2 up">Fill Up</button>
                                    <button class="btn px-4 py-2 btn-animate-2 slide">Slide</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn lift btn-animate-7 primary">BUTTON</button>
                                    <button class="btn lift btn-animate-7 secondary">BUTTON</button>
                                    <button class="btn lift btn-animate-7 success">BUTTON</button>
                                    <button class="btn lift btn-animate-7 danger">BUTTON</button>
                                    <button class="btn lift btn-animate-7 warning">BUTTON</button>
                                    <button class="btn lift btn-animate-7 info">BUTTON</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .row end -->

                    <!-- Animation: .link -->
                    <h6 class="card-title">Link Hover <span class="small text-muted">Example</span></h6>
                    <div class="row g-1 mb-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="lead">Get Uniquely crafted Landing pages for <a class="luno-link dotted" href="#"><span data-content="15+ business niche">15+ business niche</span></a>, which covers almost all the major <a class="luno-link text_bg2" href="#">business</a> niche requirements. Single purchase of the <a class="luno-link fw-bold double" href="#"><span data-content="LUNO admin dashboard">LUNO admin dashboard</span></a> license gives access to all this beautiful landing pages.</p>
                                    <p class="lead">On top of that, all the <a class="luno-link line-through" href="#"><span data-content="landing pages">landing pages</span></a> has different theme and <a class="luno-link dashed" href="#"><span data-content="color options">color options</span></a>, gives you freedom to adjust the design suitable to your brand.</p>
                                    <p class="lead">Get the one today and <a class="luno-link wavy" href="#"><span data-content="impress your clients!">impress your clients!</span></a></p>
                                    <p class="lead mb-0">Create beautiful apps faster with <a class="luno-link text_bg" href="#">LUNO widgets collection</a> of Card’s, Small card, Card List, Chart widget and Table option & more...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Animation: img -->
                    <h6 class="card-title">Image card hover <span class="small text-muted">Example</span></h6>
                    <div class="row g-2 mb-2">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card img-effect one text-center">
                                <img src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="img hover">
                                <figcaption>
                                    <h2>Holy Sadie</h2>
                                    <p>Sadie never took her eyes off me. She had a dark soul.</p>
                                    <a href="#" title="">View more</a>
                                </figcaption>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card img-effect two">
                                <img src="{{ url('/') }}/assets/images/gallery/7.jpg" alt="img hover">
                                <div class="effect-hover px-3 py-2">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-o">Creative <span class="color-800 fw-bold">Zoe</span></h4>
                                        <p class="icon-links">
                                            <a href="#" class="p-2"><span class="icon-heart"></span></a>
                                            <a href="#" class="p-2"><span class="icon-eye"></span></a>
                                            <a href="#" class="p-2"><span class="icon-paper-clip"></span></a>
                                        </p>
                                    </div>
                                    <span class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="card-body position-relative hover-show p-0">
                                    <a href="#" class="hover-div position-absolute top-50 start-50 translate-middle py-1 px-2 bg-light rounded shadow-sm text-muted">
                                        <i class="fa fa-play-circle fa-3x"></i>
                                    </a>
                                    <img src="{{ url('/') }}/assets/images/gallery/5.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card img-effect2">
                                <div class="team-block">
                                    <div class="team-img" style="background-image: url({{ url('/') }}/assets/images/lg/avatar1.jpg)"></div>
                                    <div class="team-content flex-column">
                                        <h6 class="team-caption fw-bold">John laisa do</h6>
                                        <div class="social">
                                            <a href="#" class="px-1"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-instagram"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card img-effect2">
                                <div class="team-block">
                                    <div class="team-img" style="background-image: url({{ url('/') }}/assets/images/lg/avatar2.jpg)"></div>
                                    <div class="team-content flex-column">
                                        <h6 class="team-caption fw-bold">John laisa do</h6>
                                        <div class="social">
                                            <a href="#" class="px-1"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-instagram"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card img-effect2">
                                <div class="team-block">
                                    <div class="team-img" style="background-image: url({{ url('/') }}/assets/images/lg/avatar3.jpg)"></div>
                                    <div class="team-content flex-column">
                                        <h6 class="team-caption fw-bold">John laisa do</h6>
                                        <div class="social">
                                            <a href="#" class="px-1"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-instagram"></span></a>
                                            <a href="#" class="px-1"><span class="fa fa-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card img-effect2">
                                <div class="team-block">
                                    <div class="team-img" style="background-image: url({{ url('/') }}/assets/images/lg/avatar4.jpg)"></div>
                                    <div class="team-content flex-column">
                                        <h6 class="team-caption fw-bold">John laisa do</h6>
                                        <div class="social">
                                        <a href="#" class="px-1"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="px-1"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="px-1"><span class="fa fa-instagram"></span></a>
                                        <a href="#" class="px-1"><span class="fa fa-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: navigation btn -->
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
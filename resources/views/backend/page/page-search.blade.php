@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="row g-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search here...">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </form>
                <div class="form-text">About 6,000 results (0.60 seconds)</div>
            </div>
            <ul class="nav nav-tabs tab-card" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Search-all" role="tab"><i class="fa fa-search me-2"></i>All</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Search-image" role="tab"><i class="fa fa-image me-2"></i>Image</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Search-video" role="tab"><i class="fa fa-youtube-square me-2"></i>Video</a></li>
                <li class="nav-item dropdown morphing">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">More</a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Search-all" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-xl-8 col-md-12">
                                <p class="mb-0">https://alui.thememakker.com/index.html</p>
                                <a class="h5 text-primary fw-light fw-light" href="https://1.envato.market/5bYy9L">LUNO - Bootstrap 5 Responsive Admin Dashboard Theme</a>
                                <p class="mt-2 text-muted">Boost your project with powerful LUNO admin dashboard template that is tailored to fit every company's needs.</p>
                                <ul class="list-unstyled d-flex flex-wrap flex-row text-muted border-bottom pb-3">
                                    <li class="me-lg-4 me-2">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        5 : stars
                                    </li>
                                    <li class="me-lg-4 me-2">25,292 votes</li>
                                    <li class="me-lg-4 me-2">React/Vue/Angular</li>
                                </ul>
                            </div>
                            <div class="col-xl-8 col-md-12">
                                <p class="mb-0">https://luno-edu.info/</p>
                                <a class="h5 text-primary fw-light" href="https://themeforest.net/item/lucid-net-core-mvc-responsive-admin-template/33516188">Lucid ASP .NET Core MVC - Responsive Admin Template</a>
                                <p class="mt-2 text-muted">LUNO introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                                <ul class="list-unstyled d-flex flex-wrap flex-row text-muted border-bottom pb-3">
                                    <li class="me-lg-4 me-2">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        4.9 : stars
                                    </li>
                                    <li class="me-lg-4 me-2">25,292 votes</li>
                                    <li class="me-lg-4 me-2">Free</li>
                                    <li class="me-lg-4 me-2">Business/Productivity</li>
                                </ul>
                            </div>
                            <div class="col-xl-8 col-md-12">
                                <p class="mb-0">https://themeforest.net/user/wrraptheme/portfolio</p>
                                <a class="h5 text-primary fw-light" href="https://themeforest.net/item/lucid-angular-7-admin-template/23294743">Lucid - Angular Admin Template</a>
                                <p class="mt-2 text-muted">LUNO introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                                <ul class="list-unstyled d-flex flex-wrap flex-row text-muted border-bottom pb-3">
                                    <li class="me-lg-4 me-2">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        4.9 : stars
                                    </li>
                                    <li class="me-lg-4 me-2">25,292 votes</li>
                                    <li class="me-lg-4 me-2">Free</li>
                                    <li class="me-lg-4 me-2">Business/Productivity</li>
                                </ul>
                            </div>
                            <div class="col-xl-8 col-md-12">
                                <p class="mb-0">https://themeforest.net/user/wrraptheme/portfolio</p>
                                <a class="h5 text-primary fw-light" href="https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861">Lucid - HR and Project Management Admin Dashboard Template Bootstrap 5 & 4</a>
                                <p class="mt-2 text-muted">LUNO introduces a IELTS Coaching, TOEFL Coaching, GRE Coaching, GMAT Coaching, SAT Coaching in Surat.</p>
                                <ul class="list-unstyled d-flex flex-wrap flex-row text-muted border-bottom pb-3">
                                    <li class="me-lg-4 me-2">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        4.9 : stars
                                    </li>
                                    <li class="me-lg-4 me-2">25,292 votes</li>
                                    <li class="me-lg-4 me-2">Free</li>
                                    <li class="me-lg-4 me-2">Business/Productivity</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Search-image" role="tabpanel">
                        <div class="row row-cols-xxl-4 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 row-deck">
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/1.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/1.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/2.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/2.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/3.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/3.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/4.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/4.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/5.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/5.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/6.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/6.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/7.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/7.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/8.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/8.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/9.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/9.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/10.jpg">
                                        <img class="card-img-top" alt="" src="{{ url('/') }}/assets/images/gallery/10.jpg" />
                                    </a>
                                    <div class="card-body p-3">
                                        <h6 class="card-title">Images card title</h6>
                                        <p class="small text-muted mb-0">Some quick example text to build on the card title of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Search-video" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body position-relative hover-show p-0">
                                        <a href="#" class="hover-div position-absolute top-50 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#video_preview">
                                            <i class="fa fa-play-circle fa-3x"></i>
                                        </a>
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/gallery/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body position-relative hover-show p-0">
                                        <a href="#" class="hover-div position-absolute top-50 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#video_preview">
                                            <i class="fa fa-play-circle fa-3x"></i>
                                        </a>
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body position-relative hover-show p-0">
                                        <a href="#" class="hover-div position-absolute top-50 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#video_preview">
                                            <i class="fa fa-play-circle fa-3x"></i>
                                        </a>
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body position-relative hover-show p-0">
                                        <a href="#" class="hover-div position-absolute top-50 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#video_preview">
                                            <i class="fa fa-play-circle fa-3x"></i>
                                        </a>
                                        <img class="img-fluid" src="{{ url('/') }}/assets/images/gallery/13.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal: video preview -->
                        <div class="modal fade" id="video_preview" tabindex="-1" aria-labelledby="video_preview" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Video Preview</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe class="rounded-4" style="width: 100%; height: auto; min-height: 460px;" src="https://www.youtube.com/embed/9_PV-f87xPw" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Search-map" role="tabpanel">
                        <div class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="pagination mt-3">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</div>
<script>
/*	end gallery */
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });

</script>
@endsection
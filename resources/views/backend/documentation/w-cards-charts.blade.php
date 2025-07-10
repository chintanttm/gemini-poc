@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<!-- .card: tab -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs tab-card mb-4 border-top-0 border-start-0 border-end-0 border border-primary rounded-4 bg-white" role="tablist">
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards') }}">Card's</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tiles') }}">Card Tiles</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-user') }}">User Card's</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tabbed') }}">Tabbed card</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-ribbons') }}">Card Ribbons</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-list') }}">Card List</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link active" href="{{ route('admin.documentation.w-cards-charts') }}">Card Chart</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tables') }}">Card Tables</a></li>
            </ul>
        </div>
    </div> <!-- .row end -->

    <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-2 mb-5">
        <div class="col">
            <div class="card lift">
                <div class="card-body">
                    <span class="text-uppercase">New Sessions</span>
                    <h4 class="mb-0 mt-2">22,500</h4>
                    <small class="text-muted">Analytics for last week</small>
                </div>
                <div id="apex-wc-1"></div>
            </div>
        </div>
        <div class="col">
            <div class="card lift">
                <div class="card-body">
                    <span class="text-uppercase">TIME ON SITE</span>
                    <h4 class="mb-0 mt-2">1,070</h4>
                    <small class="text-muted">Analytics for last week</small>
                </div>
                <div id="apex-wc-2"></div>
            </div>
        </div>
        <div class="col">
            <div class="card lift">
                <div class="card-body">
                    <span class="text-uppercase">BOUNCE RATE</span>
                    <h4 class="mb-0 mt-2">10K</h4>
                    <small class="text-muted">Analytics for last week</small>
                </div>
                <div id="apex-wc-3"></div>
            </div>
        </div>
        <div class="col">
            <div class="card lift">
                <div class="card-body">
                    <span class="text-uppercase">GOAL COMPLETIONS</span>
                    <h4 class="mb-0 mt-2">$1,22,500</h4>
                    <small class="text-muted">Analytics for last week</small>
                </div>
                <div id="apex-wc-4"></div>
            </div>
        </div>
        <div class="col">
            <div class="card lift">
                <div class="card-body py-xl-4 py-3">
                    <span class="text-muted">Unique Purchases</span>
                    <div><span class="fs-3 me-2">1,548</span><span class="text-success">4.15% <i class="fa fa-angle-up"></i></span></div>
                    <div class="mt-3 ac-line-transparent" id="apex-wc-5"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card lift">
                <div class="card-body py-xl-4 py-3">
                    <span class="text-muted">Shipping</span>
                    <div><span class="fs-3 me-2">$548</span><span class="text-success">7.41% <i class="fa fa-angle-up"></i></span></div>
                    <div class="mt-3 ac-line-transparent" id="apex-wc-6"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card lift">
                <div class="card-body py-xl-4 py-3">
                    <span class="text-muted">Average QTY</span>
                    <div><span class="fs-3 me-2">4.8</span><span class="text-danger">14.15% <i class="fa fa-angle-down"></i></span></div>
                    <div class="mt-3 ac-line-transparent" id="apex-wc-7"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card lift">
                <div class="card-body py-xl-4 py-3">
                    <span class="text-muted">Sessions</span>
                    <div><span class="fs-3 me-2">12,548</span><span class="text-success">4.15% <i class="fa fa-angle-up"></i></span></div>
                    <div class="mt-3 ac-line-transparent" id="apex-wc-8"></div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <div class="row g-2 row-deck mb-5">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h6 class="card-title mb-0">Workout Statistic</h6>
                        <small class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to ensure your data is always up-to-date.</small>
                    </div>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap flex-row align-items-center">
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail chart-color1 lift">
                                    <svg class="avatar sm" viewBox="0 0 512 512">
                                        <path class="fill-white" d="M121,68.5H45c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S129.291,68.5,121,68.5z"></path>
                                        <path class="fill-white" d="M121,188.5H45c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S129.291,188.5,121,188.5z"></path>
                                        <path class="fill-white" d="M91,128.5H15c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S99.291,128.5,91,128.5z"></path>
                                        <path class="fill-white" d="M482,203.5h-91v-60c0-26.346-32.229-40.218-51.22-21.202L219.789,242.289c-11.719,11.719-11.719,30.703,0,42.422    l68.789,68.789l-83.789,83.789c-11.719,11.719-11.719,30.703,0,42.422c11.718,11.718,30.703,11.719,42.422,0l105-105    c11.719-11.719,11.719-30.703,0-42.422L283.422,263.5L331,215.922V233.5c0,16.567,13.433,30,30,30h121c16.567,0,30-13.433,30-30    S498.567,203.5,482,203.5z"></path>
                                        <path class="fill-white" d="M280.14,51.04c-11.924-7.925-27.744-6.357-37.852,3.75l-82.5,82.5c-11.719,11.719-11.719,30.703,0,42.422    s30.704,11.718,42.423-0.001l65.112-65.112l21.934,15.8l29.306-29.306c4.902-4.902,10.684-8.707,17.007-11.678L280.14,51.04z"></path>
                                        <path class="fill-white" d="M198.578,305.922c-7.601-7.601-12.675-16.956-15.35-27.072L24.789,437.289c-11.719,11.719-11.719,30.703,0,42.422    c11.718,11.718,30.703,11.719,42.422,0l152.578-152.578L198.578,305.922z"></path>
                                        <circle class="fill-white" cx="406" cy="68.5" r="45"></circle>
                                    </svg>
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div>Running</div>
                                    <div><span class="h6 fw-bold">315</span> <small class="text-muted">Hours</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="ms-lg-4 ms-lg-4 ms-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail chart-color2 lift">
                                    <svg class="avatar sm" viewBox="0 0 512 512">
                                        <path class="fill-white" d="M330.667,122.667c23.467,0,42.667-19.2,42.667-42.667s-19.2-42.667-42.667-42.667S288,56.533,288,80     S307.2,122.667,330.667,122.667z"/>
                                        <path class="fill-white" d="M106.667,261.333C48,261.333,0,309.333,0,368s48,106.667,106.667,106.667c58.667,0,106.667-48,106.667-106.667     S165.333,261.333,106.667,261.333z M106.667,442.667C65.067,442.667,32,409.6,32,368s33.067-74.667,74.667-74.667     c41.6,0,74.667,33.067,74.667,74.667S148.267,442.667,106.667,442.667z"/>
                                        <path class="fill-white" d="M404.267,238.933v-42.667c-32,0-58.667-11.733-77.867-30.933L284.8,124.8c-6.4-7.467-17.067-12.8-28.8-12.8     s-22.4,4.267-29.867,12.8l-58.667,58.667c-7.467,7.467-12.8,18.133-12.8,29.867s5.333,22.4,12.8,30.933l67.2,59.733v106.667     h42.667V277.333L230.4,230.4l50.133-51.2l16,16C323.2,222.933,360.533,238.933,404.267,238.933z"/>
                                        <path class="fill-white" d="M405.333,261.333c-58.667,0-106.667,48-106.667,106.667s48,106.667,106.667,106.667C464,474.667,512,426.667,512,368     S464,261.333,405.333,261.333z M405.333,442.667c-41.6,0-74.667-33.067-74.667-74.667s33.067-74.667,74.667-74.667     C446.933,293.333,480,326.4,480,368S446.933,442.667,405.333,442.667z"/>
                                    </svg>
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div>Cycling</div>
                                    <div><span class="h6 fw-bold">245</span> <small class="text-muted">Hours</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="ms-lg-4 ms-lg-4 ms-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail chart-color3 lift">
                                    <svg class="avatar sm" viewBox="0 0 512.001 512.001">
                                        <circle class="fill-white" cx="255.995" cy="63.999" r="63.999"/>
                                        <path class="fill-white" d="M380.385,465.702L301.57,495.26l39.194,14.698c16.868,6.263,35.068-2.415,41.202-18.733    C385.231,482.518,384.265,473.399,380.385,465.702z"/>
                                        <path class="fill-white" d="M107.238,354.024c-16.515-6.125-34.984,2.188-41.202,18.733c-6.203,16.547,2.188,34.984,18.733,41.202l34.523,12.945    l91.143-34.183L107.238,354.024z"/>
                                        <path class="fill-white" d="M445.964,372.758c-6.219-16.547-24.687-24.859-41.202-18.733l-255.995,95.998c-16.547,6.219-24.937,24.655-18.734,41.202    c6.133,16.313,24.329,24.998,41.202,18.733l255.995-95.998C443.778,407.742,452.168,389.305,445.964,372.758z"/>
                                        <path class="fill-white" d="M479.996,255.995h-76.217l-55.155-110.31c-5.732-11.453-17.392-17.978-29.409-17.687H256h-63.218    c-12.015-0.291-23.66,6.235-29.405,17.687l-55.155,110.31H32.005c-17.671,0-31.999,14.328-31.999,31.999    c0,17.671,14.328,31.999,31.999,31.999h95.998c12.125,0,23.203-6.844,28.624-17.687l35.374-70.748v120.08l63.997,23.997    l64.001-24.004V231.558l35.374,70.748c5.422,10.844,16.5,17.687,28.624,17.687h95.998c17.671,0,31.999-14.328,31.999-31.999    S497.667,255.995,479.996,255.995z"/>
                                    </svg>
                                </div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div>Yoga</div>
                                    <div><span class="h6 fw-bold">45</span> <small class="text-muted">Session</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-sm-block ms-auto">
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio1">Week</label>
                            
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio2">Month</label>
                            
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked="">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio3">Year</label>
                            </div>
                        </div>
                    </div>
                    <div id="apex-wc-9"></div>
                </div>
            </div> <!-- .card end -->
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h6 class="card-title mb-0">Salary Statistics</h6>
                        <small class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to ensure your data is always up-to-date.</small>
                    </div>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border py-2 px-3 rounded-5">
                        <div class="d-flex flex-row align-items-center">
                            <div>
                                <h6 class="mb-0 fw-bold">$23,056</h6>
                                <small class="text-muted">Last Year</small>
                            </div>
                            <div class="ms-lg-5 ms-md-4 ms-lg-5 ms-3">
                                <h6 class="mb-0 fw-bold">$8,150</h6>
                                <small class="text-muted">Last Month</small>
                            </div>
                            <div class="d-none d-sm-block ms-auto">
                                <div class="btn-group" role="group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                    <label class="btn btn-sm btn-outline-secondary" for="btnradio1">Week</label>
                                
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                    <label class="btn btn-sm btn-outline-secondary" for="btnradio2">Month</label>
                                
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked="">
                                    <label class="btn btn-sm btn-outline-secondary" for="btnradio3">Year</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="apex-wc-10"></div>
                </div>
            </div> <!-- .card end -->
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Property Stats</h6>
                    <div class="dropdown morphing scale-left">
                        <div class="btn-group me-3" role="group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio1">Week</label>
                        
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio2">Month</label>
                        
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked="">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio3">Year</label>
                        </div>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-row align-items-center text-center text-sm-start">
                        <div class="p-2">
                            <h6 class="mb-0 fw-bold">$5,154</h6>
                            <small class="text-muted">Sale Property</small>
                        </div>
                        <div class="p-2 ms-4">
                            <h6 class="mb-0 fw-bold">$2,058</h6>
                            <small class="text-muted">Buy Property</small>
                        </div>
                        <div class="p-2 ms-4">
                            <h6 class="mb-0 fw-bold">$1,805</h6>
                            <small class="text-muted">Rent</small>
                        </div>
                    </div>
                    <div id="apex-wc-11"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Total Cost Overview</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="d-flex flex-row align-items-center text-center text-sm-start">
                        <div class="p-2">
                            <h6 class="mb-0 fw-bold">$2,710</h6>
                            <small class="text-muted">Sales Property</small>
                        </div>
                        <div class="p-2 ms-4">
                            <h6 class="mb-0 fw-bold">$1,308</h6>
                            <small class="text-muted">Rented Property</small>
                        </div>
                    </div>
                    <div class="mt-3" id="apex-wc-12"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Hospital Survey</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-wc-13"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Sleep analysis</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <span class="text-muted">The quality of your sleep is definitely weak. <br>Correct it tonight. <a href="#">Ream how</a></span>
                </div>
                <div class="ac-line-transparent" id="apex-wc-14"></div>
            </div> <!-- .card end -->
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Energy balance</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <span class="text-muted">Your energy management is too weak. <br>inprove food quality. <a href="#">Ream how</a></span>
                    <div class="ac-line-transparent" id="apex-wc-15"></div>
                </div>
            </div> <!-- .card end -->
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Uses of Energy</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                            <li><a class="dropdown-item" href="#">Bitcoin<i class="fa fa-arrow-right"></i></a></li>
                            <li><a class="dropdown-item" href="#">Ethereum<i class="fa fa-arrow-right"></i></a></li>
                            <li><a class="dropdown-item" href="#">Ripple<i class="fa fa-arrow-right"></i></a></li>
                            <li><a class="dropdown-item" href="#">Cardano<i class="fa fa-arrow-right"></i></a></li>
                            <li><a class="dropdown-item" href="#">Stellar<i class="fa fa-arrow-right"></i></a></li>
                            <li><a class="dropdown-item" href="#">RaiBlocks<i class="fa fa-arrow-right"></i></a></li>
                            <li><a class="dropdown-item" href="#">Monero<i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        <div class="p-2">
                            <h6 class="mb-0 fw-bold">356</h6>
                            <small class="text-muted">Day Uses</small>
                        </div>
                        <div class="p-2 ms-4">
                            <h6 class="mb-0 fw-bold">198</h6>
                            <small class="text-muted">Night Uses</small>
                        </div>
                        <div class="d-none d-sm-block ms-auto">
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio1">Week</label>
                            
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio2">Month</label>
                            
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                <label class="btn btn-sm btn-outline-secondary" for="btnradio3">Year</label>
                            </div>
                        </div>
                    </div>
                    <div id="apex-wc-20"></div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Market Cap</h6>
                    <div class="dropdown morphing scale-left">
                        <div class="btn-group me-3" role="group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio1">1M</label>
                        
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio2">6M</label>
                        
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio3">1Y</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio4">YTD</label>
                        </div>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body py-2 bg-light d-flex justify-content-between flex-wrap">
                    <div>
                        <span class="me-3"><span class="h5 mb-0">$3,056</span> <span class="small text-danger">- 0.73 <i class="fa fa-level-down"></i></span></span>
                        <span class="me-3">
                            <span class="text-muted">High:</span>
                            <span class="small text-success">451,325</span>
                        </span>
                        <span class="me-3">
                            <span class="text-muted">Low:</span>
                            <span class="small text-danger">351,325</span>
                        </span>
                    </div>
                    <div class="d-none d-sm-block">
                        <button type="button" class="btn btn-sm btn-primary lift">Buy</button>
                        <button type="button" class="btn btn-sm btn-danger lift">Sell</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-xl-9 col-lg-8 col-md-12">
                            <div id="apex-wc-21"></div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12">
                            <ul class="list-group list-group-flush list-group-custom mb-0">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar sm me-2" src="{{ url('/') }}/assets/images/coin/BTC.svg" alt="BTC">
                                        <span>BTC</span>
                                    </div>
                                    <div>
                                        <span>$211,410</span>
                                        <span class="small text-success">+ 1.78 <i class="fa fa-level-up"></i></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar sm me-2" src="{{ url('/') }}/assets/images/coin/stellar.svg" alt="BTC">
                                        <span>STL</span>
                                    </div>
                                    <div>
                                        <span>$8,450</span>
                                        <span class="small text-danger">- 3.05 <i class="fa fa-level-down"></i></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar sm me-2" src="{{ url('/') }}/assets/images/coin/DASH.svg" alt="BTC">
                                        <span>DASH</span>
                                    </div>
                                    <div>
                                        <span>$105,245</span>
                                        <span class="small text-danger">- 4.15 <i class="fa fa-level-down"></i></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar sm me-2" src="{{ url('/') }}/assets/images/coin/ETC.svg" alt="BTC">
                                        <span>ETC</span>
                                    </div>
                                    <div>
                                        <span>$124,450</span>
                                        <span class="small text-success">+ 1.25 <i class="fa fa-level-up"></i></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar sm me-2" src="{{ url('/') }}/assets/images/coin/ETH.svg" alt="BTC">
                                        <span>ETH</span>
                                    </div>
                                    <div>
                                        <span>$5,411</span>
                                        <span class="small text-success">+ 1.25 <i class="fa fa-level-up"></i></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar sm me-2" src="{{ url('/') }}/assets/images/coin/LTC.svg" alt="BTC">
                                        <span>LTC</span>
                                    </div>
                                    <div>
                                        <span>$25,254</span>
                                        <span class="small text-danger">- 2.55 <i class="fa fa-level-down"></i></span>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar sm me-2" src="{{ url('/') }}/assets/images/coin/neo.svg" alt="BTC">
                                        <span>NEO</span>
                                    </div>
                                    <div>
                                        <span>$12,450</span>
                                        <span class="small text-success">+ 5.25 <i class="fa fa-level-up"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <h6 class="card-title mb-0">Social Media Traffic</h6>
                        <small class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to ensure your data is always up-to-date.</small>
                    </div>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-wc-22"></div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <div class="row g-2 mb-2">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="dropdown morphing scale-left">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i> Sports Analytics</a>
                <ul class="dropdown-menu dropdown-animation shadow border-0">
                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                    <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                    <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </div>
            <p class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to ensure your data is always up-to-date.</p>
            <div class="card">
                <div class="card-body">
                    <div class="ac-line-transparent" id="apex-wc-16"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="dropdown morphing scale-left">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i> Season Goal</a>
                <ul class="dropdown-menu dropdown-animation shadow border-0">
                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                    <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                    <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </div>
            <p class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to ensure your data is always up-to-date.</p>
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 g-2">
                <div class="col">
                    <div class="card py-4">
                        <div class="card-body text-center">
                            <div id="apex-wc-17"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card py-4">
                        <div class="card-body text-center">
                            <div id="apex-wc-18"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- .row end -->
        </div>
    </div> <!-- .row end -->

    <div class="row g-2 mb-5 row-deck">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex">
                    <img class="avatar me-3 rounded" src="{{ url('/') }}/assets/images/icon-google-analytics.svg" alt="" />
                    <div>
                        <h5 class="mb-0">Google Analytics Website Data</h5>
                        <small class="text-muted">Or you can <a href="#">sync data to Dashboard</a> to ensure your data is always up-to-date.</small>
                    </div>
                </div>
                <div class="card-body">
                    <div class="ac-line-transparent" id="apex-wc-19"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <span class="text-truncate">Users</span>
                    <div class="fs-2">$15.48</div>
                    <span class="text-muted">No data</span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <span>New Users</span>
                    <div class="fs-2">250</div>
                    <span class="text-danger"><i class="fa fa-angle-down"></i> 11.63%</span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <span>Avg. Session Duration <a href="#" class="fa fa-info-circle"></a></span>
                    <div class="fs-2">$18</div>
                    <span class="text-success"><i class="fa fa-angle-up"></i> 1.03%</span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <span>Transactions</span>
                    <div class="fs-2">218</div>
                    <span class="text-success"><i class="fa fa-angle-up"></i> 2.23%</span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <span>Conversion Rate</span>
                    <div class="fs-2">0</div>
                    <span class="text-danger"><i class="fa fa-angle-down"></i> 6.44%</span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <span>Revenue <a href="#" class="fa fa-info-circle"></a></span>
                    <div class="fs-2">$24,750</div>
                    <span class="text-muted">No data</span>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3">
        @include('backend.documentation.next-previous-url')
    </div>
    <script>
        // Apex-wc-1
        var apexwc1 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 45, 54, 38, 56, 24, 65, 31]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color1)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color1)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-1"), apexwc1).render();

        // Apex-wc-2
        var apexwc2 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 45, 54, 38, 56, 24, 65, 31]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color2)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color2)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-2"), apexwc2).render();

        // Apex-wc-3
        var apexwc3 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 45, 54, 38, 56, 24, 65, 31]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color3)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color3)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-3"), apexwc3).render();

        // Apex-wc-4
        var apexwc4 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 56, 24, 65, 31, 45, 54, 38]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color4)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color4)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-4"), apexwc4).render();

        // Apex-wc-5
        var apexwc5 = {
            chart: {
                type: 'line',            
                width: 160,
                height: 35,

                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color1)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ "var(--chart-color2)" ],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],        
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-5"), apexwc5).render();

        // Apex-wc-6
        var apexwc6 = {
            chart: {
                type: 'line',            
                width: 160,
                height: 35,

                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color2)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ "var(--chart-color3)" ],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],        
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-6"), apexwc6).render();

        // Apex-wc-7
        var apexwc7 = {
            chart: {
                type: 'line',            
                width: 160,
                height: 35,

                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color3)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ "var(--chart-color4)" ],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],        
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-7"), apexwc7).render();

        // Apex-wc-8
        var apexwc8 = {
            chart: {
                type: 'line',            
                width: 160,
                height: 35,

                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color1)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ "var(--chart-color2)" ],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],        
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-8"), apexwc8).render();

        // Apex-wc-9
        var apexwc9 = {
            series: [{
                name: "Running",
                data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
            },{
                name: "Cycling",
                data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
            },{
                name: 'Yoga',
                data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
            }],

            chart: {
                height: 280,
                type: 'line', // line, bar, area
                toolbar: {
                    show: false,
                },
                zoom: {
                    enabled: false
                },
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)',  'var(--chart-color3)'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: [5, 7, 5],
                curve: 'smooth', // straight, smooth
                dashArray: [0, 8, 5]
            },
            legend: {
                tooltipHoverFormatter: function(val, opts) {
                return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
                }
            },
            markers: {
                size: 0,
                hover: {
                    sizeOffset: 6
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            },
            tooltip: {
                y: [{
                    title: {
                        formatter: function (val) {
                            return val + " (Hours)"
                        }
                    }
                },{
                    title: {
                        formatter: function (val) {
                            return val + " (Hours)"
                        }
                    }
                },{
                    title: {
                        formatter: function (val) {
                            return val + " (Session)"
                        }
                    }
                }]
            },
        };
        new ApexCharts(document.querySelector("#apex-wc-9"), apexwc9).render();

        // Apex-wc-10
        var apexwc10 = {
            series: [{
                name: 'Developer',
                data: [44, 55, 41, 67, 22, 43, 21, 49, 33, 29, 44, 38]
            }, {
                name: 'Marketing',
                data: [13, 23, 20, 8, 13, 27, 21, 49, 33, 29, 33, 12]
            }, {
                name: 'Sales',
                data: [11, 17, 21, 49, 33, 29, 15, 15, 21, 14, 15, 13]
            }],
            chart: {
                type: 'bar',
                height: 280,
                stacked: true,
                stackType: '100%',
                toolbar: {
                    show: false,
                },
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            xaxis: {
                categories: ['Jan', 'Feb',  'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            },
            fill: {
                opacity: 1
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
            },
        };
        new ApexCharts(document.querySelector("#apex-wc-10"), apexwc10).render();

        // Apex-wc-11
        var apexwc11 = {
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
            chart: {
                type: 'bar',
                height: 280,
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    //endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 1,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            legend: {
                position: 'bottom', // left, right, top, bottom
                horizontalAlign: 'left',  // left, right, top, bottom
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                    return "$ " + val + " thousands"
                    }
                }
            },
        };
        new ApexCharts(document.querySelector("#apex-wc-11"), apexwc11).render();

        // Apex-wc-11
        var apexwc12 = {
            chart: {
                height: 310,
                type: 'donut',
            },
            labels: ['Budget', 'Construction', 'Demolition', 'Other'],
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'bottom', // left, right, top, bottom
                horizontalAlign: 'left',  // left, right, top, bottom
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)', 'var(--chart-color4)'],
            series: [44, 55, 41, 17],
            responsive: [{
                breakpoint: 420,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        }
        new ApexCharts(document.querySelector("#apex-wc-12"), apexwc12).render();

        // Apex-wc-13
        var apexwc13 = {
            chart: {
                height: 330,
                type: 'bar',
                toolbar: {
                    show: false,
                },
            },
            colors: ['var(--chart-color1)'],
            grid: {
                yaxis: {
                    lines: {
                        show: false,
                    }
                },
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
            }],
            xaxis: {
                categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan', 'United States', 'China', 'Germany'],
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-13"), apexwc13).render();

        // Apex-wc-14
        var apexwc14 = {
            series: [{
                name: 'Current Week',
                data: [8.5, 7, 6, 7, 6.5, 6, 7]
            }, {
                name: 'Last Week',
                data: [7, 6.5, 5, 7.5, 8, 9, 8]
            }],
            chart: {
                height: 120,
                type: 'area',
                toolbar: {
                    show: false,
                },
                zoom: {
                    enabled: false
                },
                sparkline: {
                    enabled: true,
                },
            },
            tooltip: {
                y: [{
                    title: {
                        formatter: function (val) {
                            return val + " Hours-"
                        }
                    }
                },{
                    title: {
                        formatter: function (val) {
                            return val + " Hours-"
                        }
                    }
                }]
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color1)' , 'var(--chart-color2)'],
                    shadeIntensity: 4,
                    opacityFrom: 0.5,
                    opacityTo: 0.1,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)'],
            stroke: {
                curve: 'smooth',
                width: 1
            },
            xaxis: {
                categories: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
            }
        };
        new ApexCharts(document.querySelector("#apex-wc-14"), apexwc14).render();

        // Apex-wc-15
        var apexwc15 = {
            series: [{
                name: "Low",
                data: [
                    [21.7, 3], [23.6, 3.5], [24.6, 3], [29.9, 3], [21.7, 20], [23, 2], [10.9, 3], [28, 4], [27.1, 0.3], [16.4, 4], [13.6, 0], [19, 5], [22.4, 3], [24.5, 3], [32.6, 3], [27.1, 4], [29.6, 6], [31.6, 8], [21.6, 5], [20.9, 4], [22.4, 0], [32.6, 10.3], [29.7, 20.8], [24.5, 0.8], [21.4, 0], [21.7, 6.9], [28.6, 7.7], [15.4, 0], [18.1, 0], [33.4, 0], [16.4, 0]]
            },{
                name: "High",
                data: [
                [36.4, 13.4], [1.7, 11], [5.4, 8], [9, 17], [1.9, 4], [3.6, 12.2], [1.9, 14.4], [1.9, 9], [1.9, 13.2], [1.4, 7], [6.4, 8.8], [3.6, 4.3], [1.6, 10], [9.9, 2], [7.1, 15], [1.4, 0], [3.6, 13.7], [1.9, 15.2], [6.4, 16.5], [0.9, 10], [4.5, 17.1], [10.9, 10], [0.1, 14.7], [9, 10], [12.7, 11.8], [2.1, 10], [2.5, 10], [27.1, 10], [2.9, 11.5], [7.1, 10.8], [2.1, 12]]
            }],
            chart: {
                height: 120,
                type: 'scatter',
                toolbar: {
                    show: false,
                },
                sparkline: {
                    enabled: true,
                }
            },
            colors: ['var(--chart-color2)', 'var(--chart-color5)'],
            xaxis: {
                tickAmount: 10,
                labels: {
                    formatter: function(val) {
                        return parseFloat(val).toFixed(1)
                    }
                }
            },
            yaxis: {
                tickAmount: 0
            },
            markers: {
                size: [3, 3]
            }
        };
        new ApexCharts(document.querySelector("#apex-wc-15"), apexwc15).render();

        // Apex-wc-16
        var apexwc16 = {
            series: [{
                name: 'Running',
                data: [11, 22, 43, 21, 27]
            }, {
                name: 'Cricket',
                data: [9, 13, 3, 32, 21]
            }, {
                name: 'Cycling',
                data: [6, 15, 11, 20, 10]
            }, {
                name: 'Swimming',
                data: [5, 14, 9, 4, 12]
            }, {
                name: 'Tennis',
                data: [7, 25, 24, 10, 22]
            }],
            colors: ['var(--chart-color1)', 'var(--chart-color2)','var(--chart-color3)', 'var(--chart-color4)', 'var(--chart-color5)'],
            chart: {
                type: 'bar',
                height: 262,
                stacked: true,
                stackType: '100%',
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: true,
                },
            },
            stroke: {
                width: 2,
                colors: ['var(--card-color)']
            },
            dataLabels: {
            enabled: false
            },
            xaxis: {
                categories: [2016, 2017, 2018, 2019, 2020],
                labels: {
                    formatter: function (val) {
                        return val + "H"
                    }
                }
            },
            yaxis: {
                title: {
                    text: undefined
                },
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + "H"
                    }
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                position: 'bottom', // left, right, top, bottom
                horizontalAlign: 'center', // left, right, top, bottom
                //offsetX: 40
            }
        };
        new ApexCharts(document.querySelector("#apex-wc-16"), apexwc16).render();

        // Apex-wc-17
        var apexwc17 = {
            series: [67],
            chart: {
                height: 260,
                type: 'radialBar',
                offsetY: -10
            },
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: undefined,
                        },
                        value: {
                            offsetY: 76,
                            fontSize: '22px',
                            color: undefined,
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color5)' , 'var(--chart-color4)'],
                    opacityFrom: 0.9,
                    opacityTo: 0.3,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color5)', 'var(--chart-color4)'],
            stroke: {
                dashArray: 4
            },
            labels: ['Running'],
        };
        new ApexCharts(document.querySelector("#apex-wc-17"), apexwc17).render();

        // Apex-wc-18
        var apexwc18 = {
            series: [55],
            chart: {
                height: 260,
                type: 'radialBar',
                offsetY: -10
            },
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: undefined,
                        },
                        value: {
                            offsetY: 76,
                            fontSize: '22px',
                            color: undefined,
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color1)' , 'var(--chart-color2)'],
                    opacityFrom: 0.9,
                    opacityTo: 0.3,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)'],
            stroke: {
                dashArray: 4
            },
            labels: ['Cycling'],
        };
        new ApexCharts(document.querySelector("#apex-wc-18"), apexwc18).render();

        // Apex-wc-19
        var apexwc19 = {
            series: [{
                name: 'Likes',
                data: [4, 3, 7, 19, 5, 13, 9, 17, 2, 37, 5, 20, 9, 29, 19, 42, 9, 12],
            }],
                chart: {
                height: 140,
                type: 'line',
                toolbar: {
                    show: false,
                }
            },
            stroke: {
                width: 4,
                curve: 'smooth',
                colors: ['var(--chart-color1)'],
            },
            xaxis: {
                type: 'datetime',
                categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000', '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001','4/11/2001' ,'5/11/2001' ,'6/11/2001'],
                tickAmount: 10,
                labels: {
                    formatter: function(value, timestamp, opts) {
                        return opts.dateFormatter(new Date(timestamp), 'dd MMM')
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ "var(--chart-color2)" ],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100],
                },
            },
            markers: {
                size: 3,
                colors: ["#FFA41B"],
                strokeColors: "#fff",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            yaxis: {
                show: false,
                min: -10,
                max: 50,
            }
        };
        new ApexCharts(document.querySelector("#apex-wc-19"), apexwc19).render();

        // Apex-wc-20
        var apexwc20 = {
            chart: {
                height: 280,
                type: 'heatmap',
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                padding: {
                    right: 0
                }
            },
            colors: ["#ffc122"],
            series: [{
                    name: 'Kitchen',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Apple Tv',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Sound Ststem',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Air Conditioner',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Fridge',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Washing Machine',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Bath Room',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Garden',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                },{
                    name: 'Store Room',
                    data: generateHeatmapData(8, {
                        min: 0,
                        max: 90
                    })
                }
            ],
        }
        new ApexCharts(document.querySelector("#apex-wc-20"), apexwc20).render();
        function generateHeatmapData(count, yrange) {
            var i = 0;
            var series = [];
            while (i < count) {
                var x = 'D' + (i + 1).toString();
                var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

                series.push({
                    x: x,
                    y: y
                });
                i++;
            }
            return series;
        }

        // Apex-wc-21
        var apexwc21 = {
            chart: {
                height: 300,
                type: 'candlestick',
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                candlestick: {
                    colors: {
                        upward: 'var(--chart-color1)',
                        downward: 'var(--chart-color2)',
                    },
                    wick: {
                        useFillColor: true
                    }
                }
            },

            series: [{
                data: [
                    {x: new Date(1538778600000),y: [6629.81, 6650.5, 6623.04, 6633.33]},
                    {x: new Date(1538780400000),y: [6632.01, 6643.59, 6620, 6630.11]},
                    {x: new Date(1538782200000),y: [6630.71, 6648.95, 6623.34, 6635.65]},
                    {x: new Date(1538784000000),y: [6635.65, 6651, 6629.67, 6638.24]},
                    {x: new Date(1538785800000),y: [6638.24, 6640, 6620, 6624.47]},
                    {x: new Date(1538787600000),y: [6624.53, 6636.03, 6621.68, 6624.31]},
                    {x: new Date(1538789400000),y: [6624.61, 6632.2, 6617, 6626.02]},
                    {x: new Date(1538791200000),y: [6627, 6627.62, 6584.22, 6603.02]},
                    {x: new Date(1538793000000),y: [6605, 6608.03, 6598.95, 6604.01]},
                    {x: new Date(1538794800000),y: [6604.5, 6614.4, 6602.26, 6608.02]},
                    {x: new Date(1538796600000),y: [6608.02, 6610.68, 6601.99, 6608.91]},
                    {x: new Date(1538798400000),y: [6608.91, 6618.99, 6608.01, 6612]},
                    {x: new Date(1538800200000),y: [6612, 6615.13, 6605.09, 6612]},
                    {x: new Date(1538802000000),y: [6612, 6624.12, 6608.43, 6622.95]},
                    {x: new Date(1538803800000),y: [6623.91, 6623.91, 6615, 6615.67]},
                    {x: new Date(1538805600000),y: [6618.69, 6618.74, 6610, 6610.4]},
                    {x: new Date(1538807400000),y: [6611, 6622.78, 6610.4, 6614.9]},
                    {x: new Date(1538809200000),y: [6614.9, 6626.2, 6613.33, 6623.45]},
                    {x: new Date(1538811000000),y: [6623.48, 6627, 6618.38, 6620.35]},
                    {x: new Date(1538812800000),y: [6619.43, 6620.35, 6610.05, 6615.53]},
                    {x: new Date(1538814600000),y: [6615.53, 6617.93, 6610, 6615.19]},
                    {x: new Date(1538816400000),y: [6615.19, 6621.6, 6608.2, 6620]},
                    {x: new Date(1538818200000),y: [6619.54, 6625.17, 6614.15, 6620]},
                    {x: new Date(1538820000000),y: [6620.33, 6634.15, 6617.24, 6624.61]},
                    {x: new Date(1538821800000),y: [6625.95, 6626, 6611.66, 6617.58]},
                    {x: new Date(1538823600000),y: [6619, 6625.97, 6595.27, 6598.86]},
                    {x: new Date(1538825400000),y: [6598.86, 6598.88, 6570, 6587.16]},
                    {x: new Date(1538827200000),y: [6588.86, 6600, 6580, 6593.4]},
                    {x: new Date(1538829000000),y: [6593.99, 6598.89, 6585, 6587.81]},
                    {x: new Date(1538830800000),y: [6587.81, 6592.73, 6567.14, 6578]},
                    {x: new Date(1538832600000),y: [6578.35, 6581.72, 6567.39, 6579]},
                    {x: new Date(1538834400000),y: [6579.38, 6580.92, 6566.77, 6575.96]},
                    {x: new Date(1538836200000),y: [6575.96, 6589, 6571.77, 6588.92]},
                    {x: new Date(1538838000000),y: [6588.92, 6594, 6577.55, 6589.22]},
                    {x: new Date(1538839800000),y: [6589.3, 6598.89, 6589.1, 6596.08]},
                    {x: new Date(1538841600000),y: [6597.5, 6600, 6588.39, 6596.25]},
                    {x: new Date(1538843400000),y: [6598.03, 6600, 6588.73, 6595.97]},
                    {x: new Date(1538845200000),y: [6595.97, 6602.01, 6588.17, 6602]},
                    {x: new Date(1538847000000),y: [6602, 6607, 6596.51, 6599.95]},
                    {x: new Date(1538848800000),y: [6600.63, 6601.21, 6590.39, 6591.02]},
                    {x: new Date(1538850600000),y: [6591.02, 6603.08, 6591, 6591]},
                    {x: new Date(1538852400000),y: [6591, 6601.32, 6585, 6592]},
                    {x: new Date(1538854200000),y: [6593.13, 6596.01, 6590, 6593.34]},
                    {x: new Date(1538856000000),y: [6593.34, 6604.76, 6582.63, 6593.86]},
                    {x: new Date(1538857800000),y: [6593.86, 6604.28, 6586.57, 6600.01]},
                    {x: new Date(1538859600000),y: [6601.81, 6603.21, 6592.78, 6596.25]},
                    {x: new Date(1538861400000),y: [6596.25, 6604.2, 6590, 6602.99]},
                    {x: new Date(1538863200000),y: [6602.99, 6606, 6584.99, 6587.81]},
                    {x: new Date(1538865000000),y: [6587.81, 6595, 6583.27, 6591.96]},
                    {x: new Date(1538866800000),y: [6591.97, 6596.07, 6585, 6588.39]},
                    {x: new Date(1538868600000),y: [6587.6, 6598.21, 6587.6, 6594.27]},
                    {x: new Date(1538870400000),y: [6596.44, 6601, 6590, 6596.55]},
                    {x: new Date(1538872200000),y: [6598.91, 6605, 6596.61, 6600.02]},
                    {x: new Date(1538874000000),y: [6600.55, 6605, 6589.14, 6593.01]},
                    {x: new Date(1538875800000),y: [6593.15, 6605, 6592, 6603.06]},
                    {x: new Date(1538877600000),y: [6603.07, 6604.5, 6599.09, 6603.89]},
                    {x: new Date(1538879400000),y: [6604.44, 6604.44, 6600, 6603.5]},
                    {x: new Date(1538881200000),y: [6603.5, 6603.99, 6597.5, 6603.86]},
                    {x: new Date(1538883000000),y: [6603.85, 6605, 6600, 6604.07]},
                    {x: new Date(1538884800000),y: [6604.98, 6606, 6604.07, 6606]},
                ]
            }],
                
            xaxis: {
                type: 'datetime'
            },
            yaxis: {
                tooltip: {
                    enabled: true
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-21"), apexwc21).render();

        // Social Media Traffic
        var apexwc22 = {
            chart: {
                height: 360,
                type: 'bubble',
                toolbar: {
                    show: false,
                },
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
            dataLabels: {
                enabled: false
            },
            series: [{
                    name: 'Facebook',
                    data: generateSocialMediaData(new Date('11 Nov 2020 GMT').getTime(), 22, {
                        min: 5,
                        max: 30
                    })
                },{
                    name: 'Twitter',
                    data: generateSocialMediaData(new Date('11 Nov 2020 GMT').getTime(), 31, {
                        min: 5,
                        max: 30
                    })
                },{
                    name: 'Dribbble',
                    data: generateSocialMediaData(new Date('11 Nov 2020 GMT').getTime(), 18, {
                        min: 5,
                        max: 30
                    })
                }
            ],
            fill: {
                opacity: 0.8
            },
            xaxis: {
                tickAmount: 12,
                type: 'category',
            },
            yaxis: {
                max: 30
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-22"), apexwc22).render();
        function generateSocialMediaData(baseval, count, yrange) {
            var i = 0;
            var series = [];
            while (i < count) {
                var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
                var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
                var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

                series.push([x, y, z]);
                baseval += 86400000;
                i++;
            }
            return series;
        }
</script>
@endsection
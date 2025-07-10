@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <!-- .card: tab -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs tab-card mb-4 border-top-0 border-start-0 border-end-0 border border-primary rounded-4 bg-white" role="tablist">
                    <li class="nav-item"><a class="py-3 mx-1 nav-link active" href="{{ route('admin.documentation.w-cards') }}">Card's</a></li>
                    <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tiles') }}">Card Tiles</a></li>
                    <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-user') }}">User Card's</a></li>
                    <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tabbed') }}">Tabbed card</a></li>
                    <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-ribbons') }}">Card Ribbons</a></li>
                    <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-list') }}">Card List</a></li>
                    <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-charts') }}">Card Chart</a></li>
                    <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tables') }}">Card Tables</a></li>
                </ul>
            </div>
        </div> <!-- .row end -->

        <div class="row g-3">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-start p-lg-4 p-3">
                        <div class="avatar rounded no-thumbnail">
                            <i class="fa fa-shopping-basket fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3">
                            <div class="fw-bold"><span class="h4 mb-0">401</span><span class="text-success ms-1">2.55% <i class="fa fa-caret-up"></i></span></div>
                            <div class="text-muted small">Total Orders</div>
                            <div class="mt-3">
                                <label class="small d-flex justify-content-between">This Week<span class="fw-bold">248</span></label>
                                <div class="progress mt-1" style="height: 3px;">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label class="small d-flex justify-content-between">Last Week<span class="fw-bold">148</span></label>
                                <div class="progress mt-1" style="height: 3px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" style="width: 44%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-truncate fs-6 fw-bold">Labels</div>
                            <div class="col-auto">
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                        <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap tag-group mt-3">
                            <a href="#" class="m-1 small tag py-1 px-3 border rounded">Family</a>
                            <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded">Home</a>
                            <a href="#" class="m-1 small tag py-1 px-3 border border-primary bg-primary text-light rounded">UI/UX Designer</a>
                            <a href="#" class="m-1 small tag py-1 px-3 border rounded">ReactJs</a>
                            <a href="#" class="m-1 small tag py-1 px-3 border rounded">Angular</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 py-4">
                    <div class="position-absolute top-0 end-0 pt-2 pe-2">
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
                        <svg class="avatar lg mb-4 fill-muted" viewBox="0 0 512.001 512.001">
                            <path d="M498.112,419.272c-5.093-2.141-10.955,0.248-13.096,5.34c-14.051,33.395-46.539,54.973-82.767,54.973    c-43.468,0-79.812-31.062-88.015-72.153c0.007-0.158,0.024-0.313,0.024-0.473c0-4.405-0.578-8.676-1.653-12.748    c-0.07-1.451-0.108-2.91-0.108-4.377c0-37.54,23.17-69.765,55.958-83.14l24.168,85.85c1.242,4.41,5.254,7.293,9.621,7.293    c0.897,0,1.809-0.122,2.715-0.377c5.316-1.497,8.413-7.02,6.916-12.336l-24.169-85.857c4.735-0.775,9.592-1.184,14.543-1.184    c35.711,0,68.017,21.153,82.303,53.891c2.209,5.062,8.102,7.374,13.165,5.165c5.062-2.209,7.375-8.103,5.166-13.165    c-17.468-40.027-56.969-65.891-100.634-65.891c-6.826,0-13.507,0.632-19.992,1.831l-0.857-3.045    c-2.893-10.277-5.052-20.733-6.476-31.288c0-0.004-0.001-0.008-0.001-0.012c-0.824-6.11-1.405-12.252-1.731-18.414    c0.91,4.586,4.956,8.043,9.809,8.043h13.663c18.916,0,34.306-15.39,34.306-34.306s-15.39-34.306-34.306-34.306h-29.997    l-76.693-67.96c3.979,1.155,8.178,1.787,12.524,1.787c24.813,0,45-20.187,45-45s-20.187-45-45-45s-45,20.187-45,45    c0,8.455,2.347,16.369,6.419,23.134c-7.155-3.259-14.983-4.987-23.081-4.987c-14.887,0-28.882,5.798-39.409,16.324l-81.882,81.881    c-0.022,0.022-0.039,0.048-0.061,0.07c-0.263,0.268-0.513,0.553-0.748,0.854c-0.027,0.035-0.057,0.067-0.083,0.102    c-0.01,0.013-0.021,0.024-0.03,0.037c-5.199,6.915-8.168,15.198-8.797,24.132H90.173c-5.523,0-10,4.478-10,10v12.237    c0,20.822,16.94,37.763,37.763,37.763h11.856l-5.128,22.143c-4.879-0.666-9.856-1.018-14.914-1.018    C49.234,280.082,0,329.317,0,389.833c0,37.05,18.457,69.868,46.657,89.751H10c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10    h99.751c54.26,0,99.442-39.583,108.207-91.387c0.611,4.937,4.813,8.761,9.915,8.761h68.02    c6.553,25.68,22.185,47.765,43.262,62.626h-63.488c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10H402.25    c44.298,0,84.021-26.384,101.202-67.217C505.593,427.277,503.202,421.415,498.112,419.272z M372.873,188.585h23.79    c7.888-0.001,14.306,6.416,14.306,14.305c0,7.888-6.417,14.306-14.306,14.306H383c-5.174,0-9.43,3.929-9.947,8.966    c-0.12-3.015-0.18-6.031-0.18-9.052V188.585z M353.842,238.957H253.618c-1.602-1.911-3.283-3.767-5.062-5.547l-31.516-31.517    l41.521-41.521l94.599,68.524C353.32,232.255,353.546,235.611,353.842,238.957z M339.085,258.957l-61.276,55.508l-5.839-36.281    c-0.011-0.07-0.023-0.14-0.036-0.21c-1.208-6.609-3.183-12.977-5.853-19.017H339.085z M302.498,32.411c13.785,0,25,11.215,25,25    c0,13.785-11.215,25-25,25c-13.785,0-25-11.215-25-25C277.498,43.626,288.712,32.411,302.498,32.411z M215.569,106.025    c6.749-6.75,15.722-10.467,25.267-10.467s18.518,3.717,25.269,10.468l86.769,77.059v20.908l-89.487-64.82    c-1.761-1.275-3.817-1.901-5.863-1.901c-2.577,0-5.138,0.992-7.074,2.929l-50.504,50.505l-33.373-9.214l-20.743-5.727    L215.569,106.025z M117.936,238.958c-9.794-0.001-17.763-7.969-17.763-17.763v-2.237h12.003c2.223,7.37,5.844,14.194,10.525,20    H117.936z M109.751,479.584C60.262,479.584,20,439.323,20,389.833s40.262-89.751,89.751-89.751c3.51,0,6.972,0.209,10.379,0.604    l-20.121,86.892c-0.688,2.97,0.017,6.092,1.914,8.479c1.897,2.387,4.779,3.777,7.828,3.777h89.191    C193.953,444.633,155.86,479.584,109.751,479.584z M122.331,379.833l17.283-74.636c31.833,11.265,55.471,40.006,59.328,74.636    H122.331z M144.151,285.61l6.139-26.514l47.929,27.676l15.739,68.609C203.063,322.513,177.026,296.488,144.151,285.61z     M216.738,278.054c-0.621-2.707-2.34-5.034-4.746-6.424l-64.738-37.382c-8.26-4.77-14.706-14.173-16.821-24.541    c-1.271-6.229-0.893-12.128,1.036-17.159l29.122,8.04l37.102,10.243l36.722,36.722c9.283,9.282,15.446,21.008,17.827,33.916    l12.15,75.493c-0.045,0-0.088-0.003-0.133-0.003h-29.42v-0.001L216.738,278.054z M237.873,396.958v-20h26.385    c13.038,0,24.159,8.359,28.287,20H237.873z M294.803,367.414c-2.898-2.244-6.045-4.177-9.397-5.749l-3.806-23.649l76.677-69.458    c1.12,5.279,2.407,10.525,3.872,15.729l0.86,3.054C328.591,300.563,302.467,330.64,294.803,367.414z"></path>
                            <path d="M502,379.833c-5.523,0-10,4.478-10,10l-0.001,0.469c-0.016,5.522,4.448,10.013,9.971,10.029c0.01,0,0.02,0,0.03,0    c5.509,0,9.983-4.458,10-9.971l0.001-0.527C512,384.311,507.523,379.833,502,379.833z"></path>
                            <path d="M243.4,482.517c-1.86-1.87-4.43-2.93-7.07-2.93c-2.63,0-5.21,1.06-7.07,2.93c-1.86,1.86-2.93,4.431-2.93,7.07    c0,2.63,1.07,5.21,2.93,7.07c1.86,1.859,4.44,2.93,7.07,2.93s5.21-1.07,7.07-2.93c1.87-1.86,2.93-4.44,2.93-7.07    C246.33,486.947,245.27,484.377,243.4,482.517z"></path>
                        </svg>
                        <div class="mb-0">Stages Smart</div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa fa-user fa-lg position-absolute top-0 end-0 p-3"></i>
                        <div class="mb-2 text-uppercase">NEW EMPLOYEE</div>
                        <div><span class="h4">51</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
                        <small class="text-muted">Analytics for last week</small>
                    </div>
                    <div class="progress" style="height: 2px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card mb-3 position-relative">
                    <div class="position-absolute top-0 end-0 pt-2 pe-2">
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
                    <div class="card-body icon text-center py-5">
                        <i class="fa fa-file-word-o fa-2x"></i>
                    </div>
                    <div class="card-body border-top">
                        <p class="mb-0 text-muted">Document_2017.doc</p>
                        <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small>
                    </div>
                </div>
                <div class="alert alert-danger rounded-4 mb-3 p-xl-3 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512" style="fill: #dc3545 ;">
                        <g><path d="m467 46h-422c-24.814 0-45 20.186-45 45v150c0 24.814 20.186 45 45 45h422c24.814 0 45-20.186 45-45v-150c0-24.814-20.186-45-45-45zm-90 90c8.284 0 15 6.716 15 15s-6.716 15-15 15-15-6.716-15-15 6.716-15 15-15zm60 90h-362c-8.291 0-15-6.709-15-15s6.709-15 15-15h362c8.291 0 15 6.709 15 15s-6.709 15-15 15zm0-60c-8.284 0-15-6.716-15-15s6.716-15 15-15 15 6.716 15 15-6.716 15-15 15z"></path>
                            <path d="m136 316c-8.291 0-15 6.709-15 15v22.925c0 35.654-19.819 67.705-51.709 83.657-7.412 3.706-10.415 12.715-6.709 20.127 3.688 7.354 12.64 10.426 20.127 6.709 42.129-21.064 68.291-63.398 68.291-110.493v-22.925c0-8.291-6.709-15-15-15z"></path>
                            <path d="m376 316c-8.291 0-15 6.709-15 15v22.925c0 47.095 26.162 89.429 68.291 110.493 7.48 3.713 16.436.652 20.127-6.709 3.706-7.412.703-16.421-6.709-20.127-31.89-15.952-51.709-48.003-51.709-83.657v-22.925c0-8.291-6.709-15-15-15z"></path>
                            <path d="m271 451v-120c0-8.291-6.709-15-15-15s-15 6.709-15 15v120c0 8.291 6.709 15 15 15s15-6.709 15-15z"></path>
                            <path d="m331 451v-120c0-8.291-6.709-15-15-15s-15 6.709-15 15v120c0 8.291 6.709 15 15 15s15-6.709 15-15z"></path>
                            <path d="m211 451v-120c0-8.291-6.709-15-15-15s-15 6.709-15 15v120c0 8.291 6.709 15 15 15s15-6.709 15-15z"></path>
                        </g>
                    </svg>
                    <div class="mt-3">
                        <h6>Air Conditioner</h6>
                        <div class="d-flex flex-wrap justify-content-between small">Temprature: <span class="fw-bold">26° C</span></div>
                        <div class="d-flex flex-wrap justify-content-between small">Status: <span class="fw-bold">Cooling On</span></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card mb-3 p-2">
                    <div class="card-body d-flex align-items-center">
                        <i class="fa fa-google fa-2x"></i>
                        <div class="ms-3">
                            <h5 class="mb-0">Google Calendar</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">See your teams availability while scheduling meeting and interviews. <a href="#">Learn more...</a></p>
                        <div class="btn-group mt-3">
                            <input type="radio" class="btn-check" name="gc-btnradio" id="gc-btnradio1" autocomplete="off" checked="">
                            <label class="btn btn-outline-primary" for="gc-btnradio1">Enabled</label>
                            
                            <input type="radio" class="btn-check" name="gc-btnradio" id="gc-btnradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="gc-btnradio2">Disabled</label>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden mb-3">
                    <div class="card-body position-relative hover-show p-0">
                        <a href="#" class="hover-div position-absolute top-50 start-50 translate-middle py-1 px-2 bg-light rounded shadow-sm text-muted">
                            <i class="fa fa-play-circle fa-3x"></i>
                        </a>
                        <div class="position-absolute top-100 translate-middle start-50 bg-info px-2 py-1 rounded text-light small">HTML</div>
                        <img src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="" class="card-img-top">
                    </div>
                    <div class="card-body text-center">
                        <div class="mb-0 fw-bold">Magento Programmer Course</div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-center p-xl-4 p-lg-3 p-2">
                        <div class="avatar lg rounded-circle no-thumbnail">
                            <svg class="avatar" viewBox="0 0 512.039 512.039">
                                <path class="fill-primary" d="m255.874 67.497c-111.609-97.618-253.518-11.848-255.845 104.427-.593 29.633 7.961 58.498 24.988 85.109h110.364l19.63-32.718c5.7-9.499 19.494-9.805 25.517-.335l41.417 65.083 60.373-127.451c5.265-11.121 20.956-11.474 26.763-.69l51.752 96.111h125.898c93.262-145.76-91.055-311.811-230.857-189.536z"></path>
                                <path class="fill-muted" d="m338.667 279.144-41.936-77.881-59.301 125.19c-5.045 10.651-19.884 11.576-26.211 1.632l-42.97-67.523-11.513 19.188c-2.711 4.518-7.593 7.282-12.862 7.282h-95.128c2.982 3.121-12.911-12.74 196.548 195.634 5.85 5.821 15.307 5.822 21.158 0 206.236-205.168 193.572-192.519 196.548-195.634h-111.126c-5.519.001-10.591-3.029-13.207-7.888z"></path>
                            </svg>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="text-muted">Heart rate</div>
                            <div><span class="h6 fw-bold">104</span> <small class="text-muted">bpm</small></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-truncate fs-6 fw-bold">Labels</div>
                            <div class="col-auto">
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                        <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled mt-3 mb-0">
                            <li class="d-flex justify-content-between align-items-center py-1 mt-2">
                                <a href="#" class="color-600">AngularJs</a>
                                <span class="badge bg-primary rounded">14</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center py-1 mt-2">
                                <a href="#" class="color-600">ReactJs</a>
                                <span class="badge bg-primary rounded">2</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center py-1 mt-2">
                                <a href="#" class="color-600">UI/UX Designer</a>
                                <span class="badge bg-primary rounded">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="mb-0">Server</h5>
                                <small class="small">6% higher than last month</small>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-0">62%</h3>
                                <small class="info">of 1Tb</small>
                            </div>
                        </div>
                        <div class="progress mt-3" style="height: 2px;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-user fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="text-muted">Total Student</div>
                            <h5 class="mb-0">530</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card mb-3 border-primary">
                    <div class="card-header bg-primary d-flex justify-content-between align-items-center border-bottom-0">
                        <h6 class="card-title mb-0 text-light">Planned</h6>
                        <button class="btn btn-sm btn-white" type="button" data-bs-toggle="modal" data-bs-target="#addNewTask"><i class="fa fa-plus"></i> Add task</button>
                    </div>
                    <div class="card p-3">
                        <div class="fw-bold">Item 1</div>
                        <span>It is a long established fact will be distracted.</span>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="project-members">
                                <a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                <a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                            </div>
                            <div class="task-action">
                                <a class="p-1 text-muted fa fa-comments" href="#" title="Comments"><span class="ps-1">10</span></a>
                                <a class="p-1 text-muted fa fa-paperclip" href="#" title="Attachment"><span class="ps-1">2</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Add New Task -->
                    <div class="modal fade" id="addNewTask" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="title" id="defaultModalLabel">Add New Task</h6>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control" placeholder="Task no.">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" placeholder="Job title">
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" placeholder="Description"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <select class="form-control">
                                                <option>Select Team</option>
                                                <option>John Smith</option>
                                                <option>Hossein Shams</option>
                                                <option>Maryam Amiri</option>
                                                <option>Tim Hank</option>
                                                <option>Gary Camara</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label>Range</label>
                                            <div class="input-daterange input-group">
                                                <input type="date" class="form-control" name="start">
                                                <span class="input-group-text">To</span>
                                                <input type="date" class="form-control" name="end">
                                            </div>
                                        </div>                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 p-3">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded-circle no-thumbnail bg-light"><i class="fa fa-dollar fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="small">Revenue</div>
                            <span class="h5 mb-0">$18,925</span>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-center p-lg-3 p-2">
                        <div class="avatar lg rounded-circle no-thumbnail">
                            <svg class="avatar" viewBox="0 0 512.001 512.001">
                                <circle class="fill-primary" cx="255.995" cy="63.999" r="63.999"></circle>
                                <path class="fill-muted" d="M380.385,465.702L301.57,495.26l39.194,14.698c16.868,6.263,35.068-2.415,41.202-18.733    C385.231,482.518,384.265,473.399,380.385,465.702z"></path>
                                <path class="fill-muted" d="M107.238,354.024c-16.515-6.125-34.984,2.188-41.202,18.733c-6.203,16.547,2.188,34.984,18.733,41.202l34.523,12.945    l91.143-34.183L107.238,354.024z"></path>
                                <path class="fill-muted" d="M445.964,372.758c-6.219-16.547-24.687-24.859-41.202-18.733l-255.995,95.998c-16.547,6.219-24.937,24.655-18.734,41.202    c6.133,16.313,24.329,24.998,41.202,18.733l255.995-95.998C443.778,407.742,452.168,389.305,445.964,372.758z"></path>
                                <path class="fill-primary" d="M479.996,255.995h-76.217l-55.155-110.31c-5.732-11.453-17.392-17.978-29.409-17.687H256h-63.218    c-12.015-0.291-23.66,6.235-29.405,17.687l-55.155,110.31H32.005c-17.671,0-31.999,14.328-31.999,31.999    c0,17.671,14.328,31.999,31.999,31.999h95.998c12.125,0,23.203-6.844,28.624-17.687l35.374-70.748v120.08l63.997,23.997    l64.001-24.004V231.558l35.374,70.748c5.422,10.844,16.5,17.687,28.624,17.687h95.998c17.671,0,31.999-14.328,31.999-31.999    S497.667,255.995,479.996,255.995z"></path>
                            </svg>
                        </div>
                        <div class="flex-fill ms-3">
                            <div class="fw-bold h6 mb-1">Meditation</div>
                            <div class="small text-muted"><span>6:00 to 7:00am</span> at. Home</div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 py-4">
                    <div class="position-absolute top-0 end-0 pt-2 pe-2">
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
                        <svg class="avatar lg mb-4 fill-muted" viewBox="0 0 512 512">
                            <path d="m385.521 307.86c4.143 0 7.5-3.357 7.5-7.5v-183.415c0-15.163-12.336-27.5-27.5-27.5h-259.292c-15.163 0-27.5 12.337-27.5 27.5v278.109c0 15.163 12.337 27.5 27.5 27.5h259.292c15.164 0 27.5-12.337 27.5-27.5v-54.735c0-9.697-15-9.697-15 0v54.735c0 6.893-5.607 12.5-12.5 12.5h-259.292c-6.893 0-12.5-5.607-12.5-12.5v-278.109c0-6.893 5.607-12.5 12.5-12.5h259.292c6.893 0 12.5 5.607 12.5 12.5v183.415c0 4.143 3.358 7.5 7.5 7.5z"></path>
                            <path d="m437.132 224.961h-9.21v-113.224c0-31.706-25.794-57.5-57.5-57.5h-17.866v-15.455c0-21.385-17.398-38.782-38.783-38.782h-155.796c-21.384 0-38.781 17.397-38.781 38.782v15.455h-17.866c-31.706 0-57.5 25.794-57.5 57.5v19.271c0 9.697 15 9.697 15 0v-19.271c0-23.435 19.065-42.5 42.5-42.5h269.093c23.435 0 42.5 19.065 42.5 42.5v288.525c0 23.435-19.065 42.5-42.5 42.5h-269.094c-23.435 0-42.5-19.065-42.5-42.5v-229.28c0-9.697-15-9.697-15 0v229.28c0 31.706 25.794 57.5 57.5 57.5h17.866v15.455c0 21.385 17.397 38.782 38.781 38.782h155.797c21.385 0 38.782-17.397 38.782-38.782v-15.455h17.866c31.706 0 57.5-25.794 57.5-57.5v-113.223h9.21c17.115 0 31.039-13.924 31.039-31.039s-13.923-31.039-31.038-31.039zm-302.937-186.179c0-13.113 10.668-23.782 23.781-23.782h155.797c13.113 0 23.782 10.669 23.782 23.782v15.455h-203.36zm203.361 434.436c0 13.113-10.669 23.782-23.782 23.782h-155.797c-13.113 0-23.781-10.669-23.781-23.782v-15.455h203.36zm99.576-201.179h-9.21v-32.078h9.21c8.844 0 16.039 7.195 16.039 16.039s-7.195 16.039-16.039 16.039z"></path>
                            <path d="m289.339 256c0-29.48-23.983-53.464-53.464-53.464s-53.464 23.984-53.464 53.464 23.983 53.464 53.464 53.464 53.464-23.984 53.464-53.464zm-53.464 38.464c-21.209 0-38.464-17.255-38.464-38.464s17.255-38.464 38.464-38.464 38.464 17.255 38.464 38.464-17.255 38.464-38.464 38.464z"></path>
                            <path d="m318.952 360.078c22.608 0 41.001-18.393 41.001-41.001s-18.393-41.002-41.001-41.002-41.002 18.394-41.002 41.002 18.394 41.001 41.002 41.001zm0-67.003c14.337 0 26.001 11.664 26.001 26.002 0 14.337-11.664 26.001-26.001 26.001-14.338 0-26.002-11.664-26.002-26.001 0-14.338 11.664-26.002 26.002-26.002z"></path>
                            <path d="m152.799 233.925c22.608 0 41.001-18.394 41.001-41.002s-18.393-41.001-41.001-41.001-41.002 18.393-41.002 41.001 18.393 41.002 41.002 41.002zm0-67.003c14.337 0 26.001 11.664 26.001 26.001 0 14.338-11.664 26.002-26.001 26.002-14.338 0-26.002-11.664-26.002-26.002 0-14.337 11.664-26.001 26.002-26.001z"></path>
                            <path d="m152.799 360.078c22.608 0 41.001-18.393 41.001-41.001s-18.393-41.002-41.001-41.002-41.002 18.394-41.002 41.002 18.393 41.001 41.002 41.001zm0-67.003c14.337 0 26.001 11.664 26.001 26.002 0 14.337-11.664 26.001-26.001 26.001-14.338 0-26.002-11.664-26.002-26.001 0-14.338 11.664-26.002 26.002-26.002z"></path>
                            <path d="m318.952 151.922c-22.608 0-41.002 18.393-41.002 41.001s18.394 41.002 41.002 41.002 41.001-18.394 41.001-41.002-18.392-41.001-41.001-41.001zm0 67.003c-14.338 0-26.002-11.664-26.002-26.002 0-14.337 11.664-26.001 26.002-26.001 14.337 0 26.001 11.664 26.001 26.001 0 14.338-11.664 26.002-26.001 26.002z"></path>
                            <path d="m265.32 153.073c0-16.236-13.209-29.446-29.445-29.446s-29.445 13.21-29.445 29.446 13.209 29.445 29.445 29.445 29.445-13.208 29.445-29.445zm-43.89 0c0-7.966 6.48-14.446 14.445-14.446s14.445 6.48 14.445 14.446c0 7.965-6.48 14.445-14.445 14.445s-14.445-6.48-14.445-14.445z"></path>
                            <path d="m206.43 358.927c0 16.236 13.209 29.446 29.445 29.446s29.445-13.21 29.445-29.446-13.209-29.445-29.445-29.445-29.445 13.208-29.445 29.445zm43.89 0c0 7.966-6.48 14.446-14.445 14.446s-14.445-6.48-14.445-14.446c0-7.965 6.48-14.445 14.445-14.445s14.445 6.48 14.445 14.445z"></path>
                        </svg>
                        <div class="mb-0">Apple Watch</div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-center">
                        <div class=""><img class="avatar" src="{{ url('/') }}/assets/images/coin/BTC.svg" alt="BTC"></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <span class="text-muted small">Bitcoin</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 fw-bold">$25,450</span>
                                <span class="small text-success">+ 1.25 <i class="fa fa-level-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 text-center">
                    <div class="card-body py-xl-5 py-4">
                        <span>Registered Units</span>
                        <div class="fs-2 text-primary">250</div>
                    </div>
                </div>
                <div class="alert alert-success rounded-4 mb-3">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-dollar fa-lg"></i></div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">Revenue</div>
                            <span class="small">$18,925</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="card-title">Followers</h6>
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0" style="">
                                <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex flex-wrap text-center justify-content-between mb-0">
                            <li class="mt-2">
                                <div class="avatar rounded-circle no-thumbnail bg-light mb-1"><i class="fa fa-facebook-official fa-lg"></i></div>
                                <span class="text-muted">12K</span>
                            </li>
                            <li class="mt-2">
                                <div class="avatar rounded-circle no-thumbnail bg-light mb-1"><i class="fa fa-github fa-lg"></i></div>
                                <span class="text-muted">49K</span>
                            </li>
                            <li class="mt-2">
                                <div class="avatar rounded-circle no-thumbnail bg-light mb-1"><i class="fa fa-twitter-square fa-lg"></i></div>
                                <span class="text-muted">19K</span>
                            </li>
                            <li class="mt-2">
                                <div class="avatar rounded-circle no-thumbnail bg-light mb-1"><i class="fa fa-linkedin-square fa-lg"></i></div>
                                <span class="text-muted">23K</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="text-muted text-uppercase">Applications</div>
                        <div class="mt-1">
                            <span class="fw-bold h4 mb-0">10.5K</span>
                            <span class="text-success ms-1">2.55% <i class="fa fa-caret-up"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-start p-lg-4 p-3">
                        <div class="avatar rounded no-thumbnail">
                            <i class="fa fa-shopping-basket fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3">
                            <div class="fw-bold"><span class="h4 mb-0">401</span><span class="text-success ms-1">2.55% <i class="fa fa-caret-up"></i></span></div>
                            <div class="text-muted small">Total Orders</div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 overflow-hidden">
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <i class="fa fa-credit-card fa-lg position-absolute top-0 end-0 p-3"></i>
                        <div class="mb-2 text-uppercase">Expense</div>
                        <div><span class="h4">$3,251</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
                        <small class="text-muted">Analytics for last week</small>
                    </div>
                </div>
                <div class="card mb-3 bg-success">
                    <div class="card-body p-5 text-light text-center">
                        <h2>$25,481</h2>
                        <span>TOTAL INCOME</span>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="position-absolute top-0 end-0 pt-2 pe-2">
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
                        <div class="avatar lg rounded-circle no-thumbnail mb-4">
                            <svg class="avatar" viewBox="0 0 512.003 512.003">
                                <path class="fill-muted" d="m426.31 434.129c-29.44.37-56.42 11.18-77.4 28.88 13.6 28.78 43.13 48.99 77.35 48.99h.05c35.16-.02 65.18-21.36 78.21-50.96-21-16.84-47.65-26.93-76.6-26.93-.54 0-1.08 0-1.61.02z"></path>
                                <path class="fill-muted" d="m426.31 340.819h-.05c-50.55 0-88.82 43.57-85.43 90.63 24.31-16.94 53.75-27 85.48-27.32.54-.02 1.07-.02 1.61-.02 30.96 0 59.78 9.26 83.87 25.16 3.35-42.09-33.21-88.42-85.48-88.45z"></path>
                                <path class="fill-primary" d="m362.911 315.956c60.714-29.708 109.048-91.69 115.792-161.564 8.974-93.054-60.081-162.603-153.587-153.604-91.078 8.792-171.208 88.913-180.002 180.023-1.45 15.039-.892 29.607 1.568 43.431-5.177 36.014-20.772 61.838-31.024 75.461 0 .001.001.003.001.004-6.919 9.2 1.84-.19-111.273 112.926-5.849 5.86-5.849 15.349 0 21.209 4.483 4.483 37.914 37.919 42.423 42.428 5.839 5.84 15.338 5.87 21.207 0 112.842-113.316 104.134-105.086 112.392-111.496 13.338-10.359 38.976-26.427 74.908-31.921 32.852 5.833 70.968 1.034 107.595-16.897zm-182.606-159.768 33.161 33.165-35.894 35.898c-5.134-21.638-4.138-45.491 2.733-69.063zm9.452 99.3 44.918-44.924 34.279 34.283-44.907 44.912c-13.685-8.205-25.549-19.688-34.29-34.271zm80.506-207.314 42.182 42.187-28.285 28.289-47.642-47.648c10.665-9.096 22.022-16.724 33.745-22.828zm63.392 63.399 17.568 17.57 16.711 16.713-28.285 28.288c-20.818-20.818-13.188-13.188-34.28-34.282zm109.857 67.442-33.157-33.161 35.894-35.898c5.389 22.717 3.796 46.643-2.737 69.059zm-125.07 16.34-28.28 28.284c-17.203-17.205-16.955-16.957-34.279-34.283l28.281-28.284zm-64.165 106.596 35.887-35.891 33.157 33.161c-23.567 6.868-47.412 7.865-69.044 2.73zm99.272-14.917-42.179-42.184 28.28-28.284 47.652 47.657c-10.666 9.094-22.029 16.709-33.753 22.811zm54.959-44.03-47.648-47.649 28.283-28.287 42.181 42.186c-6.101 11.724-13.725 23.083-22.816 33.75zm25.556-163.285-44.918 44.924c-17.203-17.205-16.955-16.957-34.279-34.283l44.918-44.923c14.556 8.726 26.101 20.645 34.279 34.282zm-64.512-46.471-35.895 35.9-33.159-33.163c22.415-6.535 46.336-8.13 69.054-2.737zm-154.246 58.959 47.647 47.652-28.281 28.284-42.177-42.182c6.103-11.723 13.718-23.087 22.811-33.754zm-7.673 222.744c-22.235 8.917-38.573 20.259-48.52 28.374-7.216-7.269-15.619-15.74-22.051-22.198.001-.002.003-.003.004-.005 7.998-10.041 19.11-26.468 27.808-48.765 5.6 9.045 12.895 18.275 22.013 26.789 6.638 6.202 13.52 11.357 20.759 15.801-.005.001-.009.003-.013.004z"></path>
                            </svg>
                        </div>
                        <h6 class="fw-bold">Tennis match</h6>
                        <p>It is a long established fact that a reader will be distracted</p>
                        <div class="project-members mb-4">
                            <label class="me-3">participate :</label>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card mb-3 p-2 text-center">
                    <div class="card-body">
                        <h5>Subscribe to our newsletter!</h5>
                        <p class="text-muted">Receive 30% off, and get all the promotions and updates drectly on your e-mail.</p>
                        <div class="d-flex mt-4">
                            <input type="text" class="form-control" placeholder="E-mail">
                            <button class="btn btn-danger ms-2" type="button"><i class="fa fa-long-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center">
                            <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-google fa-2x"></i></div>
                        </div>
                        <div class="mt-3 p-2">
                            <h5 class="mb-0">Angular Developer</h5>
                            <span class="text-muted text-uppercase small">(Paris, France)</span>
                            <h5 class="mt-3 mb-3 card-footer border-0 fw-bold">$5k - $9k</h5>
                            <a href="#">View more</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title">Share this Link</h6>
                        <p class="text-muted">This link will be opened in a new window</p>
                        <div class="input-group">
                            <input type="text" class="form-control" value="https://themeforest.net/user/wrraptheme/portfolio">
                            <button class="btn btn-primary" type="button"><i class="fa fa-copy"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center">
                            <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-google fa-2x"></i></div>
                        </div>
                        <div class="mt-3 py-2">
                            <h6 class="mb-0">ThemeMakker Inc.</h6>
                            <span class="text-muted text-uppercase small">(Software company, IND)</span>
                            <div class="mt-3">
                                4.9
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                Reviews
                            </div>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-globe"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="position-absolute top-0 end-0 pt-2 pe-2">
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
                        <h6 class="card-title">Average Agent Rating</h6>
                        <h3>4.4 / <small class="fs-5">5</small></h3>
                        <button class="btn btn-warning btn-sm"><i class="fa fa-star"></i></button>
                        <button class="btn btn-warning btn-sm"><i class="fa fa-star"></i></button>
                        <button class="btn btn-warning btn-sm"><i class="fa fa-star"></i></button>
                        <button class="btn btn-warning btn-sm"><i class="fa fa-star-half-empty"></i></button>
                        <button class="btn btn-warning btn-sm"><i class="fa fa-star-o"></i></button>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center py-4">
                        <span>Overall Rating</span>
                        <h2 class="fw-bold color-800 mt-2">4.0</h2>
                        <div class="fs-4">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </div>
                        <span class="text-muted">Bases on 107 Reviews</span>
                    </div>
                    <div class="card-body">
                        <span>Excellent:</span>
                        <div class="progress mt-1 mb-3" style="height: 3px;">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                        </div>
                        <span>Good:</span>
                        <div class="progress mt-1 mb-3" style="height: 3px;">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                        </div>
                        <span>Average:</span>
                        <div class="progress mt-1 mb-3" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                        </div>
                        <span>Bellow Average:</span>
                        <div class="progress mt-1 mb-3" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                        </div>
                        <span>Poor:</span>
                        <div class="progress mt-1 mb-3" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;"></div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-primary p-4 mb-3">
                    <div class="fs-4">Create Job Alert</div>
                    <p>Create a job alert now and never miss a job</p>
                    <div class="my-3">
                        <input type="email" class="form-control" placeholder="Enter job keyword">
                    </div>
                    <button class="btn btn-primary">Create Job Alerts</button>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Star Rating</h4>
                        <span class="text-muted">A simple rating Components</span>
                    </div>
                    <div class="card-body fs-2 py-1">
                        <i class="text-primary fa fa-star"></i>
                        <i class="text-primary fa fa-star"></i>
                        <i class="text-primary fa fa-star"></i>
                        <i class="text-primary fa fa-star-half-empty"></i>
                        <i class="text-primary fa fa-star-o"></i>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-light-primary">Play with value</button>
                    </div>
                </div>
                <div class="card mb-3 overflow-hidden">
                    <div class="p-4 bg-danger d-flex justify-content-between text-light align-items-center">
                        <div><span class="fs-1">10°</span></div>
                        <i class="wi wi-day-lightning fs-1"></i>
                    </div>
                    <div class="card-body">
                        <h6>Melbourne, FL 32904</h6>
                        <span class="text-muted">Saturday 16 January</span>
                    </div>
                </div>
                <div class="card mb-3 p-4 text-center">
                    <div class="icon"><i class="fa fa-facebook fa-3x"></i></div>
                    <div class="mt-2">
                        <div class="fs-4">@ThemeMakker</div>
                        <div class="text-muted"><i class="fa fa-heart me-1"></i>23K</div>
                    </div>
                </div>
                <div class="card mb-3 p-lg-3 p-0">
                    <div class="card-body">
                        <i class="fa fa-cart-arrow-down fa-2x float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-1">Orders</h6>
                        <h2>1,587</h2>
                        <span class="badge bg-primary me-2">+11% </span>
                        <span class="text-muted">From previous period</span>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa fa-google-plus fa-2x"></i>
                        <p>18th Feb</p>
                        <h4>Now Get <span class="text-danger">Up to 70% Off</span> on buy</h4>
                        <div class="mt-3 text-muted"><i>- post form WrapTheme</i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-truncate">
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" title="" alt="Avatar" class="rounded-circle avatar" data-original-title="Avatar Name" data-bs-original-title="">
                                    <div class="ms-3">
                                        <a href="#" title="">Kevin Gill</a>
                                        <p class="mb-0">kevin.gill@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                        <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 mb-3 mt-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Floating label select example">
                                        <option>Bitcoin</option>
                                        <option>Ethereum</option>
                                        <option>Ripple</option>
                                        <option>Cardano</option>
                                        <option>Stellar</option>
                                        <option>RaiBlocks</option>
                                        <option>Monero</option>
                                    </select>
                                    <label>Selects Currency</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Floating label select example">
                                        <option>Bank of America ********65657</option>
                                        <option>Master Card ***********12012</option>
                                        <option>Pay with Paypal</option>
                                    </select>
                                    <label>Payment Method</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" placeholder="Enter Amount">
                                    <label>Enter Amount</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" placeholder="Enter Price">
                                    <label>Enter Price</label>
                                </div>
                            </div>
                            <div class="col-12 d-flex text-center">
                                <button type="button" class="btn flex-fill me-1 btn-light-primary">Buy</button>
                                <button type="button" class="btn flex-fill ms-1 btn-light-danger">Sell</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 text-center">
                    <div class="card-body">
                        <div class="p-4">
                            <div class="fs-1 text-uppercase">get 10% off</div>
                            <span>subscribe to our newsletter &amp; receive a coupon</span>
                        </div>
                        <div class="form-group mb-3 p-4 d-grid gap-2">
                            <input class="form-control" type="text" placeholder="ENTER YOUR EMAIL" name="email">
                            <button class="btn btn-light-primary btn-block" type="button">GET IT NOW!</button>
                        </div>
                        <div class="mt-3">
                            <a href="#" title="">no thanks</a>
                            <p class="mt-2">* $50 minimum purchase</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title m-0">Coin Overview</h5>
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
                        <span class="h3 d-block mb-2">$97,431.14 USD</span>
                        <!-- Progress -->
                        <div class="progress rounded-pill mb-1" style="height: 5px;">
                            <div class="progress-bar chart-color1" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar chart-color2" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar chart-color3" role="progressbar" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar chart-color4" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <span>0%</span>
                            <span>100%</span>
                        </div>
                        <!-- End Progress -->
                        <div class="table-responsive">
                            <table class="table table-striped  table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-square chart-text-color1"></i> BTC</td>
                                        <td>5.71095643</td>
                                        <td><span class="badge bg-success">+12.1%</span></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-square chart-text-color2"></i> LTC</td>
                                        <td>2.409425</td>
                                        <td><span class="badge bg-warning">+6.9%</span></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-square chart-text-color3"></i> XRP</td>
                                        <td>0.0906654</td>
                                        <td><span class="badge bg-danger">-1.5%</span></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-square chart-text-color4"></i> DASH</td>
                                        <td>0.007653</td>
                                        <td><span class="badge bg-success">1.9%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="member-thumb">
                            <img src="{{ url('/') }}/assets/images/lg/avatar1.jpg" class="img-fluid rounded" alt="profile-image">                               
                        </div>
                        <div class="detail mt-3">
                            <h4 class="mb-0">Pro. John</h4>
                            <p class="text-muted">Mathematics</p>
                            <ul class="list-unstyled d-flex mt-2">
                                <li><a class="p-2" href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Facebook" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="p-2" href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Twitter" aria-label="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="p-2" href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Instagram" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 border-primary">
                    <div class="card-header bg-primary border-bottom-0 py-3">
                        <h6 class="card-title mb-0 text-light">My Wallet</h6>
                    </div>
                    <div class="card-body">
                        <div>Available BTC</div>
                        <h3>0.0386245 BTC</h3>
                        <div class="mt-3 pt-3 text-uppercase text-muted border-top pt-2 small">Buy this month
                        </div>
                        <h5>3.0675432 BTC</h5>
                        <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                        <h5>2.0345618 BTC</h5>
                        <div class="btn-group d-flex mt-4">
                            <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio1" checked="">
                            <label class="btn btn-outline-secondary" for="gm-btnradio1">Buy</label>
                            <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio2">
                            <label class="btn btn-outline-secondary" for="gm-btnradio2">Sell</label>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 product-card">
                    <div class="card-body">
                        <div class="product-img text-center">
                            <img src="{{ url('/') }}/assets/images/ecommerce/1.png" class="img-fluid" alt="">
                            <div class="btn-hover text-center">
                                <button class="btn btn-primary me-1"><i class="fa fa-plus"></i></button>
                                <button class="btn btn-primary cart-btn"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                        <div class="product-detail text-center pt-3">
                            <h6><a href="#"><strong class="text-capitalize">Decoration Item</strong></a></h6>
                            <h6 class="mb-0"><del class="me-2">$25</del> <mark>$18</mark></h6>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title mb-3">Request Inquiry</h6>
                        <form class="row g-1">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" placeholder="Name">
                                    <label>Enter Name</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" placeholder="Mobile No.">
                                    <label>Mobile No.</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <label>Email address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                                    <label>Please type what you want...</label>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12">
                <div class="card chat-widgets mb-3">
                    <div class="card-header px-4 bg-transparent d-flex justify-content-between align-items-center">
                        <h6 class="card-title mb-0">Joge Lucky<i class="fa fa-circle text-success ms-2 small"></i></h6>
                        <div class="d-flex">
                            <a class="nav-link py-2 px-3 text-muted" href="javascript:void(0);"><i class="fa fa-phone"></i></a>
                            <a class="nav-link py-2 px-3 text-muted" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                            <a class="nav-link py-2 px-3 text-muted" href="javascript:void(0);"><i class="fa fa-user-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-4 custom_scroll" style="height: 400px;">
                        <ul class="chat-history list-unstyled mb-0 py-lg-5 py-md-4 py-3 flex-grow-1">
                            <!-- Chat: left -->
                            <li class="mb-3 d-flex flex-row align-items-end">
                                <div class="max-width-70">
                                    <div class="user-info mb-1">
                                        <img class="avatar xs rounded-circle me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar">
                                        <span class="text-muted small">10:10 AM, Today</span>
                                    </div>
                                    <div class="card border p-3">
                                        <div class="message"> Hi Aiden, how are you?</div>
                                    </div>
                                </div>
                                <!-- More option -->
                                <div class="btn-group">
                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu border-0 shadow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Chat: right -->
                            <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                <div class="max-width-70 text-end">
                                    <div class="user-info mb-1">
                                        <span class="text-muted small">10:12 AM, Today</span>
                                    </div>
                                    <div class="card p-3 bg-primary text-light">
                                        <div class="message">Are we meeting today?</div>
                                    </div>
                                </div>
                                <!-- More option -->
                                <div class="btn-group">
                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu border-0 shadow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Chat: left -->
                            <li class="mb-3 d-flex flex-row align-items-end">
                                <div class="max-width-70">
                                    <div class="user-info mb-1">
                                        <img class="avatar xs rounded-circle me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar">
                                        <span class="text-muted small">10:10 AM, Today</span>
                                    </div>
                                    <div class="card p-3">
                                        <div class="message">It is a long established fact that a reader will be distracted</div>
                                    </div>
                                </div>
                                <!-- More option -->
                                <div class="btn-group">
                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu border-0 shadow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Chat: left -->
                            <li class="mb-3 d-flex flex-row align-items-end">
                                <div class="max-width-70">
                                    <div class="user-info mb-1">
                                        <img class="avatar xs rounded-circle me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar">
                                        <span class="text-muted small">10:10 AM, Today</span>
                                    </div>
                                    <div class="card p-3">
                                        <div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                                    </div>
                                </div>
                                <!-- More option -->
                                <div class="btn-group">
                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu border-0 shadow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Chat: right -->
                            <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                <div class="max-width-70 text-end">
                                    <div class="user-info mb-1">
                                        <span class="text-muted small">10:12 AM, Today</span>
                                    </div>
                                    <div class="card p-3 bg-primary text-light">
                                        <div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
                                    </div>
                                </div>
                                <!-- More option -->
                                <div class="btn-group">
                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu border-0 shadow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Chat: left -->
                            <li class="mb-3 d-flex flex-row align-items-end">
                                <div class="max-width-70">
                                    <div class="user-info mb-1">
                                        <img class="avatar xs rounded-circle me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar">
                                        <span class="text-muted small">10:10 AM, Today</span>
                                    </div>
                                    <div class="card p-3">
                                        <div class="message">
                                            <p>Please find attached images</p>
                                            <img class="w120 img-thumbnail" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="">
                                            <img class="w120 img-thumbnail" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- More option -->
                                <div class="btn-group">
                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu border-0 shadow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Chat: right -->
                            <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                <div class="max-width-70 text-end">
                                    <div class="user-info mb-1">
                                        <span class="text-muted small">10:12 AM, Today</span>
                                    </div>
                                    <div class="card p-3 bg-primary text-light">
                                        <div class="message">Okay, will check and let you know.</div>
                                    </div>
                                </div>
                                <!-- More option -->
                                <div class="btn-group">
                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu border-0 shadow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer p-4 bg-transparent d-flex">
                        <input class="form-control border-0 ps-0" type="text" placeholder="Type..">
                        <button class="btn btn-light-success">Send</button>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="thumbnail position-relative">
                            <img src="{{ url('/') }}/assets/images/gallery/5.jpg" class="img-fluid rounded-2" alt="">
                            <ul class="list-unstyled position-absolute top-0 end-0 d-flex mt-2 me-2">
                                <li><a href="javascript:void(0);" class="btn btn-sm btn-white"><i class="fa fa-exchange"></i></a></li>
                                <li><a href="javascript:void(0);" class="btn btn-sm btn-white ms-3"><i class="fa fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="grid-content mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <button class="btn btn-sm btn-primary">For Rent</button>
                                    <button class="btn btn-sm btn-secondary">Inquiry</button>
                                </div>
                                <h5 class="mb-0">$8,499/<small class="fs-6">mo</small></h5>
                            </div>
                            <div class="d-flex flex-column mt-3">
                                <h5>Family Home</h5>
                                <p><i class="fa fa-map-pin"></i> 603 Jennifer Ln, Gilbertsville, PA, 19525</p>
                            </div>
                            <div class="d-flex justify-content-between property-info p-2">
                                <p class="mb-0">Beds: <strong>2</strong></p>
                                <p class="mb-0">Baths: <strong>2</strong></p>
                                <p class="mb-0">Sq Ft: <strong>1425</strong></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">By John Doe</div>
                                        <span class="small text-muted">8 min ago</span>
                                    </div>
                                </div>
                                <p class="mb-0">4 years ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 overflow-hidden">
                    <div class="bg-primary py-5 px-4 text-light">
                        <h4>thememakker.com</h4>
                        <span>Warning: You're approaching your limit. Please upgrade.</span>
                    </div>
                    <div class="p-4">
                        <p>You have <strong>1 free</strong> report remaining.</p>
                        <span>Add your credit card now to upgrade your account to a premium plan to ensure you don't miss out on any reports.</span>
                        <div class="mt-4 mb-2">
                            <button type="button" class="btn btn-light-primary">Upgrade my account</button>
                        </div>
                        <span class="text-muted">Thanks for choosing <strong class="text-warning">ThemeMakker</strong> Admin.</span>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-0 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">New Admin Design</a></h5>
                        <p>Lorem Ipsum is simply dummy typesetting industry. When an unknown printer took a scrambled it...<a href="#" class="font-600 text-muted">view more</a></p>
                        
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">124</h5>
                                <p class="text-muted">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">452</h5>
                                <p class="text-muted">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">85</h5>
                                <p class="text-muted">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-3">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">55/85</span></label>
                        <div class="progress mt-1" style="height: 7px;">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden mb-3">
                    <img class="card-img-top" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="About the image">
                    <div class="card-body">
                        <h5 class="mb-4">Cardiology</h5>
                        <div class="team-members">
                            <label class="me-3">Team :</label>
                            <a href="#" title="Dr. name"><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="dr."> </a>
                            <a href="#" title="Dr. name"><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="dr."> </a>
                            <a href="#" title="Dr. name"><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="dr."> </a>
                            <a href="#" title="Dr. name"><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="dr."> </a>
                        </div>
                        <div class="mt-3">
                            <p>How all this mistaken al idea of denouncing pleasure praisings pain was complete[...]</p>
                            <button class="btn btn-primary">More</button>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body doctor-detail order-1 order-md-0">
                        <h3>Dr. Hossein Shams</h3>
                        <div class="d-flex flex-row flex-wrap align-items-center mb-3 mt-2">
                            <div class="me-3 me-md-5">
                                <small class="text-muted">Specialist</small>
                                <div class="mb-0 fw-bold">Cardiologist</div>
                            </div>
                            <div class="me-3 me-md-5">
                                <small class="text-muted">Experience</small>
                                <div class="mb-0 fw-bold">8+</div>
                            </div>
                            <div>
                                <small class="text-muted">City</small>
                                <div class="mb-0 fw-bold">New york</div>
                            </div>
                        </div>
                        <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                        <ul class="resume-box ps-0 pb-0 mb-0">
                            <li>
                                <div class="icon text-center">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="fw-bold mb-0">Address</div>
                                <span>795 Folsom Ave, Suite 600 San Francisco, 94107</span>
                            </li>
                            <li>
                                <div class="icon text-center">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <div class="fw-bold mb-0">Mobile</div>
                                <span>+ 202-555-2828</span>
                            </li>
                            <li>
                                <div class="icon text-center">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="fw-bold mb-0">Email Address</div>
                                <span>HosseinShams@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card overflow-hidden mb-3">
                    <img src="{{ url('/') }}/assets/images/gallery/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="text-muted small">March 12 to March 16</span>
                        <h5 class="card-title">Crow – Bakasana</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="project-members mb-4">
                            <label class="me-3">Event Guru:</label>
                            <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                        </div>
                        <a href="#" class="btn btn-primary">Join Challenge</a>
                    </div>
                </div>
            </div>
        </div> <!-- .row end -->

        <!-- start: navigation btn -->
        <div class="row g-3">
            @include('backend.documentation.next-previous-url')
        </div>
    </div>
@endsection
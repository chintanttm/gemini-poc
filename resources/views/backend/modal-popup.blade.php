@extends('backend.layouts.app')

@section('title', __('Modals'))

@section('content')
    <div class="row g-3 row-deck">
        <!-- start: Upgrade your plan -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-plan.svg" alt="Upgrade your plan" />
                    <h5>Upgrade your plan</h5>
                    <p class="text-muted">Click on the below buttons to launch a Upgrade plan example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#Upgradeplan" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="Upgradeplan" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-4">
                            <div class="mb-4">
                                <h4>Upgrade your plan</h4>
                                <p class="text-muted">Please make the payment to start enjoying all the features of our premium plan as soon as possible</p>
                            </div>
                            <div class="card bg-body flex-row p-3 justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <img src="{{ url('/') }}/assets/images/paper-plane.png" class="rounded" width="40">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fw-bold fs-6">Small Business</span>
                                        <span>CHANGE PLAN</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center fs-5">
                                    <sup class="fw-bold">$</sup>
                                    <span class="mx-1">8,350</span>
                                    <span class="fw-bold">/ year</span>
                                </div>
                            </div>
                            <div class="card my-4">
                                <div class="card-body">
                                    <h6 class="card-title">Payment details</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-row align-items-center">
                                            <img src="{{ url('/') }}/assets/images/visa-card.png" alt="" class="rounded" width="60">
                                            <div class="d-flex flex-column ms-3">
                                                <span class="fw-bold">Credit Card</span>
                                                <span class="small">1234 XXXX XXXX 2570</span>
                                            </div>
                                        </div>
                                        <div><input type="text" class="form-control w60" placeholder="CVC"> </div>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-row align-items-center">
                                            <img src="{{ url('/') }}/assets/images/card.png" alt="" class="rounded" width="60">
                                            <div class="d-flex flex-column ms-3">
                                                <span class="fw-bold">Credit Card</span>
                                                <span class="small">2344 XXXX XXXX 8880</span>
                                            </div>
                                        </div>
                                        <div><input type="text" class="form-control w60" placeholder="CVC"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">ADD PAYMENT METHOD</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address">
                            </div>
                            <button class="btn btn-lg btn-primary text-uppercase w-100">Proceed to payment<i class="fa fa-long-arrow-right ms-3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Flight Booking -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-flightbooking.svg" alt="Flight Booking" />
                    <h5>Flight Booking</h5>
                    <p class="text-muted">Click on the below buttons to launch a Flight Booking example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#FlightBooking" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="FlightBooking" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-5">
                            <div class="row g-3">
                                <div class="col-12 mb-4">
                                    <h4>Flight Booking</h4>
                                    <span class="text-muted">Please make the payment to start enjoying all the features of our premium plan as soon as possible</span>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Roundtrip" value="option1">
                                        <label class="form-check-label" for="Roundtrip">Roundtrip</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Oneway" value="option2">
                                        <label class="form-check-label" for="Oneway">One way</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MultiCity" value="option3">
                                        <label class="form-check-label" for="MultiCity">Multi-City</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="FLYING FROM">
                                        <label>FLYING FROM</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="FLYING TO">
                                        <label>FLYING TO</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" placeholder="DEPARTING">
                                        <label>DEPARTING</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" placeholder="RETURNING">
                                        <label>RETURNING</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select">
                                            <option selected hidden>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label>ADULTS(18+)</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select">
                                            <option selected hidden>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label>CHILDREN(0-17)</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select">
                                            <option selected hidden>Open this select menu</option>
                                            <option value="1">Economy</option>
                                            <option value="2">Premium</option>
                                            <option value="3">Business</option>
                                        </select>
                                        <label>TRAVEL CLASS</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-lg btn-secondary text-uppercase" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-lg btn-primary text-uppercase" type="button">SHOWN FLIGHTS<i class="fa fa-plane ms-3"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Request a Quote -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-quote.svg" alt="Request a Quote" />
                    <h5>Request a Quote</h5>
                    <p class="text-muted">Click on the below buttons to launch a Request a Quote example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#RequestQuote" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="RequestQuote" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-5">
                            <div class="row g-2">
                                <div class="col-12 mb-4">
                                    <h4>Request a Quote</h4>
                                    <span class="text-muted">It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</span>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="First Name">
                                        <label>First Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                        <label>Last Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" placeholder="Mobile Number">
                                        <label>Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" placeholder="Email">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Company Name">
                                        <label>Company Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Evaluate Budget">
                                        <label>Evaluate Budget</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select">
                                            <option selected hidden>Open this select menu</option>
                                            <option value="1">Web Design</option>
                                            <option value="2">Mobile Application</option>
                                            <option value="3">Web Development</option>
                                        </select>
                                        <label>Project Type</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select">
                                            <option selected hidden>Open this select menu</option>
                                            <option value="1">USA</option>
                                            <option value="2">UK</option>
                                            <option value="3">India</option>
                                        </select>
                                        <label>Country</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Maximum time for the project">
                                        <label>Maximum time for the project</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Required Skills">
                                        <label>Required Skills</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small">Upload up to 10 files</label>
                                    <input class="form-control" type="file" multiple>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
                                        <label>Add project details</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-lg btn-secondary text-uppercase" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-lg btn-primary text-uppercase" type="button">Request a Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Search Users -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-searchusers.svg" alt="Search Users" />
                    <h5>Search Users</h5>
                    <p class="text-muted">Click on the below buttons to launch a Search Users example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#SearchUsers" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="SearchUsers" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-5">
                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h5 class="modal-title">Search Users</h5>
                            <p class="text-muted small">If you are going to use a passage of Lorem Ipsum, you need</p>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Search by username, full name or email...">
                                <label>Search by username, full name or email...</label>
                            </div>
                            <h6 class="card-title">Recently searched:</h6>
                            <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Chris Fox</div>
                                    </div>
                                    <small class="text-muted">Angular Developer</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Robert</div>
                                    </div>
                                    <small class="text-muted">ReactJs Developer</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Alexander</div>
                                    </div>
                                    <small class="text-muted">NodeJs Developer</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Orlando Lentz</div>
                                    </div>
                                    <small class="text-muted">Sr. Designer</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Chris Fox</div>
                                    </div>
                                    <small class="text-muted">Designer</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Nellie Maxwell</div>
                                    </div>
                                    <small class="text-muted">Front-End Developer</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Marshall Nichols</div>
                                    </div>
                                    <small class="text-muted">QA</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="">
                                    <div class="flex-fill ms-2">
                                        <div class="h6 mb-0">Chris Fox</div>
                                    </div>
                                    <small class="text-muted">Laravel Developer</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Job listing -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-joblisting.svg" alt="Job listing" />
                    <h5>Job listing</h5>
                    <p class="text-muted">Click on the below buttons to launch a Search Users example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#Joblisting" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="Joblisting" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Job listing</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-lg-5 custom_scroll">
                            <p class="text-muted small">If you are going to use a passage of Lorem Ipsum, you need</p>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <span class="chart-color1 small rounded-pill text-light py-1 px-3">Creative &amp; Art</span>
                                    <h5 class="mt-4"><a href="#">User Experience Designer Employee</a></h5>
                                    <ul class="list-unstyled d-flex my-3">
                                        <li class="me-4"><i class="fa fa-map-marker pe-2"></i> New York, USA</li>
                                        <li><i class="fa fa-clock-o pe-2"></i>Full Time</li>
                                    </ul>
                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <p class="mb-0">Globe Solution Ltd.</p>
                                        <span>2h ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <span class="chart-color5 small rounded-pill text-light py-1 px-3">UI/UX</span>
                                    <h5 class="mt-4"><a href="#">User Experience Designer Employee</a></h5>
                                    <ul class="list-unstyled d-flex my-3">
                                        <li class="me-4"><i class="fa fa-map-marker pe-2"></i> New York, USA</li>
                                        <li><i class="fa fa-clock-o pe-2"></i>Full Time</li>
                                    </ul>
                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <p class="mb-0">Globe Solution Ltd.</p>
                                        <span>2h ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <span class="chart-color3 small rounded-pill text-light py-1 px-3">Finance & Accounting</span>
                                    <h5 class="mt-4"><a href="#">Foreign Language Research Analyst</a></h5>
                                    <ul class="list-unstyled d-flex my-3">
                                        <li class="me-4"><i class="fa fa-map-marker pe-2"></i> New York, USA</li>
                                        <li><i class="fa fa-clock-o pe-2"></i>Full Time</li>
                                    </ul>
                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <p class="mb-0">Globe Solution Ltd.</p>
                                        <span>2h ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Weather Report -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-weather.svg" alt="Weather Report" />
                    <h5>Weather Report</h5>
                    <p class="text-muted">Click on the below buttons to launch a Weather Report example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#WeatherReport" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="WeatherReport" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body p-lg-5 custom_scroll">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Delhi,IN</h5>
                                    <h6>December 04 2021</h6>
                                    <small>Cloudy</small>
                                </div>
                                <div class="text-end">
                                    <h2 class="fw-bold text-primary mb-0"><span>39°</span></h2>
                                </div>
                            </div>
                            <div class="card bg-body my-4 p-3 d-flex flex-row">
                                <div class="flex-fill">
                                    <div class="flex mb-2 justify-between items-center">
                                        <span>Temp</span>
                                        <small class="px-2 inline-block">39.11&nbsp;°</small>
                                    </div>
                                    <div class="flex mb-2 justify-between items-center">
                                        <span>Feels like</span>
                                        <small class="px-2 inline-block">33.33&nbsp;°</small>
                                    </div>
                                </div>
                                <div class="flex-fill">
                                    <div class="flex mb-2 justify-between items-center">
                                        <span>Temp min</span>
                                        <small class="px-2 inline-block">24.9&nbsp;°</small>
                                    </div>
                                    <div class="flex mb-2 justify-between items-center">
                                        <span>Temp max</span>
                                        <small class="px-2 inline-block">39&nbsp;°</small>
                                    </div>
                                </div>
                            </div>
                            <h6 class="card-title">Forecast</h6>
                            <div class="card p-3 d-flex justify-content-between flex-row" style="flex-flow: initial;">
                                <div class="text-center flex items-center justify-center flex-col"><span class="block my-1">Sun</span><i class="wi wi-cloudy-gusts fs-4 w-100 py-2"></i><span class="block my-1">38.3°</span></div>
                                <div class="text-center flex items-center justify-center flex-col"><span class="block my-1">Mon</span><i class="wi wi-cloudy fs-4 w-100 py-2"></i><span class="block my-1">39.9°</span></div>
                                <div class="text-center flex items-center justify-center flex-col"><span class="block my-1">Mon</span><i class="wi wi-cloudy fs-4 w-100 py-2"></i><span class="block my-1">40.1°</span></div>
                                <div class="text-center flex items-center justify-center flex-col"><span class="block my-1">Mon</span><i class="wi wi-hail fs-4 w-100 py-2"></i><span class="block my-1">41.5°</span></div>
                                <div class="text-center flex items-center justify-center flex-col"><span class="block my-1">Mon</span><i class="wi wi-rain fs-4 w-100 py-2"></i><span class="block my-1">40.1°</span></div>
                                <div class="text-center flex items-center justify-center flex-col"><span class="block my-1">Mon</span><i class="wi wi-rain-wind fs-4 w-100 py-2"></i><span class="block my-1">38°</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Connection Request -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-connection.svg" alt="Connection Request" />
                    <h5>Connection Request</h5>
                    <p class="text-muted">Click on the below buttons to launch a Connection Request example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#ConnectionRequest" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ConnectionRequest" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-5">
                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h5 class="modal-title">Connection Request</h5>
                            <p class="text-muted small">If you are going to use a passage of Lorem Ipsum, you need</p>
                            <ul class="list-unstyled custom_scroll mb-0">
                                <li class="card p-3 my-1 flex-row">
                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Chris Fox</div>
                                        <span class="text-muted small">21 mutual connections Sr. ReatJs Developer at Facebook</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <button class="btn mx-1 btn-light-primary"><i class="fa fa-check"></i><span class="d-none d-lg-inline-block ms-2">Accept</span></button>
                                        <button class="btn mx-1 btn-light-danger"><i class="fa fa-close"></i><span class="d-none d-lg-inline-block ms-2">Ignore</span></button>
                                    </div>
                                </li>
                                <li class="card p-3 my-1 flex-row">
                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Marshall Nichols</div>
                                        <span class="text-muted small">5 mutual connections Web Designer at Google</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <button class="btn mx-1 btn-light-primary"><i class="fa fa-check"></i><span class="d-none d-lg-inline-block ms-2">Accept</span></button>
                                        <button class="btn mx-1 btn-light-danger"><i class="fa fa-close"></i><span class="d-none d-lg-inline-block ms-2">Ignore</span></button>
                                    </div>
                                </li>
                                <li class="card p-3 my-1 flex-row">
                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Orlando Lentz</div>
                                        <span class="text-muted small">9 mutual connections Laravel Developer at Linkedin</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <button class="btn mx-1 btn-light-primary"><i class="fa fa-check"></i><span class="d-none d-lg-inline-block ms-2">Accept</span></button>
                                        <button class="btn mx-1 btn-light-danger"><i class="fa fa-close"></i><span class="d-none d-lg-inline-block ms-2">Ignore</span></button>
                                    </div>
                                </li>
                                <li class="card p-3 my-1 flex-row">
                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Alexander</div>
                                        <span class="text-muted small">18 mutual connections PHP Developer at Facebook</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <button class="btn mx-1 btn-light-primary"><i class="fa fa-check"></i><span class="d-none d-lg-inline-block ms-2">Accept</span></button>
                                        <button class="btn mx-1 btn-light-danger"><i class="fa fa-close"></i><span class="d-none d-lg-inline-block ms-2">Ignore</span></button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Create Event -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-event.svg" alt="Create Event" />
                    <h5>Create Event</h5>
                    <p class="text-muted">Click on the below buttons to launch a Create Event example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#CreateEvent" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="CreateEvent" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-5">
                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h4 class="modal-title">Create Event</h4>
                            <p class="text-muted">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                            <div class="row g-2 mt-3">
                                <div class="col-12">
                                    <label class="form-label">Event Title</label>
                                    <input type="text" class="form-control" placeholder="Event Title">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Event description</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date</label>
                                    <input class="form-control" type="date">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Time</label>
                                    <input class="form-control" type="time">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Duration</label>
                                    <input class="form-control" type="number" placeholder="1h 45m">
                                </div>
                                <div class="col-12 text-muted">
                                    <p class="small"><span class="fa fa-check-circle pe-1"></span>This event will take place on the july 14, 2022 form 02:30 PM untill 05:15 PM</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <input class="form-control" type="text" placeholder="Location">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Add guests</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Recipient's username">
                                        <button class="btn btn-outline-secondary" type="button">Add</button>
                                    </div>
                                </div>
                                <div class="col-12 my-4">
                                    <label class="me-3">Participate :</label>
                                    <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                    <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                    <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                                    <a href="#" title=""><img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Set reminder</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Email" value="option1">
                                                <label class="form-check-label" for="Email">Email</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Stack" value="option2">
                                                <label class="form-check-label" for="Stack">Stack</label>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="1 hour before event">
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-lg btn-secondary text-uppercase" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-lg btn-primary text-uppercase" type="button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Create Event -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-sharelink.svg" alt="Share & Earn" />
                    <h5>Share & Earn</h5>
                    <p class="text-muted">Click on the below buttons to launch a Share & Earn example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#ShareEarn" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ShareEarn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-5">
                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h4 class="modal-title">Share & Earn</h4>
                            <p class="text-muted">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                            <div class="row g-4 mt-3">
                                <div class="col-12">
                                    <label class="form-label">Share my referral link with friends</label>
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" placeholder="https://thememakker.com/?ref">
                                        <button class="btn btn-outline-secondary" type="button">Copy Link</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="btn btn-outline-secondary"><i class="fa fa-google me-1"></i>Import Contacts</a>
                                    <a href="#" class="btn btn-outline-secondary"><i class="fa fa-twitter me-1"></i>Twitter</a>
                                    <a href="#" class="btn btn-outline-secondary"><i class="fa fa-facebook-official me-1"></i>Facebook</a>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Adding Users by Team Members</label>
                                    </div>
                                    <span class="text-muted small">If you need more info, please check budget planning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: Order Tracking -->
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card text-center p-2">
                <div class="card-body">
                    <img class="img-fluid mb-4" src="{{ url('/') }}/assets/images/modals/modal-ordertracking.svg" alt="Order Tracking" />
                    <h5>Order Tracking</h5>
                    <p class="text-muted">Click on the below buttons to launch a Order Tracking example.</p>
                    <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#OrderTracking" type="button">View in modals</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="OrderTracking" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body custom_scroll p-lg-5">
                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h4 class="modal-title">Order Tracking</h4>
                            <p class="text-muted">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                            <div class="card bg-body p-md-4 p-2 mb-2">
                                <p class="mb-1">Expected Arrival <span>01/06/2022</span></p>
                                <p class="mb-0">ThemeMakker <span class="fw-bold"><a href="#">V504KO</a></span></p>
                            </div>
                            <ul class="timeline-activity list-unstyled mb-0">
                                <li class="activity px-3 py-2 mb-1" data-date="12:30 - Sun">
                                    <div class="fw-bold small d-flex justify-content-between align-items-center">New Order <span class="badge bg-warning">ID: 215</span></div>
                                    <div>
                                        <small class="text-muted">1 Burger, 1 Corn Rice curd</small>
                                    </div>
                                </li>
                                <li class="activity px-3 py-2 mb-1" data-date="12:31 - Sun">
                                    <div class="fw-bold small">Order Received</div>
                                    <div>
                                        
                                    </div>
                                </li>
                                <li class="activity px-3 py-2 mb-1" data-date="12:32 - Sun">
                                    <div class="fw-bold small">Payment Verify</div>
                                    <div>
                                        <h5 class="mb-0 text-success">$80.5 - Done</h5>
                                        <small class="text-muted">NetBanking</small>
                                    </div>
                                </li>
                                <li class="activity px-3 py-2 mb-1" data-date="12:35 - Sun">
                                    <div class="fw-bold small">Order inprogress</div>
                                    <div>
                                        <label class="me-2">Team:</label>
                                        <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                        <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                        <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                                    </div>
                                </li>
                                <li class="activity px-3 py-2 mb-1" data-date="12:55 - Sun">
                                    <div class="fw-bold small">Delivery on the way</div>
                                    <div>
                                        <p class="mb-1 small text-muted"><i class="fa fa-map-marker ps-1"></i> 123 6th St. Melbourne, FL 32904</p>
                                        <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                                        <label class="ms-1">Robert Hammer</label>
                                    </div>
                                </li>
                                <li class="activity px-3 py-2 mb-1" data-date="01:10 - Sun">
                                    <div class="fw-bold small d-flex justify-content-between align-items-center">Delivery<span class="badge bg-success">Done</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

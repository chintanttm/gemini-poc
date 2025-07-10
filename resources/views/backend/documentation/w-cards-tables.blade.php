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
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-charts') }}">Card Chart</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link active" href="{{ route('admin.documentation.w-cards-tables') }}">Card Tables</a></li>
            </ul>
        </div>
    </div> <!-- .row end -->

    <!-- .card: small widgets -->
    <div class="row g-3">
        <div class="col-12">
            <div class="card bg-transparent p-3">
                <ul class="nav nav-tabs tab-card" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-week1" role="tab">Week 1</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-week2" role="tab">Week 2</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-week3" role="tab">Week 3</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-week4" role="tab">Week 4</a></li>
                </ul>
                <table id="myDataTable_no_filter" class="table align-middle table-bordered mb-0 custom-table">
                    <thead>
                        <tr>                                       
                            <th>Day</th>
                            <th>Yoga Guru</th>
                            <th>Yoga</th>
                            <th>Session</th>
                            <th>Student</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="rounded sm avatar" alt="">
                                    <div class="ms-2 mb-0">Marshall Nichols</div>
                                </div>
                            </td>
                            <td>Bridge – Bandha Sarvangasana</td>
                            <td>5</td>
                            <td>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Video"><i class="fa fa-youtube-play"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Video"><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa fa-download"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('/') }}/assets/images/xs/avatar2.jpg" class="rounded sm avatar" alt="">
                                    <div class="ms-2 mb-0">Nellie Maxwell</div>
                                </div>
                            </td>
                            <td>Arm Balance – Pincha Mayurasana</td>
                            <td>11</td>
                            <td>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Video"><i class="fa fa-youtube-play"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Video"><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa fa-download"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('/') }}/assets/images/xs/avatar3.jpg" class="rounded sm avatar" alt="">
                                    <div class="ms-2 mb-0">Chris Fox</div>
                                </div>
                            </td>
                            <td>Triangle – Trikonasana</td>
                            <td>4</td>
                            <td>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" alt="friend"> </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Video"><i class="fa fa-youtube-play"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Video"><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa fa-download"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="rounded sm avatar" alt="">
                                    <div class="ms-2 mb-0">Marshall Nichols</div>
                                </div>
                            </td>
                            <td>Child Pose – Balasana</td>
                            <td>6</td>
                            <td>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Video"><i class="fa fa-youtube-play"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Video"><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa fa-download"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="rounded sm avatar" alt="">
                                    <div class="ms-2 mb-0">Marshall Nichols</div>
                                </div>
                            </td>
                            <td>Downward Dog – Adho Mukha Svanasana</td>
                            <td>2</td>
                            <td>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Video"><i class="fa fa-youtube-play"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Video"><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa fa-download"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('/') }}/assets/images/xs/avatar8.jpg" class="rounded sm avatar" alt="">
                                    <div class="ms-2 mb-0">Orlando Lentz</div>
                                </div>
                            </td>
                            <td>King Dancer – Natarajasana</td>
                            <td>2</td>
                            <td>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Video"><i class="fa fa-youtube-play"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Video"><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fa fa-download"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-dark">
                <span class="fieldset-tile text-dark bg-body">Workout timetable:</span>
                <ul class="nav nav-tabs tab-card mb-3" role="tablist">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Month</a>
                        <ul class="dropdown-menu border-0 shadow py-3 px-2">
                            <li><a class="dropdown-item py-2 rounded" href="#">Jan 2021</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">Feb 2021</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">March 2021</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">Apr 2021</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">May 2021</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-week1" role="tab">Week 1</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-week1" role="tab">Week 2</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-week1" role="tab">Week 3</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-week1" role="tab">Week 4</a></li>
                </ul>
                <div class="table-responsive">
                    <table class="table align-middle table-bordered mb-0 custom-table text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">09:00am</td>
                                <td>
                                    <span class="badge bg-info text-dark">Dance</span>
                                    <div class="mt-2">9:00-10:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                                <td>
                                    <span class="badge bg-warning text-dark">Yoga</span>
                                    <div class="mt-2">9:00-10:00</div>
                                    <div class="small text-muted">Jack Bird</div>
                                </td>

                                <td>
                                    <span class="badge bg-danger">Music</span>
                                    <div class="mt-2">9:00-10:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                                <td>
                                    <span class="badge bg-success">Dance</span>
                                    <div class="mt-2">9:00-10:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                                <td>
                                    <span class="badge bg-primary">Art</span>
                                    <div class="mt-2">9:00-10:00</div>
                                    <div class="small text-muted">Dean Otto</div>
                                </td>
                                <td>
                                    <span class="badge bg-dark">English</span>
                                    <div class="mt-2">9:00-10:00</div>
                                    <div class="small text-muted">James Smith</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">10:00am</td>
                                <td>
                                    <span class="badge bg-danger">Music</span>
                                    <div class="mt-2">10:00-11:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                                <td class="bg-light-gray">

                                </td>
                                <td>
                                    <span class="badge bg-primary">Art</span>
                                    <div class="mt-2">10:00-11:00</div>
                                    <div class="small text-muted">Dean Otto</div>
                                </td>
                                <td>
                                    <span class="badge bg-warning text-dark">Yoga</span>
                                    <div class="mt-2">10:00-11:00</div>
                                    <div class="small text-muted">Jack Bird</div>
                                </td>
                                <td>
                                    <span class="badge bg-dark">English</span>
                                    <div class="mt-2">10:00-11:00</div>
                                    <div class="small text-muted">James Smith</div>
                                </td>
                                <td class="bg-light-gray">

                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">11:00am</td>
                                <td>
                                    <span class="badge bg-light text-dark">Break</span>
                                    <div class="mt-2">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark">Break</span>
                                    <div class="mt-2">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark">Break</span>
                                    <div class="mt-2">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark">Break</span>
                                    <div class="mt-2">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark">Break</span>
                                    <div class="mt-2">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark">Break</span>
                                    <div class="mt-2">11:00-12:00</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">12:00pm</td>
                                <td class="bg-light-gray">

                                </td>
                                <td>
                                    <span class="badge bg-primary">Art</span>
                                    <div class="mt-2">12:00-1:00</div>
                                    <div class="small text-muted">Dean Otto</div>
                                </td>
                                <td>
                                    <span class="badge bg-success">Dance</span>
                                    <div class="mt-2">12:00-1:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Music</span>
                                    <div class="mt-2">12:00-1:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                                <td class="bg-light-gray">

                                </td>
                                <td>
                                    <span class="badge bg-warning text-dark">Yoga</span>
                                    <div class="mt-2">12:00-1:00</div>
                                    <div class="small text-muted">Jack Bird</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">01:00pm</td>
                                <td>
                                    <span class="badge bg-dark">English</span>
                                    <div class="mt-2">1:00-2:00</div>
                                    <div class="small text-muted">James Smith</div>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Music</span>
                                    <div class="mt-2">1:00-2:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                                <td class="bg-light-gray">

                                </td>
                                <td>
                                    <span class="badge bg-dark">English</span>
                                    <div class="mt-2">1:00-2:00</div>
                                    <div class="small text-muted">James Smith</div>
                                </td>
                                <td>
                                    <span class="badge bg-warning text-dark">Yoga</span>
                                    <div class="mt-2">1:00-2:00</div>
                                    <div class="small text-muted">Jack Bird</div>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Music</span>
                                    <div class="mt-2">1:00-2:00</div>
                                    <div class="small text-muted">Chris Fox</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0">Patients Status</h6>
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
                    <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Patients</th>
                                <th>Adress</th>
                                <th>Admited</th>
                                <th>Discharge</th>
                                <th>Progress</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar3.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>John</span></td>
                                <td>70 Bowman St. South Windsor, CT 06074</td>
                                <td>Sept 13, 2020</td>
                                <td>Sept 16, 2020</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-info">Admit</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Jack Bird</span></td>
                                <td>123 6th St. Melbourne, FL 32904</td>
                                <td>Sept 13, 2020</td>
                                <td>Sept 22, 2020</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">Discharge</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar2.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Jack Bird</span></td>
                                <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                <td>Sept 17, 2020</td>
                                <td>Sept 16, 2020</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">Discharge</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar4.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Dean Otto</span></td>
                                <td>123 6th St. Melbourne, FL 32904</td>
                                <td>Sept 13, 2020</td>
                                <td>Sept 23, 2020</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-info">Admit</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar5.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Hughe L.</span></td>
                                <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                <td>Sept 18, 2020</td>
                                <td>Sept 18, 2020</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-info">Admit</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title m-0">Website Performance</h6>
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
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Source</th>
                                    <th>Visits</th>
                                    <th>Avg. Time</th>
                                    <th>Bounce Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="https://themeforest.net/item/lucid-angular-7-admin-template/23294743" target="_blank">https://themeforest.net/item/lucid-angular-7-admin-template/23294743</a>
                                    </td>
                                    <td>980</td>
                                    <td>55s</td>
                                    <td>5.2%</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="https://themeforest.net/item/hexabit-bootstrap-4x-admin-template-ui-kit/22611789" target="_blank">https://themeforest.net/item/hexabit-bootstrap-4x-admin-template-ui-kit/22611789</a>
                                    </td>
                                    <td>851</td>
                                    <td>16s</td>
                                    <td>8.0%</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861" target="_blank">https://themeforest.net/item/lucid-hr-and-project-management-admin-template/22308861</a>
                                    </td>
                                    <td>321</td>
                                    <td>10s</td>
                                    <td>5.7%</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="https://themeforest.net/item/nexa-bootstrap4-material-design-premium-admin-dashboard/21122489" target="_blank">https://themeforest.net/item/nexa-bootstrap4-material-design-premium-admin-dashboard/21122489</a>
                                    </td>
                                    <td>205</td>
                                    <td>57s</td>
                                    <td>5.3%</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    </td>
                                    <td>89</td>
                                    <td>45s</td>
                                    <td>6.1%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="myDataTable table table-hover align-middle mb-0" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date Start</th>
                                <th>Days to Deadline</th>
                                <th>Progress</th>
                                <th>Priority</th>
                                <th>Leader</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Spot Media</a></td>
                                <td>18-05-2020</td>
                                <td>12 days</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning">MEDIUM</span></td>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="Avatar" class="avatar sm rounded me-2"><a href="#">Michael</a></td>
                                <td><span class="badge bg-success">ACTIVE</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">E-Commerce Site</a></td>
                                <td>24-05-2020</td>
                                <td>30 days</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">LOW</span></td>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="Avatar" class="avatar sm rounded me-2"><a href="#">Antonius</a></td>
                                <td><span class="badge bg-warning">PENDING</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Project 123GO</a></td>
                                <td>20-09-2020</td>
                                <td>50 days</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">65%</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger">HIGH</span></td>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="Avatar" class="avatar sm rounded me-2"><a href="#">Antonius</a></td>
                                <td><span class="badge bg-success">ACTIVE</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Wordpress Theme</a></td>
                                <td>05-10-2020</td>
                                <td>40 days</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">77%</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning">MEDIUM</span></td>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="Avatar" class="avatar sm rounded me-2"><a href="#">Michael</a></td>
                                <td><span class="badge bg-success">ACTIVE</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Redesign Landing Page</a></td>
                                <td>15-11-2020</td>
                                <td>30 days</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">25%</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">LOW</span></td>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="Avatar" class="avatar sm rounded me-2"><a href="#">Jason</a></td>
                                <td><span class="badge bg-success">ACTIVE</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Wordpress Theme</a></td>
                                <td>05-10-2020</td>
                                <td>N/A</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary">MEDIUM</span></td>
                                <td><img src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="Avatar" class="avatar sm rounded me-2"><a href="#">Michael</a></td>
                                <td><span class="badge bg-secondary">CLOSED</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">New Admission List</h6>
                </div>
                <div class="card-body">
                    <table class="myDataTable table table-hover m-b-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Number</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>OU 00456</td>
                                <td>Joseph</td>
                                <td>25</td>
                                <td>70 Bowman St. South Windsor, CT 06074</td>
                                <td>404-447-6013</td>
                                <td><span class="badge bg-primary">MCA</span></td>
                            </tr>
                            <tr>
                                <td>KU 00789</td>
                                <td>Cameron</td>
                                <td>27</td>
                                <td>123 6th St. Melbourne, FL 32904</td>
                                <td>404-447-4569</td>
                                <td><span class="badge bg-warning">Medical</span></td>
                            </tr>
                            <tr>
                                <td>KU 00987</td>
                                <td>Alex</td>
                                <td>23</td>
                                <td>123 6th St. Melbourne, FL 32904</td>
                                <td>404-447-7412</td>
                                <td><span class="badge bg-info">M.COM</span></td>
                            </tr>
                            <tr>
                                <td>OU 00951</td>
                                <td>James</td>
                                <td>23</td>
                                <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                <td>404-447-2589</td>
                                <td><span class="badge bg-dark">MBA</span></td>
                            </tr>
                            <tr>
                                <td>OU 00953</td>
                                <td>charlie</td>
                                <td>21</td>
                                <td>123 6th St. Melbourne, FL 32904</td>
                                <td>404-447-9632</td>
                                <td><span class="badge bg-success">BBA</span></td>
                            </tr>
                            <tr>
                                <td>KU 00987</td>
                                <td>Alex</td>
                                <td>23</td>
                                <td>123 6th St. Melbourne, FL 32904</td>
                                <td>404-447-7412</td>
                                <td><span class="badge bg-info">M.COM</span></td>
                            </tr>
                            <tr>
                                <td>OU 00951</td>
                                <td>James</td>
                                <td>23</td>
                                <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                <td>404-447-2589</td>
                                <td><span class="badge bg-dark">MBA</span></td>
                            </tr>
                            <tr>
                                <td>OU 00456</td>
                                <td>Joseph</td>
                                <td>25</td>
                                <td>70 Bowman St. South Windsor, CT 06074</td>
                                <td>404-447-6013</td>
                                <td><span class="badge bg-primary">MCA</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Recent Transactions</h6>
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
                    <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width:60px;">#</th>
                                <th>Name</th>
                                <th>Item</th>
                                <th>Address</th>
                                <th>Quantity</th>                                    
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img width="60" class="rounded" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="Product img"></td>
                                <td>Hossein</td>
                                <td>IPONE-7</td>
                                <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                <td>3</td>
                                <td><span class="badge bg-success">DONE</span></td>
                                <td>$ 356</td>
                            </tr>
                            <tr>
                                <td><img width="60" class="rounded" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt="Product img"></td>
                                <td>Camara</td>
                                <td>NOKIA-8</td>
                                <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                <td>3</td>
                                <td><span class="badge bg-secondary">Delivered</span></td>
                                <td>$ 542</td>
                            </tr>
                            <tr>
                                <td><img width="60" class="rounded" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="Product img"></td>
                                <td>Maryam</td>
                                <td>NOKIA-456</td>
                                <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                <td>4</td>
                                <td><span class="badge bg-success">DONE</span></td>
                                <td>$ 231</td>
                            </tr>
                            <tr>
                                <td><img width="60" class="rounded" src="{{ url('/') }}/assets/images/gallery/4.jpg" alt="Product img"></td>
                                <td>Micheal</td>
                                <td>SAMSANG PRO</td>
                                <td>508 Virginia Street Chicago, IL 60653</td>
                                <td>1</td>
                                <td><span class="badge bg-success">DONE</span></td>
                                <td>$ 601</td>
                            </tr>
                            <tr>
                                <td><img width="60" class="rounded" src="{{ url('/') }}/assets/images/gallery/5.jpg" alt="Product img"></td>
                                <td>Frank</td>
                                <td>NOKIA-456</td>
                                <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                <td>13</td>
                                <td><span class="badge bg-warning">PENDING</span></td>
                                <td>$ 128</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <ul class="list-unstyled mb-0">
                    <li class="d-flex p-3 border-bottom">
                        <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="avatar rounded" alt="profile-image">
                        <div class="flex-fill ms-3">
                            <h6 class="mb-0">Cameron Fox</h6>
                            <div class="mb-2">
                                <span class="badge bg-warning me-2">5</span>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star small"></i>
                            </div>
                            <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                        </div>
                    </li>
                    <li class="d-flex p-3">
                        <img src="{{ url('/') }}/assets/images/xs/avatar4.jpg" class="avatar rounded" alt="profile-image">
                        <div class="flex-fill ms-3">
                            <h6 class="mb-0">Fidel Tonn</h6>
                            <div class="mb-2">
                                <span class="badge bg-warning me-2">4.5</span>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star small"></i>
                                <i class="fa fa-star-half-o small"></i>
                            </div>
                            <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card bg-transparent border-0">
                <div class="card border-0 mb-1">
                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3">
                        <input class="form-check-input" type="checkbox" id="Eaten-switch1" checked="">
                        <label class="form-check-label" for="Eaten-switch1">Eaten</label>
                    </div>
                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                        <img class="w120 rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="">
                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                            <h6 class="mb-3">Potatoes with Pepper &amp; Onions</h6>
                            <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Calories</div>
                                    <strong>380</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Size</div>
                                    <strong>80g</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Servings</div>
                                    <strong>2</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Store</div>
                                    <strong>Thomas's Joe</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-1">
                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3">
                        <input class="form-check-input" type="checkbox" id="Eaten-switch4">
                        <label class="form-check-label" for="Eaten-switch4">Eaten</label>
                    </div>
                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                        <img class="w120 rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt="">
                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                            <h6 class="mb-3">Potatoes with Pepper &amp; Onions</h6>
                            <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Calories</div>
                                    <strong>450</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Size</div>
                                    <strong>50g</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Servings</div>
                                    <strong>5</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Store</div>
                                    <strong>Thomas's Joe</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3">
                        <input class="form-check-input" type="checkbox" id="Eaten-switch5">
                        <label class="form-check-label" for="Eaten-switch5">Eaten</label>
                    </div>
                    <div class="card-body d-flex align-items-center flex-column flex-md-row">
                        <img class="w120 rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="">
                        <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                            <h6 class="mb-3">Potatoes with Pepper &amp; Onions</h6>
                            <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Calories</div>
                                    <strong>450</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Size</div>
                                    <strong>50g</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Servings</div>
                                    <strong>5</strong>
                                </div>
                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                    <div class="text-muted small">Store</div>
                                    <strong>Thomas's Joe</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card bg-transparent border-0">
                <div class="card border-0 mb-1">
                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <div class="dropdown morphing scale-left">
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
                        <div class="d-flex align-items-center flex-column flex-md-row">
                            <img class="w120 rounded" src="{{ url('/') }}/assets/images/lg/avatar1.jpg" alt="">
                            <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                <h6 class="fw-bold mb-1">Edit Toke</h6>
                                <div class="mb-3">
                                    <span class="text-muted"><i class="fa fa-map-marker ps-1"></i> 123 6th St. Melbourne, FL 32904</span>
                                    <p>I have been a Personal trainer for 2 years building a women's fitness company Bootcamp company in 2018.</p>
                                </div>
                                <div class="row row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2 g-1 mb-2">
                                    <div class="col">
                                        <strong>11 year</strong>
                                        <div class="text-muted small">Experience</div>
                                    </div>
                                    <div class="col">
                                        <strong>+ 41 012 345 5678</strong>
                                        <div class="text-muted small">Mobile</div>
                                    </div>
                                    <div class="col">
                                        <strong>$60</strong>
                                        <div class="text-muted small">Per session</div>
                                    </div>
                                    <div class="col">
                                        <strong>Level 3</strong>
                                        <div class="text-muted small">Fitness Level</div>
                                    </div>
                                    <div class="col">
                                        <strong>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </strong>
                                        <div class="text-muted small">Review</div>
                                    </div>
                                    <div class="col">
                                        <strong>Yoga</strong>
                                        <div class="text-muted small">Speciality</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-1">
                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <div class="dropdown morphing scale-left">
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
                        <div class="d-flex align-items-center flex-column flex-md-row">
                            <img class="w120 rounded" src="{{ url('/') }}/assets/images/lg/avatar3.jpg" alt="">
                            <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                <h6 class="fw-bold mb-1">Brian Swader</h6>
                                <div class="mb-3">
                                    <span class="text-muted"><i class="fa fa-map-marker ps-1"></i> 44 Shirley Ave. West Chicago, IL 60185</span>
                                    <p>I have been on my own fitness journey in the last few years dropping from nearly 100kg down to 85</p>
                                </div>
                                <div class="row row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2 g-1 mb-2">
                                    <div class="col">
                                        <strong>8 year</strong>
                                        <div class="text-muted small">Experience</div>
                                    </div>
                                    <div class="col">
                                        <strong>+ 41 012 345 2525</strong>
                                        <div class="text-muted small">Mobile</div>
                                    </div>
                                    <div class="col">
                                        <strong>$95</strong>
                                        <div class="text-muted small">Per session</div>
                                    </div>
                                    <div class="col">
                                        <strong>Level 5</strong>
                                        <div class="text-muted small">Fitness Level</div>
                                    </div>
                                    <div class="col">
                                        <strong>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </strong>
                                        <div class="text-muted small">Review</div>
                                    </div>
                                    <div class="col">
                                        <strong>Nutrition</strong>
                                        <div class="text-muted small">Speciality</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->
@endsection
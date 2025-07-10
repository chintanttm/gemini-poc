@extends('backend.layouts.app')

@section('title', __('App Project'))

@section('content')
@php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
@endphp
<div class="d-flex flex-nowrap">
    <div class="order-1 custom_scroll">
        <button type="button" class="btn bg-secondary text-light mb-3 w-100" data-bs-toggle="modal" data-bs-target="#CreateNew">New Project</button>
        <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#project_all" role="tab"><i class="fa fa-tasks"></i><span>All Project</span><span class="badge bg-light text-dark ms-2 ms-auto">18</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#project_progress" role="tab"><i class="fa fa-product-hunt"></i><span>In Progress</span><span class="badge bg-light text-dark ms-2 ms-auto">3</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#project_coming" role="tab"><i class="fa fa-clock-o"></i><span>Up Coming</span><span class="badge bg-light text-dark ms-2 ms-auto">2</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#project_overdue" role="tab"><i class="fa fa-calendar"></i><span>Overdue</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#project_done" role="tab"><i class="fa fa-check-circle"></i><span>Completed</span></a></li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Project Revenue</small></li>
            <li>
                <h2 class="fw-normal">$78,890</h2>
                <div class="my-3">
                    <div class="mb-0 fw-bold">$5,250 <span class="fa fa-level-up text-success"></span></div>
                    <small class="text-muted">Project Profit</small>
                </div>
                <div>
                    <div class="mb-0 fw-bold">$1,450 <span class="fa fa-level-down text-danger"></span></div>
                    <small class="text-muted">Project Expense</small>
                </div>
            </li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Our Clients</small></li>
            <li>
                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Clients name" ><img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt=""></a>
                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Clients name" ><img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt=""></a>
                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Clients name" ><img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt=""></a>
                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Clients name" ><img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt=""></a>
                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Clients name" ><img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt=""></a>
            </li>
        </ul>
    </div>
    <div class="order-2 flex-grow-1 px-lg-3 px-0 custom_scroll">
        <!-- start: page toolbar -->
        <div class="page-toolbar py-2">
            <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
                <div class="row mb-3 align-items-center">
                    <div class="col">
                        <ol class="breadcrumb bg-transparent mb-0">
                            @foreach (Breadcrumbs::current() as $crumb)
                                @if ($crumb->url() && !$loop->last)
                                    <li class="breadcrumb-item">
                                        <x-utils.link :href="$crumb->url()" :text="$crumb->title()" class="text-secondary"/>
                                    </li>
                                @else
                                    <li class="breadcrumb-item active">
                                        {{ $crumb->title() }}
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </div>
                </div> <!-- .row end -->
            </div>
        </div>
        <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
            <div class="row g-3">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="project_all" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">All Project</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">School / University</a></h5>
                                            <p class="text-muted">CRM App application to University Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">7</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">4</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">3</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">95% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 Aug, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$12,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">LUNO job Portal</a></h5>
                                            <p class="text-muted">CRM App application to University Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">10</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">5</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">4</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">75% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 May, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$22,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">Shift CRM</a></h5>
                                            <p class="text-muted">CRM App application to CRM Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">13</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">5</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">8</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">61% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100" style="width: 61%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 Jun, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$1,12,500</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">WT.TH Health analytics</a></h5>
                                            <p class="text-muted">CRM App application to Health analytics Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">12</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">2</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">7</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">25% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 Feb, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$2,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">TTM Banking</a></h5>
                                            <p class="text-muted">CRM App application to Banking Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">7</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">4</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">3</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">75% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 Aug, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$12,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">LUNO Hospital</a></h5>
                                            <p class="text-muted">CRM App application to Hospital Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">15</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">8</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">1</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">45% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 Jan, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$3,150</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">SKO Cryptocurrency</a></h5>
                                            <p class="text-muted">CRM App application to Cryptocurrency Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">7</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">4</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">3</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">8% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 Aug, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$12,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">ATKT Event Managment</a></h5>
                                            <p class="text-muted">CRM App application to Event Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">11</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">6</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">8</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">83% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 March, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$8,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="project_progress" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">In Progress</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">LUNO job Portal</a></h5>
                                            <p class="text-muted">CRM App application to University Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">10</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">5</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">4</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">75% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 May, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$22,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">LUNO Hospital</a></h5>
                                            <p class="text-muted">CRM App application to Hospital Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">15</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">8</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">1</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">75% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 Jan, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$3,150</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">ATKT Event Managment</a></h5>
                                            <p class="text-muted">CRM App application to Event Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">11</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">6</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">8</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">75% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Due date: <strong>21 March, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$8,050</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="project_coming" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Up Coming</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">WT.TH Health analytics</a></h5>
                                            <p class="text-muted">CRM App application to Health analytics Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">0</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">0</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">0</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">0% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>Start date: <strong>18 Jan, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$13,180</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mb-1"><a href="{{ route('admin.applications.app-project-detail') }}" class="color-600">TTM Banking</a></h5>
                                            <p class="text-muted">CRM App application to Banking Admin..</p>
                                            <ul class="list-inline d-flex my-4">
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">0</h6>
                                                    <small class="text-uppercase text-muted">Issues</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">0</h6>
                                                    <small class="text-uppercase text-muted">Resolved</small>
                                                </li>
                                                <li class="list-inline-item card py-2 px-xxl-3 px-xl-2 px-3">
                                                    <h6 class="mb-0">0</h6>
                                                    <small class="text-uppercase text-muted">Comment</small>
                                                </li>
                                            </ul>
                                            <div class="project-members mb-4">
                                                <label class="me-2">Team :</label>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Lead" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Designer" alt="friend"> </a>
                                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Developer" alt="friend"> </a>
                                            </div>
                                            <label class="small d-flex justify-content-between">0% <span class="text-custom">Done</span></label>
                                            <div class="progress mt-1" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <span>start date: <strong>24 Feb, 2022</strong></span>
                                            <span class="px-3">|</span>
                                            <span>Budget: <strong>$28,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="project_overdue" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Overdue Project</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card">
                                <div class="card-body text-center p-5">
                                    <img src="{{ url('/') }}/assets/images/no-data.svg" class="w120" alt="No Data">
                                    <div class="mt-4 mb-3">
                                        <span class="text-muted">No data to show</span>
                                    </div>
                                    <button type="button" class="btn btn-white border lift">Get Started</button>
                                    <button type="button" class="btn btn-primary border lift">Back to Home</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="project_done" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Completed</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card">
                                <div class="card-body text-center p-5">
                                    <img src="{{ url('/') }}/assets/images/no-data.svg" class="w120" alt="No Data">
                                    <div class="mt-4 mb-3">
                                        <span class="text-muted">No data to show</span>
                                    </div>
                                    <button type="button" class="btn btn-white border lift">Get Started</button>
                                    <button type="button" class="btn btn-primary border lift">Back to Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .row end -->
        </div>
        <!-- start: page footer -->
        <footer class="page-footer px-xl-4 px-sm-2 px-0 py-3">
            <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
                <p class="col-md-4 mb-0 text-muted">© 2022 <a href="https://www.thememakker.com/" target="_blank" title="ThemeMakker Infotech LLP">ThemeMakker</a>, All Rights Reserved.</p>
                <a href="#" class="col-md-4 d-flex align-items-center justify-content-center my-3 my-lg-0 me-lg-auto">
                    <svg height="18" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z"/>
                        <path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z"/>
                        <path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z"/>
                        <path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z"/>
                    </svg>
                </a>
                <ul class="nav col-md-4 justify-content-center justify-content-lg-end">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
@endsection

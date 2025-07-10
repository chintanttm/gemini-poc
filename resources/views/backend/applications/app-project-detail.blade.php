@extends('backend.layouts.app')

@section('title', __('App Project detail'))

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
        <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0">
            <li class="nav-item"><a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#pd_overview" role="tab">Overview</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#pd_users" role="tab">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#pd_files" role="tab">Files</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#pd_activity" role="tab">Activity</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#pd_settings" role="tab">Settings</a></li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Project Cost</small></li>
            <li>
                <h2 class="fw-normal">$8,890</h2>
                <div class="mt-3">
                    <div class="mb-0 fw-bold">22 Feb 2022</div>
                    <small class="text-muted">Due Date</small>
                </div>
            </li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Clients Detail</small></li>
            <li>
                <div class="circle">
                    <img class="avatar xl rounded-circle img-thumbnail" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <button class="btn btn-outline-secondary btn-sm mt-3">Message</button>
            </li>
        </ul>
        
    </div>
    <div class="order-2 flex-grow-1 px-lg-3 px-0 custom_scroll">
        <!-- start: page toolbar -->
        <div class="page-toolbar py-2">
            <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}"">
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
        <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}"">
            <div class="row g-3">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pd_overview" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h1 class="fs-4 mt-1 mb-0"><a class="me-2 fa fa-arrow-circle-left" href="{{ route('admin.applications.app-project') }}" title="back"></a>Project Overview</h1>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-3 row-deck">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="fw-bold h4 mb-2">1.5K</span>
                                            <div class="text-muted text-uppercase small">Upfront Payment</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="fw-bold h4 mb-2">3.5K</span>
                                            <div class="text-muted text-uppercase small">Invoice Sent</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="fw-bold h4 mb-2">4K</span>
                                            <div class="text-muted text-uppercase small">Payment Received</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="fw-bold h4 mb-2">1.7K</span>
                                            <div class="text-muted text-uppercase small">Amount Pending</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-7 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Tasks Over Time</h6>
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
                                            <div id="apex-wc-9"></div>
                                        </div>
                                    </div> <!-- .card end -->
                                </div>
                                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Tasks Summary</h6>
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
                                        <div class="card-body text-center pt-0">
                                            <div class="d-flex">
                                                <div class="card flex-fill me-1 px-2 py-3">
                                                    <h6 class="mb-0 fw-bold">27</h6>
                                                    <small class="text-muted">RESOLVED</small>
                                                </div>
                                                <div class="card flex-fill ms-1 px-2 py-3">
                                                    <h6 class="mb-0 fw-bold">13</h6>
                                                    <small class="text-muted">ISSUES</small>
                                                </div>
                                            </div>
                                            <div class="mt-3" id="apex-wc-12"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title">Milestones</h6>
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
                                        <div class="bg-light py-3 px-4">
                                            <span>Overall progress</span>
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-primary-gradient" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span>App Ui design</span>
                                            <div class="progress mt-2 mb-4" style="height: 5px;">
                                                <div class="progress-bar chart-color1" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                            </div>
                                            <span>Desktop app development</span>
                                            <div class="progress mt-2 mb-4" style="height: 5px;">
                                                <div class="progress-bar chart-color2" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                            </div>
                                            <span>Website design</span>
                                            <div class="progress mt-2 mb-4" style="height: 5px;">
                                                <div class="progress-bar chart-color3" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                            </div>
                                            <span>QA Analyst</span>
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar chart-color4" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-7 col-lg-12 col-md-4 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title">Project Team</h6>
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
                                        <ul class="list-group list-group-flush list-group-custom mb-0">
                                            <li class="list-group-item d-flex align-items-center">
                                                <div class="avatar rounded-circle"><img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"></div>
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Chris Fox</div>
                                                    <small class="text-muted">Design Lead</small>
                                                </div>
                                                <div class="flex-end avatar-list">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend">
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center">
                                                <div class="avatar rounded-circle"><img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend"></div>
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Cindy Anderson</div>
                                                    <small class="text-muted">Marketing Lead</small>
                                                </div>
                                                <div class="flex-end avatar-list">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend">
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center">
                                                <div class="avatar rounded-circle"><img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"></div>
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Maryam Amiri</div>
                                                    <small class="text-muted">Dev Lead</small>
                                                </div>
                                                <div class="flex-end avatar-list">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend">
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center">
                                                <div class="avatar rounded-circle"><img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"></div>
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Alexander</div>
                                                    <small class="text-muted">QA Lead</small>
                                                </div>
                                                <div class="flex-end avatar-list">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend">
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center">
                                                <div class="avatar rounded-circle"><img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"></div>
                                                <div class="flex-fill ms-3">
                                                    <div class="h6 mb-0">Joge Lucky</div>
                                                    <small class="text-muted">Sales Lead</small>
                                                </div>
                                                <div class="flex-end avatar-list">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pd_users" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h1 class="fs-4 mt-1 mb-0">Users (11)</h1>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-2">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-start flex-column flex-md-row">
                                            <img class="avatar lg rounded-circle img-thumbnail ms-auto me-auto" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body ms-md-2 ms-lg-3 ms-xl-4 text-md-start text-center w-100 mt-4 mt-md-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-4 mb-3 mb-md-0">
                                                        <h6 class="mb-1">Andew Jon</h6>
                                                        <span class="text-muted">Developer</span>
                                                    </div>
                                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 text-center">
                                                        <ul class="list-unstyled d-flex mb-0 text-center text-md-start">
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-danger">21</h6>
                                                                <span class="text-muted">Tasks</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3 mx-1">
                                                                <h6 class="mb-0 text-success">$1,025</h6>
                                                                <span class="text-muted">Earnings</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-primary">$5,007</h6>
                                                                <span class="text-muted">Sales</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2 col-md-2 text-center text-md-end mt-3 mt-md-0">
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Github"><i class="fa fa-github"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-start flex-column flex-md-row">
                                            <img class="avatar lg rounded-circle img-thumbnail ms-auto me-auto" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body ms-md-2 ms-lg-3 ms-xl-4 text-md-start text-center w-100 mt-4 mt-md-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-4 mb-3 mb-md-0">
                                                        <h6 class="mb-1">Emma Smith</h6>
                                                        <span class="text-muted">Web Designer</span>
                                                    </div>
                                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 text-center">
                                                        <ul class="list-unstyled d-flex mb-0 text-center text-md-start">
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-danger">5</h6>
                                                                <span class="text-muted">Tasks</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3 mx-1">
                                                                <h6 class="mb-0 text-success">$1,450</h6>
                                                                <span class="text-muted">Earnings</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-primary">$5,120</h6>
                                                                <span class="text-muted">Sales</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2 col-md-2 text-center text-md-end mt-3 mt-md-0">
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Github"><i class="fa fa-github"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-start flex-column flex-md-row">
                                            <img class="avatar lg rounded-circle img-thumbnail ms-auto me-auto" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body ms-md-2 ms-lg-3 ms-xl-4 text-md-start text-center w-100 mt-4 mt-md-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-4 mb-3 mb-md-0">
                                                        <h6 class="mb-1">Bucky Barnes</h6>
                                                        <span class="text-muted">Developer</span>
                                                    </div>
                                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 text-center">
                                                        <ul class="list-unstyled d-flex mb-0 text-center text-md-start">
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-danger">8</h6>
                                                                <span class="text-muted">Tasks</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3 mx-1">
                                                                <h6 class="mb-0 text-success">$1,750</h6>
                                                                <span class="text-muted">Earnings</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-primary">$5,800</h6>
                                                                <span class="text-muted">Sales</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2 col-md-2 text-center text-md-end mt-3 mt-md-0">
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Github"><i class="fa fa-github"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-start flex-column flex-md-row">
                                            <img class="avatar lg rounded-circle img-thumbnail ms-auto me-auto" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body ms-md-2 ms-lg-3 ms-xl-4 text-md-start text-center w-100 mt-4 mt-md-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-4 mb-3 mb-md-0">
                                                        <h6 class="mb-1">Dean Otto</h6>
                                                        <span class="text-muted">Developer</span>
                                                    </div>
                                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 text-center">
                                                        <ul class="list-unstyled d-flex mb-0 text-center text-md-start">
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-danger">22</h6>
                                                                <span class="text-muted">Tasks</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3 mx-1">
                                                                <h6 class="mb-0 text-success">$1,000</h6>
                                                                <span class="text-muted">Earnings</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-primary">$5,500</h6>
                                                                <span class="text-muted">Sales</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2 col-md-2 text-center text-md-end mt-3 mt-md-0">
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Github"><i class="fa fa-github"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-start flex-column flex-md-row">
                                            <img class="avatar lg rounded-circle img-thumbnail ms-auto me-auto" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body ms-md-2 ms-lg-3 ms-xl-4 text-md-start text-center w-100 mt-4 mt-md-0">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-4 mb-3 mb-md-0">
                                                        <h6 class="mb-1">Issa Bell</h6>
                                                        <span class="text-muted">Web Designer</span>
                                                    </div>
                                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 text-center">
                                                        <ul class="list-unstyled d-flex mb-0 text-center text-md-start">
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-danger">21</h6>
                                                                <span class="text-muted">Tasks</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3 mx-1">
                                                                <h6 class="mb-0 text-success">$1,025</h6>
                                                                <span class="text-muted">Earnings</span>
                                                            </li>
                                                            <li class="flex-fill card p-2 px-xl-3">
                                                                <h6 class="mb-0 text-primary">$5,522</h6>
                                                                <span class="text-muted">Sales</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2 col-md-2 text-center text-md-end mt-3 mt-md-0">
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Github"><i class="fa fa-github"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pd_files" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h1 class="fs-4 mt-1 mb-0">Project Files (45)</h1>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-3 row-cols-xxl-4 row-cols-xl-2 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                <div class="col">
                                    <a class="card ribbon color-600" href="#">
                                        <div class="option-9 position-absolute text-light"><i class="fa fa-lock"></i></div>
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                                                <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#E2E5E7"/>
                                                <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#B0B7BD"/>
                                                <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#CAD1D8"/>
                                                <path fill="#ff0000" d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z"/>
                                                <path d="M12.3203 36.7099C12.3203 36.1984 12.7233 35.6404 13.3724 35.6404H16.9509C18.9659 35.6404 20.7794 36.9889 20.7794 39.5735C20.7794 42.0225 18.9659 43.3865 16.9509 43.3865H14.3644V45.4325C14.3644 46.1145 13.9304 46.5001 13.3724 46.5001C12.8609 46.5001 12.3203 46.1145 12.3203 45.4325V36.7099ZM14.3644 37.5914V41.4509H16.9509C17.9894 41.4509 18.8109 40.5345 18.8109 39.5735C18.8109 38.4904 17.9894 37.5914 16.9509 37.5914H14.3644Z" fill="white"/>
                                                <path d="M23.8136 46.5C23.3021 46.5 22.7441 46.221 22.7441 45.5409V36.7408C22.7441 36.1847 23.3021 35.7798 23.8136 35.7798H27.3612C34.4408 35.7798 34.2858 46.5 27.5007 46.5H23.8136ZM24.7901 37.6708V44.6109H27.3612C31.5443 44.6109 31.7303 37.6708 27.3612 37.6708H24.7901Z" fill="white"/>
                                                <path d="M36.7966 37.7948V40.2573H40.7472C41.3052 40.2573 41.8632 40.8153 41.8632 41.3559C41.8632 41.8674 41.3052 42.2859 40.7472 42.2859H36.7966V45.539C36.7966 46.0815 36.4111 46.498 35.8686 46.498C35.1866 46.498 34.77 46.0815 34.77 45.539V36.7388C34.77 36.1828 35.1885 35.7778 35.8686 35.7778H41.3071C41.9891 35.7778 42.3921 36.1828 42.3921 36.7388C42.3921 37.2348 41.9891 37.7928 41.3071 37.7928H36.7966V37.7948Z" fill="white"/>
                                                <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#CAD1D8"/>
                                            </svg>
                                            <h6 class="mt-4 mb-1">Project Requirements</h6>
                                            <span class="text-muted">3 days ago <small>5MB</small></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card color-600" href="#">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                                                <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#E2E5E7"/>
                                                <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#B0B7BD"/>
                                                <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#CAD1D8"/>
                                                <path fill="#2794eb" d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z"/>
                                                <path d="M11.2101 46.5C10.6986 46.5 10.1406 46.219 10.1406 45.539V36.7408C10.1406 36.1828 10.6986 35.7798 11.2101 35.7798H14.7577C21.8373 35.7798 21.6804 46.5 14.8953 46.5H11.2101ZM12.1866 37.6688V44.609H14.7577C18.9408 44.609 19.1248 37.6688 14.7577 37.6688H12.1866Z" fill="white"/>
                                                <path d="M27.6091 46.655C24.7436 46.779 21.7676 44.8725 21.7676 41.077C21.7676 37.2659 24.7416 35.3923 27.6091 35.3923C30.3197 35.5299 33.1543 37.4054 33.1543 41.077C33.1543 44.7505 30.3197 46.655 27.6091 46.655ZM27.4386 37.4073C25.7026 37.4073 23.8136 38.6318 23.8136 41.0789C23.8136 43.5124 25.7046 44.7524 27.4386 44.7524C29.2211 44.7524 31.1257 43.5124 31.1257 41.0789C31.1257 38.6299 29.2211 37.4073 27.4386 37.4073Z" fill="white"/>
                                                <path d="M34.9775 41.0614C34.9775 38.0718 36.853 35.5007 40.4161 35.5007C41.7646 35.5007 42.8341 35.9037 43.9637 36.8802C44.3822 37.2658 44.4287 37.9478 44.0102 38.3818C43.5917 38.7519 42.9562 38.7073 42.5842 38.3353C41.9506 37.6688 41.2996 37.4847 40.4161 37.4847C38.031 37.4847 36.886 39.1742 36.886 41.0633C36.886 42.9853 38.0155 44.7504 40.4161 44.7504C41.2996 44.7504 42.1211 44.3919 42.8341 43.7583C43.3127 43.3863 43.9792 43.5704 44.2582 43.9444C44.5062 44.2854 44.6282 44.8588 44.0877 45.3994C43.0027 46.4088 41.7026 46.6103 40.4142 46.6103C36.667 46.6103 34.9775 44.0509 34.9775 41.0614Z" fill="white"/>
                                                <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#CAD1D8"/>
                                            </svg>
                                            <h6 class="mt-4 mb-1">Statement Dec 2021</h6>
                                            <span class="text-muted">8 days ago <small>2MB</small></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card color-600" href="#">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                                                <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#E2E5E7"/>
                                                <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#B0B7BD"/>
                                                <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#CAD1D8"/>
                                                <path fill="#FFB200" d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z"/>
                                                <path d="M11.8825 38.1048C12.239 35.0978 16.7766 34.5573 18.9137 36.2003C19.9677 37.0508 18.8536 38.3993 17.9217 37.7173C16.7766 36.9907 14.1726 36.6498 13.8471 38.2579C13.4286 40.7999 20.1692 39.3448 20.0588 43.4659C19.9503 47.4009 14.2501 47.492 12.1111 45.7269C11.5996 45.3084 11.6151 44.6284 11.8961 44.2079C12.2971 43.8069 12.7466 43.6674 13.2736 44.1014C14.5446 44.9674 17.8132 45.6184 18.0457 43.4174C17.8461 41.1273 11.402 42.5049 11.8825 38.1048Z" fill="white"/>
                                                <path d="M32.1485 44.7349L32.3965 45.0274C33.4175 45.9574 32.0865 47.4764 31.048 46.4999L30.5229 46.0834C29.7169 46.6394 28.7733 46.9049 27.5178 46.9049C24.7918 46.9049 21.6763 45.0274 21.6763 41.2164C21.6763 37.4053 24.7743 35.4697 27.5178 35.4697C30.397 35.4697 33.218 37.4053 33.218 41.2164C33.218 42.6889 32.844 43.7758 32.1485 44.7349ZM31.2165 41.2164C31.2165 38.7538 29.281 37.5002 27.5159 37.5002C25.6113 37.5002 23.7358 38.7519 23.7358 41.2164C23.7358 43.0938 25.3304 44.8744 27.5159 44.8744C28.072 44.8744 28.6145 44.7349 29.157 44.5954L27.3919 42.9679C26.5704 41.9759 27.8724 40.5654 28.909 41.4799L30.6605 43.2294C31.046 42.6889 31.2165 42.0224 31.2165 41.2164Z" fill="white"/>
                                                <path d="M35.5005 36.7097C35.5005 36.1982 35.9345 35.7642 36.477 35.7642C36.973 35.7642 37.3915 36.2001 37.3915 36.7097V44.4713H41.6056C43.1226 44.4713 43.1556 46.4998 41.6056 46.4998H36.4789C35.9364 46.4998 35.5024 46.1143 35.5024 45.5563V36.7097H35.5005Z" fill="white"/>
                                                <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#CAD1D8"/>
                                            </svg>
                                            <h6 class="mt-4 mb-1">Project Backup v3</h6>
                                            <span class="text-muted">15 days ago <small>32MB</small></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card color-600" href="#">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                                                <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#E2E5E7"/>
                                                <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#B0B7BD"/>
                                                <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#CAD1D8"/>
                                                <path fill="#FF9A00" d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z"/>
                                                <path d="M19.8862 46.5001C19.3902 46.2191 19.0802 45.6631 19.3902 45.0121L23.8349 36.3224C24.2534 35.5009 25.3694 35.4699 25.7569 36.3224L30.124 45.0121C30.7595 46.2191 28.884 47.1801 28.3279 45.9731L27.644 44.6091H21.9284L21.2619 45.9731C21.0158 46.5001 20.4423 46.6105 19.8862 46.5001ZM26.5454 42.565L24.7959 38.7384L22.8913 42.565H26.5454Z" fill="white"/>
                                                <path d="M31.9741 36.71C31.9741 35.439 34.0201 35.3925 34.0201 36.71V45.5528C34.0201 46.8393 31.9741 46.8703 31.9741 45.5528V36.71Z" fill="white"/>
                                                <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#CAD1D8"/>
                                            </svg>
                                            <h6 class="mt-4 mb-1">LUNO Logo AI v3</h6>
                                            <span class="text-muted">12 days ago <small>1.2MB</small></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card color-600" href="#">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                                                <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#E2E5E7"/>
                                                <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#B0B7BD"/>
                                                <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#CAD1D8"/>
                                                <path fill="#1471B6" d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z"/>
                                                <path d="M12.5859 41.0614C12.5859 38.0718 14.4595 35.5007 18.0245 35.5007C19.3711 35.5007 20.4406 35.9037 21.5721 36.8802C21.9906 37.2658 22.0351 37.9478 21.6166 38.3818C21.1981 38.7519 20.5626 38.7073 20.1926 38.3353C19.5571 37.6688 18.9061 37.4847 18.0245 37.4847C15.6394 37.4847 14.4924 39.1742 14.4924 41.0633C14.4924 42.9853 15.6239 44.7504 18.0245 44.7504C18.9061 44.7504 19.7276 44.3919 20.4406 43.7583C20.9211 43.3863 21.5876 43.5704 21.8646 43.9444C22.1126 44.2854 22.2366 44.8588 21.6941 45.3994C20.6091 46.4088 19.3091 46.6103 18.0226 46.6103C14.2754 46.6103 12.5859 44.0509 12.5859 41.0614Z" fill="white"/>
                                                <path d="M23.6994 38.1027C24.0559 35.0977 28.5935 34.5571 30.7325 36.2001C31.7865 37.0507 30.6705 38.3992 29.7405 37.7172C28.5935 36.9887 25.9915 36.6477 25.666 38.2577C25.2475 40.7997 31.9861 39.3447 31.8776 43.4638C31.7691 47.3989 26.069 47.4919 23.93 45.7249C23.4165 45.3083 23.434 44.6282 23.713 44.2078C24.116 43.8067 24.5635 43.6672 25.0925 44.0993C26.3615 44.9673 29.632 45.6183 29.8626 43.4154C29.665 41.1252 23.2189 42.5047 23.6994 38.1027Z" fill="white"/>
                                                <path d="M33.48 38.1027C33.8365 35.0977 38.3742 34.5571 40.5132 36.2001C41.5672 37.0507 40.4512 38.3992 39.5212 37.7172C38.3742 36.9887 35.7721 36.6477 35.4466 38.2577C35.0281 40.7997 41.7667 39.3447 41.6582 43.4638C41.5497 47.3989 35.8496 47.4919 33.7106 45.7249C33.1991 45.3083 33.2146 44.6282 33.4936 44.2078C33.8966 43.8067 34.3442 43.6672 34.8731 44.0993C36.1422 44.9673 39.4127 45.6183 39.6452 43.4154C39.4437 41.1252 32.9995 42.5047 33.48 38.1027Z" fill="white"/>
                                                <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#CAD1D8"/>
                                            </svg>
                                            <h6 class="mt-4 mb-1">style.min.css</h6>
                                            <span class="text-muted">1 days ago <small>423KB</small></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="card color-600" href="#">
                                        <div class="card-body text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                                                <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#E2E5E7"/>
                                                <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#B0B7BD"/>
                                                <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#CAD1D8"/>
                                                <path fill="#2794eb" d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z"/>
                                                <path d="M11.2101 46.5C10.6986 46.5 10.1406 46.219 10.1406 45.539V36.7408C10.1406 36.1828 10.6986 35.7798 11.2101 35.7798H14.7577C21.8373 35.7798 21.6804 46.5 14.8953 46.5H11.2101ZM12.1866 37.6688V44.609H14.7577C18.9408 44.609 19.1248 37.6688 14.7577 37.6688H12.1866Z" fill="white"/>
                                                <path d="M27.6091 46.655C24.7436 46.779 21.7676 44.8725 21.7676 41.077C21.7676 37.2659 24.7416 35.3923 27.6091 35.3923C30.3197 35.5299 33.1543 37.4054 33.1543 41.077C33.1543 44.7505 30.3197 46.655 27.6091 46.655ZM27.4386 37.4073C25.7026 37.4073 23.8136 38.6318 23.8136 41.0789C23.8136 43.5124 25.7046 44.7524 27.4386 44.7524C29.2211 44.7524 31.1257 43.5124 31.1257 41.0789C31.1257 38.6299 29.2211 37.4073 27.4386 37.4073Z" fill="white"/>
                                                <path d="M34.9775 41.0614C34.9775 38.0718 36.853 35.5007 40.4161 35.5007C41.7646 35.5007 42.8341 35.9037 43.9637 36.8802C44.3822 37.2658 44.4287 37.9478 44.0102 38.3818C43.5917 38.7519 42.9562 38.7073 42.5842 38.3353C41.9506 37.6688 41.2996 37.4847 40.4161 37.4847C38.031 37.4847 36.886 39.1742 36.886 41.0633C36.886 42.9853 38.0155 44.7504 40.4161 44.7504C41.2996 44.7504 42.1211 44.3919 42.8341 43.7583C43.3127 43.3863 43.9792 43.5704 44.2582 43.9444C44.5062 44.2854 44.6282 44.8588 44.0877 45.3994C43.0027 46.4088 41.7026 46.6103 40.4142 46.6103C36.667 46.6103 34.9775 44.0509 34.9775 41.0614Z" fill="white"/>
                                                <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#CAD1D8"/>
                                            </svg>
                                            <h6 class="mt-4 mb-1">Statement Nov 2021</h6>
                                            <span class="text-muted">month ago <small>1.5MB</small></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pd_activity" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h1 class="fs-4 mt-1 mb-0">Project Activity</h1>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card p-md-4 p-2">
                                <div class="timeline-item ti-danger ms-2">
                                    <div class="d-flex">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                        <div class="flex-fill ms-3">
                                            <div class="mb-1 fs-6">Gerald Vaughn changed the status to QA on <a href="#" class="luno-link text_bg2">MA-86</a> - Retargeting Ads</div>
                                            <span class="d-flex text-muted small">New Dashboard Design - 9:24PM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                            <div class="card mt-3 p-3">
                                                I’ve prepared all sizes for you. Can you take a look tonight so we can prepare my final invoice?
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- timeline item end  -->
                                <div class="timeline-item ti-danger ms-2">
                                    <div class="d-flex">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                        <div class="flex-fill ms-3">
                                            <div class="mb-1 fs-6">3 new screen design added: on <a href="#" class="luno-link text_bg2">MA-86</a></div>
                                            <span class="d-flex text-muted small">New added - 9:24PM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                            <div class="card mt-3 p-3">
                                                <div class="row g-1">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card img-effect one text-center">
                                                            <img src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="img hover">
                                                            <figcaption>
                                                                <h2 class="fs-4">Chat App</h2>
                                                                <p>Sadie never took her eyes off me. She had a dark soul.</p>
                                                                <a href="{{ route('admin.applications.app-chat') }}" title="">View more</a>
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card img-effect one text-center">
                                                            <img src="{{ url('/') }}/assets/images/gallery/2.jpg" alt="img hover">
                                                            <figcaption>
                                                                <h2 class="fs-4">Todo App</h2>
                                                                <p>Sadie never took her eyes off me. She had a dark soul.</p>
                                                                <a href="{{ route('admin.applications.app-todo') }}" title="">View more</a>
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card img-effect one text-center">
                                                            <img src="{{ url('/') }}/assets/images/gallery/5.jpg" alt="img hover">
                                                            <figcaption>
                                                                <h2 class="fs-4">File Manager</h2>
                                                                <p>Sadie never took her eyes off me. She had a dark soul.</p>
                                                                <a href="{{ route('admin.applications.app-file-manager') }}" title="">View more</a>
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- timeline item end  -->
                                <div class="timeline-item ti-success ms-2">
                                    <div class="d-flex">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                        <div class="flex-fill ms-3">
                                            <div class="mb-1">Clients share with new documentation file</div>
                                            <span class="d-flex text-muted small">New file - 11:30AM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                            <div class="card mt-3 p-3">
                                                <a href="#" class="d-inline-flex align-items-center py-2">
                                                    <div class="avatar rounded-circle no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <p class="mb-0 color-800">new layout for admin pages</p>
                                                        <small class="text-muted">.pdf, 5.3 MB</small>
                                                    </div>
                                                </a>
                                                <a href="#" class="d-inline-flex align-items-center py-2">
                                                    <div class="avatar rounded-circle no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <p class="mb-0 color-800 lh-sm">Brand Photography</p>
                                                        <small class="text-muted">.zip, 30.5 MB</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- timeline item end  -->
                                <div class="timeline-item ti-primary ms-2">
                                    <div class="d-flex">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                        <div class="flex-fill ms-3">
                                            <div class="mb-1">Create new module development team for <a href="#" class="luno-link text_bg2">MA-86</a> stocks for our Instagram channel</div>
                                            <span class="d-flex text-muted small">ReactJs, Nodejs - 7:58AM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                            <div class="card p-3 mt-3">
                                                What do you think about these? Should I continue in this style?
                                            </div>
                                            <div class="project-members mt-3">
                                                <label class="me-3">Team :</label>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="ReactJs"><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="NodeJs"><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="ReactJs"><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="ReactJs"><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- timeline item end  -->
                                <div class="timeline-item ti-warning ms-2">
                                    <div class="d-flex">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                        <div class="flex-fill ms-3">
                                            <div class="mb-1">update new source code on GitHub <strong>MA-78 - Retargeting React Webapp</strong></div>
                                            <span class="d-flex text-muted small">New Dashboard Design - 9:24PM by <a class="ms-2" href="#" title=""><strong>Chris</strong></a> </span>
                                            <div class="alert alert-success rounded mt-3 mb-0 rounded-4">
                                                I’ve prepared all sizes for you. Can you take a look tonight so we can prepare my final invoice?
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- timeline item end  -->
                                <div class="timeline-item ti-info ms-2">
                                    <div class="d-flex">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                        <div class="flex-fill ms-3">
                                            <div class="mb-1 fs-6">Task <a href="#" class="luno-link text_bg2">#1425</a> merged with <a href="#" class="luno-link text_bg2">#25836</a> in Luno Admin Dashboard project:</div>
                                            <span class="d-flex text-muted small">Updates for Jason Carroll - 7:12PM by <a class="ms-2" href="#" title=""><strong>Orlando</strong></a> </span>
                                            <div class="card mt-3 p-3">
                                                <p>Both task merged and latest code push on GitHub</p>
                                                <ul class="mb-0">
                                                    <li>Responsive design issue fix and testing all device-width</li>
                                                    <li>Profile page create</li>
                                                    <li>Login page text changes</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- timeline item end  -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pd_settings" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h1 class="fs-4 mt-1 mb-0">Project Settings</h1>
                                <button class="btn btn-sm d-block d-lg-none btn-primary project-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card">
                                <form class="card-body">
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Project Icon</label>
                                        <div class="col-md-10">
                                            <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-google fa-2x"></i></div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Project Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-lg">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Project Type</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-lg">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Project Description</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="form-control form-control-lg" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Due Date</label>
                                        <div class="col-lg-3 col-md-5 col-md-10">
                                            <input type="date" class="form-control form-control-lg">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Notifications</label>
                                        <div class="col-md-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="n_Phone">
                                                <label class="form-check-label" for="n_Phone">Phone</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="n_email" checked="">
                                                <label class="form-check-label" for="n_email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Status</label>
                                        <div class="col-md-10">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="Status" checked="">
                                                <label class="form-check-label" for="Status">Active</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="card-footer text-end">
                                    <button type="button" class="btn btn-lg btn-white border lift">Discard</button>
                                    <button type="button" class="btn btn-lg btn-primary border lift">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->
            </div>
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
<script>
    $('.project-list .project-list-toggle').on('click', function () {
        $('.project-list .order-1').toggleClass('open');
    });

    // Apex-wc-11
    var apexwc12 = {
        chart: {
            height: 260,
            type: 'donut',
        },
        labels: ['Active', 'Completed', 'Overdue', 'Yet to start'],
        dataLabels: {
            enabled: false,
        },
        legend: {
            position: 'bottom', // left, right, top, bottom
            horizontalAlign: 'center',  // left, right, top, bottom
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

    // Apex-wc-9
    var apexwc9 = {
        series: [{
            name: "Complete",
            data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
        },{
            name: "Incomplete",
            data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
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
        colors: ['var(--chart-color1)', 'var(--chart-color5)', ],
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: [2, 2],
            curve: 'smooth', // straight, smooth
            dashArray: [0, 5]
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
                        return val + " (Tasks)"
                    }
                }
            },{
                title: {
                    formatter: function (val) {
                        return val + " (Tasks)"
                    }
                }
            }]
        },
    };
    new ApexCharts(document.querySelector("#apex-wc-9"), apexwc9).render();

</script>
@endsection
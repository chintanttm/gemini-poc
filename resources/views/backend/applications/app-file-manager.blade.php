@extends('backend.layouts.app')

@section('title', __('App File Manager'))

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
        <button type="button" class="btn bg-secondary text-light mb-3 w-100">Create New</button>
        <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#drive_mydrive" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-secondary" d="M2 2C1.46957 2 0.960859 2.21071 0.585786 2.58579C0.210714 2.96086 0 3.46957 0 4L0 5C0 5.53043 0.210714 6.03914 0.585786 6.41421C0.960859 6.78929 1.46957 7 2 7H14C14.5304 7 15.0391 6.78929 15.4142 6.41421C15.7893 6.03914 16 5.53043 16 5V4C16 3.46957 15.7893 2.96086 15.4142 2.58579C15.0391 2.21071 14.5304 2 14 2H2ZM2.5 5C2.36739 5 2.24021 4.94732 2.14645 4.85355C2.05268 4.75979 2 4.63261 2 4.5C2 4.36739 2.05268 4.24021 2.14645 4.14645C2.24021 4.05268 2.36739 4 2.5 4C2.63261 4 2.75979 4.05268 2.85355 4.14645C2.94732 4.24021 3 4.36739 3 4.5C3 4.63261 2.94732 4.75979 2.85355 4.85355C2.75979 4.94732 2.63261 5 2.5 5ZM4.5 5C4.36739 5 4.24021 4.94732 4.14645 4.85355C4.05268 4.75979 4 4.63261 4 4.5C4 4.36739 4.05268 4.24021 4.14645 4.14645C4.24021 4.05268 4.36739 4 4.5 4C4.63261 4 4.75979 4.05268 4.85355 4.14645C4.94732 4.24021 5 4.36739 5 4.5C5 4.63261 4.94732 4.75979 4.85355 4.85355C4.75979 4.94732 4.63261 5 4.5 5Z"/>
                        <path d="M2 9C1.46957 9 0.960859 9.21071 0.585786 9.58579C0.210714 9.96086 0 10.4696 0 11L0 12C0 12.5304 0.210714 13.0391 0.585786 13.4142C0.960859 13.7893 1.46957 14 2 14H14C14.5304 14 15.0391 13.7893 15.4142 13.4142C15.7893 13.0391 16 12.5304 16 12V11C16 10.4696 15.7893 9.96086 15.4142 9.58579C15.0391 9.21071 14.5304 9 14 9H2ZM2.5 12C2.36739 12 2.24021 11.9473 2.14645 11.8536C2.05268 11.7598 2 11.6326 2 11.5C2 11.3674 2.05268 11.2402 2.14645 11.1464C2.24021 11.0527 2.36739 11 2.5 11C2.63261 11 2.75979 11.0527 2.85355 11.1464C2.94732 11.2402 3 11.3674 3 11.5C3 11.6326 2.94732 11.7598 2.85355 11.8536C2.75979 11.9473 2.63261 12 2.5 12ZM4.5 12C4.36739 12 4.24021 11.9473 4.14645 11.8536C4.05268 11.7598 4 11.6326 4 11.5C4 11.3674 4.05268 11.2402 4.14645 11.1464C4.24021 11.0527 4.36739 11 4.5 11C4.63261 11 4.75979 11.0527 4.85355 11.1464C4.94732 11.2402 5 11.3674 5 11.5C5 11.6326 4.94732 11.7598 4.85355 11.8536C4.75979 11.9473 4.63261 12 4.5 12Z"/>
                    </svg>
                    <span>My Drive</span>
                    <span class="badge bg-light text-dark ms-2 ms-auto">28</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#drive_withme" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-secondary" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                    </svg>
                    <span>Shared with Me</span>
                    <span class="badge bg-light text-dark ms-2 ms-auto">2</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#drive_recent" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-secondary" fill-rule="evenodd" clip-rule="evenodd" d="M6.79289 2.79289C6.98043 2.60536 7.23478 2.5 7.5 2.5C7.76522 2.5 8.01957 2.60536 8.20711 2.79289C8.39464 2.98043 8.5 3.23478 8.5 3.5V8.41984L11.5063 10.1378C11.7299 10.2726 11.8918 10.4897 11.9575 10.7424C12.0233 10.9952 11.9875 11.2636 11.858 11.4903C11.7284 11.717 11.5153 11.884 11.2642 11.9557C11.0132 12.0274 10.744 11.998 10.5143 11.8739L10.5039 11.8682L7.004 9.86816C6.85098 9.78074 6.72371 9.65438 6.63521 9.50197C6.5467 9.34954 6.50006 9.17642 6.5 9.00016L6.5 3.5C6.5 3.23478 6.60536 2.98043 6.79289 2.79289Z"/>
                        <path d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM15 8C15 9.85652 14.2625 11.637 12.9497 12.9497C11.637 14.2625 9.85652 15 8 15C6.14348 15 4.36301 14.2625 3.05025 12.9497C1.7375 11.637 1 9.85652 1 8C1 6.14348 1.7375 4.36301 3.05025 3.05025C4.36301 1.7375 6.14348 1 8 1C9.85652 1 11.637 1.7375 12.9497 3.05025C14.2625 4.36301 15 6.14348 15 8Z"/>
                    </svg>
                    <span>Recent</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#drive_trash" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-secondary" d="M5.5 6C5.63261 6 5.75979 6.04515 5.85355 6.12553C5.94732 6.2059 6 6.31491 6 6.42857V11.5714C6 11.6851 5.94732 11.7941 5.85355 11.8745C5.75979 11.9548 5.63261 12 5.5 12C5.36739 12 5.24021 11.9548 5.14645 11.8745C5.05268 11.7941 5 11.6851 5 11.5714V6.42857C5 6.31491 5.05268 6.2059 5.14645 6.12553C5.24021 6.04515 5.36739 6 5.5 6ZM11 6.42857C11 6.31491 10.9473 6.2059 10.8536 6.12553C10.7598 6.04515 10.6326 6 10.5 6C10.3674 6 10.2402 6.04515 10.1464 6.12553C10.0527 6.2059 10 6.31491 10 6.42857V11.5714C10 11.6851 10.0527 11.7941 10.1464 11.8745C10.2402 11.9548 10.3674 12 10.5 12C10.6326 12 10.7598 11.9548 10.8536 11.8745C10.9473 11.7941 11 11.6851 11 11.5714V6.42857Z"/>
                        <path class="fill-secondary" d="M8.70711 5.16737C8.51957 5.0602 8.26522 5 8 5C7.73478 5 7.48043 5.0602 7.29289 5.16737C7.10536 5.27453 7 5.41988 7 5.57143V12.4286C7 12.5801 7.10536 12.7255 7.29289 12.8326C7.48043 12.9398 7.73478 13 8 13C8.26522 13 8.51957 12.9398 8.70711 12.8326C8.89464 12.7255 9 12.5801 9 12.4286V5.57143C9 5.41988 8.89464 5.27453 8.70711 5.16737Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 3C16 3.26522 15.8703 3.51957 15.6395 3.70711C15.4087 3.89464 15.0957 4 14.7692 4H14.1538V14C14.1538 14.5304 13.8945 15.0391 13.4329 15.4142C12.9712 15.7893 12.3451 16 11.6923 16H4.30769C3.65485 16 3.02875 15.7893 2.56712 15.4142C2.10549 15.0391 1.84615 14.5304 1.84615 14V4H1.23077C0.904349 4 0.591298 3.89464 0.360484 3.70711C0.12967 3.51957 0 3.26522 0 3V2C0 1.73478 0.12967 1.48043 0.360484 1.29289C0.591298 1.10536 0.904349 1 1.23077 1H5.53846C5.53846 0.734784 5.66813 0.48043 5.89895 0.292893C6.12976 0.105357 6.44281 0 6.76923 0L9.23077 0C9.55719 0 9.87024 0.105357 10.1011 0.292893C10.3319 0.48043 10.4615 0.734784 10.4615 1H14.7692C15.0957 1 15.4087 1.10536 15.6395 1.29289C15.8703 1.48043 16 1.73478 16 2V3ZM3.22215 4L3.07692 4.059V14C3.07692 14.2652 3.20659 14.5196 3.43741 14.7071C3.66822 14.8946 3.98127 15 4.30769 15H11.6923C12.0187 15 12.3318 14.8946 12.5626 14.7071C12.7934 14.5196 12.9231 14.2652 12.9231 14V4.059L12.7778 4H3.22215ZM1.23077 3V2H14.7692V3H1.23077Z"/>
                    </svg>
                    <span>Trash</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#drive_analytics" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.985 8.50001H8.20701L2.70701 14C3.82976 14.9906 5.20796 15.6461 6.68485 15.8922C8.16173 16.1383 9.67803 15.9649 11.0613 15.3919C12.4445 14.8189 13.6392 13.8692 14.5095 12.6508C15.3797 11.4325 15.8916 9.99434 15.985 8.50001ZM2.00001 13.292C1.00947 12.1693 0.353893 10.7911 0.107831 9.31418C-0.13823 7.83729 0.035103 6.32099 0.608117 4.93774C1.18113 3.55448 2.13083 2.35979 3.34919 1.48954C4.56755 0.619291 6.00568 0.108414 7.50001 0.0150146V7.79302L2.00001 13.293V13.292Z"/>
                        <path class="fill-secondary" d="M8.5 7.50001V0.0150146C10.4452 0.136897 12.279 0.964622 13.6572 2.34279C15.0354 3.72097 15.8631 5.5548 15.985 7.50001H8.5Z"/>
                    </svg>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>FILE LABELS</small></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>Documents</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>Work Project</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>Templates</span></a></li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>FOLDERS</small></li>
            <li><a class="m-link" href="#"><i class="fa fa-folder"></i><span>Documents</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-folder"></i><span>Work Project</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-folder"></i><span>Templates</span></a></li>
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
                        <div class="tab-pane fade active show" id="drive_mydrive" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">My Drive</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary file-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card fieldset border border-primary mb-5">
                                <span class="fieldset-tile text-primary bg-body">Suggested:</span>
                                <div class="row g-2 row-deck">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card p-3 ribbon">
                                            <div class="option-9 position-absolute text-light"><i class="fa fa-star"></i></div>
                                            <i class="fa fa-folder fa-2x"></i>
                                            <div class="mt-3">
                                                <h5>Documents</h5>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Files: <span>245</span></div>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Size: <span>80MB</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card p-3">
                                            <i class="fa fa-folder fa-2x chart-text-color2"></i>
                                            <div class="mt-3">
                                                <h5>Work Project</h5>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Files: <span>2K</span></div>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Size: <span>250MB</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card p-3">
                                            <i class="fa fa-folder fa-2x chart-text-color3"></i>
                                            <div class="mt-3">
                                                <h5>Public html</h5>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Files: <span>542</span></div>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Size: <span>543MB</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card p-3">
                                            <i class="fa fa-folder fa-2x chart-text-color5"></i>
                                            <div class="mt-3">
                                                <h5>Templates</h5>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Files: <span>890</span></div>
                                                <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Size: <span>506MB</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .row end -->
                            </div>
                            <div class="row g-2 mb-5">
                                <div class="col-12">
                                    <div class="row-title">
                                        <div>
                                            <h6 class="fw-bold mb-0">Recent Activity</h6>
                                            <span class="text-muted">Based your preferences</span>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-outline-primary"><i class="fa fa-th"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table style="width: 100%;" class="table align-middle table-bordered mb-0 custom-table-2 myDataTable_no_filter">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Modified</th>
                                                    <th>Shared with</th>
                                                    <th>Size</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-folder"></i>
                                                        <span class="me-4 ms-2">Web Design</span>
                                                        <span class="badge bg-light text-dark">Design</span>
                                                        <span class="badge bg-light text-dark">Project</span>
                                                    </td>
                                                    <td>12 April 2021</td>
                                                    <td>
                                                        <div class="shared-with">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                                                        </div>
                                                    </td>
                                                    <td>40MB</td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-folder"></i>
                                                        <span class="me-4 ms-2">React Project</span>
                                                        <span class="badge bg-light text-dark">React</span>
                                                        <span class="badge bg-light text-dark">Dev</span>
                                                        <span class="badge bg-light text-dark">Clients</span>
                                                    </td>
                                                    <td>16 April 2021</td>
                                                    <td>
                                                        <div class="shared-with">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                                        </div>
                                                    </td>
                                                    <td>345MB</td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-folder"></i>
                                                        <span class="me-4 ms-2">Graphics Design</span>
                                                        <span class="badge bg-light text-dark">Figma</span>
                                                        <span class="badge bg-light text-dark">Photoshop</span>
                                                    </td>
                                                    <td>16 April 2021</td>
                                                    <td>
                                                        <div class="shared-with">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend"> </a>
                                                        </div>
                                                    </td>
                                                    <td>880MB</td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-folder"></i>
                                                        <span class="me-4 ms-2">Marketing Strategy</span>
                                                        <span class="badge bg-light text-dark">Agency</span>
                                                    </td>
                                                    <td>Today</td>
                                                    <td>
                                                        <div class="shared-with">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                                        </div>
                                                    </td>
                                                    <td>12MB</td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-image"></i>
                                                        <span class="me-4 ms-2">App_design-iOS.jpg</span>
                                                        <span class="badge bg-light text-dark">Design</span>
                                                    </td>
                                                    <td>Yesterday</td>
                                                    <td>
                                                        <div class="shared-with">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                                                        </div>
                                                    </td>
                                                    <td>5MB</td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-file-excel-o"></i>
                                                        <span class="me-4 ms-2">work sheet.xls</span>
                                                        <span class="badge bg-light text-dark">Design</span>
                                                    </td>
                                                    <td>Yesterday</td>
                                                    <td>
                                                        <div class="shared-with">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                                                        </div>
                                                    </td>
                                                    <td>1.4MB</td>
                                                    <td>
                                                        <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                                        <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- .row end -->
                        </div>
                        <div class="tab-pane fade" id="drive_withme" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Shared with Me</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary file-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-2 row-deck">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card p-3">
                                        <i class="fa fa-folder fa-2x chart-text-color2"></i>
                                        <div class="mt-3">
                                            <h5>Birthday Party</h5>
                                            <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Files: <span>648</span></div>
                                            <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Size: <span>850MB</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card p-3">
                                        <i class="fa fa-folder fa-2x chart-text-color3"></i>
                                        <div class="mt-3">
                                            <h5>1 Day Outing</h5>
                                            <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Files: <span>172</span></div>
                                            <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Size: <span>790MB</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card p-3">
                                        <i class="fa fa-folder fa-2x chart-text-color5"></i>
                                        <div class="mt-3">
                                            <h5>Templates</h5>
                                            <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Files: <span>890</span></div>
                                            <div class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">Size: <span>506MB</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .row end -->
                        </div>
                        <div class="tab-pane fade" id="drive_recent" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Recent</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary file-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <table style="width: 100%;" class="table align-middle table-bordered mb-0 custom-table-2 myDataTable_no_filter">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Modified</th>
                                        <th>Shared with</th>
                                        <th>Size</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="fa fa-folder"></i>
                                            <span class="me-4 ms-2">Web Design</span>
                                            <span class="badge bg-light text-dark">Design</span>
                                            <span class="badge bg-light text-dark">Project</span>
                                        </td>
                                        <td>12 April 2021</td>
                                        <td>
                                            <div class="shared-with">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                                            </div>
                                        </td>
                                        <td>40MB</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-folder"></i>
                                            <span class="me-4 ms-2">React Project</span>
                                            <span class="badge bg-light text-dark">React</span>
                                            <span class="badge bg-light text-dark">Dev</span>
                                            <span class="badge bg-light text-dark">Clients</span>
                                        </td>
                                        <td>16 April 2021</td>
                                        <td>
                                            <div class="shared-with">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                            </div>
                                        </td>
                                        <td>345MB</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-folder"></i>
                                            <span class="me-4 ms-2">Graphics Design</span>
                                            <span class="badge bg-light text-dark">Figma</span>
                                            <span class="badge bg-light text-dark">Photoshop</span>
                                        </td>
                                        <td>16 April 2021</td>
                                        <td>
                                            <div class="shared-with">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend"> </a>
                                            </div>
                                        </td>
                                        <td>880MB</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-folder"></i>
                                            <span class="me-4 ms-2">Marketing Strategy</span>
                                            <span class="badge bg-light text-dark">Agency</span>
                                        </td>
                                        <td>Today</td>
                                        <td>
                                            <div class="shared-with">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                            </div>
                                        </td>
                                        <td>12MB</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-image"></i>
                                            <span class="me-4 ms-2">App_design-iOS.jpg</span>
                                            <span class="badge bg-light text-dark">Design</span>
                                        </td>
                                        <td>Yesterday</td>
                                        <td>
                                            <div class="shared-with">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                                            </div>
                                        </td>
                                        <td>5MB</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-file-excel-o"></i>
                                            <span class="me-4 ms-2">work sheet.xls</span>
                                            <span class="badge bg-light text-dark">Design</span>
                                        </td>
                                        <td>Yesterday</td>
                                        <td>
                                            <div class="shared-with">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                                            </div>
                                        </td>
                                        <td>1.4MB</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                            <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="drive_trash" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Trash</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary file-list-toggle" type="button"><i class="fa fa-bars"></i></button>
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
                    <!-- offcanvas: drive analytics -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="drive_analytics" aria-labelledby="drive_analytics">
                        <div class="offcanvas-header">
                            <h5>Drive Analytics</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body custom_scroll">
                            <div class="row g-2">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-google fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
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
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>Google Drive</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">7.23GB<span>15GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-dropbox fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
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
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>Dropbox Drive</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">1.8GB<span>2GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-hdd-o fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
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
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>One Drive</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">2GB<span>10GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-server fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
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
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>Server</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">2GB<span>10GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .row end -->
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
    $('.file-manager .file-list-toggle').on('click', function () {
        $('.file-manager .order-1').toggleClass('open');
    });
    
    $('.myDataTable_no_filter')
    .addClass('nowrap')
    .dataTable({
        responsive: true,
        searching: false,
        paging: false,
        ordering: true,
        info: false,
    });
</script>
@endsection
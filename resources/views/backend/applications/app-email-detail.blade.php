@extends('backend.layouts.app')

@section('title', __('App Email details'))

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
        <ul class="menu-list list-unstyled mb-0">
            <li><a class="m-link pt-0" href="{{ route('admin.applications.app-email-compose') }}"><span class="btn bg-secondary text-light w-100 mb-3">New Message</span></a></li>
            <li><a class="m-link active" href="{{ route('admin.applications.app-email') }}"><i class="fa fa-inbox"></i><span>Inbox</span><span class="badge bg-light text-dark ms-2 ms-auto">23</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-clock-o"></i><span>Snooze</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-shield"></i><span>Important</span><span class="badge bg-light text-dark ms-2 ms-auto">3</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-send"></i><span>Sent</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-file"></i><span>Drafts</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-envelope"></i><span>All Mail</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-exclamation-circle"></i><span>Spam</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-trash"></i><span>Trash</span><span class="badge bg-light text-dark ms-2 ms-auto">68</span></a></li>

            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Categories</small></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>Angular</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>Ui UX design</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>Developemnt</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>Marketing</span></a></li>
        </ul>
    </div>
    <div class="order-2 flex-grow-1 px-lg-3 px-0 custom_scroll">
        <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}"">
            <div class="row g-3">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md mt-2">
                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#inbox_page_header">
                            <span class="fa fa-bars"></span>
                        </button>
            
                        <!-- main menu -->
                        <div class="collapse navbar-collapse order-0" id="inbox_page_header">
                            <ul class="navbar-nav flex-row me-auto">
                                <li class="nav-item me-2"><a class="nav-link color-600" href="#"><i class="fa fa-archive"></i></a></li>
                                <li class="nav-item me-2"><a class="nav-link color-600" href="#"><i class="fa fa-trash"></i></a></li>
                                <li class="nav-item me-2"><a class="nav-link color-600" href="#"><i class="fa fa-exclamation-circle"></i></a></li>
                                <li class="nav-item me-2"><a class="nav-link color-600" href="#"><i class="fa fa-tasks"></i><span class="ms-2 d-none d-md-inline-block">Add to tasks</span></a></li>
                                <li class="nav-item me-2"><a class="nav-link color-600" href="#"><i class="fa fa-arrow-circle-right"></i><span class="ms-2 d-none d-md-inline-block">Move to</span></a></li>
                                <li class="nav-item me-2"><a class="nav-link color-600" href="#"><i class="fa fa-tags"></i><span class="ms-2 d-none d-md-inline-block">Labels</span></a></li>
                                <li class="nav-item me-2 dropdown morphing scale-left">
                                    <a class="nav-link color-600 dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h me-2"></i>
                                    </a>
                                    <ul class="dropdown-menu shadow border-0">
                                        <li><a class="dropdown-item" href="#">Calendar</a></li>
                                        <li><a class="dropdown-item" href="#">Chat app</a></li>
                                        <li><a class="dropdown-item" href="#">Inbox</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="mb-0"><a href="{{ route('admin.applications.app-email') }}"><i class="fa fa-arrow-left me-3"></i></a>Project Outsourcing/Lead Generation/Freelancer Bidder</h5>
                        </div>
                        <div class="bg-light px-4 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto pe-0">
                                    <a href="#"><img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="..." class="avatar rounded-circle"></a>
                                </div>
                                <div class="col ml-n2">
                                    <div class="mb-1"><span class="fw-bold">Marshall Nichols</span> <a href="#">info@examples.com</a></div>
                                    <div class="dropdown morphing scale-right">
                                        To: 
                                        <a class="btn btn-link dropdown-toggle p-0" href="#" role="button" data-bs-toggle="dropdown">Me</a>
                                        <div class="dropdown-menu p-3 border-0 shadow w240">
                                            <div class="mb-2">
                                                <div class="mb-0">from:</div>
                                                <small class="text-muted">Info-TM <a href="#">info@thememakker.com</a></small>
                                            </div>
                                            <div class="mb-2">
                                                <div class="mb-0">to:</div>
                                                <small class="text-muted">Chris Fox <a href="#">Chris.Fox@thememakker.com</a></small>
                                            </div>
                                            <div class="mb-2">
                                                <div class="mb-0">cc:</div>
                                                <small class="text-muted"><a href="#">Joge.Lucky@thememakker.com</a></small>
                                            </div>
                                            <div class="mb-2">
                                                <div class="mb-0">date:</div>
                                                <small class="text-muted">Aug 2, 2021, 11:27 AM</small>
                                            </div>
                                            <div class="mb-2">
                                                <div class="mb-0">subject:</div>
                                                <small class="text-muted">#1706W025010 | Payment Request</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto d-none d-md-inline-block"><span>Jul 29, 2019, 4:37 PM</span></div>
                                <div class="col-auto">
                                    <div class="dropdown morphing scale-left">
                                        <a href="#!" class="btn btn-sm btn-link d-none d-md-inline-block"><i class="fa fa-mail-reply"></i></a>
                                        <a href="#" class="btn btn-link btn-sm dropdown-toggle pulse" role="button" data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow border-0">
                                            <a href="#!" class="dropdown-item">Action</a>
                                            <a href="#!" class="dropdown-item">Another action</a>
                                            <a href="#!" class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6>Hello,</h6>
                            <br>
                            <h6>I am project outsourcer if need any type of project (website / apps any IT Project ) please read.</h6><br>
                            <p>I am a BDM (Expert in Lead Generation) and I have 11 years of experience in this industry and do the work of outsourcing the project. I am searching an urgent basis expert developer team or company.  I have a regular customer, agency, and consultant overseas like USA, Canada, UK etc. Which gives me regular work. There is a lot of projects. They discuss me with every kind of project. I have done a lot of projects with them. And have maintained their relationship. So I have no shortage of any kind of project.</p>
                            <p><strong>I will provide 3 Type of service.</strong></p>
                            <ul>
                                <li>Direct Project (Outsourcing)  Business $5000 minimum in 45 working days.</li>
                                <li>Lead Provide (Domestic and International)</li>
                                <li>If you need Bidder so working  your profile (25 Bidding Portal)</li>
                            </ul>
                            <p class="text-info">Purchase: LUNO has not yet purchased this item from you.</p>
                            <br>
                            <p>ThemeMakker</p>
                            <div>Skype : thememakker</div>
                            <div>Website: thememakker.com</div>
                            <div class="file_folder d-flex flex-wrap border-top pt-3 mt-3">
                                <a class="py-2 px-3 m-1 rounded" href="javascript:void(0);">
                                    <div class="avatar rounded-circle no-thumbnail bg-light">
                                        <i class="fa fa-bar-chart text-success fa-lg"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="mb-0">Report2017.xls</p>
                                        <small class="text-muted">Size: 68KB</small>
                                    </div>
                                </a>
                                <a class="py-2 px-3 m-1 rounded" href="javascript:void(0);">
                                    <div class="avatar rounded-circle no-thumbnail bg-light">
                                        <i class="fa fa-file-text-o text-info fa-lg"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="mb-0">Report2017.doc</p>
                                        <small class="text-muted">Size: 68KB</small>
                                    </div>
                                </a>
                                <a class="py-2 px-3 m-1 rounded" href="javascript:void(0);">
                                    <div class="avatar rounded-circle no-thumbnail bg-light">
                                        <i class="fa fa-file-pdf-o text-danger fa-lg"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="mb-0">Report2017.pdf</p>
                                        <small class="text-muted">Size: 168KB</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#!" class="btn btn-sm btn-outline-secondary"><i class="fa fa-mail-reply"></i> Replay</a>
                            <a href="#!" class="btn btn-sm btn-outline-secondary"><i class="fa fa-mail-forward"></i> Forward</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.inbox .inbox-list-toggle').on('click', function () {
        $('.inbox .order-1').toggleClass('open');
    });
</script>
@endsection

@extends('backend.layouts.app')

@section('title', __('App Email'))

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
                    <div class="d-flex justify-content-between align-items-center px-lg-3 py-2 mt-2">
                        <div class="d-flex flex-wrap flex-grow-1 align-items-center">
                            <div class="form-check mb-0 me-lg-3 me-2">
                                <input class="form-check-input" type="checkbox" value="" id="checkall">
                                <label class="form-check-label" for="checkall">All</label>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary" type="button"><i class="fa fa-refresh"></i></button>
                            <div class="dropdown morphing scale-right mx-1">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">More</button>
                                <ul class="dropdown-menu border-0 shadow p-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown morphing scale-right d-none d-md-block">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Move to</button>
                                <ul class="dropdown-menu border-0 shadow p-2">
                                    <li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>
                                    <li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="text-muted me-2">1-50 of 234</span>
                            <button class="btn btn-sm btn-outline-secondary" type="button"><i class="fa fa-angle-left"></i></button>
                            <button class="btn btn-sm btn-outline-secondary" type="button"><i class="fa fa-angle-right"></i></button>
                            <button class="btn btn-sm d-block d-lg-none btn-primary inbox-list-toggle ms-3" type="button"><i class="fa fa-bars"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="list-group list-group-flush list-group-custom card">
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar1.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Marshall Nichols</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0 text-muted">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                                        <a href="#" class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-1 text-danger small"><i class="fa fa-file-pdf-o me-2"></i>established.pdf</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star active"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar2.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Marshall Cameron</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0 text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar3.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Brian Swader</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0 text-muted">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar4.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Edit Toke</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star active"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar5.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Dean Otto</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested</p>
                                        <a href="#" class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-1 text-danger small"><i class="fa fa-file-pdf-o me-2"></i>established.pdf</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star active"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar6.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Jack Bird</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                                        <a href="#" class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-1 text-success small"><i class="fa fa-file-excel me-2"></i>established.exc</a>
                                        <a href="#" class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-1 text-danger small"><i class="fa fa-file-pdf-o me-2"></i>established.pdf</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar7.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Orlando Lentz</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0 text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested</p>
                                        <a href="#" class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-1 text-primary small"><i class="fa fa-file-zip-o me-2"></i>established.zip</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar1.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Nellie Maxwell</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0 text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                        <li class="row g-0 list-group-item d-flex align-items-start py-3">
                            <div class="hover-actions end-0 me-3 bg-light rounded">
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive" ><i class="fa fa-inbox"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" ><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read" ><i class="fa fa-envelope"></i></button>
                                <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze" ><i class="fa fa-clock-o"></i></button>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <div class="d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <a href="#" class="ms-2 me-3"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                            <div class="col col-md-9 col-xxl-10">
                                <div class="row">
                                    <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                                        <a href="{{ route('admin.applications.app-email-detail') }}" class="d-flex text-primary text-truncate" title="">
                                            <img src="{{url('/')}}/assets/images/xs/avatar8.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Chris Fox</div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <p class="i-msg mb-0 text-muted"> It has survived not only five centuries, but also the leap into electronic typesetting</p>
                                        <a href="#" class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-1 text-info small"><i class="fa fa-file-word-o me-2"></i>established.docx</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">Aug 4</div>
                        </li>
                    </ul>
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

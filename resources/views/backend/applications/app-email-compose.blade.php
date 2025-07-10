@extends('backend.layouts.app')

@section('title', __('App Email compose'))

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
        <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
            <div class="row g-3">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center px-lg-3 py-2 mt-2">
                        <a href="{{ route('admin.applications.app-email') }}"><i class="fa fa-arrow-left me-2"></i>Back to Inbox</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">New Message</h6>
                            <div class="form-floating mb-1">
                                <input type="email" class="form-control" placeholder="Email To">
                                <label>Email To</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Subject">
                                <label>Subject</label>
                            </div>
                            <div class="summernote">
                                Hello there,
                                <br/>
                                <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                                <p>Please try <b>paste some texts</b> here</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#!" class="btn btn-primary">Send</a>
                            <a href="#!" class="btn btn-outline-secondary">Schedule Send</a>
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
    $(document).ready(function() {
        $('.summernote').summernote({
            tabsize: 2,
            height: 300
        });
        $('.note-editor .note-btn').on('click',function(){
            $(this).next().toggleClass("show");
        });
    });
</script>
@endsection

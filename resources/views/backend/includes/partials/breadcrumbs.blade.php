<?php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
?>
<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
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
        </div>
        <div class="row align-items-center">
            <div class="col">
                <h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, Chris!</h1>
                <small class="text-muted">You have 12 new messages and 7 new notifications.</small>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-12 mt-2 mt-md-0">
                <div class="input-group">
                    <input type="text" name="daterange" class="form-control">
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Report"><i class="fa fa-envelope"></i></button>
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Reports"><i class="fa fa-download"></i></button>
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Generate PDF"><i class="fa fa-file-pdf-o"></i></button>
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Dashboard"><i class="fa fa-share-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // date range picker
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    })
</script>

@extends('backend.layouts.app')

@section('title', __('Layouts'))

@section('content')
@php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
@endphp
<div class="card mb-3">
    <div class="card-body">
        <h3 class="fw-light"><i class="fa fa-thumbs-o-up me-2"></i>Handcrafted Responsive Layouts</h3>
        <div class="rating mt-2">
            <span class="me-2">
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            </span>
            Rated 4.7/5 in Customer Satisfaction  |  <a href="https://themeforest.net/user/wrraptheme" title="wrraptheme" target="_blank">Wrraptheme</a>
        </div>
    </div>
</div>

<div class="row g-3 row-deck row-cols-xxl-3 row-cols-lg-2 row-cols-md-1 row-cols-sm-1 row-cols-1">
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-1.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Main Layout</h4>
                <p>The most popular layout with the vertical menu on left side.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('horizontal_menu','N')"  href="{{ route('admin.dashboard') }}" title="demo">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-2.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Horizontal Menu Layout</h4>
                <p>A handcrafted layout gives maximum display space to the sashboard wdgets.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('horizontal_menu','Y')" href="{{ route('admin.dashboard') }}" title="demo">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-3.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">RTL Layout</h4>
                <p>An industry leading RTL standard design for the RTL language support.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('rtl_mode','Y')" href="{{ route('admin.dashboard') }}" title="demo">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-4.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Sidebar Dark Layout</h4>
                <p>An elegant layout with the classic design.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('sidebar_mode_dark','Y')" href="{{ route('admin.dashboard') }}"  title="demo">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-5.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Full-Screen Menu version</h4>
                <p>An elegant layout with the classic design.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('fullscreen_menu','Y')" href="{{ route('admin.dashboard') }}" title="demo">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-6.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Compact Sidebar menu</h4>
                <p>An elegant layout with the classic design.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('sidebar_mini','Y')" href="{{ route('admin.dashboard') }}" title="demo">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-7.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Quick Accessible Rightbar</h4>
                <p>An elegant layout with the classic design.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('sidebar_mini','N')" href="{{ route('admin.dashboard') }}" title="demo">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/layout/layout-8.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Wrapper top dark version</h4>
                <p>An elegant layout with the classic design.</p>
                <a class="btn text-uppercase bg-white" onclick="updateLayout('wrapper_top_dark_version','Y')" href="{{ route('admin.dashboard') }}" title="demo">Go to demo</a>
            </div>
        </div>
    </div>
</div>

<script>
    function updateLayout(key, value)
    {
        if((key == 'horizontal_menu' && value == 'N') || (key == 'horizontal_menu' && value == 'Y')){
            settingData.horizontal_menu = value
            settingData.rtl_mode = 'N'
            settingData.sidebar_mode_dark = 'N'
            settingData.fullscreen_menu = 'N'
            settingData.layout = 'layout-1'
            settingData.sidebar_mini = 'N'
            settingData.wrapper_top_dark_version = 'N'
        }else if(key == 'rtl_mode' && value == 'Y'){
            settingData.rtl_mode = value
            settingData.horizontal_menu = 'N'
            settingData.sidebar_mode_dark = 'N'
            settingData.fullscreen_menu = 'N'
            settingData.layout = 'layout-1'
            settingData.sidebar_mini = 'N'
            settingData.wrapper_top_dark_version = 'N'
        }else if(key == 'sidebar_mode_dark' && value == 'Y'){
            settingData.sidebar_mode_dark = value
            settingData.rtl_mode = 'N'
            settingData.horizontal_menu = 'N'
            settingData.fullscreen_menu = 'N'
            settingData.layout = 'layout-1'
            settingData.sidebar_mini = 'N'
            settingData.wrapper_top_dark_version = 'N'
        }else if(key == 'fullscreen_menu' && value == 'Y'){
            settingData.fullscreen_menu = value
            settingData.sidebar_mode_dark = 'N'
            settingData.rtl_mode = 'N'
            settingData.horizontal_menu = 'N'
            settingData.layout = 'layout-1'
            settingData.sidebar_mini = 'N'
            settingData.wrapper_top_dark_version = 'N'
        }else if((key == 'sidebar_mini' && value == 'Y') || (key == 'sidebar_mini' && value == 'N')){
            settingData.sidebar_mini = value
            settingData.layout = 'layout-2'
            settingData.fullscreen_menu = 'N'
            settingData.sidebar_mode_dark = 'N'
            settingData.rtl_mode = 'N'
            settingData.horizontal_menu = 'N'
            settingData.wrapper_top_dark_version = 'N'
            location.reload()
        }else if(key == 'wrapper_top_dark_version' && value == 'Y'){
            settingData.wrapper_top_dark_version = value
            settingData.layout = 'layout-1'
            settingData.sidebar_mini = 'N'
            settingData.fullscreen_menu = 'N'
            settingData.sidebar_mode_dark = 'N'
            settingData.rtl_mode = 'N'
            settingData.horizontal_menu = 'N'
        }
        
        $.ajax({
            url: "{{ route('admin.setting.update', $setting->id) }}",
            type: 'PATCH',
            data: settingData
        });
    }
</script>
@endsection

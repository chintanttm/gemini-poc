@php
    $setting = App\Models\Settings::where('id',1)->first();
    $currentURL = Request::segment(3);
    
@endphp
<!doctype html>
<html class="no-js " lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 5 admin template and web Application ui kit.">
        <meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects">
        <title>:: LUNO :: @yield('title')</title>
        <link rel="icon" href="{{ url('/') }}/favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/luno.style.min.css">
        <script src="{{ url('/') }}/assets/bundles/libscripts.bundle.js"></script>
    </head>
    <body @class([
        $setting->layout,
        $setting->font,
        'show' => $setting->sidebar_bg_image == 'Y',
        'rtl_mode' => $setting->rtl_mode == 'Y',
        'h-menu' => $setting->horizontal_menu == 'Y',
        'radius-0' => $setting->border_radius_none == 'Y',
        ]) data-luno="{{ $setting->theme }}">
        <!-- start: body area -->
        <div class="wrapper">

            <!-- auth: Header -->
            @if($currentURL == 'auth-signin3')
                @include('frontend.includes.header.header')
            @endif

            <!-- start: page body -->
            <div @class([
                'page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1' => $currentURL != 'auth-signin2' && $currentURL != 'auth-signin3',
                'body d-flex p-0 p-xl-5' => $currentURL == 'auth-signin2',
                'body d-flex justify-content-center my-md-5 py-md-5 py-4' => $currentURL == 'auth-signin3'
                ])>
                <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
                    @yield('content')
                </div>
            </div>

            <!-- auth: footer -->
            @if($currentURL == 'auth-signin3')
                @include('frontend.includes.footer.footer')
            @endif
        </div>
        <!-- Modal: Setting -->
        @include('frontend.includes.modal.settingsModal')
    </body>
</html>
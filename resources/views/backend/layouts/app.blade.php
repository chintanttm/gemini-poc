<?php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
    $bodyClasses = App\Helpers\BodyClassHelper::pageBasedDynamicClass();
    $sidebarMenu = config('menu_json');
    $currentUrl = collect(Request::segments())->last();
?>
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
        <!-- plugin css file  -->
        @if($currentUrl == 'account-billing' || $currentUrl == 'account-invoices' || 
            $currentUrl == 'app-contacts' || $currentUrl == 'app-file-manager' ||
            $currentUrl == 'app-project' || $currentUrl == 'app-project-detail' ||
            $currentUrl == 'dashboard')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/dataTables.min.css">
        @endif
        @if($currentUrl == 'app-calendar')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/fullcalendar.min.css">
        @endif
        @if($currentUrl == 'app-calendar-tui')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/tuicalendar.min.css">
        @endif
        @if($currentUrl == 'app-blog-post' || $currentUrl == 'app-email-compose')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/summernote.min.css">
        @endif
        @if($currentUrl == 'app-blog-detail' || $currentUrl == 'app-blog' ||
            $currentUrl == 'app-social' || $currentUrl == 'page-footers' ||
            $currentUrl == 'page-profile' || $currentUrl == 'page-search')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/fancybox.min.css">
        @endif
        @if($currentUrl == 'element-dropify')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/dropify.min.css">
        @endif
        @if($currentUrl == 'account-billing' || $currentUrl == 'account-invoices' ||
            $currentUrl == 'dashboard' || $currentUrl == 'element-daterange' || $bodyClasses['showBreadcrumbs']) 
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/daterangepicker.min.css">
        @endif
        <link rel="stylesheet" href="{{ url('/') }}/assets/plugin/prismjs/prism.css">
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/luno.style.min.css">
        <style>
            .app-demo{position: relative;overflow: hidden;}
            .app-demo .card-overlay {position: absolute;top: -60px;left: -60px;width: 60px;height: 60px;border-radius: 50%;background: var(--secondary-color);-webkit-transform: scale(1);transform: scale(1);-webkit-transition: all .5s;transition: all .5s;z-index: 1;}
            .app-demo:hover .card-overlay{-webkit-transform: scale(35);transform: scale(35);}
            .app-demo:hover .demo-text{opacity: 1;transform: translateY(0);}
            .app-demo .demo-text{transition: all .3s;transition-delay: .1s;transform: translateY(20px);display: flex;flex-direction: column;position: absolute;z-index: 2;text-align: center;justify-content: center;width: calc(100% - 1rem);height: calc(100% - 1rem);align-items: center;color: #fff;opacity: 0;}
        </style>
        <script src="{{ url('/') }}/assets/bundles/libscripts.bundle.js"></script>
        @if($currentUrl == 'app-campaigns' || $currentUrl == 'app-project-details' || $currentUrl == 'dashboard' || $currentUrl == 'page-profile')
            <script src="{{ url('/') }}/assets/bundles/apexcharts.bundle.js"></script>
        @endif
        @if($currentUrl == 'account-billing' || $currentUrl == 'account-invoices' || 
            $currentUrl == 'app-contacts' || $currentUrl == 'app-file-manager' ||
            $currentUrl == 'app-project' || $currentUrl == 'app-project-detail' ||
            $currentUrl == 'dashboard')
            <script src="{{ url('/') }}/assets/bundles/dataTables.bundle.js"></script>
        @endif
        @if($currentUrl == 'account-invoices' || $currentUrl == 'page-pricing')
            <script src="{{ url('/') }}/assets/bundles/owlcarousel.bundle.js"></script>
        @endif
    </head>
    <body @class([
            $setting->layout,
            $setting->font,
            'option2' => $setting->wrapper_top_dark_version == 'Y',
            'rtl_mode' => $setting->rtl_mode == 'Y',
            'h-menu' => $setting->horizontal_menu == 'Y',
            'radius-0' => $setting->border_radius_none == 'Y',
            'fullscreen-menu' => $setting->fullscreen_menu == 'Y',
        ]) data-luno="{{ $setting->theme }}">

        <!-- start: Mega meanu -->
        @if($setting['fullscreen_menu'] == 'Y')
            @include('backend.includes.modal.megamenu')
        @endif

        <!-- page sidebar -->
        {{-- @if($setting['fullscreen_menu'] == 'N')
            @include('backend.includes.sidebar.sidebar')
        @endif --}}
        
        <!-- body area -->
        <div class="wrapper">
            <!-- page header -->
            {{-- @include('backend.includes.header.header') --}}

            <!-- page breadcrumbs -->
            @if($bodyClasses['showBreadcrumbs'])
                @include('backend.includes.partials.breadcrumbs')
            @endif
            <!-- page body -->
            <div class="page-body {{ $bodyClasses['bodyClass'] }}">
                @if($bodyClasses['hideContainerClass'])
                    @yield('content')
                @else
                    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
                        @yield('content')
                    </div>
                @endif
            </div>

            <!-- page footer -->
            @if($bodyClasses['showFooter'])
                @include('backend.includes.footer.footer')
            @endif
        </div>

        <!-- start: rightbar area -->
        @if(($setting['layout'] == 'layout-2') && ($setting['sidebar_mini'] == 'N'))
            @include('backend.includes.rightbar')
        @endif

        <!-- main modal -->
        @include('backend.includes.modal.main-modal')

        <!-- Plugin Js -->
        
        @if($currentUrl == 'account-billing' || $currentUrl == 'account-invoices' ||
            $currentUrl == 'dashboard' || $currentUrl == 'element-daterange' || $bodyClasses['showBreadcrumbs'])
            <script src="{{ url('/') }}/assets/bundles/daterangepicker.bundle.js"></script>
        @endif
        
        @if($currentUrl == 'dashboard')
            <script src="{{ url('/') }}/assets/js/page/dashboard.js"></script>
        @endif
        @if($currentUrl == 'app-calendar')
            <script src="{{ url('/') }}/assets/bundles/fullcalendar.bundle.js"></script>
        @endif
        @if($currentUrl == 'app-calendar-tui')
            <script src="{{ url('/') }}/assets/bundles/tui-calendar.bundle.js"></script>
        @endif
        @if($currentUrl == 'app-blog-post' || $currentUrl == 'app-email-compose')
            <script src="{{ url('/') }}/assets/bundles/summernote.bundle.js"></script>
        @endif
        @if($currentUrl == 'app-jkanban')
            <script src="{{ url('/') }}/assets/bundles/nestable.bundle.js"></script>
        @endif
        @if($currentUrl == 'app-blog-detail' || $currentUrl == 'app-blog' ||
            $currentUrl == 'app-social' || $currentUrl == 'page-footers' ||
            $currentUrl == 'page-profile' || $currentUrl == 'page-search')
            <script src="{{ url('/') }}/assets/bundles/fancybox.bundle.js"></script>
        @endif
        
        @if($currentUrl == 'account-invoices' || $currentUrl == 'element-sweetalert2')
            <script src="{{ url('/') }}/assets/bundles/sweetalert2.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-dropify')
            <script src="{{ url('/') }}/assets/bundles/dropify.bundle.js"></script>
        @endif
        @if($currentUrl == 'account-create-invoices')
            <script src="{{ url('/') }}/assets/bundles/invoice.bundle.js"></script>
        @endif
        <script src="{{ url('/') }}/assets/plugin/prismjs/prism.js"></script>
        <script>
            //dynamic color set
            window.onload = function() {
                let root = document.documentElement;
                root.setAttribute('data-theme', '{{ $setting->layout_mode }}')
                if("{{ $setting->theme }}" == "theme-dynamic"){
                    root.style.setProperty('--primary-color', "{{ $setting->primary_color }}");
                    root.style.setProperty('--secondary-color',"{{ $setting->secondary_color }}");
                    root.style.setProperty('--body-color', "{{ $setting->site_background }}");
                    root.style.setProperty('--card-color',"{{ $setting->card_background }}");
                    root.style.setProperty('--border-color', "{{ $setting->card_border }}");
                    root.style.setProperty('--chart-color1', "{{ $setting->chart_color_1 }}");
                    root.style.setProperty('--chart-color2', "{{ $setting->chart_color_2 }}");
                    root.style.setProperty('--chart-color3', "{{ $setting->chart_color_3 }}");
                    root.style.setProperty('--chart-color4', "{{ $setting->chart_color_4 }}");
                    root.style.setProperty('--chart-color5', "{{ $setting->chart_color_5 }}");
                }
                if("{{ $setting->sidebar_bg_image }}" == "Y"){
                    root.style.setProperty('--sidebar-img', 'url({{ $setting->sidebar_bg_image_path }})');
                }
            };
        </script>
</html>
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
        <title>:: LUNO :: Documentation</title>
        <link rel="icon" href="{{ url('/') }}/favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- project css file  -->
        <link rel="stylesheet" href="{{ url('/') }}/assets/plugin/prismjs/prism.css">
        @if($currentUrl == 'element-daterange')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/rangeslider.min.css">
        @endif
        @if($currentUrl == 'element-select2' || $currentUrl == 'form-wizard-validate')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/select2.min.css">
        @endif
        @if($currentUrl == 'element-jkanban' || $currentUrl == 'form-bootstrap')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/jkanban.min.css">
        @endif
        @if($currentUrl == 'plugin-jsgrid')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/jsgrid.min.css"/>
        @endif
        @if($currentUrl == 'plugin-fancybox')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/fancybox.min.css">
        @endif
        @if($currentUrl == 'plugin-skedtape')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/skedtape.min.css"/>
        @endif
        @if($currentUrl == 'plugin-fullcalendar')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/fullcalendar.min.css">
        @endif
        @if($currentUrl == 'plugin-imagecropper')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/cropper.min.css">
        @endif
        @if($currentUrl == 'plugin-tabledragger')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/tabledragger.min.css">
        @endif
        @if($currentUrl == 'plugin-x-editable')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/x-editable.min.css"/>
        @endif
        @if($currentUrl == 'plugin-swiper')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/swiper.min.css"/>
        @endif
        @if($currentUrl == 'plugin-table' || $currentUrl == 'w-cards-tables')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/dataTables.min.css">
        @endif
        @if($currentUrl == 'plugin-summernote')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/summernote.min.css"/>
        @endif
        @if($currentUrl == 'chartjs')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/chartist.min.css">
        @endif
        @if($currentUrl == 'element-daterange')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/daterangepicker.min.css">
        @endif
        @if($currentUrl == 'element-dropify')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/dropify.min.css">
        @endif
        @if($currentUrl == 'element-flatpickr')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/flatpickr.min.css">
        @endif
        @if($currentUrl == 'element-nouislider')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/nouislider.min.css"/>
        @endif
        @if($currentUrl == 'form-wizard-v' || $currentUrl == 'form-wizard-validate')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/jquerysteps.min.css">
        @endif
        @if($currentUrl == 'element-datepicker' || $currentUrl == 'form-custome')
            <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrapdatepicker.min.css">
        @endif
        @if($currentUrl == 'form-wizard-validate' || $currentUrl == 'form-custome')
            <link rel="stylesheet" href="{{ url('/') }}/assets/plugin/parsleyjs/css/parsley.css">
        @endif
        @if($currentUrl == 'doc-structure')
            <link rel="stylesheet" href="{{ url('/') }}/assets/default/style.min.css">
        @endif
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/luno.style.min.css">
        <script src="{{ url('/') }}/assets/bundles/libscripts.bundle.js"></script>

        @if($currentUrl == 'doc-structure')
            <script src="{{ url('/') }}/assets/default/jstree.min.js"></script>
        @endif
        @if($currentUrl == 'element-flatpickr')
            <script src="{{ url('/') }}/assets/bundles/flatpickr.bundle.js"></script>
        @endif
        @if($currentUrl == 'form-custome')
            <script src="{{ url('/') }}/assets/bundles/inputmask.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-maxlength')
            <script src="{{ url('/') }}/assets/bundles/bs-maxlength.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-nouislider')
            <script src="{{ url('/') }}/assets/bundles/nouislider.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-rangeslider')
            <script src="{{ url('/') }}/assets/bundles/rangeslider.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-multiselectsplitter')
            <script src="{{ url('/') }}/assets/bundles/multiselectsplitter.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-jkanban')
            <script src="{{ url('/') }}/assets/bundles/jkanban.bundle.js"></script>
        @endif
        @if($currentUrl == 'form-wizard-v' || $currentUrl == 'form-wizard-h' || $currentUrl == 'form-wizard-validate')
            <script src="{{ url('/') }}/assets/bundles/jquerysteps.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-select2' || $currentUrl == 'form-wizard-validate')
            <script src="{{ url('/') }}/assets/bundles/select2.bundle.js"></script>
        @endif
        @if($currentUrl == 'form-wizard-validate' || $currentUrl == 'form-custome')
            <script src="{{ url('/') }}/assets/plugin/parsleyjs/js/parsley.min.js"></script>
        @endif
        @if($currentUrl == 'element-datepicker' || $currentUrl == 'form-custome')
            <script src="{{ url('/') }}/assets/bundles/bootstrapdatepicker.bundle.js"></script>
        @endif
        @if($currentUrl == 'w-cards-charts' || $currentUrl == 'chart-apex')
            <script src="{{ url('/') }}/assets/bundles/apexcharts.bundle.js"></script>
        @endif
        @if($currentUrl == 'chart-apex')
            <script src="{{ url('/') }}/assets/js/page/chart-apex.js"></script>
        @endif
        @if($currentUrl == 'element-clipboard')
            <script src="{{ url('/') }}/assets/bundles/clipboard.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-table' || $currentUrl == 'w-cards-tables')
            <script src="{{ url('/') }}/assets/bundles/dataTables.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-jsgrid')
            <script src="{{ url('/') }}/assets/bundles/jsgrid.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-summernote')
            <script src="{{ url('/') }}/assets/bundles/summernote.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-owlcarousel')
            <script src="{{ url('/') }}/assets/bundles/owlcarousel.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-masonrygallery')
            <script src="{{ url('/') }}/assets/bundles/masonry.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-fancybox')
            <script src="{{ url('/') }}/assets/bundles/fancybox.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-skedtape')
            <script src="{{ url('/') }}/assets/bundles/skedtape.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-typedjs')
            <script src="{{ url('/') }}/assets/bundles/typedjs.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-fullcalendar')
            <script src="{{ url('/') }}/assets/bundles/fullcalendar.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-countup')
            <script src="{{ url('/') }}/assets/bundles/jquerycounterup.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-imagecropper')
            <script src="{{ url('/') }}/assets/bundles/cropper.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-tabledragger')
            <script src="{{ url('/') }}/assets/bundles/tabledragger.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-x-editable')
            <script src="{{ url('/') }}/assets/bundles/x-editable.bundle.js"></script>
        @endif
        @if($currentUrl == 'plugin-swiper')
            <script src="{{ url('/') }}/assets/bundles/swiper.bundle.js"></script>
        @endif

        <style>
            .layout-1 .document.sidebar{width: 260px;}
            .layout-1 .document.sidebar .title-text{flex-direction: row;}
            .layout-1 .document.sidebar .menu-list{border: 0; padding: 0;}
            .layout-1 .document.sidebar .menu-list li{border: 0;}
            .layout-1 .document.sidebar .menu-list .m-link{padding: 4px 0;}
            .layout-1 .document.sidebar .menu-list .m-link>i{text-align: left;margin: 0; width: 20px;}
        </style>
    </head>
    <body @class([$setting->layout,$setting->font,'option2' => $setting->wrapper_top_dark_version == 'Y','rtl_mode' => $setting->rtl_mode == 'Y','h-menu' => $setting->horizontal_menu == 'Y','radius-0' => $setting->border_radius_none == 'Y','fullscreen-menu' => $setting->fullscreen_menu == 'Y']) data-luno="{{ $setting->theme }}">

        <!-- sidebar -->
        @include('backend.includes.sidebar.documentation-sidebar')

        <!-- start: body area -->
        <div class="wrapper">

            <!-- start: page header -->
            @include('backend.includes.header.documentation-header')

            <!-- start: page toolbar -->
            @include('backend.includes.partials.documentation-breadcrumbs')

            <!-- start: page body -->
            <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
                <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
                    @yield('content')
                </div>
            </div>

            <!-- start: page footer -->
            @include('backend.includes.footer.documentation-footer')

        </div>
        
        <!-- Modal: Setting -->
        @include('backend.includes.modal.settingsModal')
        <!-- Prism js file please do not add in your project -->
        <script src="{{ url('/') }}/assets/plugin/prismjs/prism.js"></script>
        @if($currentUrl == 'chartjs')
            <script src="{{ url('/') }}/assets/bundles/chartist.bundle.js"></script>
        @endif
        @if($currentUrl == 'chart-knob')
            <script src="{{ url('/') }}/assets/bundles/jqueryknob.bundle.js"></script>
        @endif
        @if($currentUrl == 'chart-sparkline')
            <script src="{{ url('/') }}/assets/bundles/sparkline.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-daterange')
            <script src="{{ url('/') }}/assets/bundles/daterangepicker.bundle.js"></script>     
        @endif  
        @if($currentUrl == 'element-dropify')
            <script src="{{ url('/') }}/assets/bundles/dropify.bundle.js"></script>
        @endif 
        @if($currentUrl == 'element-sweetalert2') 
            <script src="{{ url('/') }}/assets/bundles/sweetalert2.bundle.js"></script>
        @endif
        @if($currentUrl == 'element-tagsinput') 
            <script src="{{ url('/') }}/assets/bundles/bootstraptagsinput.bundle.js"></script>
        @endif
    </body>
</html>
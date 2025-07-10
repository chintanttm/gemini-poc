@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fa fa-thumbs-up me-2"></i>Getting Started</h5>
                </div>
                <div class="card-body">
                    <p class="lead">This guide will help you get started with <strong class="text-danger">LUNO</strong>!</p>
                    <p class="lead">All the important stuff –&nbsp;compiling the source, file structure, build tools, file includes –&nbsp;is documented here, but should you have any questions, always feel free to reach out to <span class="text-primary fw-bold">wraptheme@gmail.com</span></p>
                    <p class="lead">If you really like our work, design, performance and support then <a href="https://themeforest.net/downloads"> please don't forgot to rate us</a> on Themeforest,<br> it really motivate us to provide something better.
                        <span class="ms-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">LUNO - in 2 minutes Explainer + Code + Intro Video</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <iframe class="rounded-4" style="width: 100%; height: auto; min-height: 460px;" src="https://www.youtube.com/embed/9_PV-f87xPw" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6">
                            <iframe class="rounded-4" style="width: 100%; height: auto; min-height: 460px;" src="https://www.youtube.com/embed/gjb4rbNrg7U" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card fieldset border border-dark mb-4">
                <span class="fieldset-tile text-dark bg-body">Getting Started:</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.doc-setup') }}">Dev Setup</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.doc-structure') }}">File Structure</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.doc-references') }}">References</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.doc-helperclass') }}">Helper Class</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.doc-staterpage') }}">Stater Page</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.doc-animation') }}">Animation</a></li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-primary mb-4">
                <span class="fieldset-tile text-primary bg-body">Handcrafted Widget Card:</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.w-cards') }}"><span>Basic Card</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.w-cards-tiles') }}"><span>Card Tiles</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.w-cards-user') }}"><span>User's Card</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.w-cards-tabbed') }}"><span>Tabbed Card</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.w-cards-ribbons') }}"><span>Card Ribbons</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.w-cards-list') }}"><span>Card List</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.w-cards-charts') }}"><span>Chart Widget</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-secondary mb-4">
                <span class="fieldset-tile text-secondary bg-body">Luno Advanced Elements:</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-clipboard') }}"><span>Clipboard</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-colorpicker') }}"><span>Colorpicker</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-daterange') }}"><span>Date Range Picker</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-datepicker') }}"><span>Datepicker</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-dropify') }}"><span>Dropify</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-flatpickr') }}"><span>Flatpickr</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-inputmask') }}"><span>Inputmask</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-imageinput') }}"><span>Image Input</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-maxlength') }}"><span>Maxlength</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-nouislider') }}"><span>nouislider</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-passwordmeter') }}"><span>Password Meter</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-rangeslider') }}"><span>Rangeslider</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-sweetalert2') }}"><span>Sweetalert 2</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-tagsinput') }}"><span>Tagsinput</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-select2') }}"><span>Select 2</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-multiselectsplitter') }}"><span>Multiselect Splitter</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.element-jkanban') }}"><span>jKanban Board</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-info mb-4">
                <span class="fieldset-tile text-info bg-body">Charts:</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.chart-apex') }}"><span>Apex Chart</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.chartjs') }}"><span>ChartJS</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.chart-knob') }}"><span>JQuery Knob</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.chart-sparkline') }}"><span>Sparkline</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-dark mb-4">
                <span class="fieldset-tile text-dark bg-body">Form Elements:</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.form-bootstrap') }}"><span>Bootstrap Form</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.form-wizard-h') }}"><span>Form Wizard horizontal</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.form-wizard-v') }}"><span>Form Wizard Vertical</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.form-wizard-validate') }}"><span>Form Wizard Validate</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.form-custome') }}"><span>Custome Form</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-danger mb-4">
                <span class="fieldset-tile text-danger bg-body">Plugins (install with NPM):</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-table') }}"><span>DataTables</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-jsgrid') }}"><span>jsGrid Table</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-summernote') }}"><span>Summernote</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-owlcarousel') }}"><span>Owl Carousel</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-masonrygallery') }}"><span>Masonry Gallery</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-fancybox') }}"><span>FancyBox Gallery</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-dropify') }}"><span>Drag & Drop</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-nestable') }}"><span>jquery Nestable</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-skedtape') }}"><span>jQuery skedTape</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-typedjs') }}"><span>Typed.js</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-fullcalendar') }}"><span>Fullcalendar</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-countup') }}"><span>CountUp</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-imagecropper') }}"><span>Cropper</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-tabledragger') }}"><span>Table Dragger</span></a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.plugin-x-editable') }}"><span>X-editable</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-warning mb-4">
                <span class="fieldset-tile text-warning bg-body">Font icon (5000+):</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.icon-fontawesome') }}">Font Awesome</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.icon-linear') }}">Simple line</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.icon-weather') }}">Weather Icons</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.icon-feather') }}">Feather Icons</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.icon-8') }}">Icons8 Line Awesome</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.icon-bootstrap') }}">Bootstrap Icon</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.icon-flag') }}">Flag Icon</a></li>
                </ul>
            </div>
        </div>
        <div class="col-12">
            <div class="card fieldset border border-success mb-4">
                <span class="fieldset-tile text-success bg-body">Bootstrap 5 Components:</span>
                <ul class="mb-0 list-unstyled d-flex flex-wrap">
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-alerts') }}">Alerts</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-avatar') }}">Avatar</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-badge') }}">Badge</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-border') }}">Borders</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-breadcrumb') }}">Breadcrumb</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-buttons') }}">Buttons</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-card') }}">Card</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-carousel') }}">Carousel</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-collapse') }}">Collapse</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-dropdowns') }}">Dropdowns</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-listgroup') }}">List group</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-modal') }}">Modal</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-navbar') }}">Navbar</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-navs') }}">Navs</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-pagination') }}">Pagination</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-popovers') }}">Popovers</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-progress') }}">Progress</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-scrollspy') }}">Scrollspy</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-spinners') }}">Spinners</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-toasts') }}">Toasts</a></li>
                    <li><a class="card p-3 fs-5 fw-light m-1 color-600 lift" href="{{ route('admin.documentation.ui-tooltips') }}">Tooltips</a></li>
                </ul>
            </div>
        </div>
        <!-- start: navigation btn -->
        @include('backend.documentation.next-previous-url')
    </div>
@endsection

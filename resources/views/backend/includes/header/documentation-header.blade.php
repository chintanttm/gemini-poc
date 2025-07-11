<header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">

        <nav class="navbar">
            <!-- start: toggle btn -->
            <div class="d-flex">
                <button type="button" class="btn btn-link d-block d-xl-none menu-toggle ps-0 text-primary">
                    <span><i class="fa fa-navicon"></i></span>
                </button>
                <a href="{{ route('admin.dashboard') }}" class="brand-icon d-flex align-items-center me-1 me-sm-3 me-lg-4 text-primary">
                    <span class="fs-4 fw-bold">Doc<span class="d-lg-inline-block d-none">umentation</span>
                </a>
            </div>
            <!-- start: search area -->
            <div class="header-left flex-grow-1 d-none d-md-block">
                <div class="main-search px-3 flex-fill">
                    <input class="form-control" type="text" placeholder="Enter your search key word">
                    <div class="card shadow rounded-4 search-result slidedown">
                        <div class="card-body">
                            <small class="text-uppercase text-muted">Recent searches</small>
                            <div class="d-flex flex-wrap align-items-start mt-2 mb-4">
                                <a class="small rounded py-1 px-2 m-1 fw-normal bg-primary text-white" href="#">Fitness Analytics</a>
                                <a class="small rounded py-1 px-2 m-1 fw-normal bg-danger text-white" href="#">job Portal</a>
                                <a class="small rounded py-1 px-2 m-1 fw-normal bg-secondary text-white" href="#">Cryptocurrency</a>
                                <a class="small rounded py-1 px-2 m-1 fw-normal bg-warning text-white" href="{{ route('admin.applications.app-campaigns') }}">Campaigns</a>
                                <a class="small rounded py-1 px-2 m-1 fw-normal bg-dark text-white" href="{{ route('admin.applications.app-blog') }}">Blog</a>
                                <a class="small rounded py-1 px-2 m-1 fw-normal bg-info text-white" href="{{ route('admin.page.page-bookmark') }}">Bookmarks</a>
                            </div>
                            <small class="text-uppercase text-muted">Suggestions</small>
                            <div class="card list-group list-group-flush list-group-custom mt-2">
                                <a class="list-group-item list-group-item-action text-truncate" href="{{ route('admin.documentation.doc-helperclass') }}">
                                    <div class="fw-bold">Helper Class</div>
                                    <small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                </a>
                                <a class="list-group-item list-group-item-action text-truncate" href="{{ route('admin.documentation.element-daterange') }}">
                                    <div class="fw-bold">Date Range Picker</div>
                                    <small class="text-muted">There are many variations of passages of Lorem Ipsum available</small>
                                </a>
                                <a class="list-group-item list-group-item-action text-truncate" href="{{ route('admin.documentation.element-imageinput') }}">
                                    <div class="fw-bold">Image Input</div>
                                    <small class="text-muted">It is a long established fact that a reader will be distracted</small>
                                </a>
                                <a class="list-group-item list-group-item-action text-truncate" href="{{route('admin.documentation.plugin-table')}}">
                                    <div class="fw-bold">DataTables for jQuery</div>
                                    <small class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                </a>
                                <a class="list-group-item list-group-item-action text-truncate" href="{{ route('admin.documentation.doc-setup') }}">
                                    <div class="fw-bold">Development Setup</div>
                                    <small class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text.</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start: link -->
            <div class="h-right justify-content-end d-flex align-items-center">
                <a class="btn btn-light" href="https://www.wrraptheme.com/templates/luno/marketing/"><i class="fa fa-external-link me-2"></i>Preview</a>
                <a class="btn btn-danger mx-2" href="https://themeforest.net/item/luno-bootstrap-5-responsive-admin-dashboard-template/36214125"><i class="fa fa-download me-2"></i>Download</a>
                <a class="btn btn-light" href="#" data-bs-toggle="modal" data-bs-target="#SettingsModal" title="Settings"><i class="fa fa-gear"></i></a>
            </div>
        </nav>

    </div>
</header>
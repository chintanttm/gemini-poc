<div @class([
    'sidebar p-2 py-md-3',
    'dark' => $setting->sidebar_mode_dark == 'Y',
    'sidebar-img-bg' => $setting->sidebar_bg_image == 'Y',
    'sidebar-mini' => $setting->sidebar_mini == 'Y'])>
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <!-- sidebar: title-->
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">L</span><span>UNO</span></h4>
            <div class="dropdown morphing scale-left">
                <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                <ul class="dropdown-menu shadow border-0 p-2 mt-2" data-bs-popper="none">
                    <li class="fw-bold px-2">Quick Actions</li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item active" href="{{ route('admin.dashboard') }}" aria-current="page">Overview</a></li>
                    <li><a class="dropdown-item" href="#">Inventory</a></li>
                    <li><a class="dropdown-item" href="#">eCommerce</a></li>
                    <li><a class="dropdown-item" href="#">HRMS</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('admin.account.account-invoices') }}">Invoices List</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.account.account-create-invoices') }}">Create Invoices</a></li>
                </ul>
            </div>
        </div>
        <!-- sidebar: Create new -->
        <div class="create-new py-3 mb-2">
            <div class="d-flex">
                <select class="form-select rounded-pill me-1">
                    <option selected>Select Project</option>
                    <option value="1">Luno University</option>
                    <option value="2">Book Manager</option>
                    <option value="3">Luno Sass App</option>
                </select>
                <button class="btn bg-primary text-white rounded-circle" data-bs-toggle="modal" data-bs-target="#CreateNew" type="button"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        <!-- sidebar: menu list -->
        <div class="main-menu flex-grow-1">
            @include('backend.includes.menus.vertical-sidebar-menu')
        </div>
        <!-- sidebar: footer link -->
        <ul class="menu-list nav navbar-nav flex-row text-center">
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#ScheduleModal" title="My Schedule">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path class="fill-secondary" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                        <path class="fill-secondary" d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                    </svg>
                </a>
            </li>
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal" title="My notes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z"/>
                        <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z"/>
                    </svg>
                </a>
            </li>
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="{{ route('frontend.auth.logout') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z"/>
                        <path class="fill-secondary" d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                    </svg>
                </a> 
            </li>
        </ul>
    </div>
</div>
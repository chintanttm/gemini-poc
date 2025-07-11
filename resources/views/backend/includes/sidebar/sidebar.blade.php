<div @class([
    'sidebar p-2 py-md-3',
    'dark' => $setting->sidebar_mode_dark == 'Y',
    'sidebar-img-bg' => $setting->sidebar_bg_image == 'Y',
    'sidebar-mini' => $setting->sidebar_mini == 'Y'])>
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <!-- sidebar: title-->
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">L</span><span>UNO</span></h4>
            {{-- <div class="dropdown morphing scale-left">
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
            </div> --}}
        </div>
        <!-- sidebar: Create new -->
        {{-- <div class="create-new py-3 mb-2">
            <div class="d-flex">
                <select class="form-select rounded-pill me-1">
                    <option selected>Select Project</option>
                    <option value="1">Luno University</option>
                    <option value="2">Book Manager</option>
                    <option value="3">Luno Sass App</option>
                </select>
                <button class="btn bg-primary text-white rounded-circle" data-bs-toggle="modal" data-bs-target="#CreateNew" type="button"><i class="fa fa-plus"></i></button>
            </div>
        </div> --}}
        <!-- sidebar: menu list -->
        <div class="main-menu flex-grow-1">
            @include('backend.includes.menus.vertical-sidebar-menu')
        </div>
        <!-- sidebar: footer link -->
        <ul class="menu-list nav navbar-nav flex-row text-center">
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
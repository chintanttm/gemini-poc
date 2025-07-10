<nav class="navbar navbar-expand-lg bg-transparent py-3 border-bottom">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <a class="navbar-brand fw-bold fs-3 me-lg-5 text-primary" href="#">LUNO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6">
                <li class="nav-item"><a class="nav-link text-muted" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link text-muted" href="#">About US</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu dropdown-animation shadow border-0">
                        <li><a class="dropdown-item" href="#">Web Design <i class="fa fa-arrow-right"></i></a></li>
                        <li><a class="dropdown-item" href="#">App Design <i class="fa fa-arrow-right"></i></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Web Development <i class="fa fa-arrow-right"></i></a></li>
                        <li><a class="dropdown-item" href="#">App Development <i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <a class="nav-link text-muted collapsed me-3" data-bs-toggle="collapse" data-bs-target="#main-search" href="#" title="Search" aria-expanded="false">
                    <i class="fa fa-search"></i>
                </a>
                <button class="btn btn-dark px-4" type="submit">SignUp</button>
            </form>
        </div>
    </div>
</nav>

<!-- Search: div -->
<div class="border-bottom collapse bg-primary" id="main-search">
    <div class="py-4 {{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">

        <div class="input-group">
            <input type="text" class="form-control border-0 p-0 bg-transparent" placeholder="Search. Components, Layouts, etc...">

            <div class="input-group-append ms-3">
                <button class="btn btn-light" type="submit">Search</button>
            </div>
        </div>

    </div>
</div>
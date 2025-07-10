@extends('backend.layouts.app')

@section('title', __('Crafted list'))

@section('content')
<div class="card mb-3">
    <div class="card-body">
        <h3 class="fw-light"><i class="fa fa-thumbs-o-up me-2"></i>Handcrafted Pages</h3>
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

<div class="row g-3 row-deck row-cols-xxl-3 row-cols-xl-2 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1">
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/profile.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">My Profile</h4>
                <p>A beautiful page to show all the user related details in well managed ard designs.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-profile') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/bookmark.jpg" alt="app calendar tui">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Bookmark</h4>
                <p>An unique page to see and manage all your bookmarks.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-bookmark') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/timeline.jpg" alt="app Inbox">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Timeline</h4>
                <p>Have to show timelines? This is the perfect way to show it.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-timeline') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/imagegallery.jpg" alt="app Chat">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Image Gallery</h4>
                <p>An simple design to show all the images.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-imagegallery') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/pricing.jpg" alt="app Social">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Pricing Table</h4>
                <p>Want to sell plans? You should look at this page.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-pricing') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/teamsboard.jpg" alt="app File Manager">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Teamboard</h4>
                <p>A page to track the team activities.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-teamsboard') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/supportticket.jpg" alt="app Todo">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Support Ticket</h4>
                <p>A dashboard to see the status of the support app.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-support-ticket') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/faqs.jpg" alt="app Contact">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">FAQs</h4>
                <p>Answer the queries of your potential customers in the beautiful way.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-faqs') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/crafted-page/searchpage.jpg" alt="app Project">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Search Page</h4>
                <p>Page to show all the search results.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.page.page-search') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-dark text-light p-2">
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-bold">Live Chat Support</h4>
                <span class="small text-muted">Time zone (IST)</span>
                <p class="lead text-muted">You have any Doubt or Any kind of Issue then ask Our Experts Because We’re always here to help you.</p>
                <a href="https://tawk.to/chat/5c6d4867f324050cfe342c69/default" target="_blank" class="btn text-uppercase btn-white m-1">Chat Now</a>
                <a href="https://www.thememakker.com/contact/" target="_blank" class="btn text-uppercase btn-warning m-1">Contact</a>
            </div>
        </div>
    </div>
</div>
@endsection

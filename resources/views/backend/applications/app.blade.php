@extends('backend.layouts.app')

@section('title', __('App List'))

@section('content')
<div class="card mb-3">
    <div class="card-body">
        <h3 class="fw-light"><i class="fa fa-thumbs-o-up me-2"></i>Handcrafted Applications</h3>
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
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/calendar.jpg" alt="app calendar">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Calendar</h4>
                <p>An App to schedule and manage all your events and appoinments.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.crm.applications.app-calendar') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/calendar-tui.jpg" alt="app calendar tui">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Calendar Tui</h4>
                <p>An unique app the manage all your events beautifully.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-calendar-tui') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/inbox.jpg" alt="app Inbox">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Inbox App</h4>
                <p>An app to check all your emails.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-email') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/chat.jpg" alt="app Chat">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Chat App</h4>
                <p>An app to chat with all the individuals and the groups.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-chat') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/campaigns.jpg" alt="app Campaigns">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Campaigns</h4>
                <p>Do you want to manage your campaigns? This is the best in class app for the campaigns.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-campaigns') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/social.jpg" alt="app Social">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Social App</h4>
                <p>Manage all the social media campaigns within the admin panel.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-social') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/file-manager.jpg" alt="app File Manager">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">File Manager</h4>
                <p>A Dashboard to manage all your files within.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-file-manager') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/todo.jpg" alt="app Todo">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Todo list</h4>
                <p>Track everything that needs to be done and which is already done.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-todo') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/contact.jpg" alt="app Contact">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Contact List</h4>
                <p>Manage a list of contacts in a beautful design.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-contacts') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/tasks.jpg" alt="app Taks">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">My Taks</h4>
                <p>An app to see, track, update status and assign tasks to team and get updates from the team.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-tasks') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/project.jpg" alt="app Project">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">My Project</h4>
                <p>A unique handcrafted app to track status and progress of the project.</p>
                <a class="btn bg-white" target="_blank" href="#" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/kanban.jpg" alt="Kanban Board">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">Kanban Board</h4>
                <p>Manage your tasks in a beautiful KanBan application.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-jkanban') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card app-demo p-2">
            <img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/app-shoot/blog.jpg" alt="My Blog">
            <div class="card-overlay"></div>
            <div class="demo-text p-xl-4 p-lg-2 p-0">
                <h4 class="fw-light">My Blog</h4>
                <p>A full app to manage blog activities.</p>
                <a class="btn bg-white" target="_blank" href="{{ route('admin.applications.app-blog') }}" title="">Go to demo</a>
            </div>
        </div>
    </div>
</div>
@endsection

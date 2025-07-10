@extends('backend.layouts.app')

@section('title', __('App Social'))

@section('content')
@php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
@endphp
<div class="d-flex flex-nowrap">
    <div class="order-1 custom_scroll">
        <a href="#" class="d-flex align-items-center color-600 mb-3">
            <img src="{{ url('/') }}/assets/images/profile_av.png" data-bs-toggle="tooltip" title="Avatar" alt="Avatar" class="avatar img-thumbnail rounded-circle shadow">
            <span class="fs-6 ms-2">Allie Grater</span>
        </a>
        <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#social_activity" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                        <path class="fill-secondary" fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                    </svg>
                    <span>Activity</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#social_people" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-secondary" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>
                    <span>People</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#social_feed" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                        <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    </svg>
                    <span>News Feed</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#social_photos" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-secondary" d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                    </svg>
                    <span>Photos</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#social_page" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path class="fill-secondary" d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
                    </svg>
                    <span>Page</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#social_setting" role="tab">
                    <svg viewBox="0 0 16 16" width="20px" class="me-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-secondary" d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg>
                    <span>Settings</span>
                </a>
            </li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Recent</small></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>VueJs Developers</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>futurism</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-tags"></i><span>innovation</span></a></li>
            <li class="divider mt-4 py-2 border-top text-uppercase text-muted"><small>Followed Hashtags</small></li>
            <li><a class="m-link" href="#"><i class="fa fa-hashtag"></i><span>bigdata</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-hashtag"></i><span>Design</span></a></li>
            <li><a class="m-link" href="#"><i class="fa fa-hashtag"></i><span>ReactJs</span></a></li>
        </ul>
    </div>
    <div class="order-2 flex-grow-1 px-md-3 px-0 custom_scroll">
        <!-- start: page toolbar -->
        <div class="page-toolbar py-2">
            <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
                <div class="row mb-3 align-items-center">
                    <div class="col">
                        <ol class="breadcrumb bg-transparent mb-0">
                            @foreach (Breadcrumbs::current() as $crumb)
                                @if ($crumb->url() && !$loop->last)
                                    <li class="breadcrumb-item">
                                        <x-utils.link :href="$crumb->url()" :text="$crumb->title()" class="text-secondary"/>
                                    </li>
                                @else
                                    <li class="breadcrumb-item active">
                                        {{ $crumb->title() }}
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </div>
                </div> <!-- .row end -->
                
            </div>
        </div>
        <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
            <div class="row g-3">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="social_activity" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">My Activity</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card bg-primary-gradient mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-md-start align-items-center flex-column flex-md-row">
                                        <div class="image-input avatar xxl rounded-4" style="background-image: url({{ url('/') }}/assets/images/avatar.png)">
                                            <div class="avatar-wrapper rounded-4" style="background-image: url({{ url('/') }}/assets/images/profile_av.png)"></div>
                                            <div class="file-input">
                                                <input type="file" class="form-control" name="file-input" id="file-input">
                                                <label for="file-input" class="fa fa-pencil shadow text-muted"></label>
                                            </div>
                                        </div>
                                        <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center">
                                            <h5 class="mb-0 fw-light">Allie Grater</h5>
                                            <small>UIUX Designer</small>
                                            <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                <div class="card py-2 px-3 me-2 mt-2">
                                                    <small class="text-muted">Follower</small>
                                                    <div class="fs-5 color-600">1705</div>
                                                </div>
                                                <div class="card py-2 px-3 me-2 mt-2">
                                                    <small class="text-muted">Following</small>
                                                    <div class="fs-5 color-600">245</div>
                                                </div>
                                                <div class="card py-2 px-3 me-2 mt-2">
                                                    <small class="text-muted">Likes</small>
                                                    <div class="fs-5 color-600">850</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-xxl-8 col-xl-12 col-lg-7 col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <textarea rows="3" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            <div class="mt-3">
                                                <button class="btn btn-primary">Post</button>
                                                <div class="btn btn-link file-input">
                                                    <input type="file" class="form-control" name="file-input" id="file-input">
                                                    <label for="file-input" class="fa fa-paperclip"></label>
                                                </div>
                                                <button class="btn btn-link"><i class="fa fa-camera text-muted"></i></button>
                                                <button class="btn btn-link"><i class="fa fa-smile-o text-muted"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <!-- start: post -->
                                        <li class="card mb-2">
                                            <div class="card-header pb-0">
                                                <div class="d-flex">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/profile_av.png" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="mb-0">
                                                            <span class="author">Allie Grater</span>
                                                            <small class="text-muted">posted a status</small>
                                                        </h6>
                                                        <small class="text-muted">1 hours ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown morphing scale-left">
                                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                        <li class="fw-bold mb-2">Quick Actions</li>
                                                        <li><a class="dropdown-item" href="#">Save post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Hide post <i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Snooze 30 days<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Turn on notifications<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Report post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Edit post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Delete post<i class="fa fa-arrow-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="post-detail">
                                                    <p class="lead">Hampden-Sydney College in Virginia, looked up one of the more obscure</p>
                                                    <p class="lead">It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                                                    <div class="mb-2 post-tag">
                                                        <a href="#" title="" class="me-2">#Design</a><a href="#" title="" class="me-2">#HTML</a><a href="#" title="" class="me-2">#ThemeMakker</a>
                                                    </div>
                                                    <a class="fancybox img-fluid" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/10.jpg">
                                                        <img class="img-fluid rounded-4" alt="" src="{{ url('/') }}/assets/images/gallery/10.jpg" />
                                                    </a>
                                                </div>
                                                <div class="post-action">
                                                    <div class="mb-2 mt-4">
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-thumbs-up"></i> Like (105)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-comment"></i> Comment (2)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-share"></i> Share (6)</a>
                                                    </div>
                                                    <div class="card d-flex flex-row p-3 mt-1">
                                                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="h6 mb-1 author">Rose Rivera</span>
                                                                <small class="text-muted msg-time">1 hour ago</small>
                                                            </div>
                                                            <span class="text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                                                        </div>
                                                    </div>
                                                    <div class="card d-flex flex-row p-3 mt-1">
                                                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="h6 mb-1 author">Robert Hammer</span>
                                                                <small class="text-muted msg-time">1 hour ago</small>
                                                            </div>
                                                            <span class="text-muted">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</span>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start: post -->
                                        <li class="card mb-2">
                                            <div class="card-header pb-0">
                                                <div class="d-flex">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/profile_av.png" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="mb-0">
                                                            <span class="author">Allie Grater</span>
                                                            <small class="text-muted">posted a status</small>
                                                        </h6>
                                                        <small class="text-muted">4 hours ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown morphing scale-left">
                                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                        <li class="fw-bold mb-2">Quick Actions</li>
                                                        <li><a class="dropdown-item" href="#">Save post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Hide post <i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Snooze 30 days<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Turn on notifications<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Report post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Edit post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Delete post<i class="fa fa-arrow-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="post-detail">
                                                    <p class="lead">Need a website designer for an online virtual football league, lmk if interested</p>
                                                    <div class="mb-2 post-tag">
                                                        <a href="#" title="" class="me-2">#Figma</a><a href="#" title="" class="me-2">#HTML</a><a href="#" title="" class="me-2">#SCSS</a>
                                                    </div>
                                                </div>
                                                <div class="post-action">
                                                    <div class="mb-2 mt-4">
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-thumbs-up"></i> Like (0)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-comment"></i> Comment (0)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-share"></i> Share (0)</a>
                                                    </div>
                                                    <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start: post -->
                                        <li class="card mb-2">
                                            <div class="card-header pb-0">
                                                <div class="d-flex">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/profile_av.png" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="mb-0">
                                                            <span class="author">Allie Grater</span>
                                                            <small class="text-muted">posted a status</small>
                                                        </h6>
                                                        <small class="text-muted">3 hours ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown morphing scale-left">
                                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                        <li class="fw-bold mb-2">Quick Actions</li>
                                                        <li><a class="dropdown-item" href="#">Save post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Hide post <i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Snooze 30 days<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Turn on notifications<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Report post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Edit post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Delete post<i class="fa fa-arrow-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="post-detail">
                                                    <p class="lead">Let's exchange our gigs</p>
                                                    <ul class="lead mb-3">
                                                        <li>Open My Gig</li>
                                                        <li>Swap Gig Images</li>
                                                        <li>Save My Gig</li>
                                                        <li>Then send me ss and I will do same promise</li>
                                                    </ul>
                                                    <div class="mb-2 post-tag">
                                                        <a href="#" title="" class="me-2">#Design</a><a href="#" title="" class="me-2">#HTML</a><a href="#" title="" class="me-2">#ThemeMakker</a>
                                                    </div>
                                                </div>
                                                <div class="post-action">
                                                    <div class="mb-2 mt-4">
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-thumbs-up"></i> Like (78)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-comment"></i> Comment (3)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-share"></i> Share (15)</a>
                                                    </div>
                                                    <div class="card d-flex flex-row p-3 mt-1">
                                                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="h6 mb-1 author">Rose Rivera</span>
                                                                <small class="text-muted msg-time">3 hour ago</small>
                                                            </div>
                                                            <span class="text-muted">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators</span>
                                                            <div class="card d-flex flex-row p-3 mb-1 mt-3">
                                                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="">
                                                                <div class="flex-fill ms-3">
                                                                    <div class="d-flex flex-wrap justify-content-between">
                                                                        <span class="h6 mb-1 author">Andew Jon</span>
                                                                        <small class="text-muted msg-time">1 hour ago</small>
                                                                    </div>
                                                                    <span class="text-muted">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card d-flex flex-row p-3 mt-1">
                                                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="h6 mb-1 author">Robert Hammer</span>
                                                                <small class="text-muted msg-time">1 hour ago</small>
                                                            </div>
                                                            <span class="text-muted">Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</span>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- start: post -->
                                        <li class="card mb-2">
                                            <div class="card-header pb-0">
                                                <div class="d-flex">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/profile_av.png" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="mb-0">
                                                            <span class="author">Allie Grater</span>
                                                            <small class="text-muted">posted a status</small>
                                                        </h6>
                                                        <small class="text-muted">6 hours ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown morphing scale-left">
                                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                        <li class="fw-bold mb-2">Quick Actions</li>
                                                        <li><a class="dropdown-item" href="#">Save post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Hide post <i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Snooze 30 days<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Turn on notifications<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Report post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Edit post<i class="fa fa-arrow-right"></i></a></li>
                                                        <li><a class="dropdown-item" href="#">Delete post<i class="fa fa-arrow-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="post-detail">
                                                    <p class="lead">I need a website developer designer and React, Angular, Laravel asap</p>
                                                    <div class="mb-2 post-tag">
                                                        <a href="#" title="" class="me-2">#ReactJs</a><a href="#" title="" class="me-2">#Laravel</a><a href="#" title="" class="me-2">#ThemeMakker</a><a href="#" title="" class="me-2">#Angular</a>
                                                    </div>
                                                    <a class="fancybox img-fluid" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/1.jpg">
                                                        <img class="img-fluid rounded-4 w120" alt="" src="{{ url('/') }}/assets/images/gallery/1.jpg" />
                                                    </a>
                                                    <a class="fancybox img-fluid" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/2.jpg">
                                                        <img class="img-fluid rounded-4 w120" alt="" src="{{ url('/') }}/assets/images/gallery/2.jpg" />
                                                    </a>
                                                    <a class="fancybox img-fluid" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/3.jpg">
                                                        <img class="img-fluid rounded-4 w120" alt="" src="{{ url('/') }}/assets/images/gallery/3.jpg" />
                                                    </a>
                                                </div>
                                                <div class="post-action">
                                                    <div class="mb-2 mt-4">
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-thumbs-up"></i> Like (105)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-comment"></i> Comment (2)</a>
                                                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-share"></i> Share (6)</a>
                                                    </div>
                                                    <div class="card d-flex flex-row p-3 mt-1">
                                                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="h6 mb-1 author">Rose Rivera</span>
                                                                <small class="text-muted msg-time">1 hour ago</small>
                                                            </div>
                                                            <span class="text-muted">Yes available</span>
                                                        </div>
                                                    </div>
                                                    <div class="card d-flex flex-row p-3 mt-1">
                                                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="h6 mb-1 author">Robert Hammer</span>
                                                                <small class="text-muted msg-time">1 hour ago</small>
                                                            </div>
                                                            <span class="text-muted">Intrested</span>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control mt-3" placeholder="Replay"></textarea>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <nav class="mt-3">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">2</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-xxl-4 col-xl-12 col-lg-5 col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h6 class="card-title d-flex justify-content-between align-items-center">Connection Request<span class="badge bg-primary">20 min ago</span></h6>
                                            <div class="d-flex align-items-center my-4">
                                                <img class="avatar lg rounded" src="{{ url('/') }}/assets/images/profile_av.png" alt="">
                                                <div class="flex-fill ms-3">
                                                    <div class="h5 mb-1">Hossein Shams</div>
                                                    <span class="text-muted">21 mutual connections</span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="btn mx-1 btn-light-primary flex-grow-1"><i class="fa fa-check me-2"></i>Accept</a>
                                                <a href="#" class="btn mx-1 btn-light-danger flex-grow-1"><i class="fa fa-close me-2"></i>Ignore</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h6 class="card-title mb-3">Personal Information</h6>
                                            <p class="card-text text-muted">Hi I'm Allie Grater, Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                            <ul class="list-unstyled mb-0">
                                                <li class="py-2"><span class="text-muted me-2 w90 d-inline-block">Full Name:</span>Allie Grater</li>
                                                <li class="py-2"><span class="text-muted me-2 w90 d-inline-block">E-mail:</span>alliegrater@luno.com</li>
                                                <li class="py-2"><span class="text-muted me-2 w90 d-inline-block">Phone:</span>+01 (741) 852 123</li>
                                                <li class="py-2"><span class="text-muted me-2 w90 d-inline-block">Location:</span>California, USA</li>
                                                <li class="py-2"><span class="text-muted me-2 w90 d-inline-block">Website:</span>http://website.com</li>
                                                <li class="py-2"><span class="text-muted me-2 w90 d-inline-block">Social:</span>
                                                    <a href="#" class="py-1 px-2"><i class="fa fa-globe"></i></a>
                                                    <a href="#" class="py-1 px-2"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header pb-0">
                                            <h6 class="card-title mb-0">Friends</h6>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                            <div class="me-auto ms-auto">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                                <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header pb-0">
                                            <h6 class="card-title mb-0">Followers</h6>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled custom_scroll mb-0">
                                                <li class="card p-3 my-1 flex-row">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Chris Fox</div>
                                                        <span class="text-muted small">21 mutual connections</span>
                                                    </div>
                                                </li>
                                                <li class="card p-3 my-1 flex-row">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Marshall Nichols</div>
                                                        <span class="text-muted small">5 mutual connections</span>
                                                    </div>
                                                </li>
                                                <li class="card p-3 my-1 flex-row">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Orlando Lentz</div>
                                                        <span class="text-muted small">9 mutual connections</span>
                                                    </div>
                                                </li>
                                                <li class="card p-3 my-1 flex-row">
                                                    <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="flex-fill ms-3">
                                                        <div class="h6 mb-0">Alexander</div>
                                                        <span class="text-muted small">18 mutual connections</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header pb-0">
                                            <h6 class="card-title mb-0">Labels</h6>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap tag-group mt-3">
                                                <a href="#" class="m-1 small tag py-1 px-3 border rounded">Family</a>
                                                <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded">Home</a>
                                                <a href="#" class="m-1 small tag py-1 px-3 border border-primary bg-primary text-light rounded">UI/UX Designer</a>
                                                <a href="#" class="m-1 small tag py-1 px-3 border rounded">ReactJs</a>
                                                <a href="#" class="m-1 small tag py-1 px-3 border rounded">Angular</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header pb-0">
                                            <h6 class="card-title mb-0">Latest Photos</h6>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-1">
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/1.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/1.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/2.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/2.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/3.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/3.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/4.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/4.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/5.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/5.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/6.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/6.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/7.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/7.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/8.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/8.jpg" />
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/9.jpg">
                                                        <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/9.jpg" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social_people" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">People</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3" style="z-index: 9;">
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div style="height: 120px; overflow: hidden;">
                                            <img src="{{ url('/') }}/assets/images/gallery/1.jpg" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body text-center position-relative pt-5">
                                            <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                            <h6 class="mt-4 mb-0">Comeren Diaz</h6>
                                            <span class="text-muted">example@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                            <button class="btn btn-outline-secondary btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3" style="z-index: 9;">
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div style="height: 120px; overflow: hidden;">
                                            <img src="{{ url('/') }}/assets/images/gallery/2.jpg" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body text-center position-relative pt-5">
                                            <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                            <h6 class="mt-4 mb-0">Dean Otto</h6>
                                            <span class="text-muted">example@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                            <button class="btn btn-outline-secondary btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3" style="z-index: 9;">
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div style="height: 120px; overflow: hidden;">
                                            <img src="{{ url('/') }}/assets/images/gallery/3.jpg" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body text-center position-relative pt-5">
                                            <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                            <h6 class="mt-4 mb-0">Jack Bird</h6>
                                            <span class="text-muted">example@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                            <button class="btn btn-outline-secondary btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3" style="z-index: 9;">
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div style="height: 120px; overflow: hidden;">
                                            <img src="{{ url('/') }}/assets/images/gallery/4.jpg" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body text-center position-relative pt-5">
                                            <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                            <h6 class="mt-4 mb-0">Marshall Nichols</h6>
                                            <span class="text-muted">example@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                            <button class="btn btn-outline-secondary btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3" style="z-index: 9;">
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div style="height: 120px; overflow: hidden;">
                                            <img src="{{ url('/') }}/assets/images/gallery/5.jpg" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body text-center position-relative pt-5">
                                            <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                                            <h6 class="mt-4 mb-0">Orlando Lentz</h6>
                                            <span class="text-muted">example@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                            <button class="btn btn-outline-secondary btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3" style="z-index: 9;">
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div style="height: 120px; overflow: hidden;">
                                            <img src="{{ url('/') }}/assets/images/gallery/6.jpg" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body text-center position-relative pt-5">
                                            <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="">
                                            <h6 class="mt-4 mb-0">Thomas's Joe</h6>
                                            <span class="text-muted">example@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                            <button class="btn btn-outline-secondary btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-3 me-3" style="z-index: 9;">
                                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <ul class="dropdown-menu shadow border-0 p-2">
                                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                                <li><a class="dropdown-item" href="#">Block</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div style="height: 120px; overflow: hidden;">
                                            <img src="{{ url('/') }}/assets/images/gallery/7.jpg" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body text-center position-relative pt-5">
                                            <img class="avatar xxl rounded-circle shadow img-thumbnail position-absolute top-0 start-50 translate-middle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="">
                                            <h6 class="mt-4 mb-0">Michelle Green</h6>
                                            <span class="text-muted">example@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                            <button class="btn btn-outline-secondary btn-sm">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social_feed" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">News Feed</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card">
                                <div class="card-body text-center p-5">
                                    <img src="{{ url('/') }}/assets/images/no-data.svg" class="w120" alt="No Data">
                                    <div class="mt-4 mb-3">
                                        <span class="text-muted">No data to show</span>
                                    </div>
                                    <button type="button" class="btn btn-white border lift">Get Started</button>
                                    <button type="button" class="btn btn-primary border lift">Back to Home</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social_photos" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Photos</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="img-hover">
                                <!-- Gallery: images -->
                                <div class="row g-2">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 1" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/1.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 2" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/2.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 3" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/3.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 4" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/4.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 5" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/5.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 6" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/6.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 8" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/7.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 9" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/8.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 10" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/9.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 11" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/10.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 12" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/11.jpg"></a></div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a class="rounded-4 overflow-hidden" title="Image 13" href="#"><img class="thumbnail img-fluid" src="{{ url('/') }}/assets/images/gallery/12.jpg"></a></div>
                                </div> <!-- Row end  -->
                            </div>
                            <!-- Gallery: carousel popups -->
                            <div class="modal fade" id="myModalGallery" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Image Gallery</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="modalCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                                                <div class="carousel-inner"></div>

                                                <button class="carousel-control-prev" type="button" data-bs-target="#modalCarousel" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#modalCarousel" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social_page" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Page</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="card">
                                <div class="card-body text-center p-5">
                                    <img src="{{ url('/') }}/assets/images/no-data.svg" class="w120" alt="No Data">
                                    <div class="mt-4 mb-3">
                                        <span class="text-muted">No data to show</span>
                                    </div>
                                    <button type="button" class="btn btn-white border lift">Get Started</button>
                                    <button type="button" class="btn btn-primary border lift">Back to Home</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social_setting" role="tabpanel">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mt-1 mb-0">Settings</h4>
                                <button class="btn btn-sm d-block d-lg-none btn-primary social-list-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col-xxl-7 col-xl-6 col-lg-7 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title m-0">User Settings</h6>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="row g-4">
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label">User Name <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Contact Person</label>
                                                        <input class="form-control" value="Louis Pierce" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                                        <input class="form-control" value="+1 882-635-7531" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Address</label>
                                                        <textarea class="form-control" rows="4" placeholder="44 Shirley Ave. West Chicago, IL 60185" aria-label="With textarea"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">@</span>
                                                        <input type="email" class="form-control" value="LouisPierce@example.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="form-label">Website Url</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">http://</span>
                                                        <input type="url" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Country</label>
                                                        <select class="form-control">
                                                            <option value="">-- Select Country --</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands, British</option>
                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">State/Province</label>
                                                        <select class="form-control">
                                                            <option>California</option>
                                                            <option>Alaska</option>
                                                            <option>Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">City</label>
                                                        <input class="form-control" value="New York" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Postal Code</label>
                                                        <input class="form-control" value="91403" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone Number</label>
                                                        <input class="form-control" value="818-978-7102" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Fax</label>
                                                        <input class="form-control" value="818-978-7102" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <button type="button" class="btn btn-lg btn-primary">SAVE</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-6 col-lg-5 col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h6 class="card-title m-0">Notifications Settings</h6>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="ns-1">
                                                    <label class="form-check-label" for="ns-1">
                                                        Anyone send me a message
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="ns-2">
                                                    <label class="form-check-label" for="ns-2">
                                                        Anyone seeing my profile page
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="ns-3">
                                                    <label class="form-check-label" for="ns-3">
                                                        Anyone posts a comment on my post
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="ns-4">
                                                    <label class="form-check-label" for="ns-4">
                                                        Anyone send me a message
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="ns-5">
                                                    <label class="form-check-label" for="ns-5">
                                                        Anyone seeing my profile page
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="card-title m-0">Change Password</h6>
                                            <div class="dropdown morphing scale-left">
                                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu shadow border-0 p-2">
                                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="louispierce" disabled="" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" value="louis.info@yourdomain.com" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="border-top pt-2 mt-3 mb-3">Change Password</h6>
                                                    <div class="mb-2">
                                                        <input type="password" class="form-control" placeholder="Current Password">
                                                    </div>
                                                    <div class="mb-2">
                                                        <input type="password" class="form-control" placeholder="New Password">
                                                    </div>
                                                    <div class="mb-2">
                                                        <input type="password" class="form-control" placeholder="Confirm New Password">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <button type="button" class="btn btn-lg btn-primary">SAVE</button> &nbsp;
                                                    <button type="button" class="btn btn-lg btn-default">CANCEL</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- offcanvas: drive analytics -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="drive_analytics" aria-labelledby="drive_analytics">
                        <div class="offcanvas-header">
                            <h5>Drive Analytics</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body custom_scroll">
                            <div class="row g-2">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-google fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <ul class="dropdown-menu shadow border-0 p-2">
                                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>Google Drive</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">7.23GB<span>15GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-dropbox fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <ul class="dropdown-menu shadow border-0 p-2">
                                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>Dropbox Drive</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">1.8GB<span>2GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-hdd-o fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <ul class="dropdown-menu shadow border-0 p-2">
                                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>One Drive</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">2GB<span>10GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col fa fa-server fa-2x"></div>
                                                <div class="col-auto">
                                                    <div class="dropdown morphing scale-left">
                                                        <a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <ul class="dropdown-menu shadow border-0 p-2">
                                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h6>Server</h6>
                                            <div class="mt-2">
                                                <div class="progress mb-2" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                                </div>
                                                <label class="small d-flex justify-content-between text-muted">2GB<span>10GB</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .row end -->
                        </div>
                    </div>
                </div> <!-- .row end -->
            </div>
        </div>
        <!-- start: page footer -->
        <footer class="page-footer px-xl-4 px-sm-2 px-0 py-3 mt-3">
            <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
                <p class="col-md-4 mb-0 text-muted">© 2022 <a href="https://www.thememakker.com/" target="_blank" title="ThemeMakker Infotech LLP">ThemeMakker</a>, All Rights Reserved.</p>
                <a href="#" class="col-md-4 d-flex align-items-center justify-content-center my-3 my-lg-0 me-lg-auto">
                    <svg height="18" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z"/>
                        <path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z"/>
                        <path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z"/>
                        <path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z"/>
                    </svg>
                </a>
                <ul class="nav col-md-4 justify-content-center justify-content-lg-end">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
<script>
    $('.app-social .social-list-toggle').on('click', function () {
        $('.app-social .order-1').toggleClass('open');
    });

    $(function(){
        /* copy loaded thumbnails into carousel */
        $('.row .thumbnail').on('load', function() {
            
        }).each(function(i) {
        // if(this.complete) {
            var item = $('<div class="carousel-item"></div>');
            var itemDiv = $(this).parents('div');
    
            $(itemDiv.html()).appendTo(item);
            item.appendTo('.carousel-inner'); 
            if (i==0){ // set first item active
                item.addClass('active');
            // }
            }
        });
    
        /* activate the carousel */
        $('#modalCarousel').carousel({interval:false});
    
        /* when clicking a thumbnail */
        $('.row .thumbnail').click(function(){
            var idx = $(this).parents('div').index();
            var id = parseInt(idx);
            $('#myModalGallery').modal('show'); // show the modal
            $('#modalCarousel').carousel(id); // slide carousel to selected        
        });
    })

    /*	end gallery */
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });

</script>
@endsection

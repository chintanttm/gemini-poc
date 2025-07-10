@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="card">
    <div class="row g-0">
        <div class="col-xxl-3 col-lg-4 border-end">
            <div class="card-body border-bottom">
                <img class="avatar xl rounded-circle img-thumbnail" src="{{ url('/') }}/assets/images/profile_av.png" alt="">
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <p>jason-porter@info.com</p>
                <button class="btn btn-light-success btn-sm" data-bs-toggle="modal" data-bs-target="#CreateBookmarks">Create Bookmarks</button>
            </div>
            <div class="card-body border-bottom">
                <p>Bookmark List</p>
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <button class="text-start nav-link active" data-bs-toggle="pill" type="button" role="tab" data-bs-target="#b-tab-1"><i class="fa fa-angle-right me-2"></i>Created by me</button>
                    <button class="text-start nav-link" data-bs-toggle="pill" type="button" role="tab" data-bs-target="#b-tab-2"><i class="fa fa-angle-right me-2"></i>Favourites</button>
                    <button class="text-start nav-link" data-bs-toggle="pill" type="button" role="tab" data-bs-target="#b-tab-3"><i class="fa fa-angle-right me-2"></i>Admin Template</button>
                    <button class="text-start nav-link" data-bs-toggle="pill" type="button" role="tab" data-bs-target="#b-tab-4"><i class="fa fa-angle-right me-2"></i>My bookmark</button>
                </div>
            </div>
            <div class="card-body">
                <p>Bookmark Tags</p>
                <div>
                    <a class="m-link me-2" href="#"><i class="fa fa-hashtag"></i><span>bigdata</span></a>
                    <a class="m-link me-2" href="#"><i class="fa fa-hashtag"></i><span>Design</span></a>
                    <a class="m-link me-2" href="#"><i class="fa fa-hashtag"></i><span>ReactJs</span></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-lg-8">
            <div class="card-body tab-content">
                <div class="tab-pane fade show active" id="b-tab-1" role="tabpanel">
                    <h5>Created by me</h5>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">LUNO - Bootstrap 5 Responsive Admin Dashboard Theme</h5>
                                    <a href="#">https://alui.thememakker.com/index.html</a>
                                    <p class="text-muted mb-0"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">BigBucket - Bootstrap 4x Admin Template</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">Lucid ASP .NET Core MVC - Responsive Admin Template</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/4.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">Lucid - VueJS Admin Template & Webapp kit</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">I have been a Personal trainer for 2 years building a women's fitness company Bootcamp company in 2018.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/8.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">Amaze - Multipurpose Admin Template ui kit</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="b-tab-2" role="tabpanel">
                    <h5>Favourites</h5>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">BigBucket - Bootstrap 4x Admin Template</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">Lucid ASP .NET Core MVC - Responsive Admin Template</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="b-tab-3" role="tabpanel">
                    <h5>Admin Template</h5>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/5.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h6 class="fw-bold mb-1">HexaBit - Responsive Bootstrap Admin Template & UI KIT</h6>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/6.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h6 class="fw-bold mb-1">Alpino - Bootstrap 4 Admin Dashboard Template</h6>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="mb-0">I have been a Personal trainer for 2 years building a women's fitness company Bootcamp company in 2018.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="b-tab-4" role="tabpanel">
                    <h5>My bookmark</h5>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">Lucid ASP .NET Core MVC - Responsive Admin Template</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/4.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">Lucid - VueJS Admin Template & Webapp kit</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">I have been a Personal trainer for 2 years building a women's fitness company Bootcamp company in 2018.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-visible mb-1">
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <div class="dropdown morphing scale-left">
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
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <img class="w120 rounded" src="{{ url('/') }}/assets/images/gallery/8.jpg" alt="">
                                <div class="media-body ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <h5 class="fw-light mb-1">Amaze - Multipurpose Admin Template ui kit</h5>
                                    <a href="#">https://themeforest.net/user/wrraptheme/portfolio</a>
                                    <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="CreateBookmarks" tabindex="-1" aria-labelledby="CreateBookmarks" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content needs-validation">
                <div class="modal-header">
                    <h5 class="modal-title">Add new Bookmark</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Bookmark Url">
                                <label>Bookmark Url</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Bookmark Title">
                                <label>Bookmark Title</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Description">
                                <label>Description</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Created by me</option>
                                    <option value="2">Favourites</option>
                                    <option value="3">Admin Template</option>
                                </select>
                                <label>Bookmark List</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Thememakker</option>
                                    <option value="2">UI8</option>
                                    <option value="3">Themeforest</option>
                                </select>
                                <label>Bookmark Tags</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" type="submit">Save Bookmark</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
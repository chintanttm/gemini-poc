@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="row g-2 row-deck">
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body d-flex align-items-center p-4">
                <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-archive fa-lg"></i></div>
                <div class="flex-fill ms-3 text-truncate">
                    <div class="text-muted">Total Projects</div>
                    <h5 class="mb-0">24</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body d-flex align-items-center p-4">
                <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-th fa-lg"></i></div>
                <div class="flex-fill ms-3 text-truncate">
                    <div class="text-muted">Completed Projects</div>
                    <h5 class="mb-0">22</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body d-flex align-items-center p-4">
                <div class="avatar lg rounded-circle no-thumbnail"><i class="fa fa-file fa-lg"></i></div>
                <div class="flex-fill ms-3 text-truncate">
                    <div class="text-muted">Pending Projects</div>
                    <h5 class="mb-0">06</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <form>
                    <label class="form-label">Search</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." aria-describedby="project-search-addon" />
                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- Row end  -->

<div class="row">
    <div class="col-12">
        <ul class="nav nav-tabs tab-card mb-2 mt-4" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#project-Active" role="tab">Active <span class="badge bg-success">5</span></a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#project-Paused" role="tab">Paused <span class="badge bg-info">2</span></a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#project-Waiting" role="tab">Waiting <span class="badge bg-warning">4</span></a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#project-delete" role="tab">Delete <span class="badge bg-danger">1</span></a></li>
        </ul>
    </div>
</div> <!-- Row end  -->

<div class="tab-content">
    <div class="tab-pane fade show active" id="project-Active" role="tabpanel">
        <div class="row g-2 row-deck">
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">PSD to HTML onepage</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it... <a href="#" class="text-muted">view more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">124</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">452</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">85</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">78/85</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">Angular onepage webapp</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it... <a href="#" class="text-muted">view more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">23</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">105</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">37</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">23/37</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">New iOS Food App Design</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">45</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">210</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">47</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">12/47</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Green Inc.</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">New Admin Design</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">124</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">452</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">85</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">55/85</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Red LLP.</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">OnePage Landing Page HTML</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">23</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">105</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">37</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">19/37</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
    <div class="tab-pane fade" id="project-Paused" role="tabpanel">
        <div class="row g-2 row-deck">
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">New iOS Food App Design</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">45</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">210</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">47</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">12/47</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Red LLP.</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">OnePage Landing Page HTML</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">23</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">105</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">37</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">19/37</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->  
    </div>
    <div class="tab-pane fade" id="project-Waiting" role="tabpanel">
        <div class="row g-2 row-deck">
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">PSD to HTML onepage</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it... <a href="#" class="text-muted">view more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">124</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">452</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">85</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">78/85</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">Angular onepage webapp</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it... <a href="#" class="text-muted">view more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">23</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">105</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">37</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">23/37</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Orange Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">New iOS Food App Design</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">45</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">210</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">47</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">12/47</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Black Limited</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">React Native news app</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">45</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">210</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">47</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div> 

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">9/47</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
    <div class="tab-pane fade" id="project-delete" role="tabpanel">
        <div class="row g-2 row-deck">
            <div class="col-xxl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted text-uppercase mb-1 small">Red LLP.</p>
                        <h5 class="mt-0 mb-3"><a href="#" class="text-primary">OnePage Landing Page HTML</a></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  a galley of type and scrambled it...<a href="#" class="text-muted">view more</a></p>
                        
                        <ul class="list-inline">
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">23</h5>
                                <p class="text-muted small">Attachments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">105</h5>
                                <p class="text-muted small">Comments</p>
                            </li>
                            <li class="list-inline-item pe-lg-4">
                                <h5 class="mb-0">37</h5>
                                <p class="text-muted small">Tasks</p>
                            </li>
                        </ul>

                        <div class="project-members mb-4">
                            <label class="me-2">Team :</label>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Team Members" alt="friend"> </a>
                        </div>

                        <label class="small d-flex justify-content-between">Task completed: <span class="text-custom">19/37</span></label>
                        <div class="progress mt-1" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
@endsection
@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="row g-2">
    <div class="col-12">
        <div class="card overflow-hidden">
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-3 col-sm-6">
                        <div class="card p-3">
                            <div class="text-muted text-uppercase"><i class="fa fa-circle me-2 text-danger"></i>New Ticket</div>
                            <div class="mt-1">
                                <span class="fw-bold h4 mb-0">12</span>
                                <span class="ms-1">5% <i class="fa fa-caret-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card p-3">
                            <div class="text-muted text-uppercase"><i class="fa fa-circle me-2 text-info"></i>In Prograss</div>
                            <div class="mt-1">
                                <span class="fw-bold h4 mb-0">55</span>
                                <span class="ms-1">8% <i class="fa fa-caret-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card p-3">
                            <div class="text-muted text-uppercase"><i class="fa fa-circle me-2 text-warning"></i>On Hold</div>
                            <div class="mt-1">
                                <span class="fw-bold h4 mb-0">8</span>
                                <span class="ms-1">2% <i class="fa fa-caret-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card p-3">
                            <div class="text-muted text-uppercase"><i class="fa fa-circle me-2 text-success"></i>Completed</div>
                            <div class="mt-1">
                                <span class="fw-bold h4 mb-0">105</span>
                                <span class="ms-1">18% <i class="fa fa-caret-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-xxl-9 col-lg-8 col-md-8">
                        <div class="form-floating">
                            <input type="email" class="form-control" placeholder="Find Ticket...">
                            <label>Find Ticket...</label>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-4 text-lg-end">
                        <button type="button" class="btn btn-lg btn-primary">Search</button>
                        <button type="button" class="btn btn-lg btn-secondary" data-bs-toggle="modal" data-bs-target="#AddNewTicket">Add new ticket</button>
                    </div>
                    <div class="col-12 fs-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="All">
                            <label class="form-check-label" for="All">All</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="NewTicket">
                            <label class="form-check-label" for="NewTicket">NewTicket</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="InPrograss">
                            <label class="form-check-label" for="InPrograss">In Prograss</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="OnHold">
                            <label class="form-check-label" for="OnHold">On Hold</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="Completed">
                            <label class="form-check-label" for="Completed">Completed</label>
                        </div>
                    </div>
                </div> <!-- Row end  -->
            </div>
        </div>
    </div>
    <div class="col-12">
        <h5 class="mb-0 mt-3">Showing 8 Ticket</h5>
        <span class="text-muted small">Based your preferences</span>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table align-middle table-bordered mb-0 custom-table-2">
                <thead>
                    <tr>                                       
                        <th>Ticket ID</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Last Update</th>
                        <th>Supoort</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="w120">D-4512</td>
                        <td>Problem starting campaign last week</td>
                        <td><span class="badge bg-info">In Prograss</span></td>
                        <td>11 Aug 2021</td>
                        <td>Marshall Nichols</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="w120">D-4848</td>
                        <td>There are many variations of passages of Lorem Ipsum available</td>
                        <td><span class="badge bg-info">In Prograss</span></td>
                        <td>13 Aug 2021</td>
                        <td>Orlando Lentz</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="w120">D-4141</td>
                        <td>Contrary to popular belief, not simply random text</td>
                        <td><span class="badge bg-warning">On Hold</span></td>
                        <td>14 Aug 2021</td>
                        <td>Chris Fox</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="w120">D-1245</td>
                        <td>Problem starting campaign last week</td>
                        <td><span class="badge bg-info">In Prograss</span></td>
                        <td>20 Aug 2021</td>
                        <td>Marshall Nichols</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="w120">D-4679</td>
                        <td>Problem starting campaign last week</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>22 Aug 2021</td>
                        <td>Nellie Maxwell</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="w120">D-4141</td>
                        <td>when an unknown printer took a galley</td>
                        <td><span class="badge bg-warning">On Hold</span></td>
                        <td>14 Aug 2021</td>
                        <td>Chris Fox</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="w120">D-1245</td>
                        <td>Various versions have evolved over the years</td>
                        <td><span class="badge bg-info">In Prograss</span></td>
                        <td>20 Aug 2021</td>
                        <td>Chris Fox</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="w120">D-4679</td>
                        <td>The generated Lorem Ipsum is therefore</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>22 Aug 2021</td>
                        <td>Orlando Lentz</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-link btn-sm text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="comments"><i class="fa fa-comments"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection
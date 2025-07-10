@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<!-- .card: tab -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs tab-card mb-4 border-top-0 border-start-0 border-end-0 border border-primary rounded-4 bg-white" role="tablist">
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards') }}">Card's</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tiles') }}">Card Tiles</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-user') }}">User Card's</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tabbed') }}">Tabbed card</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-ribbons') }}">Card Ribbons</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link active" href="{{ route('admin.documentation.w-cards-list') }}">Card List</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-charts') }}">Card Chart</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tables') }}">Card Tables</a></li>
            </ul>
        </div>
    </div> <!-- .row end -->

    <div class="row g-3">
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Timeline sharing</h6>
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
                    <h6><strong>Roles</strong></h6>
                    <p class="text-muted">Access limited to everyone of select role(s)</p>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="invite someone">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">can edit</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Makers">
                            <label class="form-check-label" for="Makers">
                                <strong>Makers</strong>
                                <span class="text-muted d-flex small">Everyone assigned the maker role</span>
                            </label>
                        </div>
                        <div>
                            <img class="avatar sm rounded ms-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                            <img class="avatar sm rounded ms-1 lift" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Contributors">
                            <label class="form-check-label" for="Contributors">
                                <strong>Contributors</strong>
                                <span class="text-muted d-flex small">Everyone assigned the contributor role</span>
                            </label>
                        </div>
                        <div>
                            <img class="avatar sm rounded ms-1 lift" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-placement="top" title="" alt="" data-bs-original-title="Avatar Name" aria-label="Avatar Name">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Viewers">
                            <label class="form-check-label" for="Viewers">
                                <strong>Viewers</strong>
                                <span class="text-muted d-flex small">Everyone assigned the viewer role</span>
                            </label>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    <div class="px-4 mt-3">
                        <button type="button" class="btn btn-primary btn-sm">Save</button>
                        <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Nominee status</h6>
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
                <ul class="list-unstyled submit-track">
                    <li class="is-complete">
                        <span class="badge date">AUG 14</span>
                        <div class="circle"><i class="fa fa-check"></i></div>
                        <div class="box-title">
                            Submitted
                        </div>
                    </li>
                    <li class="is-complete">
                        <span class="badge date">AUG 18</span>
                        <div class="circle"><i class="fa fa-check"></i></div>
                        <div class="box-title d-flex justify-content-between align-items-center">
                            Approved
                            <a class="fa fa-info-circle text-muted" href="#"></a>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <div class="circle"></div>
                                <a href="#">Download your Nominee ribbon</a>
                                <p class="mb-0">Promote your site.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="is-complete">
                        <span class="badge date">AUG 19</span>
                        <div class="circle"><i class="fa fa-check"></i></div>
                        <div class="box-title d-flex justify-content-between align-items-center">
                            Voting started
                            <a class="fa fa-info-circle text-muted" href="#"></a>
                        </div>
                    </li>
                    <li class="is-complete">
                        <span class="badge date">AUG 26</span>
                        <div class="circle"><i class="fa fa-check"></i></div>
                        <div class="box-title d-flex justify-content-between align-items-center">
                            Performance report created
                            <a class="fa fa-info-circle text-muted" href="#"></a>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <div class="circle"></div>
                                <a href="#">See your report here </a>
                            </li>
                        </ul>
                    </li>
                    <li class="is-complete">
                        <span class="badge date">AUG 27</span>
                        <div class="circle"><i class="fa fa-check"></i></div>
                        <div class="box-title d-flex justify-content-between align-items-center">
                            Voting finished
                            <a class="fa fa-info-circle text-muted" href="#"></a>
                        </div>
                    </li>
                    <li class="is-complete">
                        <span class="badge date">AUG 28</span>
                        <div class="circle"><i class="fa fa-check"></i></div>
                        <div class="box-title d-flex justify-content-between align-items-center">
                            Finished
                            <a class="fa fa-info-circle text-muted" href="#"></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Recent Files</h6>
                    <a href="#" title="">View All</a>
                </div>
                <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                    <li class="list-group-item py-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <p class="mb-0 color-800">Annual Sales Report 2018-19</p>
                                <small class="text-muted">.pdf, 5.3 MB</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-excel-o text-success"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <p class="mb-0 color-800">Complete Product Sheet</p>
                                <small class="text-muted">.xls, 2.1 MB</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-word-o text-info"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <p class="mb-0 color-800">Marketing Guidelines</p>
                                <small class="text-muted">.doc, 2.3 MB</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item py-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
                            <div class="flex-fill ms-3 text-truncate">
                                <p class="mb-0 color-800">Brand Photography</p>
                                <small class="text-muted">.zip, 30.5 MB</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Agents Progress Reports</h6>
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
                    <div>
                        <span class="text-muted d-block">Yearly Income</span>
                        <h4>$22,652.35</h4>
                    </div>
                    <ul class="list-unstyled">
                        <li class="py-2 mb-2">
                            <div class="d-flex justify-content-between">
                                <span class="text-uppercase">New York</span>
                                <span class="text-muted">89K</span>
                            </div>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="py-2 mb-2">
                            <div class="d-flex justify-content-between">
                                <span class="text-uppercase">Vatican City</span>
                                <span class="text-muted">76K</span>
                            </div>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="py-2 mb-2">
                            <div class="d-flex justify-content-between">
                                <span class="text-uppercase">Sydney</span>
                                <span class="text-muted">52K</span>
                            </div>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="py-2 mb-2">
                            <div class="d-flex justify-content-between">
                                <span class="text-uppercase">New Delhi</span>
                                <span class="text-muted">46K</span>
                            </div>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 46%;" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="py-2 mb-2">
                            <div class="d-flex justify-content-between">
                                <span class="text-uppercase">Manila</span>
                                <span class="text-muted">34K</span>
                            </div>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="card-title mb-3">More Details</h6>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Price:</th>
                                    <td>$390,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">Contract type: </th>
                                    <td><span class="badge bg-primary">For Sale</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Bathrooms:</th>
                                    <td>1.5</td>
                                </tr>
                                <tr>
                                    <th scope="row">Square ft:</th>
                                    <td>468</td>
                                </tr>
                                <tr>
                                    <th scope="row">Garage Spaces:</th>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th scope="row">Land Size:</th>
                                    <td>721 m²</td>
                                </tr>
                                <tr>
                                    <th scope="row">Floors:</th>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th scope="row">Listed for:</th>
                                    <td>15 days</td>
                                </tr>
                                <tr>
                                    <th scope="row">Available:</th>
                                    <td>Immediately</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pets:</th>
                                    <td>Pets Allowed</td>
                                </tr>
                                <tr>
                                    <th scope="row">Bedrooms:</th>
                                    <td>3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Downloads</h6>
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
                    <span class="text-muted">showing 5 out of 24 downloads.</span>
                    <ul class="list-unstyled">
                        <li class="d-flex py-2 mb-2">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <span>LUNO_admin.zip</span>
                                <div class="progress mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex py-2 mb-2">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <span>reposrt_2020.pdf</span>
                                <div class="progress mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex py-2 mb-2">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-code-o fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <span>package.json</span>
                                <div class="progress mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex py-2 mb-2">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-image-o fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <span>profile_image.png</span>
                                <div class="progress mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex py-2 mb-2">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-file-code-o fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <span>bootstrap.min.css</span>
                                <div class="progress mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">New Agents</h6>
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
                    <div class="d-flex">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6 mb-0"><span>Chris Fox</span></div>
                            <small class="text-muted">Corporate Agent</small>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6 mb-0"><span>Joge Lucky</span></div>
                            <small class="text-muted">Sales Executive</small>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6 mb-0"><span>Alexander</span></div>
                            <small class="text-muted">Corporate Agent</small>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6 mb-0"><span>Robert</span></div>
                            <small class="text-muted">Buying Agent</small>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6 mb-0"><span>Nellie</span></div>
                            <small class="text-muted">HR</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Transactions</h6>
                    <a href="#" title="">View All</a>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list mb-0">
                        <li class="d-flex align-items-center py-2">
                            <div class="avatar rounded no-thumbnail chart-text-color1"><i class="fa fa-bank"></i></div>
                            <div class="flex-fill ms-3">
                                <div class="h6 mb-0">Wallet</div>
                                <small class="text-muted">Starbucks</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-danger">-$74 </strong>
                            </div>
                        </li>
                        <li class="d-flex align-items-center py-2">
                            <div class="avatar rounded no-thumbnail chart-text-color2"><i class="fa fa-check"></i></div>
                            <div class="flex-fill ms-3">
                                <div class="h6 mb-0">Bank Transfer</div>
                                <small class="text-muted">Add Money</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-success">$1074 </strong>
                            </div>
                        </li>
                        <li class="d-flex align-items-center py-2">
                            <div class="avatar rounded no-thumbnail chart-text-color3"><i class="fa fa-cc-mastercard"></i></div>
                            <div class="flex-fill ms-3">
                                <div class="h6 mb-0">Mastercard</div>
                                <small class="text-muted">Ordered Food</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-success">$94 </strong>
                            </div>
                        </li>
                        <li class="d-flex align-items-center py-2">
                            <div class="avatar rounded no-thumbnail chart-text-color4"><i class="fa fa-paypal"></i></div>
                            <div class="flex-fill ms-3">
                                <div class="h6 mb-0">Paypal</div>
                                <small class="text-muted">Add Money</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-success">$740.50 </strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Topics</h6>
                    <ul class="nav nav-tabs tab-page-toolbar rounded-pill d-inline-flex" role="tablist">
                        <li class="nav-item"><a class="nav-link rounded-pill active" data-bs-toggle="tab" href="#Topics-Recent" role="tab" aria-selected="true">Recent</a></li>
                        <li class="nav-item"><a class="nav-link rounded-pill" data-bs-toggle="tab" href="#Topics-Popular" role="tab" aria-selected="false">Popular</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Topics-Recent" role="tabpanel">
                            <ul class="list-unstyled list mb-0">
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color1"><i class="fa fa-music"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Modal Improvisation</div>
                                        <small class="text-muted">Music</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color1"><i class="fa fa-bank"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Wallet</div>
                                        <small class="text-muted">Starbucks</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color2"><i class="fa fa-check"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Bank Transfer</div>
                                        <small class="text-muted">Add Money</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color3"><i class="fa fa-cc-mastercard"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Mastercard</div>
                                        <small class="text-muted">Ordered Food</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color4"><i class="fa fa-paypal"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Paypal</div>
                                        <small class="text-muted">Add Money</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="Topics-Popular" role="tabpanel">
                            <ul class="list-unstyled list mb-0">
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color2"><i class="fa fa-check"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Bank Transfer</div>
                                        <small class="text-muted">Add Money</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color3"><i class="fa fa-cc-mastercard"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Mastercard</div>
                                        <small class="text-muted">Ordered Food</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color1"><i class="fa fa-music"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Modal Improvisation</div>
                                        <small class="text-muted">Music</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color1"><i class="fa fa-bank"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Wallet</div>
                                        <small class="text-muted">Starbucks</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend">
                                    </div>
                                </li>
                                <li class="d-flex align-items-center py-3">
                                    <div class="avatar rounded no-thumbnail chart-text-color4"><i class="fa fa-paypal"></i></div>
                                    <div class="flex-fill ms-3">
                                        <div class="h6 mb-0">Paypal</div>
                                        <small class="text-muted">Add Money</small>
                                    </div>
                                    <div class="flex-end avatar-list">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend">
                                        <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Goal progress widget</h6>
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
                    <div class="d-flex mb-4">
                        <img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6"><a href="#">Nellie Maxwell</a><small class="text-muted">- Project Lead</small></div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6"><a href="#">Orlando Lentz</a><small class="text-muted">- Sales</small></div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 33%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                        <div class="flex-fill ms-3">
                            <div class="h6"><a href="#">Marshall Nichols</a><small class="text-muted">- Support</small></div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">For Business Sharks</h6>
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
                    <p>See your teams availability while scheduling meeting and interviews.</p>
                    <strong>Basic price is $150</strong>
                    <div class="list-group my-2">
                        <label class="list-group-item d-flex align-items-center">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            <span class="flex-grow-1">Price Option #1</span>
                            <span class="badge bg-light text-muted">+$29</span>
                        </label>
                        <label class="list-group-item d-flex align-items-center">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            <span class="flex-grow-1">Price Option #2</span>
                            <span class="badge bg-light text-muted">+$49</span>
                        </label>
                        <label class="list-group-item d-flex align-items-center">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            <span class="flex-grow-1">Price Option #3</span>
                            <span class="badge bg-light text-muted">+$69</span>
                        </label>
                        <label class="list-group-item d-flex align-items-center">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            <span class="flex-grow-1">Price Option #4</span>
                            <span class="badge bg-light text-muted">+$89</span>
                        </label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary">Purchase</button>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Social Counter</h6>
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
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex justify-content-between mb-3">
                            <label><i class="fa fa-facebook-square me-1"></i> Facebook</label>
                            <span class="badge bg-info">29,589</span>
                        </li>
                        <li class="d-flex justify-content-between mb-3">
                            <label><i class="fa fa-twitter-square me-1"></i> Twitter</label>
                            <span class="badge bg-info">2,365</span>
                        </li>
                        <li class="d-flex justify-content-between mb-3">
                            <label><i class="fa fa-linkedin-square me-1"></i> Linkedin</label>
                            <span class="badge bg-info">9,021</span>
                        </li>
                        <li class="d-flex justify-content-between mb-3">
                            <label><i class="fa fa-behance-square me-1"></i> Behance</label>
                            <span class="badge bg-info">1,725</span>
                        </li>
                        <li class="d-flex justify-content-between mb-0">
                            <label><i class="fa fa-dribbble me-1"></i> Dribbble</label>
                            <span class="badge bg-info">4,800</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Top Referrers</h6>
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
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Direct</div>
                        <small class="text-muted">514 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Google</div>
                        <small class="text-muted">784 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Jobs.lever.co.uk</div>
                        <small class="text-muted">105 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Mail Campaign</div>
                        <small class="text-muted">215 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">Facebook Campaign</div>
                        <small class="text-muted">980 Pageview</small>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0 fw-bold">linkedin Post</div>
                        <small class="text-muted">348 Pageview</small>
                    </div>
                    <div>
                        <div class="mb-0 fw-bold">Direct</div>
                        <small class="text-muted">514 Pageview</small>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Top Trainers</h6>
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
                    <ul class="list-group list-group-flush list-group-custom">
                        <li class="list-group-item d-flex px-0 py-3">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <h6 class="mb-0">XY fitnesss care</h6>
                                <small class="text-muted">25k Subscribers</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex px-0 py-3">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <h6 class="mb-0">Body line care</h6>
                                <small class="text-muted">31k Subscribers</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex px-0 py-3">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <h6 class="mb-0">Gym Here Center</h6>
                                <small class="text-muted">5k Subscribers</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="card-title mb-3">Categories</h6>
                    <ul class="list-group list-group-custom">
                        <li class="list-group-item"><a class="color-600" href="#">Rent</a></li>
                        <li class="list-group-item"><a class="color-600" href="#">Sale</a></li>
                        <li class="list-group-item"><a class="color-600" href="#">Top Rating</a></li>
                        <li class="list-group-item"><a class="color-600" href="#">Trending</a></li>
                        <li class="list-group-item"><a class="color-600" href="#">Newest Properties</a></li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title m-0">Reports overview</h6>
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
                    <span class="h2 d-block mb-3">$7,431.14 USD</span>
                    <!-- Progress -->
                    <div class="progress rounded-pill mb-2" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
    
                    <div class="d-flex justify-content-between mb-4">
                        <span>0%</span>
                        <span>100%</span>
                    </div>
                    <!-- End Progress -->
                    <div class="table-responsive">
                        <table class="table table-sm table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <td>Gross value</td>
                                    <td>$3,500.71</td>
                                    <td><span class="badge bg-success">+12.1%</span></td>
                                </tr>
                                <tr>
                                    <td>Net volume from sales</td>
                                    <td>$2,980.45</td>
                                    <td><span class="badge bg-warning">+6.9%</span></td>
                                </tr>
                                <tr>
                                    <td>New volume from sales</td>
                                    <td>$950.00</td>
                                    <td><span class="badge bg-danger">-1.5%</span></td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td>32</td>
                                    <td><span class="badge bg-success">1.9%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card mb-3">
                <ul class="nav nav-tabs tab-card d-flex" role="tablist">
                    <li class="nav-item flex-fill text-center"><a class="nav-link active" data-bs-toggle="tab" href="#nav-order-today" role="tab" aria-selected="true">Order Today</a></li>
                    <li class="nav-item flex-fill text-center"><a class="nav-link" data-bs-toggle="tab" href="#nav-order-week" role="tab" aria-selected="false">Order This week</a></li>
                </ul>
                <div class="card-body custom_scroll" style="height: 300px; scroll-behavior: smooth;">
                    <ul class="timeline-activity list-unstyled mb-0">
                        <li class="activity px-3 py-2 mb-1" data-date="12:30 - Sun">
                            <div class="fw-bold small d-flex justify-content-between align-items-center">New Order <span class="badge bg-warning">ID: 215</span></div>
                            <div>
                                <small class="text-muted">1 Burger, 1 Corn Rice curd</small>
                            </div>
                        </li>
                        <li class="activity px-3 py-2 mb-1" data-date="12:31 - Sun">
                            <div class="fw-bold small">Order Received</div>
                            <div>
                                
                            </div>
                        </li>
                        <li class="activity px-3 py-2 mb-1" data-date="12:32 - Sun">
                            <div class="fw-bold small">Payment Verify</div>
                            <div>
                                <h5 class="mb-0 text-success">$80.5 - Done</h5>
                                <small class="text-muted">NetBanking</small>
                            </div>
                        </li>
                        <li class="activity px-3 py-2 mb-1" data-date="12:35 - Sun">
                            <div class="fw-bold small">Order inprogress</div>
                            <div>
                                <label class="me-2">Team:</label>
                                <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            </div>
                        </li>
                        <li class="activity px-3 py-2 mb-1" data-date="12:55 - Sun">
                            <div class="fw-bold small">Delivery on the way</div>
                            <div>
                                <p class="mb-1 small text-muted"><i class="fa fa-map-marker ps-1"></i> 123 6th St. Melbourne, FL 32904</p>
                                <a href="#" title="avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                                <label class="ms-1">Robert Hammer</label>
                            </div>
                        </li>
                        <li class="activity px-3 py-2 mb-1" data-date="01:10 - Sun">
                            <div class="fw-bold small d-flex justify-content-between align-items-center">Delivery<span class="badge bg-success">Done</span></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <ul class="resume-box">
                    <li>
                        <div class="icon text-center"><i class="fa fa-twitter"></i></div>
                        <span class="time">2019 - Present</span>
                        <h6 class="fw-bold">Sr. Art Director - Twitter Inc</h6>
                        <span>Lorem ipsum dolor sit amet, tempor incididunt ut labore et dolore magna aliqua.</span>
                    </li>
                    <li>
                        <div class="icon text-center"><i class="fa fa-facebook"></i></div>
                        <span class="time">2018 - 2019</span>
                        <h6 class="fw-bold">Art Director - Facebook Inc</h6>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, labore et dolore magna aliqua.</span>
                    </li>
                    <li>
                        <div class="icon text-center"><i class="fa fa-google"></i></div>
                        <span class="time">2016 - 2018</span>
                        <h6 class="fw-bold">Jr. Art Director - Google Inc</h6>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do dolore magna aliqua.</span>
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-transparent py-3">
                    <h6 class="mb-0 fw-bold">Activity Timeline</h6>
                    <span>Nellie Maxwell</span>
                </div>
                <div class="card-body">
                    <div class="timeline-item ti-danger border-bottom ms-2">
                        <div class="d-flex">
                            <img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <div class="mb-1">Gerald Vaughn changed the status to QA on <strong>MA-86 - Retargeting Ads</strong></div>
                                <span class="d-flex text-muted mb-3">New Dashboard Design - 9:24PM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                                <div class="p-3 border rounded">
                                    I’ve prepared all sizes for you. Can you take a look tonight so we can prepare my final invoice?
                                </div>
                            </div>
                        </div>
                    </div> <!-- timeline item end  -->
                    <div class="timeline-item ti-info border-bottom ms-2">
                        <div class="d-flex">
                            <img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <div class="mb-1">Gerald Vaughn commented on <strong>DA-459 - Mediation: Demand Source Logo Size</strong></div>
                                <span class="d-flex text-muted mb-3">Portfolio Updates for Jason Carroll - 7:12PM by <a class="ms-2" href="#" title=""><strong>Orlando</strong></a> </span>
                            </div>
                        </div>
                    </div> <!-- timeline item end  -->
                    <div class="timeline-item ti-success border-bottom ms-2">
                        <div class="d-flex">
                            <img class="avatar sm rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <div class="mb-1">Gerald Vaughn changed the status to QA on <strong>MA-45 - Finish Prototype</strong></div>
                                <span class="d-flex text-muted mb-3">New Dashboard Design - 11:30AM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Latest News</h6>
                    <a href="#" title="">View All</a>
                </div>
                <ul class="list-group list-group-flush list-group-custom">
                    <li class="list-group-item py-3">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <span class="text-primary">There are many variations of passages</span>
                                <div><small class="text-muted">10:11 AM</small></div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item py-3">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <span class="text-primary">Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                                <div><small class="text-muted">10:11 AM</small></div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item py-3">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <span class="text-primary">There are many variations of passages</span>
                                <div><small class="text-muted">10:11 AM</small></div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item py-3">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <span class="text-primary">Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                                <div><small class="text-muted">10:11 AM</small></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Notifications </h6>
                    <a href="#" title="">View All</a>
                </div>
                <ul class="list-unstyled list mb-0">
                    <li class="p-3 border-bottom">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-info-circle fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <p class="mb-0 text-muted">Campaign <strong class="text-primary">Holiday Sale</strong> is nearly reach budget limit.</p>
                                <small class="text-muted">10:00 AM Today</small>
                            </div>
                        </a>
                    </li>
                    <li class="p-3 border-bottom">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-thumbs-up fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <p class="mb-0 text-muted">Your New Campaign <strong class="text-primary">Holiday Sale</strong> is approved.</p>
                                <small class="text-muted">11:30 AM Today</small>
                            </div>
                        </a>
                    </li>
                    <li class="p-3 border-bottom">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-pie-chart fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <p class="mb-0 text-muted">Website visits from Twitter is <strong class="text-danger">27% higher</strong> than last week.</p>
                                <small class="text-muted">04:00 PM Today</small>
                            </div>
                        </a>
                    </li>
                    <li class="p-3 border-bottom">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-warning fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <p class="mb-0 text-muted"><strong class="text-warning">Error</strong> on website analytics configurations</p>
                                <small class="text-muted">Yesterday</small>
                            </div>
                        </a>
                    </li>
                    <li class="p-3">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded no-thumbnail"><i class="fa fa-thumbs-up fa-lg"></i></div>
                            <div class="flex-fill ms-3">
                                <p class="mb-0 text-muted">Your New Campaign <strong class="text-primary">Holiday Sale</strong> is approved.</p>
                                <small class="text-muted">11:30 AM Today</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <ul class="list-group list-group-custom list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap py-3">
                        <h6 class="mb-0"><i class="fa fa-globe me-2"></i>Website</h6>
                        <a href="#" class="text-primary small">https://thememakker.com</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap py-3">
                        <h6 class="mb-0"><i class="fa fa-github me-2"></i>Github</h6>
                        <a href="#"  class="text-primary small">thememakker</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap py-3">
                        <h6 class="mb-0"><i class="fa fa-twitter me-2"></i>Twitter</h6>
                        <a href="#"  class="text-primary small">@thememakker</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap py-3">
                        <h6 class="mb-0"><i class="fa fa-instagram me-2"></i>Instagram</h6>
                        <a href="#"  class="text-primary small">thememakker</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap py-3">
                        <h6 class="mb-0"><i class="fa fa-facebook-official me-2"></i>Facebook</h6>
                        <a href="#"  class="text-primary small">thememakker</a>
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Changelog page</h6>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <span class="shadow-sm rounded py-1 px-2 text-success fw-bold">Version 1.3.8</span>
                        <span class="text-muted">- 4th Jun 2020</span>
                    </div>
                    <ul class="list-unstyled lh-lg small mb-0">
                        <li><i class="fa fa-check-square-o me-3"></i>Latest Update Bootstrap v4.5</li>
                        <li><i class="fa fa-check-square-o me-3"></i>Latest Update jQuery v3.5.1</li>
                        <li><i class="fa fa-check-square-o me-3"></i>Latest Update Material Design Icons v5.3.45</li>
                        <li><i class="fa fa-check-square-o me-3"></i>New RTL Version (Only CSS Base)</li>
                        <li><i class="fa fa-check-square-o me-3"></i>New Dark Version (Only CSS Base)</li>
                        <li><i class="fa fa-check-square-o me-3"></i>New Dark RTL Version (Only CSS Base)</li>
                        <li><i class="fa fa-check-square-o me-3"></i>Added 6 Colors scheme</li>
                        <li><i class="fa fa-check-square-o me-3"></i>Fixed some responsive issues</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
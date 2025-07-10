@extends('backend.layouts.app')

@section('title', __('CRM leads'))

@section('content')






        <div class="row g-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-secondary" type="button">Search</button>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_leads"
                                type="button">Add new Leads</button>
                        </div>
                        <!-- Modal: Add new Leads -->
                        <!-- <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#add_leads" type="button">Add new Leads</button> -->
                        <div class="modal fade" id="add_leads" tabindex="-1" aria-labelledby="add_leads"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add new Lead</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6 class="fw-bold">Basic Information</h6>
                                        <div class="row g-3">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                    <label>Enter Name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" placeholder="Company">
                                                    <label>Enter Company</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" placeholder="Date of Birth">
                                                    <label>Date of Birth </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <select class="form-select form-control">
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                    <label for="floatingSelect">Gender</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Select Avatar</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-floating">
                                                    <textarea type="text" class="form-control" placeholder="Description" style="height: 100px"></textarea>
                                                    <label>Description</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h6 class="fw-bold">Leads's Account Information</h6>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                    <label>Enter Email</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" placeholder="Phone">
                                                    <label>Enter Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-floating">
                                                    <textarea type="text" class="form-control" placeholder="Description" style="height: 100px"></textarea>
                                                    <label>Address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table id="myDataTable_no_filter" class="table myDataTable align-middle custom-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Chris Fox</h6>
                                </div>
                            </td>
                            <td>TKU info LLC.</td>
                            <td>chris.fox@example.com</td>
                            <td>12 April 2021</td>
                            <td><span class="badge bg-light text-dark">$ 986</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar2.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Marshall Nichols</h6>
                                </div>
                            </td>
                            <td>plo info llp.</td>
                            <td>Marshall .fox@example.com</td>
                            <td>13 April 2021</td>
                            <td><span class="badge bg-light text-dark">$ 810</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Nellie Maxwell</h6>
                                </div>
                            </td>
                            <td>bbb softwar LLC.</td>
                            <td>Nellie.fox@example.com</td>
                            <td>21 April 2021</td>
                            <td><span class="badge bg-light text-dark">$ 450</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar4.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Orlando Lentz</h6>
                                </div>
                            </td>
                            <td>kku system llp.</td>
                            <td>Orlando.fox@example.com</td>
                            <td>27 April 2021</td>
                            <td><span class="badge bg-light text-dark">$ 850</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar5.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Chris Fox</h6>
                                </div>
                            </td>
                            <td>hht info LLC.</td>
                            <td>chris.fox@example.com</td>
                            <td>9 May 2021</td>
                            <td><span class="badge bg-light text-dark">$ 672</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar6.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Dean Otto</h6>
                                </div>
                            </td>
                            <td>uopl system llp.</td>
                            <td>Dean.fox@example.com</td>
                            <td>12 May 2021</td>
                            <td><span class="badge bg-light text-dark">$ 230</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar7.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Chris Fox</h6>
                                </div>
                            </td>
                            <td>ww info LLC.</td>
                            <td>chris.fox@example.com</td>
                            <td>16 May 2021</td>
                            <td><span class="badge bg-light text-dark">$ 500</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar8.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Fidel Tonn</h6>
                                </div>
                            </td>
                            <td>dfaa info ltd.</td>
                            <td>Fidel.fox@example.com</td>
                            <td>23 May 2021</td>
                            <td><span class="badge bg-light text-dark">$ 1,983</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="../assets/img/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                                    <h6 class="ms-2 mb-0 fw-bold">Maryam Amiri</h6>
                                </div>
                            </td>
                            <td>uuok web LLC.</td>
                            <td>Maryam.fox@example.com</td>
                            <td>4 Jun 2021</td>
                            <td><span class="badge bg-light text-dark">$ 566</span></td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                                <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> <!-- .row end -->

    <script>
        // Data Table
        $('#myDataTable_no_filter').addClass('nowrap').dataTable({
          responsive: true,
          searching: false,
          paging: false,
          ordering: false,
          info: false,
        });
      </script>

@endsection

@extends('backend.layouts.app')

@section('title', __('CRM vendors'))

@section('content')
  <!-- start: sidebar -->

  <!-- start: body area -->

    <!-- start: page header -->

    <!-- start: page body -->

        <div class="row g-3">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search...">
                  <button class="btn btn-secondary" type="button">Search</button>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_vendors" type="button">Add Vendors</button>
                </div>
                <!-- Modal: Add Vendors -->
                <!-- <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#add_vendors" type="button">Add new Vendors</button> -->
                <div class="modal fade" id="add_vendors" tabindex="-1" aria-labelledby="add_vendors" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Add new Vendors</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h6 class="fw-bold">Basic Information</h6>
                        <div class="row g-3">
                          <div class="col-lg-7 col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" placeholder="Company">
                              <label>Enter Company</label>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-12">
                            <div class="form-floating">
                              <select class="form-select form-control">
                                <option value="1">USA</option>
                                <option value="2">UK</option>
                                <option value="3">Germany</option>
                              </select>
                              <label for="floatingSelect">Country</label>
                            </div>
                          </div>
                          <div class="col-lg-7 col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" placeholder="Name">
                              <label>Enter Name</label>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-12">
                            <div class="form-floating">
                              <select class="form-select form-control">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                              </select>
                              <label for="floatingSelect">Gender</label>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <label for="formFile" class="form-label">Select Logo</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                          <div class="col-lg-12 col-md-12">
                            <div class="form-floating">
                              <textarea type="text" class="form-control" placeholder="Description" style="height: 100px"></textarea>
                              <label>Description</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <table id="myDataTable_no_filter" class="table myDataTable align-middle table-bordered mb-0 custom-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Company Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="d-flex align-items-center">
                    <img src="../assets/img/google.svg" class="rounded-circle avatar" alt="">
                    <div class="ms-2 mb-0 fw-bold">Googlyio llc</div>
                  </td>
                  <td>+1 1234 567 789</td>
                  <td>chris.fox@example.com</td>
                  <td>USA</td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="d-flex align-items-center">
                    <img src="../assets/img/icon-facebook.svg" class="rounded-circle avatar"="">
                    <div class="ms-2 mb-0 fw-bold">Facebage info</div>
                  </td>
                  <td>+1 1234 567 454</td>
                  <td>Facebage.fox@example.com</td>
                  <td>USA</td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="d-flex align-items-center">
                    <img src="../assets/img/icon-google-ads.svg" class="rounded-circle avatar"="">
                    <div class="ms-2 mb-0 fw-bold">Gumolio web</div>
                  </td>
                  <td>+1 1234 567 666</td>
                  <td>Gumolio.fox@example.com</td>
                  <td>UK</td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="d-flex align-items-center">
                    <img src="../assets/img/icon-google-analytics.svg" class="rounded-circle avatar"="">
                    <div class="ms-2 mb-0 fw-bold">analytics llp</div>
                  </td>
                  <td>+1 1234 567 222</td>
                  <td>analytics.fox@example.com</td>
                  <td>Germany</td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> <!-- .row end -->

    <!-- start: page footer -->


  <!-- Modal: Create project -->

  <!-- Modal: my notes -->

  <!-- Modal: Schedule -->

  <!-- Modal: RecentChat -->

  <!-- Modal: Setting -->

  <!-- Jquery Page Js -->
  <!-- Jquery Page Js -->
  <script src="../assets/js/theme.js"></script>
  <!-- Plugin Js -->
  <script src="../assets/js/bundle/dataTables.bundle.js"></script>
  <!-- Vendor Script -->
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


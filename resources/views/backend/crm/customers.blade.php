@extends('backend.layouts.app')

@section('title', __('CRM customers'))

@section('content')

  <!-- start: sidebar -->

  <!-- start: body area -->

    <!-- start: page header -->

    <!-- start: page toolbar -->

    <!-- start: page body -->

        <div class="row g-3">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search...">
                  <button class="btn btn-secondary" type="button">Search</button>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_customers" type="button">Add new Customers</button>
                </div>
                <!-- Modal: Add new Customers -->
                <!-- <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#add_customers" type="button">Add new Customers</button> -->
                <div class="modal fade" id="add_customers" tabindex="-1" aria-labelledby="add_customers" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Add new Customers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h6 class="fw-bold">Basic Information</h6>
                        <div class="row g-3">
                          <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" placeholder="First Name">
                              <label>Enter First Name</label>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" placeholder="Last Name">
                              <label>Enter Last Name</label>
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
                              <input type="text" class="form-control" placeholder="Bank details">
                              <label>Bank details</label>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                            <div class="form-floating">
                              <select class="form-select form-control">
                                <option value="1">VIP</option>
                                <option value="2">Vendors</option>
                                <option value="2">Regular</option>
                              </select>
                              <label for="floatingSelect">Customer type</label>
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
                              <textarea type="text" class="form-control" placeholder="Address" style="height: 100px"></textarea>
                              <label>Address</label>
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
            <table id="myDataTable_no_filter" class="table myDataTable align-middle custom-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Join</th>
                  <th>Address</th>
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
                  <td>+14 1234 567 888</td>
                  <td>chris.fox@example.com</td>
                  <td>12 April 2016</td>
                  <td>44 Shirley Ave. West Chicago, IL 60185</td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../assets/img/xs/avatar2.jpg" class="rounded-circle avatar" alt="">
                      <h6 class="ms-2 mb-0 fw-bold">Edit Toke</h6>
                    </div>
                  </td>
                  <td>+14 1234 567 565</td>
                  <td>Toke.fox@example.com</td>
                  <td>14 Nov 2020</td>
                  <td>123 6th St. Melbourne, FL 32904</td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../assets/img/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                      <h6 class="ms-2 mb-0 fw-bold">Manuella</h6>
                    </div>
                  </td>
                  <td>+14 1234 567 999</td>
                  <td>Manuella.fox@example.com</td>
                  <td>22 Aug 2020</td>
                  <td>44 Shirley Ave. West Chicago, IL 60185</td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../assets/img/xs/avatar10.jpg" class="rounded-circle avatar" alt="">
                      <h6 class="ms-2 mb-0 fw-bold">Maryam Amiri</h6>
                    </div>
                  </td>
                  <td>+14 1234 567 343</td>
                  <td>Maryam.fox@example.com</td>
                  <td>18 May 2017</td>
                  <td>70 Bowman St. South Windsor, CT 06074</td>
                  <td>
                    <button type="button" class="btn btn-link btn-sm text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite"><i class="fa fa-star-o"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Manage"><i class="fa fa-gear"></i></button>
                    <button type="button" class="btn btn-link btn-sm text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../assets/img/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                      <h6 class="ms-2 mb-0 fw-bold">Brian Swader</h6>
                    </div>
                  </td>
                  <td>+14 1234 567 666</td>
                  <td>Brian.fox@example.com</td>
                  <td>12 Jun 2018</td>
                  <td>44 Shirley Ave. West Chicago, IL 60185</td>
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

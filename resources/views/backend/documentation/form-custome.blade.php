@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Personal Information</h6>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">First Name</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="text" class="form-control">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Last Name</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="text" class="form-control">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Email Address</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="email" class="form-control">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Phone Number</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="text" class="form-control phone-number" placeholder="Ex: (000) 000-00-00">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Password</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="password" class="form-control">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Confirm Password</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="password" class="form-control">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary">Save</button>
                        <button class="btn btn-outline-secondary">Cancle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Personal Information Card End -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Company Information</h6>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Company Name</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="text" class="form-control">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Company Number</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="text" class="form-control phone-number" placeholder="Ex: (000) 000-00-00">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Employees</label>
                        <input type="hidden" class="form-control">
                        <fieldset>
                            <select class="array-select form-control form-select" aria-label="example">
                                <option selected>Select Employees</option>
                                <option>0-10</option>
                                <option>11-50</option>
                                <option>51-100</option>
                                <option>100+</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Company Type</label>
                        <select class="form-select array-select form-control" aria-label="example">
                            <option selected>Select Type</option>
                            <option>Real Estate</option>
                            <option>Hospital</option>
                            <option>Information Technology (IT)</option>
                            <option>Goverment</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">Joining Date</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="text" class="form-control datepicker">
                            <div class="form-icon position-absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <label class="form-label">End Date</label>
                        <fieldset class="form-icon-group left-icon position-relative">
                            <input type="text" class="form-control datepicker">
                            <div class="form-icon position-absolute">
                                <svg width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary">Save</button>
                        <button class="btn btn-outline-secondary">Cancle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Company Information Card End -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Form Validation</h6>
            </div>
            <div class="card-body">
                <form class="row g-3 basic-form" method="post" novalidate>
                    <div class="col-md-6">
                        <label class="form-label">Text Input <sup class="text-danger">*</sup> </label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Input <sup class="text-danger">*</sup></label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Text Area <sup class="text-danger">*</sup></label>
                        <textarea class="form-control" rows="5" cols="30" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <label class="form-check-label me-3">Choose any One <sup class="text-danger">*</sup></label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexCheckDefault">Checkbox 1</label>
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="checkbox" required data-parsley-errors-container="#error-checkbox">
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexCheckDefault2">Checkbox 2</label>
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault2" name="checkbox">
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexCheckDefault3">Checkbox 3</label>
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault3" name="checkbox">
                                </div>
                                <p id="error-checkbox"></p>
                            </div>
                            <div class="col-sm-6 col-12">
                                <label class="form-check-label me-3">Choose any One <sup class="text-danger">*</sup></label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                    <input class="form-check-input" type="radio" id="flexRadioDefault1" name="radio" required data-parsley-errors-container="#error-radio">
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                    <input class="form-check-input" type="radio" id="flexRadioDefault2" name="radio">
                                </div>
                                <p id="error-radio"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Validate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form Validation -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Float Label</h6>
            </div>
            <div class="card-body">
                <form class="row g-3 maskking-form">
                    <div class="col-12">
                        <span class="float-label">
                            <input type="text" class="form-control form-control-lg" id="TextInput" placeholder="Name">
                            <label class="form-label" for="TextInput">Text Input</label>
                        </span>
                    </div>
                    <div class="col-12">
                        <span class="float-label">
                            <input type="email" class="form-control form-control-lg" id="emailInput" placeholder="password">
                            <label class="form-label" for="emailInput">Email Input</label>
                        </span>
                    </div>
                    <div class="col-12">
                        <span class="float-label">
                            <textarea class="form-control form-control-lg" id="TextArea" rows="5" cols="30" placeholder="Comment"></textarea>
                            <label class="form-label" for="TextArea">Text Area</label>
                        </span>
                    </div>
                    <div class="col-12">
                        <label class="form-group float-label">
                            <select class="form-control form-control-lg custom-select">
                                <option value="">India</option>
                                <option value="">US</option>
                                <option value="">UK</option>
                            </select>
                            <span>Country</span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    // Masking
    Inputmask({ "mask" : "(999) 999-9999" }).mask(".phone-number");

    // Form Validation
    $('.basic-form').parsley();

    // Date Picker
    $('.datepicker').datepicker({});

</script>
@endsection
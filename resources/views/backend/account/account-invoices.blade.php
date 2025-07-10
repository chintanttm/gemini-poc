@extends('backend.layouts.app')

@section('title', __('Account invoice'))

@section('content')
<div class="row g-3">
    <div class="col-12">
        <div class="card fieldset border border-primary">
            <span class="fieldset-tile text-primary bg-body">Recent Invoices:</span>
            <div class="owl-carousel owl-theme" id="recent_invoices">
                <div class="item card ribbon">
                    <div class="option-9 position-absolute text-light"><i class="fa fa-star"></i></div>
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">BB</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 2,500</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Bucky Barnes</li>
                            <li>#RA0015</li>
                            <li>Jan 01 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">DO</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 5,520</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Dean Otto</li>
                            <li>#RA0016</li>
                            <li>Jan 03 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">OL</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 8,000</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Orlando Lentz</li>
                            <li>#RA0017</li>
                            <li>Jan 03 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">AJ</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 12,500</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Andew Jon</li>
                            <li>#RA0018</li>
                            <li>Jan 05 2022</li>
                        </ul>
                    </div>
                </div>
                <div class="item card">
                    <div class="card-body">
                        <div class="avatar lg rounded-circle no-thumbnail mb-3 fs-5">AJ</div>
                        <small class="text-muted">Total</small>
                        <h4>USD 7,100</h4>
                        <ul class="lh-lg mb-0 text-muted">
                            <li>Andew Jon</li>
                            <li>#RA0018</li>
                            <li>Jan 05 2022</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card fieldset border border-muted">
            <span class="fieldset-tile text-muted bg-body">All Invoices:</span>
            <table id="invoice_list" class="table card-table align-middle mb-0">
                <thead>
                    <tr>                                       
                        <th>Invoice</th>
                        <th>Name</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Due Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            #RA0011
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Andew Jon</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 12,820</td>
                        <td>Jan 16 2022</td>
                        <td>Jan 20 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0012
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar2.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Orlando Lentz</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 2,000</td>
                        <td>Jan 15 2022</td>
                        <td>Jan 15 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0025
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar3.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Marshall Nichols</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 8,000</td>
                        <td>Jan 10 2022</td>
                        <td>Jan 12 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0023
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar4.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Nellie Maxwell</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 3,500</td>
                        <td>Jan 07 2022</td>
                        <td>Jan 08 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0026
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar5.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Marshall Nichols</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 250</td>
                        <td>Jan 06 2022</td>
                        <td>Jan 06 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0065
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar6.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Issa Bell</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 9,150</td>
                        <td>Jan 03 2022</td>
                        <td>Jan 05 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0015
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar7.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Dean Otto</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 5,000</td>
                        <td>Jan 03 2022</td>
                        <td>Jan 05 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0029
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar8.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Comeren Diaz</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 2,050</td>
                        <td>Jan 03 2022</td>
                        <td>Jan 05 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0028
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar9.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Chris Fox</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 2,000</td>
                        <td>Jan 03 2022</td>
                        <td>Jan 05 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            #RA0035
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ url('/') }}/assets/images/xs/avatar10.jpg" class="rounded-circle sm avatar" alt="">
                                <div class="ms-2 mb-0">Bucky Barnes</div>
                            </div>
                        </td>
                        <td class="fw-bold">USD 1,100</td>
                        <td>Feb 03 2022</td>
                        <td>Feb 05 2022</td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_send"><i class="fa fa-envelope"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="modal" data-bs-target="#invoice_detail"><i class="fa fa-download"></i></button>
                            <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal: invoice detail -->
        <div class="modal fade" id="invoice_detail" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Invoice #RA0011</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_scroll">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        Invoice <strong>01/Nov/2020</strong>
                                    </th>
                                    <td class="text-end">
                                        <span class="text-danger"> <strong>Status:</strong> Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>From:</div>
                                        <div class="fs-6 fw-bold mb-1">Webz Poland</div>
                                        <div>Madalinskiego 8</div>
                                        <div>71-101 Szczecin, Poland</div>
                                        <div>Email: info@webz.com.pl</div>
                                        <div>Phone: +48 444 666 3333</div>
                                    </td>
                                    <td class="text-end">
                                        <div>To:</div>
                                        <div class="fs-6 fw-bold mb-1">Bob Mart</div>
                                        <div>Attn: Daniel Marek</div>
                                        <div>43-190 Mikolow, Poland</div>
                                        <div>Email: marek@daniel.com</div>
                                        <div>Phone: +48 123 456 789</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table class="table table-borderless table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Item</th>
                                                    <th>Description</th>
                                                    <th class="text-end">Unit Cost</th>
                                                    <th class="text-center">Qty</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Origin License</td>
                                                    <td>Extended License</td>
                                                    <td class="text-end">$999,00</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-end">$999,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Custom Services</td>
                                                    <td>Instalation and Customization (cost per hour)</td>
                                                    <td class="text-end">$150,00</td>
                                                    <td class="text-center">20</td>
                                                    <td class="text-end">$3.000,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Hosting</td>
                                                    <td>1 year subcription</td>
                                                    <td class="text-end">$499,00</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-end">$499,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Platinum Support</td>
                                                    <td>1 year subcription 24/7</td>
                                                    <td class="text-end">$3.999,00</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-end">$3.999,00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <h6>Terms &amp; Condition</h6>
                                                        <p class="text-muted">You know, being a test pilot isn't always the healthiest business in the world. We predict too much for the next year and yet far too little for the next 10.</p>
                                                    </td>
                                                    <td colspan="3">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td ><strong>Subtotal</strong></td>
                                                                    <td class="text-end">$8.497,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td ><strong>VAT (10%)</strong></td>
                                                                    <td class="text-end">$679,76</td>
                                                                </tr>
                                                                <tr>
                                                                    <td ><strong>Total</strong></td>
                                                                    <td class="text-end"><strong>$7.477,36</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"><i class="fa fa-print me-2"></i>Print</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal: invoice send -->
        <div class="modal fade" id="invoice_send" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Invoice #RA0011</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_scroll">
                        <table class="card p-2">
                            <tr>
                                <td></td>
                                <td style="text-align: center; width: 100%;">
                                    <table class="table table-borderless mb-0" width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="text-align: center;">
                                                <h2 style="margin-bottom: 0;">$33.98 Paid</h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom: 30px 0; padding-top: 10px; text-align: center;">
                                                <h4 style="margin-bottom: 0;">Thanks for using TTM Inc.</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 20px 0;">
                                                <table width="100%">
                                                    <tr>
                                                        <td>
                                                            Attn: <strong>Daniel Marek</strong> 43-190 Mikolow, Poland<br>
                                                            Email: marek@daniel.com<br>
                                                            Phone: +48 123 456 789<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table class="table table-borderless table-striped mb-0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td style="text-align: left;">Extended License</td>
                                                                    <td style="text-align: right;">$19.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left;">1 year subcription</td>
                                                                    <td style="text-align: right;">$9.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left;">Instalation and Customization</td>
                                                                    <td style="text-align: right;">$4.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: right;" width="80%"><strong>Total</strong></td>
                                                                    <td style="text-align: right;">$33.98</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px 0; text-align: center;">
                                                <a href="#">View in browser</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0; text-align: center;">
                                                TTM Inc. 70 Bowman St. South Windsor, CT 06074
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="100%" style="text-align: center; margin-top: 40px;">
                                        <tr>
                                            <td class="aligncenter content-block">Questions? Email <a href="mailto:">info@thememakker.com</a></td>
                                        </tr>
                                    </table>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Send Email</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // date range picker
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    })

    $('#invoice_list')
    .addClass( 'nowrap' )
    .dataTable( {
        responsive: true,
        searching: false,
        paging: false,
        ordering: true,
        info: false,
    });

    // recent invoices Carousel
    $('#recent_invoices').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            },
            1400:{
                items:5,
                nav:true,
                loop:false
            }
        }
    })

</script>
@endsection

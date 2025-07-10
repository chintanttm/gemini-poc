@extends('backend.layouts.app')

@section('title', __('Account create invoice'))

@section('content')
<div class="row g-3">
    <div class="col-12">
        <div class="card print_invoice">
            <div class="card-header border-bottom fs-4">
                <h5 class="card-title mb-0">INVOICE</h5>
            </div>
            <div class="card-body">
                <div class="card p-3">
                    <div class="border-bottom pb-2">
                        <textarea class="form-control address">Marshall Nichols,
774 Andover St.
Snohomish, WA 98290

Phone: (012) 3456-7890</textarea>
                    <div id="logo">
                        <div id="logoctr">
                            <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                            <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                            |
                            <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                            <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
                        </div>
                        <div id="logohelp">
                            <input id="imageloc" type="text" size="50" value=""><br>
                            (max width: 540px, max height: 100px)
                        </div>
                        <img id="image" src="{{ url('/') }}/assets/images/logo-icon.svg" alt="logo">
                    </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="customer mt-4">
                        <textarea class="form-control customer-title">Widget Card. c/o List Widget</textarea>
                        <table class="meta">
                            <tbody>
                                <tr>
                                    <td class="meta-head">Invoice #</td>
                                    <td><textarea class="form-control">000123</textarea></td>
                                </tr>
                                <tr>
                                    <td class="meta-head">Date</td>
                                    <td><textarea class="form-control" id="date">December 15, 2021</textarea></td>
                                </tr>
                                <tr>
                                    <td class="meta-head">Amount Due</td>
                                    <td><div class="due">$875.00</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="clear:both"></div>
                    <table class="items">
                        <tbody>
                            <tr>
                                <th>Item</th>
                                <th>Description</th>
                                <th style="width: 140px;">Unit Cost</th>
                                <th style="width: 70px;">Quantity</th>
                                <th style="width: 140px;">Price</th>
                            </tr>
                            <tr class="item-row">
                                <td class="item-name">
                                    <div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                </td>
                                <td class="description">
                                    <textarea>Monthly web updates for TTM (Nov. 1 - Nov. 30, 2021)</textarea>
                                </td>
                                <td><textarea class="cost">$650.00</textarea></td>
                                <td><textarea class="qty">1</textarea></td>
                                <td><span class="price">$650.00</span></td>
                            </tr>
                            <tr class="item-row">
                                <td class="item-name">
                                    <div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                </td>
                                <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
                                <td><textarea class="cost">$75.00</textarea></td>
                                <td><textarea class="qty">3</textarea></td>
                                <td><span class="price">$225.00</span></td>
                            </tr>
                            <tr id="hiderow">
                                <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line">Subtotal</td>
                                <td class="total-value"><div id="subtotal">$875.00</div></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line">Total</td>
                                <td class="total-value"><div id="total">$875.00</div></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line">Amount Paid</td>
                                <td class="total-value"><textarea id="paid">$0.00</textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"> </td>
                                <td colspan="2" class="total-line balance">Balance Due</td>
                                <td class="total-value balance"><div class="due">$875.00</div></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="clear:both"></div>
                    <div class="footer-note mt-5">
                        <h5>Terms</h5>
                        <textarea class="form-control bg-light">NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 text-end">
        <button type="button" class="btn btn-lg btn-primary" onclick="window.print();return false"><i class="fa fa-print me-2"></i>Print Invoice</button>
        <button type="button" class="btn btn-lg btn-secondary"><i class="fa fa-envelope me-2"></i>Send PDF</button>
    </div>
</div> <!-- .row end -->
@endsection

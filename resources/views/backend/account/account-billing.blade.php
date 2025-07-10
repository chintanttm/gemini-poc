@extends('backend.layouts.app')

@section('title', __('Account Billing'))

@section('content')
<div class="row g-3">
    <div class="col-12">
        <div class="card overflow-hidden">
            <div class="card-body bg-secondary text-light">
                <h4>thememakker.com</h4>
                <span>Warning: You're approaching your limit. Please upgrade.</span>
            </div>
            <div class="card-body">
                <h2 class="fw-normal">Current subscription: Pro Business (Annual) </h2>
                <p>Your subscription has 3 (included) <code>team members</code>. Your next payment of <strong>$990</strong> (yearly) occurs on <strong>April 20, 2023</strong>. </p>
                <span class="text-muted">Thanks for choosing <strong class="text-primary">ThemeMakker</strong> Admin.</span>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.page.page-pricing') }}" title="" class="btn btn-secondary text-uppercase">Upgrade Plan</a>
                <button type="button" class="btn btn-link text-danger">Cancel subscription</button>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card fieldset border border-muted mt-3">
            <span class="fieldset-tile text-muted bg-body">Order History</span>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table card-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Type</th>
                                <th scope="col">Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>April 27, 2021</td>
                                <td>LUNO - Admin Dashboard Template for One project</td>
                                <td class="date status">
                                    <a href="#">HTML</a><span class="mx-3">|</span><a href="#">PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jun 22, 2021</td>
                                <td>Lucid ASP .NET Core MVC - Responsive Admin Template</td>
                                <td class="date status">
                                    <a href="#">HTML</a><span class="mx-3">|</span><a href="#">PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jun 22, 2021</td>
                                <td>Aero - Bootstrap 5 & 4 Admin Template with Laravel & Angular version</td>
                                <td class="date status">
                                    <a href="#">HTML</a><span class="mx-3">|</span><a href="#">PDF</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jun 22, 2021</td>
                                <td>Alpino - Bootstrap 4 Admin Dashboard Template</td>
                                <td class="date status">
                                    <a href="#">HTML</a><span class="mx-3">|</span><a href="#">PDF</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

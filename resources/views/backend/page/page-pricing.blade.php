@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="pricing-table owl-carousel owl-theme" id="OwlBasic">
            <div class="item p-xxl-5 p-4">
                <h5>Free</h5>
                <p>Best for Startup agencies who want to automate their reporting</p>
                <div class="pt-2 pb-3"><span class="fs-1 me-1 fw-bold text-primary">$0</span><span>/month</span></div>
                <ul class="list-unstyled flex-grow-1">
                    <li class="py-2">5 Clients</li>
                </ul>
                <button type="button" class="btn btn-lg btn-outline-secondary text-uppercase mt-auto">Buy Now</button>
            </div>
            <div class="item p-xxl-5 p-4">
                <h5>Starter</h5>
                <p>Best for Startup agencies who want to automate their reporting</p>
                <div class="pt-2 pb-3"><span class="fs-1 me-1 fw-bold text-primary">$19</span><span>/month</span></div>
                <ul class="list-unstyled flex-grow-1">
                    <li class="py-2">15 Clients</li>
                    <li class="py-2">Unlimited Reports</li>
                    <li class="py-2">Unlimited Live Dashboards</li>
                </ul>
                <button type="button" class="btn btn-lg btn-outline-secondary text-uppercase mt-auto">Buy Starter</button>
            </div>
            <div class="item p-xxl-5 p-4 ribbon">
                <div class="option-9 position-absolute text-light"><i class="fa fa-heart"></i></div>
                <h5>Professional</h5>
                <p>Best for Agencies who want a brandable marketing platform</p>
                <div class="pt-2 pb-3"><span class="fs-1 me-1 fw-bold text-primary">$39</span><span>/month</span></div>
                <ul class="list-unstyled flex-grow-1">
                    <li class="py-2">45 Clients</li>
                    <li class="py-2">Unlimited Reports</li>
                    <li class="py-2">Unlimited Live Dashboards</li>
                </ul>
                <button type="button" class="btn btn-lg btn-primary text-uppercase mt-auto">Buy Professional</button>
            </div>
            <div class="item p-xxl-5 p-4">
                <h5>Enterprise</h5>
                <p>Best for Large agencies who want to scale their processes</p>
                <div class="pt-2 pb-3"><span class="fs-1 me-1 fw-bold text-primary">Contact us</span></div>
                <ul class="list-unstyled flex-grow-1">
                    <li class="py-2">Everything in Team plan</li>
                    <li class="py-2">Custom Connectors</li>
                    <li class="py-2">Franchise Solutions</li>
                    <li class="py-2">Marketing Analytics</li>
                    <li class="py-2">Data</li>
                    <li class="py-2">Storage</li>
                    <li class="py-2">150+ Data Sources</li>
                </ul>
                <button type="button" class="btn btn-lg btn-outline-secondary text-uppercase mt-auto">Contact Us</button>
            </div>
        </div>
    </div>
</div> <!-- Row end  -->
<script>
    $('#OwlBasic').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        responsive:{
            0:{items:1},
            600:{items:2},
            992:{items:3},
            1600:{items:4}
        }
    })
</script>
@endsection
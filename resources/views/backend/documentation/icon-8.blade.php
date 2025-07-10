@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <style>
        .icons-list .col { background: var(--card-color); border: 1px dashed var(--border-color); padding: 20px; text-align: center; border-radius: .75rem; }
        .icons-list .col i { font-size: 40px;}
        .icons-list .col span {display: block; color: var(--color-400);}
    </style>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Icons8</h6>
                </div>
                <div class="card-body">
                    <h4>Icons8 Line Awesome</h4>
                    <p>Font Awesome is well, awesome, but our data shows that people actually like line icons even more1. Since Icons8 is all about making people happy, we made Line Awesome as a free alternative to Font Awesome 5.11.2.</p>
                    <h6>You can change the size of the icons using one of the following classes:</h6>
                    <div class="mb-3">
                        <code>.la-lg</code>
                        <code>.la-xs</code>
                        <code>.la-sm</code>
                        <code>.la-lx</code>
                        <code>.la-1x</code>
                        <code>.la-2x</code>
                        <code>.la-3x</code>
                        <code>.la-4x</code>
                        <code>.la-5x</code>
                        <code>.la-6x</code>
                        <code>.la-7x</code>
                        <code>.la-8x</code>
                        <code>.la-9x</code>
                        <code>.la-10x</code>
                        <code>.la-fw</code>
                    </div>
                    <div role="alert" class="alert alert-primary">Check out a <a target="_blank" href="https://icons8.com/line-awesome">https://icons8.com/line-awesome</a> of the Line Awesome. and <a href="https://github.com/icons8/line-awesome">https://github.com/icons8/line-awesome</a></a></div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->
    <div class="row mt-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 icons-list m-0">
        <div class="col"><i class="lab la-accessible-icon"></i><span>la-accessible-icon</span></div>
        <div class="col"><i class="las la-bell"></i><span>la-bell</span></div>
        <div class="col"><i class="las la-feather-alt"></i><span>la-feather-alt</span></div>
        <div class="col"><i class="las la-recycle"></i><span>la-recycle</span></div>
        <div class="col"><i class="las la-phone-volume"></i><span>la-phone-volume</span></div>
        <div class="col"><i class="las la-ambulance"></i><span>la-ambulance</span></div>
        <div class="col"><i class="las la-apple-alt"></i><span>la-apple-alt</span></div>
        <div class="col"><i class="las la-mug-hot"></i><span>la-mug-hot</span></div>
        <div class="col"><i class="lab la-500px"></i><span>la-500px</span></div>
        <div class="col"><i class="lab la-behance"></i><span>la-behance</span></div>
        <div class="col"><i class="lab la-dribbble"></i><span>la-dribbble</span></div>
        <div class="col"><i class="lab la-jsfiddle"></i><span>la-jsfiddle</span></div>
        <div class="col"><i class="lab la-quinscape"></i><span>la-quinscape</span></div>
        <div class="col"><i class="lab la-slack"></i><span>la-slack</span></div>
        <div class="col"><i class="lab la-vimeo-v"></i><span>la-vimeo-v</span></div>
        <div class="col"><i class="lab la-wordpress"></i><span>la-wordpress</span></div>
        <div class="col"><i class="las la-school"></i><span>la-school</span></div>
        <div class="col"><i class="las la-building"></i><span>la-building</span></div>
        <div class="col"><i class="las la-address-book"></i><span>la-address-book</span></div>
        <div class="col"><i class="las la-globe"></i><span>la-globe</span></div>
        <div class="col"><i class="las la-sitemap"></i><span>la-sitemap</span></div>
        <div class="col"><i class="las la-save"></i><span>la-save</span></div>
        <div class="col"><i class="las la-phone-square"></i><span>la-phone-square</span></div>
        <div class="col"><i class="las la-map-marked-alt"></i><span>la-map-marked-alt</span></div>
        <div class="col"><i class="las la-heart"></i><span>la-heart</span></div>
        <div class="col"><i class="las la-frown"></i><span>la-frown</span></div>
        <div class="col"><i class="las la-chess"></i><span>la-chess</span></div>
        <div class="col"><i class="las la-graduation-cap"></i><span>la-graduation-cap</span></div>
        <div class="col"><i class="las la-server"></i><span>la-server</span></div>
        <div class="col"><i class="las la-print"></i><span>la-print</span></div>
        <div class="col"><i class="lab la-bitcoin"></i><span>la-bitcoin</span></div>
        <div class="col"><i class="las la-adjust"></i><span>la-adjust</span></div>
        <div class="col"><i class="las la-pepper-hot"></i><span>la-pepper-hot</span></div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3 mt-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
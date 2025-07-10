@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<style>
        .icons-list .card { align-items: center; padding: 20px 8px;}
        .icons-list .card span { display: block; margin-top: 10px;}
    </style>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Weather icons</h6>
                </div>
                <div class="card-body">
                    <h5>What is Feather?</h5>
                    <p>Feather is a collection of simply beautiful open source icons. Each icon is designed on a 24x24 grid with an emphasis on simplicity, consistency, and flexibility.</p>
                    <a class="text-primary me-3" href="https://feathericons.com">https://feathericons.com</a>
                    <a class="text-primary me-3" href="https://github.com/feathericons/feather">https://github.com/feathericons/feather</a>
                </div>
                <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;i data-feather=&quot;activity&quot;&gt;&lt;/i&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js&quot;&gt;&lt;/script&gt;

&lt;!-- Page Js --&gt;
&lt;script&gt;feather.replace()&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 icons-list m-0 g-1 text-center">
        <div class="col"><div class="card"><i data-feather="activity"></i><span>activity</span></div></div>
        <div class="col"><div class="card"><i data-feather="airplay"></i><span>airplay</span></div></div>
        <div class="col"><div class="card"><i data-feather="alert-circle"></i><span>alert-circle</span></div></div>
        <div class="col"><div class="card"><i data-feather="alert-octagon"></i><span>alert-octagon</span></div></div>
        <div class="col"><div class="card"><i data-feather="alert-triangle"></i><span>alert-triangle</span></div></div>
        <div class="col"><div class="card"><i data-feather="align-center"></i><span>align-center</span></div></div>
        <div class="col"><div class="card"><i data-feather="align-justify"></i><span>align-justify</span></div></div>
        <div class="col"><div class="card"><i data-feather="align-left"></i><span>align-left</span></div></div>
        <div class="col"><div class="card"><i data-feather="align-right"></i><span>align-right</span></div></div>
        <div class="col"><div class="card"><i data-feather="anchor"></i><span>anchor</span></div></div>
        <div class="col"><div class="card"><i data-feather="aperture"></i><span>aperture</span></div></div>
        <div class="col"><div class="card"><i data-feather="archive"></i><span>archive</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-down"></i><span>arrow-down</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-down-circle"></i><span>arrow-down-circle</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-down-left"></i><span>arrow-down-left</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-down-right"></i><span>arrow-down-right</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-left"></i><span>arrow-left</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-left-circle"></i><span>arrow-left-circle</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-right"></i><span>arrow-right</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-right-circle"></i><span>arrow-right-circle</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-up"></i><span>arrow-up</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-up-circle"></i><span>arrow-up-circle</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-up-left"></i><span>arrow-up-left</span></div></div>
        <div class="col"><div class="card"><i data-feather="arrow-up-right"></i><span>arrow-up-right</span></div></div>
        <div class="col"><div class="card"><i data-feather="at-sign"></i><span>at-sign</span></div></div>
        <div class="col"><div class="card"><i data-feather="award"></i><span>award</span></div></div>
        <div class="col"><div class="card"><i data-feather="bar-chart"></i><span>bar-chart</span></div></div>
        <div class="col"><div class="card"><i data-feather="bar-chart-2"></i><span>bar-chart-2</span></div></div>
        <div class="col"><div class="card"><i data-feather="battery"></i><span>battery</span></div></div>
        <div class="col"><div class="card"><i data-feather="battery-charging"></i><span>battery-charging</span></div></div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3 mt-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
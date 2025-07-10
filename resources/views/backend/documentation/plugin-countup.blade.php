@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Jquery Counterup</h5>
                            </div>
                            <div class="card-body">
                                <p class="fs-6">jquery.counterup is a jQuery plugin that animates a number from zero (counting up towards it). It supports counting up:. <a href="https://github.com/ciromattia/jquery.counterup" rel="nofollow">jquery counterup</a></p>
                                <ul class="mb-0">
                                    <li>integers <code>12345</code></li>
                                    <li>floats <code>0.1234</code></li>
                                    <li>formatted numbers <code>1,234,567.00</code></li>
                                    <li>time <code>21:45:00</code></li>
                                </ul>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/jquerycounterup.bundle.js&quot;&gt;&lt;/script&gt;
&lt;!-- HTML --&gt;
&lt;span class=&quot;counter&quot;&gt;1,540&lt;/span&gt;
&lt;span class=&quot;counter&quot;&gt;1,540.5&lt;/span&gt;
&lt;span&gt;&lt;span class=&quot;counter&quot;&gt;1,540.5&lt;/span&gt;K&lt;/span&gt;
&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    jQuery(document).ready(function($) {
        $('.counter').counterUp({ delay: 20, time: 1500 });
    });
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row g-2 mt-4">
    <div class="col">
        <div class="card">
            <div class="card-body p-3">
                <div class="text-muted text-uppercase">Applications</div>
                <div class="mt-1">
                    <span class="fw-bold h4 mb-0 counter">10.5</span>
                    <span class="text-success ms-1">2.55% <i class="fa fa-caret-up"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body p-3">
                <div class="text-muted text-uppercase">Company</div>
                <div class="mt-1">
                    <span class="fw-bold h4 mb-0 counter">8,104</span>
                    <span class="text-success ms-1">18.60% <i class="fa fa-caret-up"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body p-3">
                <div class="text-muted text-uppercase">Shortlisted</div>
                <div class="mt-1">
                    <span class="fw-bold h4 mb-0 counter">5.2</span>
                    <span class="text-success ms-1">3.08% <i class="fa fa-caret-up"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body p-3">
                <div class="text-muted text-uppercase">On-Hold</div>
                <div class="mt-1">
                    <span class="fw-bold h4 mb-0"><span class="counter">1,540.5</span>K</span>
                    <span class="text-success ms-1">1.72% <i class="fa fa-caret-up"></i></span>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 20,
            time: 1500
        });
    });
</script>
@endsection
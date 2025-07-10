@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Bootstrap Datepicker</h6>
                            </div>
                            <div class="card-body">
                                <p>As you change options, your address bar will update to reflect the current configuration (requires a browser with <code>history.replaceState</code> support).  This url can be used to link to the sandbox with the given configuration pre-loaded.</p>
                                <h6>For full documentation please check the <a href="https://uxsolutions.github.io/bootstrap-datepicker/" target="_blank" class="fw-bold">plugin's site</a></h6>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/bootstrapdatepicker.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/bootstrapdatepicker.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    $('.datepicker').datepicker({});
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Basic</h6>
            </div>
            <div class="card-body">
                <input type="text" class="form-control form-control-lg datepicker" placeholder="Select date" >
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3">
    <div class="col-12">
        <a class="btn lift btn-lg rounded-4 btn-primary" href="element-daterange.html"><i class="fa fa-long-arrow-left me-3"></i>Daterange Picker</a>
        <a class="btn lift btn-lg rounded-4 btn-secondary" href="element-dropify.html">Dropify<i class="fa fa-long-arrow-right ms-3"></i></a>
    </div>
</div>
<script>
    $('.datepicker').datepicker({});
</script>
@endsection
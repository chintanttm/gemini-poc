@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Introduction</h6>
                            </div>
                            <div class="card-body">
                                <h4>Tagsinput</h4>
                                <p class="fs-6">Bootstrap Tags Input is a jQuery plugin providing a Twitter Bootstrap user interface for managing tags. For more info, please visit the <a href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/" target="_blank">plugin's site</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/bootstraptagsinput.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- HTML --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-role=&quot;tagsinput&quot; value=&quot;LUNO,Admin,React,VueJs,Angular&quot;&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Tags Input</label>
                                <input type="text" class="form-control" data-role="tagsinput" value="LUNO,Admin,React,VueJs,Angular">
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->

                <!-- start: navigation btn -->
                <div class="row g-3">
                    @include('backend.documentation.next-previous-url')
                </div>

@endsection
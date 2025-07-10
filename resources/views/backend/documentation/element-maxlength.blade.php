@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Maxlength</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-6">This plugin integrates by default with Twitter bootstrap using badges to display the maximum length of the field where the user is inserting text. This plugin uses the HTML5 attribute "maxlength" to work. For more info, please visit the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank">plugin's site</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/bs-maxlength.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- HTML  --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control form-control-lg mb-1&quot; id=&quot;bs_maxlength_basic&quot; maxlength=&quot;10&quot;&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;    
    // basic
    $('#bs_maxlength_basic').maxlength({
        warningClass: &quot;badge bg-primary&quot;,
        limitReachedClass: &quot;badge bg-success&quot;
    });
&lt;/script&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12 mb-3">
                            <label class="form-label">Basic example</label>
                            <input type="text" class="form-control form-control-lg mb-1" id="bs_maxlength_basic" maxlength="10">
                            <span class="text-muted">The badge will show up by default when the remaining chars are 10 or less</span>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Threshold Example</label>
                            <input type="text" class="form-control form-control-lg mb-1" id="bs_maxlength_threshold" maxlength="25">
                            <span class="text-muted">Set threshold value to show there are 20 chars or less left</span>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Textarea Example</label>
                            <textarea  type="text" class="form-control form-control-lg mb-1" id="bs_maxlength_textarea" maxlength="50"></textarea>
                            <span class="text-muted">Bootstrap maxlength supports textarea as well as inputs</span>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Set Position example</label>
                            <input type="text" class="form-control form-control-lg mb-1" maxlength="20" id="bs_maxlength_p_top_left" placeholder="top left" />
                            <input type="text" class="form-control form-control-lg mb-1" maxlength="20" id="bs_maxlength_p_top_right" placeholder="top right" />
                            <input type="text" class="form-control form-control-lg mb-1" maxlength="20" id="bs_maxlength_p_bottom_left" placeholder="bottom left" />
                            <input type="text" class="form-control form-control-lg mb-1" maxlength="20" id="bs_maxlength_p_bottom_right"  placeholder="bottom right" />
                            <span class="text-muted">The field counter can be positioned at the top, bottom, left or right.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
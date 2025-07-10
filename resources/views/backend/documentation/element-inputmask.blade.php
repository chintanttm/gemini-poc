@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Inputmask</h6>
                            </div>
                            <div class="card-body">
                                <p>Inputmask is a javascript library that creates an input mask. Inputmask can run against vanilla javascript, jQuery, and jqlite.. For more info, please visit the <a href="https://flatpickr.js.org/" target="_blank">plugin's site</a></p>
                                <p>An inputmask helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers, ...</p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;../node_modules/inputmask/dist/inputmask.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
$(document).ready(function(){
    $(&quot;#example1&quot;).inputmask(&quot;99-9999999&quot;);
    $(&quot;#example2&quot;).inputmask();
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
                    <div class="col-12">
                        <label for="" class="form-label">Date</label>
                        <input class="form-control form-control-lg" id="inputmask_date" inputmode="text">
                        <div class="form-text">Custom date format: <code>mm/dd/yyyy</code></div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Phone number</label>
                        <input class="form-control form-control-lg" id="inputmask_number" inputmode="text">
                        <div class="form-text">Phone number format: 
                        <code>(999) 999-9999</code></div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Plaeholder</label>
                        <input class="form-control form-control-lg" id="inputmask_placeholder" inputmode="text">
                        <div class="form-text">Phone number format with placeholder: 
                        <code>(999) 999-9999</code></div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Repeating mask</label>
                        <input class="form-control form-control-lg" placeholder="" id="inputmask_repeating" inputmode="text">
                        <div class="form-text">Mask 
                        <code>9</code>, 
                        <code>99</code>or ... 
                        <code>9999999999</code></div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Right aligned</label>
                        <input class="form-control form-control-lg" id="inputmask_end" inputmode="decimal" style="text-align: right;">
                        <div class="form-text">Numeric format</div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Currency</label>
                        <input class="form-control form-control-lg" id="inputmask_currency" inputmode="text">
                        <div class="form-text">Currency format: 
                        <code>€ ___.__1.234,56</code></div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">IP Address</label>
                        <input class="form-control form-control-lg" id="inputmask_ip" inputmode="text">
                        <div class="form-text">Custom format: 
                        <code>999.999.999.999</code></div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Email Address</label>
                        <input class="form-control form-control-lg" id="inputmask_email" inputmode="text">
                        <div class="form-text">Custom format: 
                        <code>_@_</code></div>
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
<script>
    // Date
    Inputmask({ "mask" : "99/99/9999" }).mask("#inputmask_date");

    // Phone
    Inputmask({ "mask" : "(999) 999-9999" }).mask("#inputmask_number");

    // Placeholder
    Inputmask({ "mask" : "(999) 999-9999", "placeholder": "(999) 999-9999", }).mask("#inputmask_placeholder");

    // Repeating
    Inputmask({ "mask": "9", "repeat": 10, "greedy": false }).mask("#inputmask_repeating");

    // Right aligned
    Inputmask("decimal", { "rightAlignNumerics": false }).mask("#inputmask_end");

    // Currency
    Inputmask("€ 999.999.999,99", { "numericInput": true }).mask("#inputmask_currency");

    // Ip address
    Inputmask({ "mask": "999.999.999.999" }).mask("#inputmask_ip");

    // Email address
    Inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            "*": {
                validator: '[0-9A-Za-z!#$%&"*+/=?^_`{|}~\-]',
                cardinality: 1,
                casing: "lower"
            }
        }
    }).mask("#inputmask_email");
</script>
@endsection
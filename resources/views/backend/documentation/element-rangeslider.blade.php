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
                                <h4>Range slider</h4>
                                <p class="fs-6">Ion.RangeSlider. Is an easy, flexible and responsive range slider with tons of options.. For more info, please visit the <a href="http://ionden.com/a/plugins/ion.rangeSlider/index.html" target="_blank">plugin's site</a></p>
                                <ul class="lh-lg">
                                    <li>Ion.RangeSlider — cool, comfortable, responsive and easily customizable range slider</li>
                                    <li>Supports events and public methods, has flexible settings, can be completely altered with CSS</li>
                                    <li>Cross-browser: Google Chrome, Mozilla Firefox 3.6+, Opera 12+, Safari 5+, Internet Explorer 8+</li>
                                    <li>Ion.RangeSlider supports touch-devices (iPhone, iPad, Nexus, etc.).</li>
                                    <li>Ion.RangeSlider freely distributed under terms of <a href="http://ionden.com/a/plugins/licence.html" rel="nofollow">MIT licence</a>.</li>
                                    <li>With this plugin you will be able to build beautiful range sliders, like this:</li>
                                </ul>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/rangeslider.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/rangeslider.bundle.js&quot;&gt;&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Start without params</p>
                        <input type="text" id="range_01" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Set min value, max value and start point</p>
                        <input type="text" id="range_02" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Set type to double and specify range, also showing grid and adding prefix "$"</p>
                        <input type="text" id="range_03" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Set up range with negative values</p>
                        <input type="text" id="range_04" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Using step 250</p>
                        <input type="text" id="range_05" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Set up range with fractional values, using fractional step</p>
                        <input type="text" id="range_06" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Set up you own numbers</p>
                        <input type="text" id="range_07" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>Using any strings as your values</p>
                        <input type="text" id="range_08" value="" />
                    </div>
                    <div class="irs-demo mb-4 pb-4 border-bottom">
                        <p>One more example with strings</p>
                        <input type="text" id="range_09" value="" />
                    </div>
                    <div class="irs-demo">
                        <p>No prettify. Big numbers are ugly and unreadable</p>
                        <input type="text" id="range_10" value="" />
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
        $(function () {
            $("#range_01").ionRangeSlider();

            $("#range_02").ionRangeSlider({
                min: 100,
                max: 1000,
                from: 550
            });

            $("#range_03").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 1000,
                from: 200,
                to: 800,
                prefix: "$"
            });

            $("#range_04").ionRangeSlider({
                type: "double",
                grid: true,
                min: -1000,
                max: 1000,
                from: -500,
                to: 500
            });

            $("#range_05").ionRangeSlider({
                type: "double",
                grid: true,
                min: -1000,
                max: 1000,
                from: -500,
                to: 500,
                step: 250
            });

            $("#range_06").ionRangeSlider({
                type: "double",
                grid: true,
                min: -12.8,
                max: 12.8,
                from: -3.2,
                to: 3.2,
                step: 0.1
            });

            $("#range_07").ionRangeSlider({
                type: "double",
                grid: true,
                from: 1,
                to: 5,
                values: [0, 10, 100, 1000, 10000, 100000, 1000000]
            });

            $("#range_08").ionRangeSlider({
                grid: true,
                from: 5,
                values: [
                    "zero", "one",
                    "two", "three",
                    "four", "five",
                    "six", "seven",
                    "eight", "nine",
                    "ten"
                ]
            });

            $("#range_09").ionRangeSlider({
                grid: true,
                from: 3,
                values: [
                    "January", "February", "March",
                    "April", "May", "June",
                    "July", "August", "September",
                    "October", "November", "December"
                ]
            });

            $("#range_10").ionRangeSlider({
                grid: true,
                min: 1000,
                max: 1000000,
                from: 100000,
                step: 1000,
                prettify_enabled: false
            });
        });
    </script>
@endsection
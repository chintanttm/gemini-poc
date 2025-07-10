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
                                <h4>nouislider</h4>
                                <p class="fs-6">noUiSlider is a lightweight range slider with multi-touch support and a ton of features. It supports non-linear ranges, requires no external dependencies, has keyboard support, and it works great in responsive designs. Have you tried this documentation on your phone?. For more info, please visit the <a href="https://refreshless.com/nouislider/" target="_blank">plugin's site</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/nouislider.min.css&quot;/&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/nouislider.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
var slider = document.getElementById('slider');
noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
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
                        <div class="col-md-12">
                            <label class="form-label">Basic Example</label>
                            <div id="nouislider_basic_example"></div>
                            <div class="mt-2"><b>Value: </b><span class="js-nouislider-value"></span></div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Range Example</label>
                            <div id="nouislider_range_example"></div>
                            <div  class="mt-2"><b>Value: </b><span class="js-nouislider-value"></span></div>
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
        //noUISlider
        var sliderBasic = document.getElementById('nouislider_basic_example');
        noUiSlider.create(sliderBasic, {
            start: [30],
            connect: 'lower',
            step: 1,
            range: {
                'min': [0],
                'max': [100]
            }
        });
        getNoUISliderValue(sliderBasic, true);

        //Range Example
        var rangeSlider = document.getElementById('nouislider_range_example');
        noUiSlider.create(rangeSlider, {
            start: [32500, 62500],
            connect: true,
            range: {
                'min': 25000,
                'max': 100000
            }
        });
        getNoUISliderValue(rangeSlider, false);
        //Get noUISlider Value and write on
        function getNoUISliderValue(slider, percentage) {
            slider.noUiSlider.on('update', function () {
                var val = slider.noUiSlider.get();
                if (percentage) {
                    val = parseInt(val);
                    val += '%';
                }
                $(slider).parent().find('span.js-nouislider-value').text(val);
            });
        }
    </script>
@endsection
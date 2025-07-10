@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')

                <div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Overview</h6>
                            </div>
                            <div class="card-body">
                                <strong class="me-1">ApexCharts</strong>is loaded with powerful features to fulfill your data-visualization needs. For more info, please visit the 
                                <a href="https://apexcharts.com/" target="_blank">plugin's site</a>
                            </div>
                            <div class="card-body">
                                <h4>Usage</h4>
                                <strong class="me-1">ApexCharts</strong>CSS and Javascript files are bundled in the global style and scripts bundles and are globally included in all pages:
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;script src=&quot;{{ url('/') }}/assets/bundles/apexcharts.bundle.js&quot;&gt;&lt;/script&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Basic Line Column</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu shadow border-0 p-2">
                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-chart-line-column" style="height: 280px;"></div>
                            </div>
                            <ul class="nav nav-tabs tab-card" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Chart-HTML-1" role="tab">HTML</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Chart-JAVASCRIPT-1" role="tab">JAVASCRIPT</a></li>
                            </ul>
                            <div class="card-body tab-content">
                                <div class="tab-pane fade show active" id="Chart-HTML-1" role="tabpanel">
<pre class=" language-html m-0" data-lang="html" style="height: 400px;"><code class=" language-html">&lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h6 class=&quot;card-title mb-0&quot;&gt;Basic Line Column&lt;/h6&gt;
        &lt;div class=&quot;dropdown&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;more-icon dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;fa fa-ellipsis-h&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;ul class=&quot;dropdown-menu dropdown-animation dropdown-menu-end shadow border-0&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;apex-chart-line-column&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="tab-pane fade" id="Chart-JAVASCRIPT-1" role="tabpanel">
<pre class="language-html m-0" data-lang="html" style="height: 400px;"><code class="language-javascript">var options = {
    chart: {
        type: 'line',
        toolbar: {
            show: false,
        },
    },
    colors: ['var(--chart-color1)', 'var(--chart-color5)'],
    series: [{
        name: 'Website Blog',
        type: 'column',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
    }, {
        name: 'Social Media',
        type: 'line',
        data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
    }],
    stroke: {
        width: [0, 4]
    },
    labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
    xaxis: {
        type: 'datetime'
    },
    yaxis: [{
        title: {
            text: 'Website Blog',
        },
    },{
        opposite: true,
        title: {
            text: 'Social Media'
        }
    }]
}
var chart = new ApexCharts( document.querySelector(&quot;#apex-chart-line-column&quot;), options );
chart.render();</code></pre>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Simple Bubble</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu shadow border-0 p-2">
                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-simple-bubble" style="height: 280px;"></div>
                            </div>
                            <ul class="nav nav-tabs tab-card" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Chart-HTML-2" role="tab">HTML</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Chart-JAVASCRIPT-2" role="tab">JAVASCRIPT</a></li>
                            </ul>
                            <div class="card-body tab-content">
                                <div class="tab-pane fade show active" id="Chart-HTML-2" role="tabpanel">
<pre class="language-html m-0" data-lang="html" style="height: 400px;"><code class="language-html">&lt;div class=&quot;card mb-3&quot;&gt;
    &lt;div class=&quot;card-header&quot;&gt;
        &lt;h6 class=&quot;card-title mb-0&quot;&gt;Simple Bubble&lt;/h6&gt;
        &lt;div class=&quot;dropdown&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;more-icon dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;fa fa-ellipsis-h&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;ul class=&quot;dropdown-menu dropdown-animation dropdown-menu-end shadow border-0&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;div id=&quot;apex-simple-bubble&quot; style=&quot;height: 280px;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                                <div class="tab-pane fade" id="Chart-JAVASCRIPT-2" role="tabpanel">
<pre class="language-html m-0" data-lang="html" style="height: 400px;"><code class="language-javascript">function generateData(baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
        var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
        var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
        var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

        series.push([x, y, z]);
        baseval += 86400000;
        i++;
    }
    return series;
}
var options = {
    chart: {
        type: 'bubble',
        toolbar: {
            show: false,
        },
    },
    colors: ['var(--chart-color1)', 'var(--chart-color5)'],
    dataLabels: {
        enabled: false
    },
    series: [{
        name: 'Bubble1',
        data: generateData(new Date('11 Feb 2019 GMT').getTime(), 20, { min: 10, max: 60 })
    },{
        name: 'Bubble2',
        data: generateData(new Date('11 Feb 2019 GMT').getTime(), 20, { min: 10, max: 60 })
    }],
    fill: {
        opacity: 0.8
    },
    title: {
        text: 'Simple Bubble Chart'
    },
    xaxis: {
        tickAmount: 12,
        type: 'category',
    },
    yaxis: {
        max: 70
    }
}

var chart = new ApexCharts(document.querySelector("#apex-simple-bubble"),options);
chart.render();</code></pre>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Area Datetime</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary" id="one_month">1M</button>
                        <button type="button" class="btn btn-outline-secondary" id="six_months">6M</button>
                        <button type="button" class="btn btn-outline-secondary active" id="one_year">1Y</button>
                        <button type="button" class="btn btn-outline-secondary" id="ytd">YTD</button>
                        <button type="button" class="btn btn-outline-secondary" id="all">ALL</button>
                    </div>
                    <div id="apex-timeline-chart"></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Stacked Area</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-stacked-area"></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Basic Column</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-basic-column"></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Basic Heatmap Chart</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-basic-heatmap"></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Basic Scatter Chart</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-basic-scatter"></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Timeline</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-timeline"></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Basic Bar</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-basic-bar"></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title mb-0">Basic CandleStick</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-CandleStick"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-5 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div id="apexspark1"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div id="apexspark2"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div id="apexspark3"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Basic Radar</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-basic-radar"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Radar Multiple Series</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-radar-multiple-series"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Radar with Polygon Fill</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-radar-polygon-fill"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Simple Donut</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-simple-donut"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Circle Chart</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-circle-chart"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Circle Chart Multiple</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-circle-chart-multiple"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Circle Gradient</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-circle-gradient"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Stroked Gauge</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="apex-stroked-gauge"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div id="apexspark-chart1"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div id="apexspark-chart2"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div id="apexspark-chart3"></div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div id="apexspark-chart4"></div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3">
        @include('backend.documentation.next-previous-url')
    </div>                   
@endsection
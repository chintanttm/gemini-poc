@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3 mb-3">
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">jQuery Sparklines</h6>
                            </div>
                            <div class="card-body">
                                This jQuery plugin makes it easy to generate a number of different types of sparklines directly in the browser, using online a line of two of HTML and Javascript.
                                <a href="https://omnipotent.net/jquery.sparkline/" target="_blank">plugin's site</a>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">
&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/sparkline.bundle.js&quot;&gt;&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Mini Line Chart</h6>
                </div>
                <div class="card-body">
                    <p>Mouse over the chart to see the tooltip</p>
                    <span class="me-3" id="demo-sparkline-line1">26,68,35,38,53,95,114,87,114</span>
                    <span class="me-3" id="demo-sparkline-line2">9,43,50,36,95,41,69,113,50</span>
                    <span class="me-3" id="demo-sparkline-line3">5,43,66,73,50,102,40,92,59</span>
                    <span class="me-3" id="demo-sparkline-line4">14,89,16,35,63,63,64,124,100</span>
                    <span class="me-3" id="demo-sparkline-line5">38,13,36,62,98,48,93,60,75</span>
                    <span class="me-3" id="demo-sparkline-line6">Loading...</span>
                    <span class="me-3" id="demo-sparkline-line7">Loading...</span>
                    <span class="me-3" id="demo-sparkline-line8">Loading...</span>
                    <span class="me-3" id="demo-sparkline-line9">Loading...</span>
                    <span class="me-3" id="demo-sparkline-line10">Loading...</span>
                    <p class="mt-4">Composite Inline</p>
                    <span id="demo-sparkline-compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Mini Bar Chart</h6>
                </div>
                <div class="card-body">
                    <span id="mini-bar-chart1" class="mini-bar-chart me-3"></span>
                    <span id="mini-bar-chart2" class="mini-bar-chart me-3"></span>
                    <span id="mini-bar-chart3" class="mini-bar-chart me-3"></span>
                    <span id="mini-bar-chart4" class="mini-bar-chart me-3"></span>
                    <span id="mini-bar-chart5" class="mini-bar-chart me-3"></span>
                    <div class="row g-3 mt-4">
                        <div class="col">
                            <p>Negative values</p>
                            <span id="mini-bar-negative" class="mini-bar-chart">25, -10, 15, 35, -15,-5, 10, 20, 15</span>
                        </div>
                        <div class="col">
                            <p>Stacked</p>
                            <span id="mini-bar-stacked" class="mini-bar-chart">2:4, 5:7, 2:9, 4:8, 3:10,4:10, 3:6, 5:8, 2:3</span>
                        </div>
                        <div class="col">
                            <p>Composite Bar</p>
                            <span id="demo-sparkline-compositebar">4,6,7,7,4,3,2,1,4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Mini Pie Chart</h6>
                </div>
                <div class="card-body">
                    <span id="mini-pie-chart1">30, 15, 55</span>
                    <span id="mini-pie-chart2">65, 25, 10</span>
                    <span id="mini-pie-chart3">70, 30</span>
                    <span id="mini-pie-chart4">20, 15, 65</span>
                    <span id="mini-pie-chart5">60, 10, 30</span>
                    <span id="mini-pie-chart6">15, 35, 50</span>
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
            // MINI LINE CHARTS
            var params = {
                width: "60px",
                height: "30px",
                lineWidth: "2",
                lineColor: "#1D92AF",
                fillColor: "rgba(29,146,175,0.2) ",
                spotRadius: "2",
                highlightLineColor: "#aedaff",
                highlightSpotColor: "#71aadb",
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                disableInteraction: false,
            };

            // values from HTML script
            $("#demo-sparkline-line1").sparkline("html", params);
            params.lineColor = "#ef2020";
            params.fillColor = "rgba(239,32,32,0.2)";
            $("#demo-sparkline-line2").sparkline("html", params);
            params.lineColor = "#ff9800";
            params.fillColor = "rgba(255,152,0,0.2)";
            $("#demo-sparkline-line3").sparkline("html", params);
            params.lineColor = "#7CAC25";
            params.fillColor = "rgba(124,172,37,0.2)";
            $("#demo-sparkline-line4").sparkline("html", params);
            params.lineColor = "#777";
            params.fillColor = "rgba(119,119,119,0.2)";
            $("#demo-sparkline-line5").sparkline("html", params);

            // values from Javascript
            var values1 = getRandomValues();

            params.lineColor = "#1D92AF";
            params.fillColor = false;
            $("#demo-sparkline-line6").sparkline(values1[0], params);
            params.lineColor = "#ef2020";
            params.fillColor = false;
            $("#demo-sparkline-line7").sparkline(values1[1], params);
            params.lineColor = "#ff9800";
            params.fillColor = false;
            $("#demo-sparkline-line8").sparkline(values1[2], params);
            params.lineColor = "#7CAC25";
            params.fillColor = false;
            $("#demo-sparkline-line9").sparkline(values1[3], params);
            params.lineColor = "#777";
            params.fillColor = false;
            $("#demo-sparkline-line10").sparkline(values1[4], params);

            // composite line
            $("#demo-sparkline-compositeline").sparkline("html", {
                fillColor: false,
                lineColor: "#ff9800",
                width: "200px",
                height: "30px",
                lineWidth: "2",
            });

            $("#demo-sparkline-compositeline").sparkline(
                [4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                {
                    composite: true,
                    fillColor: false,
                    lineColor: "#777",
                    lineWidth: "2",
                    chartRangeMin: 0,
                    chartRangeMax: 10,
                }
            );

            // MINI BAR CHART
            var values2 = getRandomValues();

            var paramsBar = {
                type: "bar",
                barWidth: 5,
                height: 25,
                barColor: "#0E9BE2",
            };

            $("#mini-bar-chart1").sparkline(values2[0], paramsBar);
            paramsBar.barColor = "#7CAC25";
            $("#mini-bar-chart2").sparkline(values2[1], paramsBar);
            paramsBar.barColor = "#FF4402";
            $("#mini-bar-chart3").sparkline(values2[2], paramsBar);
            paramsBar.barColor = "#ff9800";
            $("#mini-bar-chart4").sparkline(values2[3], paramsBar);
            paramsBar.barColor = "#777";
            $("#mini-bar-chart5").sparkline(values2[4], paramsBar);

            // negative values;
            $("#mini-bar-negative").sparkline("html", paramsBar);

            // stacked bar
            $("#mini-bar-stacked").sparkline("html", paramsBar);

            // composite bar
            $("#demo-sparkline-compositebar").sparkline("html", {
                type: "bar",
                barColor: "#7CAC25",
                barWidth: 5,
                height: 25,
            });

            $("#demo-sparkline-compositebar").sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6], {
                composite: true,
                fillColor: false,
                lineColor: "#777",
            });

            // MINI PIE CHARTS
            var paramsPie = {
                type: "pie",
                width: "30px",
                height: "30px",
                sliceColors: ["#0E9BE2", "#ff9800", "#7CAC25"],
            };

            $("#mini-pie-chart1").sparkline("html", paramsPie);
            $("#mini-pie-chart2").sparkline("html", paramsPie);
            $("#mini-pie-chart3").sparkline("html", paramsPie);
            $("#mini-pie-chart4").sparkline("html", paramsPie);
            $("#mini-pie-chart5").sparkline("html", paramsPie);
            $("#mini-pie-chart6").sparkline("html", paramsPie);

            function getRandomValues() {
                // data setup
                var values = new Array(20);

                for (var i = 0; i < values.length; i++) {
                values[i] = [
                    5 + randomVal(),
                    10 + randomVal(),
                    15 + randomVal(),
                    20 + randomVal(),
                    30 + randomVal(),
                    35 + randomVal(),
                    40 + randomVal(),
                    45 + randomVal(),
                    50 + randomVal(),
                ];
                }

                return values;
            }

            function randomVal() {
                return Math.floor(Math.random() * 80);
            }
        });
    </script>
@endsection
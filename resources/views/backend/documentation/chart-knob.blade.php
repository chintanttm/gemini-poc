@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">jQuery Knob</h6>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>canvas based ; no png or jpg sprites.</li>
                                    <li>touch, mouse and mousewheel, keyboard events implemented.</li>
                                    <li>downward compatible ; overloads an input element.</li>
                                </ul>
                                <a href="https://github.com/aterrien/jQuery-Knob" target="_blank">plugin's site</a>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">
&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/jqueryknob.bundle.js&quot;&gt;&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <input type="text" class="knob" value="86" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#ff598f" />
                    <p class="text-muted">BASIC EXAMPLES</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <input type="text" class="knob" data-linecap="round" value="56" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#64c8c0" />
                    <p class="text-muted">ROUNDED CORNERS</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <input type="text" class="knob" value="65" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#cb8fe7" readonly />
                    <p class="text-muted">READ-ONLY</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <input type="text" class="knob" data-skin="tron" value="100" data-width="125" data-height="125" data-thickness="0.2" data-angleArc="270" data-angleoffset="90" data-fgColor="#fc967f" />
                    <p class="text-muted">TRON STYLE</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Different Sizes</h6>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-2">
                            <input type="text" class="knob" value="86" data-width="90" data-height="90" data-thickness="0.05" data-fgColor="#ff598f" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="92" data-width="120" data-height="120" data-thickness="0.32" data-fgColor="#64c8c0" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="93" data-width="120" data-height="120" data-thickness="0.50" data-fgColor="#ffcd29" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="89" data-width="80" data-height="80" data-thickness="0.16" data-fgColor="#cb8fe7" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="91" data-width="75" data-height="75" data-thickness="0.2" data-fgColor="#fc967f" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="93" data-width="120" data-height="120" data-thickness="0.12" data-fgColor="#8bc3fe" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Different Angles & Offsets</h6>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-2">
                            <input type="text" class="knob" value="35" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125" data-fgColor="#ff598f" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="45" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-305" data-fgColor="#64c8c0" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="40" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-35" data-fgColor="#ffcd29" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="36" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="145" data-fgColor="#cb8fe7" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="43" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="-0" data-fgColor="#fc967f" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="knob" value="52" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="90" data-fgColor="#8bc3fe" />
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
        $(function () {
            $(".knob").knob({
                draw: function () {
                // "tron" case
                if (this.$.data("skin") == "tron") {
                    var a = this.angle(this.cv), // Angle
                    sa = this.startAngle, // Previous start angle
                    sat = this.startAngle, // Start angle
                    ea, // Previous end angle
                    eat = sat + a, // End angle
                    r = true;

                    this.g.lineWidth = this.lineWidth;

                    this.o.cursor && (sat = eat - 0.3) && (eat = eat + 0.3);

                    if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor && (sa = ea - 0.3) && (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(
                        this.xy,
                        this.xy,
                        this.radius - this.lineWidth,
                        sa,
                        ea,
                        false
                    );
                    this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(
                    this.xy,
                    this.xy,
                    this.radius - this.lineWidth,
                    sat,
                    eat,
                    false
                    );
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(
                    this.xy,
                    this.xy,
                    this.radius - this.lineWidth + 1 + (this.lineWidth * 2) / 3,
                    0,
                    2 * Math.PI,
                    false
                    );
                    this.g.stroke();

                    return false;
                }
                },
            });
        });
    </script>
@endsection
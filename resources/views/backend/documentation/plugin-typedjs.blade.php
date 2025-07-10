@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Typed.js</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">Typed.js is a library that types. Enter in any string, and watch it type at the speed you've set, backspace what it's typed, and begin a new sentence for however many strings you've set.. <a href="https://mattboldt.com/demos/typed-js/" rel="nofollow">typed-js</a></p>
                                <div class="fs-5">
                                    <a href="http://www.mattboldt.com/demos/typed-js/" rel="nofollow">Live Demo</a> | <a href="http://mattboldt.github.io/typed.js/" rel="nofollow">View All Demos</a> | <a href="http://mattboldt.github.io/typed.js/docs" rel="nofollow">View Full Docs</a> | <a href="http://www.mattboldt.com" rel="nofollow">mattboldt.com</a>
                                </div>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/dist/assets/bundles/typedjs.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Setup --&gt;
&lt;script&gt;
    var typed = new Typed('.element', {
        strings: [&quot;First sentence.&quot;, &quot;Second sentence.&quot;],
        typeSpeed: 30
    });
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row g-2 mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>Basic Demo</h5>
                <div class="border rounded-4 mb-2 p-3 type-wrap">
                    <div id="typed-strings">
                        <span>Typed.js^10 is a <strong>JavaScript</strong> library.</span>
                        <p>It <em>types</em> out sentences.</p>
                        <p>And then deletes them.</p>
                        <p>Try it out!</p>
                    </div>
                    <span id="typed" style="white-space:pre;"></span>
                </div>
                <button class="btn btn-sm btn-outline-secondary toggle">Toggle</button>
                <button class="btn btn-sm btn-outline-secondary start">Start</button>
                <button class="btn btn-sm btn-outline-secondary stop">Stop</button>
                <button class="btn btn-sm btn-outline-secondary reset">Reset</button>
                <button class="btn btn-sm btn-outline-secondary destroy">Destroy</button>
                <button class="btn btn-sm btn-outline-secondary loop">Toggle Loop</button>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>Fade Out</h5>
                <div class="border rounded-4 mb-2 p-3 type-wrap">
                    <span id="typed2" style="white-space:pre;"></span>
                </div>
                <button class="btn btn-sm btn-outline-secondary loop2">Toggle Loop</button>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>Smart Backspace</h5>
                <div class="border rounded-4 mb-2 p-3 type-wrap">
                    <span id="typed3"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>In an input</h5>
                <div class="type-wrap">
                    <input id="typed4" class="form-control" type="text">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>Shuffled</h5>
                <div class="border rounded-4 mb-2 p-3 type-wrap">
                    <span id="typed5" style="white-space:pre;"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>Bulk Typing</h5>
                <div class="border rounded-4 mb-2 p-3 type-wrap" style="height: 120px;">
                    <span id="typed6" style="white-space:pre;"></span>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
@endsection
@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Clipboard.Js</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">A modern approach to copy text to clipboard No Flash. No frameworks. Just 3kb gzipped <a href="https://clipboardjs.com/" target="_blank">https://clipboardjs.com/</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/clipboard.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    new ClipboardJS('.btn');
&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Basic Usage</h6>
                </div>
                <div class="card-body">
                    <p>Simply add the attribute <code>data-clipboard-target</code> an action button with the input element's <code>id</code> get it working. Then add the clipboard JS to initialize it.</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="clipboard-input" value="https://alui.thememakker.com/index.html">
                        <button class="btn btn-outline-secondary" type="button" data-clipboard-target="#clipboard-input"><i class="fa fa-copy me-2"></i>Copy</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Cut text from another element</h6>
                </div>
                <div class="card-body">
                    <p>Additionally, you can define a <code>data-clipboard-action</code> attribute to specify if you want to either <code>copy</code> or <code>cut</code> content.</p>
                    <p>If you omit this attribute, <code>copy</code> will be used by default.</p>
                    <div>
                        <textarea class="form-control mb-2" rows="3" id="clipboard-cut">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
                        <button class="btn btn-outline-secondary" type="button" data-clipboard-action="cut" data-clipboard-target="#clipboard-cut">Cut to clipboard</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Copy text from attribute</h6>
                </div>
                <div class="card-body">
                    <p>Truth is, you don't even need another element to copy its content from. You can just include a <code>data-clipboard-text</code> attribute in your trigger element.</p>
                    <button class="btn btn-outline-secondary" type="button" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">Cut to clipboard</button>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3">
        @include('backend.documentation.next-previous-url')
    </div>
    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
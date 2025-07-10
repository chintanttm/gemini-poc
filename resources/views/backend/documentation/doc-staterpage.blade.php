@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fa fa-hand-o-right me-2"></i>Stater page</h5>
                </div>
                <div class="card-body">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!doctype html&gt;
&lt;html class=&quot;no-js &quot; lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=Edge&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot;&gt;
    &lt;title&gt;:: LUNO :: Dashboard&lt;/title&gt;
    &lt;link rel=&quot;icon&quot; href=&quot;favicon.ico&quot; type=&quot;image/x-icon&quot;&gt; &lt;!-- Favicon--&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/luno.style.min.css&quot;&gt; &lt;!-- project css file  --&gt;
&lt;/head&gt;
&lt;body data-luno=&quot;theme-indigo&quot;&gt;

    &lt;!-- start: sidebar --&gt;
    &lt;div class=&quot;sidebar px-3 py-2 py-md-3&quot;&gt;&lt;/div&gt;

    &lt;!-- start: body area --&gt;
    &lt;div class=&quot;wrapper&quot;&gt;

        &lt;!-- start: page header --&gt;
        &lt;header class=&quot;page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mb-1&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                ......
            &lt;/div&gt;
        &lt;/header&gt;

        &lt;!-- start: page toolbar --&gt;
        &lt;div class=&quot;page-toolbar px-xl-4 px-sm-2 px-0 py-lg-2 py-1&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                .......
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;!-- start: page body --&gt;
        &lt;div class=&quot;page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3&quot;&gt;
            &lt;div class=&quot;container&quot;&gt;
                .......
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;!-- start: page footer --&gt;
        &lt;footer class=&quot;page-footer px-xl-4 px-sm-2 px-0 py-3&quot;&gt;
            &lt;div class=&quot;container d-flex flex-wrap justify-content-between align-items-center&quot;&gt;
                ........
            &lt;/div&gt;
        &lt;/footer&gt;

    &lt;/div&gt;

    &lt;!-- Modal: Create new --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;CreateNew&quot; tabindex=&quot;-1&quot;&gt;
        .......
    &lt;/div&gt;
    &lt;!-- Modal: my notes --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;MynotesModal&quot; tabindex=&quot;-1&quot;&gt;
        .......
    &lt;/div&gt;
    &lt;!-- Modal: Search --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;SearchModal&quot; tabindex=&quot;-1&quot;&gt;
        .......
    &lt;/div&gt;
    &lt;!-- Modal: RecentChat --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;RecentChat&quot; tabindex=&quot;-1&quot;&gt;
        .......
    &lt;/div&gt;
    &lt;!-- Modal: Setting --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;SettingsModal&quot; tabindex=&quot;-1&quot;&gt;
        .......
    &lt;/div&gt;

&lt;!-- Jquery Core Js --&gt;
&lt;script src=&quot;assets/bundles/libscripts.bundle.js&quot;&gt;&lt;/script&gt;
&lt;!-- Jquery Page Js --&gt;
&lt;script src=&quot;assets/js/template.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                </div>
            </div>
        </div>
        <!-- start: navigation btn -->
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
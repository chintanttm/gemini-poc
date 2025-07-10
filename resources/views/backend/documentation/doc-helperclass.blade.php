@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"><i class="fa fa-hand-o-right me-2"></i>Layout setting Class</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <tbody>
                                            <tr>
                                                <td>Enable Light/Dark &amp; High Contrast Mode!</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class="language-html">&lt;html class=&quot;no-js &quot; lang=&quot;en&quot; data-theme=&quot;light&quot;&gt;</code>
</pre>
Change class in HTML tage <code>.light</code>, <code>.dark</code>, <code>.theme-dark</code>, &amp; <code>.high-contrast</code>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Font Settings</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class="language-html">&lt;body class=&quot;layout-1 font-opensans&quot;&gt;</code>
</pre>
<code>.font-opensans</code>, <code>.font-quicksand</code>, <code>.font-nunito</code>, <code>.font-raleway</code>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Theme Color Settings</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class="language-html">&lt;body class=&quot;layout-1&quot; data-luno=&quot;theme-blue&quot;&gt;</code>
</pre>
<code>theme-blue</code>,
<code>theme-indigo</code>,
<code>theme-cyan</code>,
<code>theme-green</code>,
<code>theme-orange</code>,
<code>theme-blush</code>,
<code>theme-red</code>,
<code>theme-dynamic</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Enable Sidebar dark</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class=" language-html">&lt;div class=&quot;sidebar dark&quot;&gt;</code>
</pre>
Toggle class in sidebar <code>.dark</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Background Image (Sidebar)</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class=" language-html">&lt;div class=&quot;sidebar sidebar-img-bg&quot;&gt;</code>
</pre>
Toggle class in sidebar <code>.sidebar-img-bg</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mini Sidebar</td>
                                                <td>
<pre class=" language-hthtml p-1ml" data-lang="html"><code class=" language-html">&lt;div class=&quot;sidebar sidebar-mini&quot;&gt;</code>
</pre>
Toggle class in sidebar <code>.sidebar-mini</code>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Enable RTL Mode!</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class=" language-html">&lt;body class=&quot;layout-1 rtl_mode&quot;&gt;</code>
</pre>
Toggle class in Body tage <code>.rtl_mode</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Horizontal Menu</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class=" language-html">&lt;body class=&quot;h-menu&quot;&gt;</code>
</pre>
Just one click change (Vertical menu) to Horizontal Menubar. <code>.h-menu</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Page Header Dark Mode</td>
                                                <td>
<pre class=" language-html p-1" data-lang="html"><code class=" language-html">&lt;header class=&quot;page-header dark&quot;&gt;</code>
</pre>
Toggle class in Page Header. <code>.dark</code>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0"><i class="fa fa-hand-o-right me-2"></i>More helpful classes</h5>
                                <p>for more about Helper classs References <code>helpers.scss</code></p>
                                <h6>Background Color</h6>
                                <div class="row g-3 mb-5">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-primary text-center justify-content-center text-light" style="height: 100px;">
                                            .bg-primary
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-secondary text-center justify-content-center text-light" style="height: 100px;">
                                            .bg-secondary
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-primary-gradient text-center justify-content-center" style="height: 100px;">
                                            .bg-primary-gradient
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-dark text-center justify-content-center text-light" style="height: 100px;">
                                            .bg-dark
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-light text-center justify-content-center" style="height: 100px;">
                                            .bg-light
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-body text-center justify-content-center text-body" style="height: 100px;">
                                            .bg-body
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center" style="height: 100px;">
                                            .bg-card
                                        </div>
                                    </div>
                                </div>
                                <h6>Light Background Color</h6>
                                <div class="row g-3 mb-5">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-light-primary text-center justify-content-center" style="height: 100px;">
                                            .bg-light-primary
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-light-success text-center justify-content-center" style="height: 100px;">
                                            .bg-light-success
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-light-danger  text-center justify-content-center" style="height: 100px;">
                                            .bg-light-danger 
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-light-warning  text-center justify-content-center" style="height: 100px;">
                                            .bg-light-warning 
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-light-info  text-center justify-content-center" style="height: 100px;">
                                            .bg-light-info 
                                        </div>
                                    </div>
                                </div>
                                <h6>Chart Background & Font Color</h6>
                                <p class="text-muted">All chart Background & Text Color will be change based on <code>theme color</code></p>
                                <div class="row g-3 mb-5">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <h6 class="fw-bold chart-text-color1">.chart-text-color1</h6>
                                        <div class="card chart-color1 text-center justify-content-center text-light" style="height: 100px;">
                                            .chart-color1
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <h6 class="fw-bold chart-text-color2">.chart-text-color2</h6>
                                        <div class="card chart-color2 text-center justify-content-center text-light" style="height: 100px;">
                                            .chart-color2
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <h6 class="fw-bold chart-text-color3">.chart-text-color3</h6>
                                        <div class="card chart-color3 text-center justify-content-center text-light" style="height: 100px;">
                                            .chart-color3
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <h6 class="fw-bold chart-text-color4">.chart-text-color4</h6>
                                        <div class="card chart-color4 text-center justify-content-center text-light" style="height: 100px;">
                                            .chart-color4
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <h6 class="fw-bold chart-text-color5">.chart-text-color5</h6>
                                        <div class="card chart-color5 text-center justify-content-center text-light" style="height: 100px;">
                                            .chart-color5
                                        </div>
                                    </div>
                                </div>
                                <h6>Font Text Color</h6>
                                <div class="row g-3 mb-5">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card h2 text-center justify-content-center text-primary" style="height: 100px;">
                                            .text-primary
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card h2 text-center justify-content-center text-secondary" style="height: 100px;">
                                            .text-secondary
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card h2 text-center justify-content-center" style="height: 100px;">
                                            <span class="text-gradient">.text-gradient</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card bg-dark text-center justify-content-center color-fff" style="height: 100px;">
                                            .color-fff
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-100" style="height: 100px;">
                                            .color-100
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-200" style="height: 100px;">
                                            .color-200
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-300" style="height: 100px;">
                                            .color-300
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-400" style="height: 100px;">
                                            .color-400
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-500" style="height: 100px;">
                                            .color-500 (Body font color)
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-600" style="height: 100px;">
                                            .color-600
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-700" style="height: 100px;">
                                            .color-700
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-800" style="height: 100px;">
                                            .color-800
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card text-center justify-content-center color-900" style="height: 100px;">
                                            .color-900
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start: navigation btn -->
                    @include('backend.documentation.next-previous-url')
                </div>
@endsection
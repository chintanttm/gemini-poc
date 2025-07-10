@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Table Dragger</h5>
                            </div>
                            <div class="card-body">
                                <p class="fs-6">Table-dragger is a minimalist plain Javascript library for building reorderable drag-and-drop table. <a href="https://sindu12jun.github.io/table-dragger/" rel="nofollow">table-dragger</a>.</p>
                                <h5>Features</h5>
                                <ul>
                                    <li>Super easy to set up</li>
                                    <li>cellspacing, cellpadding, col and colgroup in account</li>
                                    <li>Able to sort columns or rows at the same time</li>
                                    <li>Smooth animation when sort</li>
                                    <li>No bloated dependencies</li>
                                    <li>Touch events</li>
                                </ul>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/tabledragger.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/tabledragger.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    // Default
    tableDragger(document.querySelector(&quot;#default-table&quot;));
    // Handler
    tableDragger(document.querySelector(&quot;#handle-table&quot;), { dragHandler: &quot;.handle&quot; });
    // Sort Rows
    tableDragger(document.querySelector(&quot;#row-table&quot;), { mode: &quot;row&quot; });
    // Free
    tableDragger(document.querySelector(&quot;#free-table&quot;), { mode: &quot;row&quot;, onlyBody: true, dragHandler: &quot;.handle&quot; });
    // Only Body
    tableDragger(document.querySelector(&quot;#only-bodytable&quot;), { mode: &quot;row&quot;, onlyBody: true });
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row g-3 mt-4 row-deck">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Default <br><small class="d-block">With no options, sort columns, handler was the first row</small></h6>
            </div>
            <div class="card-body">
                <table id="default-table" class="table">
                    <thead>
                        <tr>
                        <th>Movie Title <i class="fa fa-arrows-alt handle"></i></th>
                        <th>Genre <i class="fa fa-arrows-alt handle"></i></th>
                        <th>Year <i class="fa fa-arrows-alt handle"></i></th>
                        <th>Gross <i class="fa fa-arrows-alt handle"></i></th>
                        </tr>
                    </thead>
                        <tr>
                            <td>Star Wars</td>
                            <td>Adventure, Sci-fi</td>
                            <td>1977</td>
                            <td>$460,935,665</td>
                        </tr>
                        <tr>
                            <td>Howard The Duck</td>
                            <td>"Comedy"</td>
                            <td>1986</td>
                            <td>$16,295,774</td>
                        </tr>
                        <tr>
                            <td>American Graffiti</td>
                            <td>Comedy, Drama</td>
                            <td>1973</td>
                            <td>$115,000,000</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Handler <br><small class="d-block">Specify drag handler wherever within the table</small></h6>
            </div>
            <div class="card-body">
                <table id="handle-table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Movie Title <i class="table-dragger-handle handle">dragme</i></th>
                            <th>Genre</th>
                            <th>Year</th>
                            <th>Gross</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Star Wars</td>
                        <td>Adventure, Sci-fi</td>
                        <td>1977</td>
                        <td>$460,935,665</td>
                    </tr>
                    <tr>
                        <td>Howard The Duck</td>
                        <td>"Comedy"</td>
                        <td>1986</td>
                        <td>$16,295,774</td>
                    </tr>
                    <tr>
                        <td>American Graffiti</td>
                        <td>Comedy, Drama</td>
                        <td>1973</td>
                        <td>$115,000,000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Only Body <br><small class="d-block">Setting onlyBody to true in row mode, user can only lift rows in tBody</small></h6>
            </div>
            <div class="card-body">
                <table id="only-bodytable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Movie Title</th>
                            <th>Genre</th>
                            <th>Year</th>
                            <th>Gross</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Star Wars<i class="table-dragger-handle sindu_handle"></i></td>
                        <td>Adventure, Sci-fi</td>
                        <td>1977</td>
                        <td>$460,935,665</td>
                    </tr>
                    <tr>
                        <td>Howard The Duck<i class="table-dragger-handle sindu_handle"></i></td>
                        <td>"Comedy"</td>
                        <td>1986</td>
                        <td>$16,295,774</td>
                    </tr>
                    <tr>
                        <td>American Graffiti<i class="table-dragger-handle sindu_handle"></i></td>
                        <td>Comedy, Drama</td>
                        <td>1973</td>
                        <td>$115,000,000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Sort Rows <br><small class="d-block">Sort rows, handler was the first column</small></h6>
            </div>
            <div class="card-body">
                <table id="row-table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Movie Title<i class="table-dragger-handle"></i></th>
                            <th>Genre</th>
                            <th>Year</th>
                            <th>Gross</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Star Wars<i class="table-dragger-handle"></i></td>
                        <td>Adventure, Sci-fi</td>
                        <td>1977</td>
                        <td>$460,935,665</td>
                    </tr>
                    <tr>
                        <td>Howard The Duck<i class="table-dragger-handle"></i></td>
                        <td>"Comedy"</td>
                        <td>1986</td>
                        <td>$16,295,774</td>
                    </tr>
                    <tr>
                        <td>American Graffiti<i class="table-dragger-handle"></i></td>
                        <td>Comedy, Drama</td>
                        <td>1973</td>
                        <td>$115,000,000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Free <br><small class="d-block">After mousedown, move mouse horizontally or vertically, see what happens. Don't forget to specify drag handler</small></h6>
            </div>
            <div class="card-body">
                <table id="free-table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Movie Title</th>
                            <th>Genre</th>
                            <th>Year</th>
                            <th>Gross</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Star Wars<i class="table-dragger-handle handle"></i></td>
                        <td>Adventure, Sci-fi</td>
                        <td>1977</td>
                        <td>$460,935,665</td>
                    </tr>
                    <tr>
                        <td>Howard The Duck</td>
                        <td>"Comedy"</td>
                        <td>1986</td>
                        <td>$16,295,774</td>
                    </tr>
                    <tr>
                        <td>American Graffiti</td>
                        <td>Comedy, Drama</td>
                        <td>1973</td>
                        <td>$115,000,000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    // Default
    tableDragger(document.querySelector("#default-table"));
    // Handler
    tableDragger(document.querySelector("#handle-table"), { dragHandler: ".handle" });
    // Sort Rows
    tableDragger(document.querySelector("#row-table"), { mode: "row" });
    // Free
    tableDragger(document.querySelector("#free-table"), { mode: "row", onlyBody: true, dragHandler: ".handle" });
    // Only Body
    tableDragger(document.querySelector("#only-bodytable"), { mode: "row", onlyBody: true });
</script>
@endsection
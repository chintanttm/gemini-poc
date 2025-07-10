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
                                <h4>Bootstrap Multiselect Splitter</h4>
                                <div class="fs-6">
                                    <b>Bootstrap Selectsplitter's</b>&nbsp; transforms a 
                                    <code>&lt;select&gt;</code>containing one or more 
                                    <code>&lt;optgroup&gt;</code>in two chained 
                                    <code>&lt;select&gt;</code>. For full documentation please check the 
                                <a href="https://github.com/poolerMF/bootstrap-multiselectsplitter" target="_blank" class="fw-bold">plugin's repository</a>.</div>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/multiselectsplitter.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    $(function () {
        $('#bmss-example1').multiselectsplitter();
        $('#bmss-example2').multiselectsplitter({
            selectSize: 7,
            clearOnFirstChange: true,
            groupCounter: true
        });
        $('#bmss-example3').multiselectsplitter({
            groupCounter: true,
            maximumSelected: 2
        });
        $('#bmss-example4').multiselectsplitter({
            groupCounter: true,
            maximumSelected: 3,
            onlySameGroup: true
        });
    });
&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h6>EXAMPLE1:</h6>
                    <p>Simple select, no multiple</p>
                    <select id="bmss-example1">
                        <optgroup label="Category 1">
                            <option value="1">Choice 1</option>
                            <option value="2">Choice 2</option>
                            <option value="3">Choice 3</option>
                            <option value="4">Choice 4</option>
                        </optgroup>
                        <optgroup label="Category 2">
                            <option value="5">Choice 5</option>
                            <option value="6">Choice 6</option>
                            <option value="7">Choice 7</option>
                            <option value="8">Choice 8</option>
                        </optgroup>
                        <optgroup label="Category 3">
                            <option value="9">Choice 9</option>
                            <option value="10">Choice 10</option>
                            <option value="11">Choice 11</option>
                            <option value="12">Choice 12</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h6>EXAMPLE2:</h6>
                    <p>Multiple select of size 7 with group counter. Second select is cleared, when first changed.</p>
                    <select id="bmss-example2" multiple="multiple">
                        <optgroup label="Category 1">
                            <option value="1">Choice 1</option>
                            <option value="2" selected="selected">Choice 2</option>
                            <option value="3">Choice 3</option>
                            <option value="4">Choice 4</option>
                        </optgroup>
                        <optgroup label="Category 2">
                            <option value="5">Choice 5</option>
                            <option value="6">Choice 6</option>
                            <option value="7">Choice 7</option>
                            <option value="8">Choice 8</option>
                        </optgroup>
                        <optgroup label="Category 3">
                            <option value="9">Choice 9</option>
                            <option value="10">Choice 10</option>
                            <option value="11">Choice 11</option>
                            <option value="12">Choice 12</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h6>EXAMPLE3:</h6>
                    <p>Multiple select with group counter. You can select maximum 2 options of all categories.</p>
                    <select id="bmss-example3" multiple="multiple">
                        <optgroup label="Category 1">
                            <option value="1">Choice 1</option>
                            <option value="2">Choice 2</option>
                            <option value="3" selected="selected">Choice 3</option>
                            <option value="4">Choice 4</option>
                        </optgroup>
                        <optgroup label="Category 2">
                            <option value="5">Choice 5</option>
                            <option value="6" selected="selected">Choice 6</option>
                            <option value="7">Choice 7</option>
                            <option value="8">Choice 8</option>
                        </optgroup>
                        <optgroup label="Category 3">
                            <option value="9">Choice 9</option>
                            <option value="10">Choice 10</option>
                            <option value="11">Choice 11</option>
                            <option value="12">Choice 12</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h6>EXAMPLE4:</h6>
                    <p>Multiple select with group counter. You can select maximum 3 options ONLY from one cattegory.</p>
                    <select id="bmss-example4" multiple="multiple">
                        <optgroup label="Category 1">
                            <option value="1">Choice 1</option>
                            <option value="2">Choice 2</option>
                            <option value="3" selected="selected">Choice 3</option>
                            <option value="4">Choice 4</option>
                        </optgroup>
                        <optgroup label="Category 2">
                            <option value="5">Choice 5</option>
                            <option value="6">Choice 6</option>
                            <option value="7">Choice 7</option>
                            <option value="8">Choice 8</option>
                        </optgroup>
                        <optgroup label="Category 3">
                            <option value="9">Choice 9</option>
                            <option value="10">Choice 10</option>
                            <option value="11">Choice 11</option>
                            <option value="12">Choice 12</option>
                        </optgroup>
                    </select>
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
            $('#bmss-example1').multiselectsplitter();
            $('#bmss-example2').multiselectsplitter({
                selectSize: 7,
                clearOnFirstChange: true,
                groupCounter: true
            });
            $('#bmss-example3').multiselectsplitter({
                groupCounter: true,
                maximumSelected: 2
            });
            $('#bmss-example4').multiselectsplitter({
                groupCounter: true,
                maximumSelected: 3,
                onlySameGroup: true
            });
        });
    </script>
@endsection
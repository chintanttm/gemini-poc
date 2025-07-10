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
                                <h4>Select 2</h4>
                                <p class="fs-6">Select2 is a jQuery-based replacement for select boxes. It supports searching, remote data sets, and pagination of results. For more info, please visit the <a href="https://select2.org/" target="_blank">plugin's site</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/select2.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/select2.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    $('.select2').select2();
&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">Basic</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select">
                                <option></option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">With OptGroups</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select">
                                <option></option>
                                <optgroup label="Picnic">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                                </optgroup>
                                <optgroup label="Camping">
                                <option>Tent</option>
                                <option>Flashlight</option>
                                <option>Toilet Paper</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">Multiple Select</label>
                            <select class="form-control show-tick ms select2" multiple data-placeholder="Select">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">With Clear Button</label>
                            <select class="form-control show-tick ms search-select" data-placeholder="Select">
                                <option></option>
                                <option>Hot Dog, Fries and a Soda</option>
                                <option>Burger, Shake and a Smile</option>
                                <option>Sugar, Spice and all things nice</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">Max Selection Limit: 2</label>
                            <select id="max-select" class="form-control show-tick ms" multiple>
                                <option></option>
                                <optgroup label="Condiments" data-max-options="2">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </optgroup>
                                <optgroup label="Breads" data-max-options="2">
                                    <option>Plain</option>
                                    <option>Steamed</option>
                                    <option>Toasted</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">Loading Data</label>
                            <input type="hidden" id="loading-select" class="form-control"/>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">Loading Array Data</label>
                            <input type="hidden" id="array-select" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-label">Disabled Option</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select">
                                <option></option>
                                <option>Mustard</option>
                                <option disabled>Ketchup</option>
                                <option>Relish</option>
                            </select>
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
        // Select2 selectbox
        $('.select2').select2();

        $(".search-select").select2({
            allowClear: true
        });

        $("#max-select").select2({
            placeholder: "Select",
            maximumSelectionSize: 2,
        });

        $("#loading-select").select2({
            placeholder: "Select",
            minimumInputLength: 1,
            query: function (query) {
                var data = {results: []}, i, j, s;
                for (i = 1; i < 5; i++) {
                    s = "";
                    for (j = 0; j < i; j++) {s = s + query.term;}
                    data.results.push({id: query.term + i, text: s});
                }
                query.callback(data);
            }
        });
        var data=[{id:0,tag:'enhancement'},{id:1,tag:'bug'},{id:2,tag:'duplicate'},{id:3,tag:'invalid'},{id:4,tag:'wontfix'}];
        function format(item) { return item.tag; }

        $("#array-select").select2({
            placeholder: "Select",
            data:{ results: data, text: 'tag' },
            formatSelection: format,
            formatResult: format
        });
    </script>
@endsection
@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Bootstrap Color</h6>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;input type=&quot;color&quot; class=&quot;form-control form-control-color&quot;value=&quot;#563d7c&quot; title=&quot;Choose your color&quot;&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Color picker</h6>
                            </div>
                            <div class="card-body">
                                <input type="color" class="form-control form-control-color"value="#563d7c" title="Choose your color">
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->

                <!-- start: navigation btn -->
                <div class="row g-3">
                    @include('backend.documentation.next-previous-url')
                </div>
@endsection
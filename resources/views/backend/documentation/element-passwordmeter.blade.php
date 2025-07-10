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
                                <h4>Password Meter</h4>
                                <p class="fs-6">noUiSlider is a lightweight range slider with multi-touch support and a ton of features. It supports non-linear ranges, requires no external dependencies, has keyboard support, and it works great in responsive designs. Have you tried this documentation on your phone?. For more info, please visit the <a href="https://refreshless.com/nouislider/" target="_blank">plugin's site</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="password-meter p-lg-4 p-0">
                                    <div class="mb-2 ">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg">
                                    </div>
                                    <div class="progress mb-1" style="height: 10px;">
                                        <div class="progress-bar bg-primary-gradient" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="text-muted mb-3">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                                    <button type="submit" class="btn btn-primary">Password Strength</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->

                <!-- start: navigation btn -->
                <div class="row g-3">
                    @include('backend.documentation.next-previous-url')
                </div>
@endsection
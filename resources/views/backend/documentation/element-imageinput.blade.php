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
                                <h4>Image Input</h4>
                                <p>Image input is an exclusive plugin of Good that enables a simple, user-friendly and lightweight image input field.</p>
                                <p>as per your requires useing the class <code>.xxl</code>, <code>.xl</code>, <code>.lg</code> and if you need rounded-circle use with <code>.rounded-circle</code></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;div class=&quot;image-input avatar xxl rounded-4&quot; style=&quot;background-image: url({{ url('/') }}/assets/images/avatar.png)&quot;&gt;
    &lt;div class=&quot;avatar-wrapper rounded-4&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;file-input&quot;&gt;
        &lt;input type=&quot;file&quot; class=&quot;form-control&quot; name=&quot;file-input&quot; id=&quot;file-input&quot;&gt;
        &lt;label for=&quot;file-input&quot; class=&quot;fa fa-pencil shadow&quot;&gt;&lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-4 col-6">
                            <div class="image-input avatar xxl rounded-4" style="background-image: url({{ url('/') }}/assets/images/avatar.png)">
                                <div class="avatar-wrapper rounded-4" style="background-image: url({{ url('/') }}/assets/images/profile_av.png)"></div>
                                <div class="file-input">
                                    <input type="file" class="form-control" name="file-input" id="file-input1">
                                    <label for="file-input1" class="fa fa-pencil shadow"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="image-input avatar xl rounded-4" style="background-image: url({{ url('/') }}/assets/images/avatar.png)">
                                <div class="avatar-wrapper rounded-4"></div>
                                <div class="file-input">
                                    <input type="file" class="form-control" name="file-input" id="file-input2">
                                    <label for="file-input2" class="fa fa-pencil shadow"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="image-input avatar lg rounded-4" style="background-image: url({{ url('/') }}/assets/images/avatar.png)">
                                <div class="avatar-wrapper rounded-4"></div>
                                <div class="file-input">
                                    <input type="file" class="form-control" name="file-input" id="file-input3">
                                    <label for="file-input3" class="fa fa-pencil shadow"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="image-input avatar xxl rounded-circle" style="background-image: url({{ url('/') }}/assets/images/avatar.png)">
                                <div class="avatar-wrapper rounded-circle" style="background-image: url({{ url('/') }}/assets/images/profile_av.png)"></div>
                                <div class="file-input">
                                    <input type="file" class="form-control" name="file-input" id="file-input4">
                                    <label for="file-input4" class="fa fa-pencil shadow"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="image-input avatar xl rounded-circle" style="background-image: url({{ url('/') }}/assets/images/avatar.png)">
                                <div class="avatar-wrapper rounded-circle"></div>
                                <div class="file-input">
                                    <input type="file" class="form-control" name="file-input" id="file-input5">
                                    <label for="file-input5" class="fa fa-pencil shadow"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="image-input avatar lg rounded-circle" style="background-image: url({{ url('/') }}/assets/images/avatar.png)">
                                <div class="avatar-wrapper rounded-circle"></div>
                                <div class="file-input">
                                    <input type="file" class="form-control" name="file-input" id="file-input6">
                                    <label for="file-input6" class="fa fa-pencil shadow"></label>
                                </div>
                            </div>
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
@endsection
@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row clearfix">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Summernote</h6>
                            </div>
                            <div class="card-body">
                                <h6>Super simple WYSIWYG Editor.</h6>
                                <p class="fs-6">Summernote is a JavaScript library that helps you create WYSIWYG editors online. <a href="https://summernote.org" rel="nofollow">https://summernote.org</a></p>
                                <h6>Installation and dependencies</h6>
                                <p>Summernote is built on <a href="http://jquery.com/" rel="nofollow">jQuery</a>.</p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/summernote.min.css&quot;/&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/summernote.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Page Js --&gt;
&lt;script&gt;
    $(document).ready(function() {
        $('.summernote').summernote();
        $('.note-editor .note-btn').on('click',function(){
            $(this).next().toggleClass(&quot;show&quot;);
        });
    }); 
&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="summernote">
                Hello there,
                <br/>
                <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                <p>Please try <b>paste some texts</b> here</p>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3 mt-3">
        @include('backend.documentation.next-previous-url')
    </div>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
            $('.note-editor .note-btn').on('click',function(){
                $(this).next().toggleClass("show");
            });
        }); 
    </script>
@endsection
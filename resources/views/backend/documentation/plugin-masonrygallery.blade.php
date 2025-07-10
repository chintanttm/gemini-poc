@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Masonry Gallery</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">Masonry is a JavaScript grid layout library. It works by placing elements in optimal position based on available vertical space, sort of like a mason fitting stones in a wall. You’ve probably seen it in use all over the Internet. <a href="https://masonry.desandro.com/" rel="nofollow">Masonry</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/masonry.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- HTML --&gt;
&lt;div class=&quot;row m-grid g-2&quot; data-masonry='{ &quot;itemSelector&quot;: &quot;.grid-item&quot; }'&gt;
    &lt;div class=&quot;col grid-item&quot;&gt;&lt;img class=&quot;img-fluid rounded-4&quot; src=&quot;img url here&quot; alt=&quot;&quot; &gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Page Js --&gt;
&lt;script&gt;
    $('.m-grid').masonry({
        // options...
        itemSelector: '.grid-item',
    });
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row m-grid g-2 mt-4" data-masonry='{ "itemSelector": ".grid-item" }'>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/8.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/ecommerce/4.png" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/fitness/2.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/11.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/ecommerce/6.png" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/7.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/ecommerce/2.png" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/lg/avatar1.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/14.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/13.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/lg/avatar2.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/9.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/lg/avatar4.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/fitness/1.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/ecommerce/3.png" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/6.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/gallery/12.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/fitness/5.jpg" alt="" ></div>
    <div class="col grid-item"><img class="img-fluid rounded-4" src="{{ url('/') }}/assets/images/fitness/4.jpg" alt="" ></div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    $('.m-grid').masonry({
        itemSelector: '.grid-item',
    });
</script>
@endsection
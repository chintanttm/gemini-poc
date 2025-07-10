@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Swiper</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">Swiper is not compatible with all platforms, it is a modern touch slider which is focused only on modern apps/platforms to bring the best experience and simplicity. <a href="https://swiperjs.com/demos" rel="nofollow">Live Demo</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/swiper.min.css&quot; /&gt;
&lt;script src=&quot;{{ url('/') }}/assets/plugin/prismjs/prism.js&quot;&gt;&lt;/script&gt;

&lt;div class=&quot;spring-slider&quot;&gt;
    &lt;div class=&quot;swiper mySwiper mb-3&quot;&gt;
        &lt;div class=&quot;swiper-wrapper&quot;&gt;
            &lt;div class=&quot;swiper-slide&quot;&gt;&lt;img class=&quot;img-fluid rounded&quot; src=&quot;{{ url('/') }}/assets/images/gallery/1.jpg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;swiper-slide&quot;&gt;&lt;img class=&quot;img-fluid rounded&quot; src=&quot;{{ url('/') }}/assets/images/gallery/2.jpg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;swiper-slide&quot;&gt;&lt;img class=&quot;img-fluid rounded&quot; src=&quot;{{ url('/') }}/assets/images/gallery/3.jpg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row g-2 mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body spring-slider">
                <div class="swiper mySwiper mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/4.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/5.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/6.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/7.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/8.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="img-fluid rounded" src="{{ url('/') }}/assets/images/gallery/9.jpg" alt=""></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
    });
</script>
@endsection
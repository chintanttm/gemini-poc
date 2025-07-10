@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">FancyBox Gallery</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">fancyBox is a tool that offers a nice and elegant way to add zooming functionality for images, html content and multi-media on your webpages. <a href="http://www.fancyapps.com/fancybox/" rel="nofollow">fancybox</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/dist/assets/bundles/fancybox.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Plugin Js --&gt;
&lt;script&gt;
    $(document).ready(function() {
        $(&quot;.fancybox&quot;).fancybox({
            openEffect: &quot;none&quot;,
            closeEffect: &quot;none&quot;
        });
    });
&lt;/script&gt;
</code></pre>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <div class="row g-1 mt-4">
        <div class="col-12">
            <button class="btn btn-outline-secondary filter-button active" data-filter="all">All</button>
            <button class="btn btn-outline-secondary filter-button" data-filter="category1">Designing</button>
            <button class="btn btn-outline-secondary filter-button" data-filter="category2">Development</button>
            <button class="btn btn-outline-secondary filter-button" data-filter="category3">Graphics</button>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category1">
            <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/1.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/1.jpg" />
                <div class='img-info'>
                    <h4>Image Title 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category2">
            <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/2.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/2.jpg" />
                <div class='img-info'>
                    <h4>Image Title 2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category3">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/3.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/3.jpg" />
                <div class='img-info'>
                    <h4>Image Title 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category1">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/4.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/4.jpg" />
                <div class='img-info'>
                    <h4>Image Title 4</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category2">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/5.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/5.jpg" />
                <div class='img-info'>
                    <h4>Image Title 5</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category3">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/6.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/6.jpg" />
                <div class='img-info'>
                    <h4>Image Title 6</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category3">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/7.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/7.jpg" />
                <div class='img-info'>
                    <h4>Image Title 7</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category1">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/8.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/8.jpg" />
                <div class='img-info'>
                    <h4>Image Title 8</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category1">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/8.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/8.jpg" />
                <div class='img-info'>
                    <h4>Image Title 8</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category2">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/9.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/9.jpg" />
                <div class='img-info'>
                    <h4>Image Title 9</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category2">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/10.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/10.jpg" />
                <div class='img-info'>
                    <h4>Image Title 10</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category2">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/11.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/11.jpg" />
                <div class='img-info'>
                    <h4>Image Title 11</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category3">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/12.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/12.jpg" />
                <div class='img-info'>
                    <h4>Image Title 12</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 gallery_product filter category1">
                <a class="fancybox" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/13.jpg">
                <img class="img-fluid" alt="" src="{{ url('/') }}/assets/images/gallery/13.jpg" />
                <div class='img-info'>
                    <h4>Image Title 13</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3 mt-3">
        @include('backend.documentation.next-previous-url')
    </div>
    <script>
        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');            
                if(value == "all"){
                    $('.filter').show('1000');
                }
                else{
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                }
                if ($(".filter-button").removeClass("active")) {
                        $(this).removeClass("active");
                    }
                $(this).addClass("active");
            });
        });
        /*	end gallery */
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
    </script>
@endsection
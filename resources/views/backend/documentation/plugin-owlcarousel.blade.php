@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Owl Carousel</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider. <a href="https://owlcarousel2.github.io/OwlCarousel2/" rel="nofollow">OwlCarousel</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/owlcarousel.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Page Js --&gt;
&lt;script&gt;
    $('#OwlBasic').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive:{
            0:{items:1},
            600:{items:2},
            1000:{items:5}
        }
    })
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <h5>Basic Example</h5>
        <p class="small">Basic usage of Owl Carousel. I used <code>loop:true</code> and <code>margin:10</code>. The structure works with any kind of DOM element. In all of my examples i used <code>&lt;div class="item"&gt;...&lt;/div&gt;</code> but you could put any other element <code>div/span/a/img...</code></p>
        <div class="owl-carousel owl-theme mb-3" id="OwlBasic">
            <div class="item card">
                <div class="card-body">
                    <span class="text-truncate">Users</span>
                    <div class="fs-3">$15.48</div>
                    <span class="text-muted">No data</span>
                </div>
            </div>
            <div class="item card">
                <div class="card-body">
                    <span>New Users</span>
                    <div class="fs-3">250</div>
                    <span class="text-danger"><i class="fa fa-angle-down"></i> 11.63%</span>
                </div>
            </div>
            <div class="item card">
                <div class="card-body">
                    <span>Session Duration</span>
                    <div class="fs-3">$18</div>
                    <span class="text-success"><i class="fa fa-angle-up"></i> 1.03%</span>
                </div>
            </div>
            <div class="item card">
                <div class="card-body">
                    <span>Transactions</span>
                    <div class="fs-3">218</div>
                    <span class="text-success"><i class="fa fa-angle-up"></i> 2.23%</span>
                </div>
            </div>
            <div class="item card">
                <div class="card-body">
                    <span>Conversion Rate</span>
                    <div class="fs-3">0</div>
                    <span class="text-danger"><i class="fa fa-angle-down"></i> 6.44%</span>
                </div>
            </div>
            <div class="item card">
                <div class="card-body">
                    <span>Revenue <a href="#" class="fa fa-info-circle"></a></span>
                    <div class="fs-3">$24,750</div>
                    <span class="text-muted">No data</span>
                </div>
            </div>
            <div class="item card">
                <div class="card-body">
                    <span>Revenue <a href="#" class="fa fa-info-circle"></a></span>
                    <div class="fs-3">$24,750</div>
                    <span class="text-muted">No data</span>
                </div>
            </div>
            <div class="item card">
                <div class="card-body">
                    <span>Revenue <a href="#" class="fa fa-info-circle"></a></span>
                    <div class="fs-3">$24,750</div>
                    <span class="text-muted">No data</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <h5>Autoplay Example</h5>
        <div class="owl-carousel owl-theme" id="OwlBasicAutoplay">
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/4.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/5.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/6.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/7.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/8.jpg" alt=""></div>
            <div class="item"><img class="img-fluid img-thumbnail" src="{{ url('/') }}/assets/images/gallery/9.jpg" alt=""></div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <h5>Auto Width Example</h5>
        <div class="owl-carousel owl-theme" id="OwlAutoWidth">
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:250px"><h4>1</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:100px"><h4>2</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:500px"><h4>3</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:100px"><h4>4</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:50px"><h4>6</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:250px"><h4>7</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:120px"><h4>8</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:420px"><h4>9</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:120px"><h4>10</h4></div>
            <div class="item p-3 text-light rounded" style="height: 100px; background-color: var(--primary-color); width:300px"><h4>11</h4></div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    // Basic Example
    $('#OwlBasic').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive:{
            0:{items:1},
            600:{items:2},
            1000:{items:5}
        }
    })

    // Autoplay Example
    var owl = $('#OwlBasicAutoplay');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive:{
            0:{items:1},
            600:{items:2},
            1000:{items:5}
        }
    });

    // Auto Width Example
    $('#OwlAutoWidth').owlCarousel({
        margin:10,
        loop:true,
        autoWidth:true,
        items:4
    })

</script>
@endsection
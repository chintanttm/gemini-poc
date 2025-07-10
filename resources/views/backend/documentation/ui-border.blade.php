@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <style>
                            .bd-example [class^="border"] {
                                display: inline-block;
                                width: 5rem;
                                height: 5rem;
                                margin: .25rem;
                                background-color: var(--card-color);
                            }
                        </style>
                        <h2>Border</h2>
                        <p>Use border utilities to add or remove an element’s borders. Choose from all borders or one at a time.</p>
                        <h5>Additive</h5>
                        <div class="bd-example mb-5">
                            <span class="border-5 border"></span>
                            <span class="border-5 border-top"></span>
                            <span class="border-5 border-end"></span>
                            <span class="border-5 border-bottom"></span>
                            <span class="border-5 border-start"></span>
<pre>
<code class="language-html" data-lang="html">&lt;span class=&quot;border&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-top&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-end&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-bottom&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-start&quot;&gt;&lt;/span&gt;</code></pre>
                        </div> <!-- example end  -->

                        <h5>Subtractive</h5>
                        <div class="bd-example mb-5">
                            <span style="border: 1px solid #dee2e6;" class="border-5 border-0"></span>
                            <span style="border: 1px solid #dee2e6;" class="border-5 border-top-0"></span>
                            <span style="border: 1px solid #dee2e6;" class="border-5 border-end-0"></span>
                            <span style="border: 1px solid #dee2e6;" class="border-5 border-bottom-0"></span>
                            <span style="border: 1px solid #dee2e6;" class="border-5 border-start-0"></span>
<pre>
<code class="language-html" data-lang="html">&lt;span class=&quot;border-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-top-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-end-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-bottom-0&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border-start-0&quot;&gt;&lt;/span&gt;</code></pre>
                        </div> <!-- example end  -->

                        <h5>Border color</h5>
                        <p>Change the border color using utilities built on our theme colors.</p>
                        <div class="bd-example mb-5">
                            <span class="border border-primary"></span>
                            <span class="border border-secondary"></span>
                            <span class="border border-success"></span>
                            <span class="border border-danger"></span>
                            <span class="border border-warning"></span>
                            <span class="border border-info"></span>
                            <span class="border border-light"></span>
                            <span class="border border-dark"></span>
                            <span class="border border-white"></span>
<pre>
<code class="language-html" data-lang="html">&lt;span class=&quot;border border-primary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-secondary&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-success&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-danger&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-warning&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-info&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-light&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-dark&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-white&quot;&gt;&lt;/span&gt;</code>
</pre>
                        </div> <!-- example end  -->

                        <h5>Border-width</h5>
                        <div class="bd-example mb-5">
                            <span class="border border-primary border-1"></span>
                            <span class="border border-primary border-2"></span>
                            <span class="border border-primary border-3"></span>
                            <span class="border border-primary border-4"></span>
                            <span class="border border-primary border-5"></span>
<pre>
<code class="language-html" data-lang="html">&lt;span class=&quot;border border-primary border-1&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-primary border-2&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-primary border-3&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-primary border-4&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;border border-primary border-5&quot;&gt;&lt;/span&gt;</code></pre>
                        </div> <!-- example end  -->

                        <h5>Border-radius</h5>
                        <div class="bd-example mb-5">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-top" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-end" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-bottom" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-start" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-circle" alt="...">
                            <svg class="bd-placeholder-img rounded-pill" width="150" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Rounded pill image: 150x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Rounded pill image</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">150x75</text></svg>
<pre>
<code class="language-html" data-lang="html">&lt;img src=&quot;...&quot; class=&quot;rounded&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-top&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-end&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-bottom&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-start&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-circle&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-pill&quot; alt=&quot;...&quot;&gt;</code></pre>
                        </div> <!-- example end  -->

                        <h5>Border-radius Sizes</h5>
                        <p>Use the scaling classes for larger or smaller rounded corners. Sizes range from 0 to 3, and can be configured by modifying the utilities API.</p>
                        <div class="bd-example mb-5">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-0" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-1" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-2" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-3" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-4" alt="...">
                            <img src="{{ url('/') }}/assets/images/profile_av.png" height="75" class="rounded-5" alt="...">
<pre>
<code class="language-html" data-lang="html">&lt;img src=&quot;...&quot; class=&quot;rounded-0&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-1&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-2&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-3&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-4&quot; alt=&quot;...&quot;&gt;
&lt;img src=&quot;...&quot; class=&quot;rounded-5&quot; alt=&quot;...&quot;&gt;</code></pre>
                        </div> <!-- example end  -->
                    </div>
                </div> <!-- .row end -->

                <!-- start: navigation btn -->
                <div class="row g-3 mt-3">
                    @include('backend.documentation.next-previous-url')
                </div> <!-- .row end -->
@endsection
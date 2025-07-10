@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <h2>Example</h2>
                        <div class="bd-example mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                            
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                            
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
<pre>
<code class="language-html" data-lang="html">&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Home&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code>
</pre>
        </div> <!-- example end  -->
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div> <!-- .row end -->
@endsection
@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-transparent border-0 py-3">
                                <h6 class="card-title">Avatar Default</h6>
                            </div>
                            <div class="card-body">
                                <img class="avatar rounded me-3 xs" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar xs">
                                <img class="avatar rounded me-3 sm" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar sm">
                                <img class="avatar rounded me-3" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar">
                                <img class="avatar rounded me-3 lg" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar lg">
                                <img class="avatar rounded me-3 xl" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar xl">

                                <div class="d-flex align-items-center mt-3">
                                    <span class="me-3 avatar rounded xs no-thumbnail small">AL</span>
                                    <span class="me-3 avatar rounded sm no-thumbnail">AL</span>
                                    <span class="me-3 avatar rounded no-thumbnail">AL</span>
                                    <span class="me-3 avatar rounded lg no-thumbnail fs-3">AL</span>
                                    <span class="me-3 avatar rounded xl no-thumbnail fs-1">AL</span>
                                </div>

                                <h6 class="mt-4 border-bottom pb-2">HTML code</h6>
<pre><code class="language-html" data-lang="html">&lt;img class=&quot;avatar rounded xs&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar xs&quot;&gt;
&lt;img class=&quot;avatar rounded sm&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar sm&quot;&gt;
&lt;img class=&quot;avatar rounded&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar&quot;&gt;
&lt;img class=&quot;avatar rounded lg&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar lg&quot;&gt;
&lt;img class=&quot;avatar rounded xl&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar xl&quot;&gt;

&lt;span class=&quot;avatar rounded xs no-thumbnail small&quot;&gt;AL&lt;/span&gt;
&lt;span class=&quot;avatar rounded sm no-thumbnail&quot;&gt;AL&lt;/span&gt;
&lt;span class=&quot;avatar rounded no-thumbnail&quot;&gt;AL&lt;/span&gt;
&lt;span class=&quot;avatar rounded lg no-thumbnail fs-3&quot;&gt;AL&lt;/span&gt;
&lt;span class=&quot;avatar rounded xl no-thumbnail fs-1&quot;&gt;AL&lt;/span&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-transparent border-0 py-3">
                                <h6 class="card-title">Avatar Rounded Circle</h6>
                            </div>
                            <div class="card-body">
                                <img class="avatar rounded-circle me-4 xs" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar xs">
                                <img class="avatar rounded-circle me-4 sm" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar sm">
                                <img class="avatar rounded-circle me-4" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar">
                                <img class="avatar rounded-circle me-4 lg" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar lg">
                                <img class="avatar rounded-circle me-4 xl" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar xl">
                                <div class="d-flex align-items-center mt-3">
                                    <span class="me-4 avatar rounded-circle xs no-thumbnail small">AL</span>
                                    <span class="me-4 avatar rounded-circle sm no-thumbnail">AL</span>
                                    <span class="me-4 avatar rounded-circle no-thumbnail">AL</span>
                                    <span class="me-4 avatar rounded-circle lg no-thumbnail fs-3">AL</span>
                                    <span class="me-4 avatar rounded-circle xl no-thumbnail fs-1">AL</span>
                                </div>
                                <h6 class="mt-4 border-bottom pb-2">HTML code</h6>
<pre><code class="language-html" data-lang="html">&lt;img class=&quot;avatar rounded-circle xs&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar xs&quot;&gt;
&lt;img class=&quot;avatar rounded-circle sm&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar sm&quot;&gt;
&lt;img class=&quot;avatar rounded-circle&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar&quot;&gt;
&lt;img class=&quot;avatar rounded-circle lg&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar lg&quot;&gt;
&lt;img class=&quot;avatar rounded-circle xl&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar xl&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-transparent border-0 py-3">
                                <h6 class="card-title">Avatar with shadow</h6>
                            </div>
                            <div class="card-body">
                                <img class="avatar rounded img-thumbnail me-4 sm" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar sm">
                                <img class="avatar rounded shadow-sm img-thumbnail me-4" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar">
                                <img class="avatar rounded shadow img-thumbnail me-4 lg" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar lg">
                                <img class="avatar rounded shadow-lg img-thumbnail me-4 xl" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar xl">
                                <h6 class="mt-4 border-bottom pb-2">HTML code</h6>
<pre><code class="language-html" data-lang="html">&lt;img class=&quot;avatar rounded shadow img-thumbnail sm&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar sm&quot;&gt;
&lt;img class=&quot;avatar rounded shadow img-thumbnail&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar&quot;&gt;
&lt;img class=&quot;avatar rounded shadow img-thumbnail lg&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar lg&quot;&gt;
&lt;img class=&quot;avatar rounded shadow img-thumbnail xl&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Avatar xl&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-transparent border-0 py-3">
                                <h6 class="card-title">Avatar with shadow</h6>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <label class="me-3">Avatar:</label>
                                    <a href="#"><img class="avatar xs rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar xs rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar xs rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar xs rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <label class="me-3">Avatar:</label>
                                    <a href="#"><img class="avatar sm rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar sm rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar sm rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar sm rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <label class="me-3">Avatar:</label>
                                    <a href="#"><img class="avatar rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="me-3">Avatar:</label>
                                    <a href="#"><img class="avatar lg rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar lg rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar lg rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                    <a href="#"><img class="avatar lg rounded-circle lift me-1" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="avatar" data-bs-toggle="tooltip" title="Avatar"></a>
                                </div>
                                <h6 class="mt-4 border-bottom pb-2">HTML code</h6>
<pre><code class="language-html" data-lang="html">&lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
    &lt;label class=&quot;me-3&quot;&gt;Avatar:&lt;/label&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar xs rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar xs rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar2.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar xs rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar3.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar xs rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar4.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
    &lt;label class=&quot;me-3&quot;&gt;Avatar:&lt;/label&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar sm rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar sm rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar2.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar sm rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar3.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar sm rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar4.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
    &lt;label class=&quot;me-3&quot;&gt;Avatar:&lt;/label&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar2.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar3.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar4.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex align-items-center&quot;&gt;
    &lt;label class=&quot;me-3&quot;&gt;Avatar:&lt;/label&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar lg rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar1.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar lg rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar2.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar lg rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar3.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;&lt;img class=&quot;avatar lg rounded-circle lift me-1&quot; src=&quot;{{ url('/') }}/assets/images/xs/avatar4.jpg&quot; alt=&quot;avatar&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Avatar&quot;&gt;&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->

                <!-- start: navigation btn -->
                <div class="row g-3 mt-3">
                    @include('backend.documentation.next-previous-url')
                </div> <!-- .row end -->
@endsection
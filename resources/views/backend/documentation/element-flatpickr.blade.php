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
                                <h3>Flatpickr</h3>
                                <p>flatpickr is a lightweight and powerful datetime picker. For more info, please visit the <a href="https://flatpickr.js.org/" target="_blank">plugin's site</a></p>
                                <ul class="list-unstyled lh-lg">
                                    <li><i class="fa fa-check me-3"></i>Dependency-free (no bloated bundles)</li>
                                    <li><i class="fa fa-check me-3"></i>Simple, polished UX</li>
                                    <li><i class="fa fa-check me-3"></i>Date + time input</li>
                                    <li><i class="fa fa-check me-3"></i>Range selections</li>
                                    <li><i class="fa fa-check me-3"></i>Ability to select multiple dates</li>
                                    <li><i class="fa fa-check me-3"></i>Can be used as just a time picker</li>
                                    <li><i class="fa fa-check me-3"></i>Display dates in a human-friendly format</li>
                                    <li><i class="fa fa-check me-3"></i>Easily disable specific dates, date ranges, or any date using arbitrary logic</li>
                                    <li><i class="fa fa-check me-3"></i>Week numbers</li>
                                    <li><i class="fa fa-check me-3"></i>51 locales</li>
                                    <li><i class="fa fa-check me-3"></i>8 colorful themes (incl. dark and material)</li>
                                    <li><i class="fa fa-check me-3"></i>Numerous plugins</li>
                                    <li><i class="fa fa-check me-3"></i>Libraries available for React, Angular, Vue, Ember, and more</li>
                                </ul>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/flatpickr.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/flatpickr.bundle.js&quot;&gt;&lt;/script&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card p-3">
                            <div class="card-body">
                                <h6 class="card-title">Basic</h6>
                                <div class="mt-2">
                                    <label class="form-label">flatpickr without any config.</label>
                                    <input type="text" class="form-control form-control-lg flatpickr f-basic" placeholder="Select date">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">DateTime</h6>
<pre class="language-html m-0" data-lang="html">
<code class="language-html" data-lang="html">{
    enableTime: true,
    dateFormat: "Y-m-d H:i",
}</code>
</pre>
                                <div class="mt-2">
                                    <label class="form-label">flatpickr without any config.</label>
                                    <input type="text" class="form-control form-control-lg flatpickr f-datetime" placeholder="Select date time">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">minDate and maxDate</h6>
                                <p class="text-muted mb-1">minDate option specifies the minimum/earliest date (inclusively) allowed for selection.</p>
                                <p class="text-muted">maxDate option specifies the maximum/latest date (inclusively) allowed for selection.</p>
<pre class="language-html m-0" data-lang="html">
<code class="language-html" data-lang="html">{
    minDate: "2020-01"
}</code>
</pre>
                                <div class="mt-2">
                                    <label class="form-label">minDate and maxDate</label>
                                    <input type="text" class="form-control form-control-lg flatpickr f-min-max" placeholder="Select date">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Selecting multiple dates</h6>
                                <p class="text-muted">It is possible to select multiple dates.</p>
<pre class="language-html m-0" data-lang="html">
<code class="language-html" data-lang="html"> {
    mode: "multiple",
    dateFormat: "Y-m-d"
}</code>
</pre>
                                <div class="mt-2">
                                    <label class="form-label">Selecting multiple dates</label>
                                    <input type="text" class="form-control form-control-lg flatpickr f-multiple" placeholder="Select date">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Preloading range dates</h6>
<pre class="language-html m-0" data-lang="html">
<code class="language-html" data-lang="html">{
    mode: "range",
    dateFormat: "Y-m-d",
    defaultDate: ["2016-10-10", "2016-10-20"]
}</code>
</pre>
                                <div class="mt-2">
                                    <input type="text" class="form-control form-control-lg flatpickr f-range" placeholder="Select date">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Time Picker</h6>
<pre class="language-html m-0" data-lang="html">
<code class="language-html" data-lang="html">{
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
}</code>
</pre>
                <div class="mt-2">
                    <input type="text" class="form-control form-control-lg flatpickr f-time" placeholder="Select date">
                </div>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>

    // basic picker
    flatpickr(".f-basic", {});

    // date time picker
    flatpickr(".f-datetime", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });

    // minDate and maxDate
    flatpickr(".f-min-max", {
        minDate: "today",
        maxDate: new Date().fp_incr(14) // 14 days from now
    });

    // Selecting multiple dates
    flatpickr(".f-multiple", {
        mode: "multiple",
        dateFormat: "Y-m-d"
    });

    // Preloading range dates
    flatpickr(".f-range", {
        mode: "range",
        dateFormat: "Y-m-d",
        defaultDate: ["2016-10-10", "2016-10-20"]
    });

    // Time Picker
    flatpickr(".f-time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

</script>
@endsection
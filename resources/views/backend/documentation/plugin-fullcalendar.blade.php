@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Fullcalendar</h5>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">FullCalendar is a full-sized drag &amp; drop event calendar. This packages is an easily consumable combination of standard plugins. It makes the root namespace available as the <code>FullCalendar</code> browser global. <a href="https://fullcalendar.io/docs/getting-started" rel="nofollow">View the docs »</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/dist/assets/css/fullcalendar.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/dist/assets/bundles/fullcalendar.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('my_calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        events: 'https://fullcalendar.io/demo-events.json',
        editable: true,
        selectable: true
    });

    calendar.render();
    });
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row g-2 mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body" id='my_calendar'></div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('my_calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        events: 'https://fullcalendar.io/demo-events.json',
        editable: true,
        selectable: true
    });

    calendar.render();
    });
</script>
@endsection
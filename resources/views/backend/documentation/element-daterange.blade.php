@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Date Range Picker</h6>
                            </div>
                            <div class="card-body">
                                <p>Originally created for reports at <a href="https://www.improvely.com">Improvely</a>, the Date Range Picker can be attached to any webpage element to pop up two calendars for selecting dates, times, or predefined ranges like "Last 30 Days".</p>
                                <h6>For full documentation please check the <a href="https://www.daterangepicker.com/" target="_blank" class="fw-bold">plugin's site</a></h6>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/daterangepicker.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/daterangepicker.bundle.js&quot;&gt;&lt;/script&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Basic</h6>
                            </div>
                            <div class="card-body">
                                <input type="text" name="dates" class="form-control form-control-lg mb-3">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;script&gt;
$(function() {
    $('input[name=&quot;dates&quot;]').daterangepicker({ startDate: moment(), endDate: moment().add(2, 'day')});
})
&lt;/script&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Date Range Picker With Times</h6>
                            </div>
                            <div class="card-body">
                                <input type="text" name="datetimes" class="form-control form-control-lg mb-3">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;script&gt;
$(function() {
$('input[name=&quot;datetimes&quot;]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
        format: 'M/DD hh:mm A'
        }
    });
});
&lt;/script&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Single Date Picker</h6>
                            </div>
                            <div class="card-body">
                                <input type="text" name="birthday" value="10/24/1985" class="form-control form-control-lg mb-3">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;script&gt;
    $(function() {
    $('input[name=&quot;birthday&quot;]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
        }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            alert(&quot;You are &quot; + years + &quot; years old!&quot;);
        });
    });
&lt;/script&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Predefined Date Ranges</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 border rounded" id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;script&gt;
$(function() {
    var start = moment().subtract(29, 'days');
    var end = moment();
    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
    cb(start, end);
});
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    // basic
    $(function() {
        $('input[name="dates"]').daterangepicker({ startDate: moment(), endDate: moment().add(2, 'day')});
    })

    // Date Range Picker With Times
    $(function() {
    $('input[name="datetimes"]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'M/DD hh:mm A'
            }
        });
    });

    //Single Date Picker
    $(function() {
    $('input[name="birthday"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
        }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            alert("You are " + years + " years old!");
        });
    });

    // Predefined Date Ranges
    $(function() {
        var start = moment().subtract(29, 'days');
        var end = moment();
        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
    });

</script>
@endsection
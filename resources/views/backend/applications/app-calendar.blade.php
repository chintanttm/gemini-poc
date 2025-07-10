@extends('backend.layouts.app')

@section('title', __('App Calendar'))

@section('content')
<div class="row g-3 row-deck">
    <div class="col-12">
        <div class="card">
            <div class="card-body" id='my_calendar'></div>
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
        </div>
    </div>
</div>
@endsection

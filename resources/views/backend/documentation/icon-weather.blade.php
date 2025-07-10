
@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <style>
        .icons-list .col { align-items: center; background: var(--card-color); border: 1px dashed var(--border-color); padding: 20px; border-radius: .75rem; }
        .icons-list .col i { width: 30px; display: inline-block; }
    </style>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Weather icons</h6>
                </div>
                <div class="card-body">
                    <p class="mb-0 fs-5"><a class="text-primary" href="http://erikflowers.github.io/weather-icons/">Weather</a> Icons is the only icon font and CSS with 222 weather themed icons, ready to be dropped right into  <a href="http://getbootstrap.com">Bootstrap,</a> or any project that needs high quality weather, maritime, and meteorological based icons!</p>
                </div>
                <div class="card-body pt-0">
    <pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;i class=&quot;wi wi-day-cloudy-gusts&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;wi wi-day-cloudy-gusts&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;wi wi-day-cloudy-windy&quot;&gt;&lt;/i&gt;
    </code></pre>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <div class="row mt-4">
        <div class="col-12">
            <h6 class="fw-bold">Day / Sunny Icons</h6>
        </div>
    </div> <!-- .row end -->
    <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 icons-list m-0">
        <div class="col"><i class="wi wi-day-cloudy-gusts"></i> wi-day-cloudy-gusts </div>
        <div class="col"><i class="wi wi-day-cloudy-gusts"></i> wi-day-cloudy-gusts </div>
        <div class="col"><i class="wi wi-day-cloudy-windy"></i> wi-day-cloudy-windy </div>
        <div class="col"><i class="wi wi-day-cloudy"></i> wi-day-cloudy </div>
        <div class="col"><i class="wi wi-day-fog"></i> wi-day-fog </div>
        <div class="col"><i class="wi wi-day-hail"></i> wi-day-hail </div>
        <div class="col"><i class="wi wi-day-lightning"></i> wi-day-lightning </div>
        <div class="col"><i class="wi wi-day-rain-mix"></i> wi-day-rain-mix </div>
        <div class="col"><i class="wi wi-day-rain-wind"></i> wi-day-rain-wind </div>
        <div class="col"><i class="wi wi-day-rain"></i> wi-day-rain </div>
        <div class="col"><i class="wi wi-day-showers"></i> wi-day-showers </div>
        <div class="col"><i class="wi wi-day-snow"></i> wi-day-snow </div>
        <div class="col"><i class="wi wi-day-sprinkle"></i> wi-day-sprinkle </div>
        <div class="col"><i class="wi wi-day-sunny-overcast"></i> wi-day-sunny-overcast </div>
        <div class="col"><i class="wi wi-day-sunny"></i> wi-day-sunny </div>
        <div class="col"><i class="wi wi-day-storm-showers"></i> wi-day-storm-showers </div>
        <div class="col"><i class="wi wi-day-thunderstorm"></i> wi-day-thunderstorm </div>
    </div> <!-- .row end -->

    <div class="row mt-4">
        <div class="col-12">
            <h6 class="fw-bold">Neutral / Cloudy Icons</h6>
        </div>
    </div> <!-- .row end -->
    <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 icons-list m-0">
        <div class="col"><i class="wi wi-cloudy-gusts"></i> wi-cloudy-gusts </div>
        <div class="col"><i class="wi wi-cloudy-windy"></i> wi-cloudy-windy </div>
        <div class="col"><i class="wi wi-cloudy"></i> wi-cloudy </div>
        <div class="col"><i class="wi wi-fog"></i> wi-fog </div>
        <div class="col"><i class="wi wi-hail"></i> wi-hail </div>
        <div class="col"><i class="wi wi-lightning"></i> wi-lightning </div>
        <div class="col"><i class="wi wi-rain-mix"></i> wi-rain-mix </div>
        <div class="col"><i class="wi wi-rain-wind"></i> wi-rain-wind </div>
        <div class="col"><i class="wi wi-rain"></i> wi-rain </div>
        <div class="col"><i class="wi wi-showers"></i> wi-showers </div>
        <div class="col"><i class="wi wi-snow"></i> wi-snow </div>
        <div class="col"><i class="wi wi-sprinkle"></i> wi-sprinkle </div>
        <div class="col"><i class="wi wi-storm-showers"></i> wi-storm-showers </div>
        <div class="col"><i class="wi wi-thunderstorm"></i> wi-thunderstorm </div>
    </div> <!-- .row end -->

    <div class="row mt-4">
        <div class="col-12">
            <h6 class="fw-bold">Night / Moons Icons</h6>
        </div>
    </div> <!-- .row end -->
    <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 icons-list m-0">
        <div class="col"><i class="wi wi-night-alt-cloudy-gusts"></i> wi-night-alt-cloudy-gusts </div>
        <div class="col"><i class="wi wi-night-alt-cloudy-windy"></i> wi-night-alt-cloudy-windy </div>
        <div class="col"><i class="wi wi-night-alt-hail"></i> wi-night-alt-hail </div>
        <div class="col"><i class="wi wi-night-alt-lightning"></i> wi-night-alt-lightning </div>
        <div class="col"><i class="wi wi-night-alt-rain-mix"></i> wi-night-alt-rain-mix </div>
        <div class="col"><i class="wi wi-night-alt-rain-wind"></i> wi-night-alt-rain-wind </div>
        <div class="col"><i class="wi wi-night-alt-rain"></i> wi-night-alt-rain </div>
        <div class="col"><i class="wi wi-night-alt-showers"></i> wi-night-alt-showers </div>
        <div class="col"><i class="wi wi-night-alt-snow"></i> wi-night-alt-snow </div>
        <div class="col"><i class="wi wi-night-alt-sprinkle"></i> wi-night-alt-sprinkle </div>
        <div class="col"><i class="wi wi-night-alt-storm-showers"></i> wi-night-alt-storm-showers </div>
        <div class="col"><i class="wi wi-night-alt-thunderstorm"></i> wi-night-alt-thunderstorm </div>
        <div class="col"><i class="wi wi-night-clear"></i> wi-night-clear </div>
        <div class="col"><i class="wi wi-night-cloudy-gusts"></i> wi-night-cloudy-gusts </div>
        <div class="col"><i class="wi wi-night-cloudy-windy"></i> wi-night-cloudy-windy </div>
        <div class="col"><i class="wi wi-night-cloudy"></i> wi-night-cloudy </div>
        <div class="col"><i class="wi wi-night-hail"></i> wi-night-hail </div>
        <div class="col"><i class="wi wi-night-lightning"></i> wi-night-lightning </div>
        <div class="col"><i class="wi wi-night-rain-mix"></i> wi-night-rain-mix </div>
        <div class="col"><i class="wi wi-night-rain-wind"></i> wi-night-rain-wind </div>
        <div class="col"><i class="wi wi-night-rain"></i> wi-night-rain </div>
        <div class="col"><i class="wi wi-night-showers"></i> wi-night-showers </div>
        <div class="col"><i class="wi wi-night-snow"></i> wi-night-snow </div>
        <div class="col"><i class="wi wi-night-sprinkle"></i> wi-night-sprinkle </div>
        <div class="col"><i class="wi wi-night-storm-showers"></i> wi-night-storm-showers </div>
        <div class="col"><i class="wi wi-night-thunderstorm"></i> wi-night-thunderstorm </div>
    </div> <!-- .row end -->

    <div class="row mt-4">
        <div class="col-12">
            <h6 class="fw-bold">Miscellaneous Icons</h6>
        </div>
    </div> <!-- .row end -->
    <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 icons-list m-0">
        <div class="col"><i class="wi wi-celsius"></i> wi-celsius </div>
        <div class="col"><i class="wi wi-cloud-down"></i> wi-cloud-down </div>
        <div class="col"><i class="wi wi-cloud-refresh"></i> wi-cloud-refresh </div>
        <div class="col"><i class="wi wi-cloud-up"></i> wi-cloud-up </div>
        <div class="col"><i class="wi wi-cloud"></i> wi-cloud </div>
        <div class="col"><i class="wi wi-degrees"></i> wi-degrees </div>
        <div class="col"><i class="wi wi-down-left"></i> wi-down-left </div>
        <div class="col"><i class="wi wi-down"></i> wi-down </div>
        <div class="col"><i class="wi wi-fahrenheit"></i> wi-fahrenheit </div>
        <div class="col"><i class="wi wi-horizon-alt"></i> wi-horizon-alt </div>
        <div class="col"><i class="wi wi-horizon"></i> wi-horizon </div>
        <div class="col"><i class="wi wi-left"></i> wi-left </div>
        <div class="col"><i class="wi wi-lightning"></i> wi-lightning </div>
        <div class="col"><i class="wi wi-night-fog"></i> wi-night-fog </div>
        <div class="col"><i class="wi wi-refresh-alt"></i> wi-refresh-alt </div>
        <div class="col"><i class="wi wi-refresh"></i> wi-refresh </div>
        <div class="col"><i class="wi wi-right"></i> wi-right </div>
        <div class="col"><i class="wi wi-sprinkles"></i> wi-sprinkles </div>
        <div class="col"><i class="wi wi-strong-wind"></i> wi-strong-wind </div>
        <div class="col"><i class="wi wi-sunrise"></i> wi-sunrise </div>
        <div class="col"><i class="wi wi-sunset"></i> wi-sunset </div>
        <div class="col"><i class="wi wi-thermometer-exterior"></i> wi-thermometer-exterior </div>
        <div class="col"><i class="wi wi-thermometer-internal"></i> wi-thermometer-internal </div>
        <div class="col"><i class="wi wi-thermometer"></i> wi-thermometer </div>
        <div class="col"><i class="wi wi-tornado"></i> wi-tornado </div>
        <div class="col"><i class="wi wi-up-right"></i> wi-up-right </div>
        <div class="col"><i class="wi wi-up"></i> wi-up </div>
        <div class="col"><i class="wi wi-wind-east"></i> wi-wind-east </div>
        <div class="col"><i class="wi wi-wind-north-east"></i> wi-wind-north-east </div>
        <div class="col"><i class="wi wi-wind-north-west"></i> wi-wind-north-west </div>
        <div class="col"><i class="wi wi-wind-north"></i> wi-wind-north </div>
        <div class="col"><i class="wi wi-wind-south-east"></i> wi-wind-south-east </div>
        <div class="col"><i class="wi wi-wind-south-west"></i> wi-wind-south-west </div>
        <div class="col"><i class="wi wi-wind-south"></i> wi-wind-south </div>
        <div class="col"><i class="wi wi-wind-west"></i> wi-wind-west </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3 mt-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
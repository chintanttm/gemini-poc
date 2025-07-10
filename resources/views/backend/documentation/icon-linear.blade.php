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
                    <h6 class="card-title mb-0">Simple line icons</h6>
                </div>
                <div class="card-body">
                    <p>Simple line icons with CSS, SASS, LESS & Web-fonts files. <a href="https://thesabbir.github.io/simple-line-icons/" target="_blank">plugin's site</a></p>
                    You can find a cheat sheet of the complete set of icons at <a href="https://thesabbir.github.io/simple-line-icons/" rel="nofollow">Simple Line Icons - GitHub Pages</a>
                </div>
                <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;i class=&quot;icon-user&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;icon-user-female&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;icon-user-follow&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;icon-user-following&quot;&gt;&lt;/i&gt;
</code></pre>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->
    
    <div class="row mt-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 icons-list m-0">
        <div class="col"><i class="icon-user"></i> icon-user </div>
        <div class="col"><i class="icon-user-female"></i> icon-user-female </div>
        <div class="col"><i class="icon-user-follow"></i> icon-user-follow </div>
        <div class="col"><i class="icon-user-following"></i> icon-user-following </div>
        <div class="col"><i class="icon-user-unfollow"></i> icon-user-unfollow </div>
        <div class="col"><i class="icon-trophy"></i> icon-trophy </div>
        <div class="col"><i class="icon-speedometer"></i> icon-speedometer </div>
        <div class="col"><i class="icon-social-youtube"></i> icon-social-youtube </div>
        <div class="col"><i class="icon-social-twitter"></i> icon-social-twitter </div>
        <div class="col"><i class="icon-social-tumblr"></i> icon-social-tumblr </div>
        <div class="col"><i class="icon-social-facebook"></i> icon-social-facebook </div>
        <div class="col"><i class="icon-social-dropbox"></i> icon-social-dropbox </div>
        <div class="col"><i class="icon-social-dribbble"></i> icon-social-dribbble </div>
        <div class="col"><i class="icon-shield"></i> icon-shield </div>
        <div class="col"><i class="icon-screen-tablet"></i> icon-screen-tablet </div>
        <div class="col"><i class="icon-screen-smartphone"></i> icon-screen-smartphone </div>
        <div class="col"><i class="icon-screen-desktop"></i> icon-screen-desktop </div>
        <div class="col"><i class="icon-plane"></i> icon-plane </div>
        <div class="col"><i class="icon-notebook"></i> icon-notebook </div>
        <div class="col"><i class="icon-mouse"></i> icon-mouse </div>
        <div class="col"><i class="icon-magnet"></i> icon-magnet </div>
        <div class="col"><i class="icon-magic-wand"></i> icon-magic-wand </div>
        <div class="col"><i class="icon-hourglass"></i> icon-hourglass </div>
        <div class="col"><i class="icon-graduation"></i> icon-graduation </div>
        <div class="col"><i class="icon-ghost"></i> icon-ghost </div>
        <div class="col"><i class="icon-game-controller"></i> icon-game-controller </div>
        <div class="col"><i class="icon-fire"></i> icon-fire </div>
        <div class="col"><i class="icon-envelope-open"></i> icon-envelope-open </div>
        <div class="col"><i class="icon-envelope-letter"></i> icon-envelope-letter </div>
        <div class="col"><i class="icon-energy"></i> icon-energy </div>
        <div class="col"><i class="icon-disc"></i> icon-disc </div>
        <div class="col"><i class="icon-cursor-move"></i> icon-cursor-move </div>
        <div class="col"><i class="icon-crop"></i> icon-crop </div>
        <div class="col"><i class="icon-credit-card"></i> icon-credit-card </div>
        <div class="col"><i class="icon-chemistry"></i> icon-chemistry </div>
        <div class="col"><i class="icon-bell"></i> icon-bell </div>
        <div class="col"><i class="icon-badge"></i> icon-badge </div>
        <div class="col"><i class="icon-anchor"></i> icon-anchor </div>
        <div class="col"><i class="icon-action-redo"></i> icon-action-redo </div>
        <div class="col"><i class="icon-action-undo"></i> icon-action-undo </div>
        <div class="col"><i class="icon-bag"></i> icon-bag </div>
        <div class="col"><i class="icon-basket"></i> icon-basket </div>
        <div class="col"><i class="icon-basket-loaded"></i> icon-basket-loaded </div>
        <div class="col"><i class="icon-book-open"></i> icon-book-open </div>
        <div class="col"><i class="icon-briefcase"></i> icon-briefcase </div>
        <div class="col"><i class="icon-bubbles"></i> icon-bubbles </div>
        <div class="col"><i class="icon-calculator"></i> icon-calculator </div>
        <div class="col"><i class="icon-call-end"></i> icon-call-end </div>
        <div class="col"><i class="icon-call-in"></i> icon-call-in </div>
        <div class="col"><i class="icon-call-out"></i> icon-call-out </div>
        <div class="col"><i class="icon-compass"></i> icon-compass </div>
        <div class="col"><i class="icon-cup"></i> icon-cup </div>
        <div class="col"><i class="icon-diamond"></i> icon-diamond </div>
        <div class="col"><i class="icon-direction"></i> icon-direction </div>
        <div class="col"><i class="icon-directions"></i> icon-directions </div>
        <div class="col"><i class="icon-docs"></i> icon-docs </div>
        <div class="col"><i class="icon-drawer"></i> icon-drawer </div>
        <div class="col"><i class="icon-drop"></i> icon-drop </div>
        <div class="col"><i class="icon-earphones"></i> icon-earphones </div>
        <div class="col"><i class="icon-earphones-alt"></i> icon-earphones-alt </div>
        <div class="col"><i class="icon-feed"></i> icon-feed </div>
        <div class="col"><i class="icon-film"></i> icon-film </div>
        <div class="col"><i class="icon-folder-alt"></i> icon-folder-alt </div>
        <div class="col"><i class="icon-frame"></i> icon-frame </div>
        <div class="col"><i class="icon-globe"></i> icon-globe </div>
        <div class="col"><i class="icon-globe-alt"></i> icon-globe-alt </div>
        <div class="col"><i class="icon-handbag"></i> icon-handbag </div>
        <div class="col"><i class="icon-layers"></i> icon-layers </div>
        <div class="col"><i class="icon-map"></i> icon-map </div>
        <div class="col"><i class="icon-picture"></i> icon-picture </div>
        <div class="col"><i class="icon-pin"></i> icon-pin </div>
        <div class="col"><i class="icon-playlist"></i> icon-playlist </div>
        <div class="col"><i class="icon-present"></i> icon-present </div>
        <div class="col"><i class="icon-printer"></i> icon-printer </div>
        <div class="col"><i class="icon-puzzle"></i> icon-puzzle </div>
        <div class="col"><i class="icon-speech"></i> icon-speech </div>
        <div class="col"><i class="icon-vector"></i> icon-vector </div>
        <div class="col"><i class="icon-wallet"></i> icon-wallet </div>
        <div class="col"><i class="icon-arrow-down"></i> icon-arrow-down </div>
        <div class="col"><i class="icon-arrow-left"></i> icon-arrow-left </div>
        <div class="col"><i class="icon-arrow-right"></i> icon-arrow-right </div>
        <div class="col"><i class="icon-arrow-up"></i> icon-arrow-up </div>
        <div class="col"><i class="icon-bulb"></i> icon-bulb </div>
        <div class="col"><i class="icon-calendar"></i> icon-calendar </div>
        <div class="col"><i class="icon-control-end"></i> icon-control-end </div>
        <div class="col"><i class="icon-control-forward"></i> icon-control-forward </div>
        <div class="col"><i class="icon-control-pause"></i> icon-control-pause </div>
        <div class="col"><i class="icon-control-play"></i> icon-control-play </div>
        <div class="col"><i class="icon-control-rewind"></i> icon-control-rewind </div>
        <div class="col"><i class="icon-control-start"></i> icon-control-start </div>
        <div class="col"><i class="icon-cursor"></i> icon-cursor </div>
        <div class="col"><i class="icon-dislike"></i> icon-dislike </div>
        <div class="col"><i class="icon-equalizer"></i> icon-equalizer </div>
        <div class="col"><i class="icon-graph"></i> icon-graph </div>
        <div class="col"><i class="icon-grid"></i> icon-grid </div>
        <div class="col"><i class="icon-home"></i> icon-home </div>
        <div class="col"><i class="icon-like"></i> icon-like </div>
        <div class="col"><i class="icon-list"></i> icon-list </div>
        <div class="col"><i class="icon-login"></i> icon-login </div>
        <div class="col"><i class="icon-logout"></i> icon-logout </div>
        <div class="col"><i class="icon-loop"></i> icon-loop </div>
        <div class="col"><i class="icon-microphone"></i> icon-microphone </div>
        <div class="col"><i class="icon-music-tone"></i> icon-music-tone </div>
        <div class="col"><i class="icon-music-tone-alt"></i> icon-music-tone-alt </div>
        <div class="col"><i class="icon-note"></i> icon-note </div>
        <div class="col"><i class="icon-pencil"></i> icon-pencil </div>
        <div class="col"><i class="icon-pie-chart"></i> icon-pie-chart </div>
        <div class="col"><i class="icon-question"></i> icon-question </div>
        <div class="col"><i class="icon-rocket"></i> icon-rocket </div>
        <div class="col"><i class="icon-share"></i> icon-share </div>
        <div class="col"><i class="icon-share-alt"></i> icon-share-alt </div>
        <div class="col"><i class="icon-shuffle"></i> icon-shuffle </div>
        <div class="col"><i class="icon-size-actual"></i> icon-size-actual </div>
        <div class="col"><i class="icon-size-fullscreen"></i> icon-size-fullscreen </div>
        <div class="col"><i class="icon-support"></i> icon-support </div>
        <div class="col"><i class="icon-tag"></i> icon-tag </div>
        <div class="col"><i class="icon-trash"></i> icon-trash </div>
        <div class="col"><i class="icon-umbrella"></i> icon-umbrella </div>
        <div class="col"><i class="icon-wrench"></i> icon-wrench </div>
        <div class="col"><i class="icon-ban"></i> icon-ban </div>
        <div class="col"><i class="icon-bubble"></i> icon-bubble </div>
        <div class="col"><i class="icon-camera"></i> icon-camera </div>
        <div class="col"><i class="icon-check"></i> icon-check </div>
        <div class="col"><i class="icon-clock"></i> icon-clock </div>
        <div class="col"><i class="icon-close"></i> icon-close </div>
        <div class="col"><i class="icon-cloud-download"></i> icon-cloud-download </div>
        <div class="col"><i class="icon-cloud-upload"></i> icon-cloud-upload </div>
        <div class="col"><i class="icon-doc"></i> icon-doc </div>
        <div class="col"><i class="icon-envelope"></i> icon-envelope </div>
        <div class="col"><i class="icon-eye"></i> icon-eye </div>
        <div class="col"><i class="icon-flag"></i> icon-flag </div>
        <div class="col"><i class="icon-folder"></i> icon-folder </div>
        <div class="col"><i class="icon-heart"></i> icon-heart </div>
        <div class="col"><i class="icon-info"></i> icon-info </div>
        <div class="col"><i class="icon-key"></i> icon-key </div>
        <div class="col"><i class="icon-link"></i> icon-link </div>
        <div class="col"><i class="icon-lock"></i> icon-lock </div>
        <div class="col"><i class="icon-lock-open"></i> icon-lock-open </div>
        <div class="col"><i class="icon-magnifier"></i> icon-magnifier </div>
        <div class="col"><i class="icon-magnifier-add"></i> icon-magnifier-add </div>
        <div class="col"><i class="icon-magnifier-remove"></i> icon-magnifier-remove </div>
        <div class="col"><i class="icon-paper-clip"></i> icon-paper-clip </div>
        <div class="col"><i class="icon-paper-plane"></i> icon-paper-plane </div>
        <div class="col"><i class="icon-plus"></i> icon-plus </div>
        <div class="col"><i class="icon-power"></i> icon-power </div>
        <div class="col"><i class="icon-refresh"></i> icon-refresh </div>
        <div class="col"><i class="icon-reload"></i> icon-reload </div>
        <div class="col"><i class="icon-settings"></i> icon-settings </div>
        <div class="col"><i class="icon-star"></i> icon-star </div>
        <div class="col"><i class="icon-symbol-female"></i> icon-symbol-female </div>
        <div class="col"><i class="icon-symbol-male"></i> icon-symbol-male </div>
        <div class="col"><i class="icon-target"></i> icon-target </div>
        <div class="col"><i class="icon-volume-1"></i> icon-volume-1 </div>
        <div class="col"><i class="icon-volume-2"></i> icon-volume-2 </div>
        <div class="col"><i class="icon-volume-off"></i> icon-volume-off </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3 mt-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
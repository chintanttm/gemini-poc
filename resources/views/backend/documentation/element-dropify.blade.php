@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Dropify</h6>
                            </div>
                            <div class="card-body">
                                <p>Override your input files with style.</p>
                                <h6>For full documentation please check the <a href="http://jeremyfagis.github.io/dropify/" target="_blank" class="fw-bold">plugin's site</a></h6>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/dropify.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/dropify.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
$(function() {
    $('.dropify').dropify();
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Default <small>Taken from: https://github.com/JeremyFagis/dropify</small></h6>
                <input type="file" class="dropify">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>With event and default file <small>try to remove the image</small></h6>
                <input type="file" id="dropify-event" data-default-file="{{ url('/') }}/assets/images/gallery/8.jpg">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Disabled file upload</h6>
                <input type="file" class="dropify" disabled="disabled">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Limit file type <small>try to upload png or pdf only</small></h6>
                <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Limit file size <small>try to upload file larger than 100 KB</small></h6>
                <input type="file" class="dropify" data-max-file-size="100K">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Custom messages for default <small>replace, remove and error</small></h6>
                <input type="file" class="dropify-fr">
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    $(function() {
        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
                replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'DÃ©solÃ©, le fichier trop volumineux'
            }
        });
    });
</script>
@endsection
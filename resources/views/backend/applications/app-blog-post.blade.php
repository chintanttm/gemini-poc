@extends('backend.layouts.app')

@section('title', __('App Blog post'))

@section('content')
<div class="row g-3 row-deck">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><a href="{{ route('admin.applications.app-blog') }}" class="fa fa-arrow-circle-left me-2" title=""></a>Create post</h4>
                <div class="dropdown morphing scale-left">
                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                        <li><a class="dropdown-item" href="#">File Info</a></li>
                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                        <li><a class="dropdown-item" href="#">Move to</a></li>
                        <li><a class="dropdown-item" href="#">Rename</a></li>
                        <li><a class="dropdown-item" href="#">Block</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <label class="col-xl-2 col-sm-3 col-form-label">Blog Title *</label>
                    <div class="col-xl-8 col-sm-9">
                        <input type="text" class="form-control form-control-lg" placeholder="Blog Title">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-xl-2 col-sm-3 col-form-label">Type</label>
                    <div class="col-xl-8 col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeText" value="Type1">
                            <label class="form-check-label" for="typeText">Text</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeImage" value="Type2">
                            <label class="form-check-label" for="typeImage">Image</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeAudio" value="Type3">
                            <label class="form-check-label" for="typeAudio">Audio</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="typeVideo" value="Type4">
                            <label class="form-check-label" for="typeVideo">Video</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-xl-2 col-sm-3 col-form-label">Select Category *</label>
                    <div class="col-xl-8 col-sm-9">
                        <select class="form-select form-select-lg" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Design</option>
                            <option value="2">Travel</option>
                            <option value="3">Animals</option>
                            <option value="4">Sports & Fitness</option>
                            <option value="5">lifestyle</option>
                            <option value="6">Food & Drink</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-xl-2 col-sm-3 col-form-label">Tage</label>
                    <div class="col-xl-8 col-sm-9">
                        <input type="text" class="form-control form-control-lg" data-role="tagsinput" value="Design,Travel,lifestyle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-xl-2 col-sm-3 col-form-label">Content</label>
                    <div class="col-xl-8 col-sm-9">
                        <div class="summernote">
                            Hello there,
                            <br/>
                            <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                            <p>Please try <b>paste some texts</b> here</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-xl-2 col-sm-3 col-form-label">Attachment</label>
                    <div class="col-sm-8">
                        <div class="small text-muted">Note: <small>Image size should be 1024x640 with JPG file format.</small></div>
                        <input type="file" class="dropify">
                    </div>
                </div>
                <div class="row">
                    <label class="col-xl-2 col-sm-3 col-form-label"></label>
                    <div class="col-sm-8">
                        <button class="btn btn-lg bg-secondary text-light text-uppercase" type="button">Publish</button>
                        <button class="btn btn-lg btn-secondary text-uppercase" type="button">Discard</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
        $('.note-editor .note-btn').on('click',function(){
            $(this).next().toggleClass("show");
        });
    });
    
    $(function() {
        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
    });

</script>
@endsection

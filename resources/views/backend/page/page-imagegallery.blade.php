@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="card img-hover p-1">
    <!-- Gallery: images -->
    <div class="row g-1">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 1" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/1.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 2" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/2.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 3" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/3.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 4" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/4.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 5" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/5.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 6" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/6.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 8" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/7.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 9" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/8.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 10" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/9.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 11" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/10.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 12" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/11.jpg"></a></div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12"><a title="Image 13" href="#"><img class="thumbnail rounded img-fluid" src="{{ url('/') }}/assets/images/gallery/12.jpg"></a></div>
    </div> <!-- Row end  -->
</div>

<!-- Gallery: carousel popups -->
<div class="modal fade" id="myModalGallery" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Image Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="modalCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner"></div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#modalCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#modalCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $(function(){
        /* copy loaded thumbnails into carousel */
        $('.row .thumbnail').on('load', function() {
            
        }).each(function(i) {
        // if(this.complete) {
            var item = $('<div class="carousel-item"></div>');
            var itemDiv = $(this).parents('div');
    
            $(itemDiv.html()).appendTo(item);
            item.appendTo('.carousel-inner'); 
            if (i==0){ // set first item active
                item.addClass('active');
            // }
            }
        });
    
        /* activate the carousel */
        $('#modalCarousel').carousel({interval:false});
    
        /* when clicking a thumbnail */
        $('.row .thumbnail').click(function(){
            var idx = $(this).parents('div').index();
            var id = parseInt(idx);
            $('#myModalGallery').modal('show'); // show the modal
            $('#modalCarousel').carousel(id); // slide carousel to selected        
        });
    })

</script>
@endsection
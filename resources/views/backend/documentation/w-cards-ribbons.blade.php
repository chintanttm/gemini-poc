@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<!-- .card: tab -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs tab-card mb-4 border-top-0 border-start-0 border-end-0 border border-primary rounded-4 bg-white" role="tablist">
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards') }}">Card's</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tiles') }}">Card Tiles</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-user') }}">User Card's</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tabbed') }}">Tabbed card</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link active" href="{{ route('admin.documentation.w-cards-ribbons') }}">Card Ribbons</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-list') }}">Card List</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-charts') }}">Card Chart</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tables') }}">Card Tables</a></li>
            </ul>
        </div>
    </div> <!-- .row end -->

    <div class="row g-3">
        <div class="col-lg-4 col-md-12">
            <div class="card ribbon mb-3">
                <div class="option-1 bg-primary position-absolute"></div>
                <div class="card-body">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-4 bg-info position-absolute text-light">Ribbon</div>
                <div class="card-body p-5">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-13 position-absolute"></div>
                <div class="card-body">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-7 position-absolute text-light">Ribbon</div>
                <div class="card-body p-4 mt-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-10 position-absolute text-light"><i class="fa fa-github fa-lg"></i></div>
                <div class="card-body p-4 mt-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card ribbon mb-3">
                <div class="option-2 bg-primary position-absolute"></div>
                <div class="card-body">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-5 bg-primary position-absolute text-light"><i class="fa fa-star"></i></div>
                <div class="card-body">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-8 position-absolute text-light">Ribbon</div>
                <div class="card-body p-4 mt-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-11 position-absolute text-light"><i class="fa fa-info-circle fa-lg"></i></div>
                <div class="card-body p-4 mt-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card ribbon mb-3">
                <div class="option-3 bg-danger position-absolute text-light">Ribbon</div>
                <div class="card-body p-5">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-6 bg-dark position-absolute text-light"><i class="fa fa-heart"></i></div>
                <div class="card-body">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-9 position-absolute text-light"><i class="fa fa-heart"></i></div>
                <div class="card-body p-4 mt-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
            <div class="card ribbon mb-3">
                <div class="option-12 position-absolute text-light"><i class="fa fa-gear fa-lg"></i></div>
                <div class="card-body p-4 mt-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection
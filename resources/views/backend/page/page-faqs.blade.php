@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="row justify-content-between">
    <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12">
        <div id="accordionExample">
            <div class="card mb-1">
                <h6 class="mb-0 p-xl-4 p-3" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">What is the Genesis Simple FAQ plugin?</h6>
                <div id="faq1" class="collapse show">
                    <div class="card-body border-top">
                        <p>3 wolf moon officia aute, non cupidatat skateboard dolor brunch. <span class="text-danger">Food truck quinoa nesciunt laborum eiusmod</span>. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <ul>
                            <li>vegan excepteur butcher vice lomo. Leggings occaecat craft beer</li>
                            <li>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry</li>
                            <li>Brunch 3 wolf moon tempor, sunt aliqua</li>
                        </ul>
                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim <span class="text-decoration-underline">aesthetic synth nesciunt you probably</span> haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                </div>
            </div> <!-- .card - FAQ 1  -->
            <div class="card mb-1">
                <h6 class="mb-0 p-xl-4 p-3" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">How does the Genesis Simple FAQ plugin?</h6>
                <div id="faq2" class="collapse">
                    <div class="card-body border-top">
                        <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert—check it out!
                        </div>
                    </div>
                </div>
            </div> <!-- .card - FAQ 2  -->
            <div class="card mb-1">
                <h6 class="mb-0 p-xl-4 p-3" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="true" aria-controls="faq3">Can i customize the design of my FAQ section?</h6>
                <div id="faq3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                    <div class="card-body border-top">
                        <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        <figure>
                            <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div> <!-- .card - FAQ 3  -->
            <div class="card mb-1">
                <h6 class="mb-0 p-xl-4 p-3" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="true" aria-controls="faq4">Where can i show the FAQ section on my website?</h6>
                <div id="faq4" class="collapse">
                    <div class="card-body border-top">
                        <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                    </div>
                </div>
            </div> <!-- .card - FAQ 4  -->
        </div>
        <div class="card p-0 p-lg-4 mt-3">
            <div class="card-body">
                <h6 class="pb-2 mb-4 border-bottom">Need a support?</h6>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter description</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button class="btn btn-outline-primary lift">Send Support</button>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
        <div class="ps-0 ps-xl-4">
            <strong class="d-block h6 my-2 pb-2 border-bottom">Helpful Links</strong>
            <ul>
                <li><a href="#global-settings">Global settings</a></li>
                <li><a href="#headings">Headings</a>
                    <ul>
                        <li><a href="#customizing-headings">Customizing headings</a></li>
                    </ul>
                </li>
                <li><a href="#display-headings">Display headings</a></li>
                <li><a href="#lead">Lead</a></li>
                <li><a href="#inline-text-elements">Inline text elements</a></li>
                <li><a href="#text-utilities">Text utilities</a></li>
                <li><a href="#abbreviations">Abbreviations</a></li>
                <li><a href="#blockquotes">Blockquotes</a>
                    <ul>
                        <li><a href="#naming-a-source">Naming a source</a></li>
                        <li><a href="#alignment">Alignment</a></li>
                    </ul>
                </li>
                <li><a href="#lists">Lists</a>
                    <ul>
                        <li><a href="#unstyled">Unstyled</a></li>
                        <li><a href="#inline">Inline</a></li>
                        <li><a href="#description-list-alignment">Description list alignment</a></li>
                    </ul>
                </li>
                <li><a href="#responsive-font-sizes">Responsive font sizes</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
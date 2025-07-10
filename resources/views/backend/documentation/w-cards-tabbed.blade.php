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
                <li class="nav-item"><a class="py-3 mx-1 nav-link active" href="{{ route('admin.documentation.w-cards-tabbed') }}">Tabbed card</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-ribbons') }}">Card Ribbons</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-list') }}">Card List</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-charts') }}">Card Chart</a></li>
                <li class="nav-item"><a class="py-3 mx-1 nav-link" href="{{ route('admin.documentation.w-cards-tables') }}">Card Tables</a></li>
            </ul>
        </div>
    </div> <!-- .row end -->

    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="card-title">Tab Option 1</h6>
                <ul class="nav nav-tabs px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="#nav-home" role="tab">Home</a></li>
                    <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav-profile" role="tab">Profile</a></li>
                    <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav-HTML" role="tab">HTML</a></li>
                </ul>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                        <div class="tab-pane fade" id="nav-HTML" role="tabpanel">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;div class=&quot;d-flex justify-content-between align-items-center flex-wrap&quot;&gt;
&lt;h6 class=&quot;card-title&quot;&gt;Tab Option 1&lt;/h6&gt;
&lt;ul class=&quot;nav nav-tabs px-3 border-bottom-0&quot; role=&quot;tablist&quot;&gt;
&lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link border-0 active&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#nav-home&quot; role=&quot;tab&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link border-0&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#nav-profile&quot; role=&quot;tab&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link border-0&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#nav-contact&quot; role=&quot;tab&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;div class=&quot;tab-content&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;nav-home&quot; role=&quot;tabpanel&quot;&gt;
    &lt;div class=&quot;mb-0&quot;&gt;It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;nav-profile&quot; role=&quot;tabpanel&quot;&gt;
    &lt;div class=&quot;mb-0&quot;&gt;Lorem Ipsum is simply dummy text of the galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <ul class="nav nav-tabs px-3 border-bottom-0" role="tablist">
                    <li class="nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="#nav-home-icon" role="tab"><i class="fa fa-home me-2"></i>Home</a></li>
                    <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav-profile-icon" role="tab"><i class="fa fa-user me-2"></i>Profile</a></li>
                    <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav-HTML-icon" role="tab"><i class="fa fa-address-card-o me-2"></i>HTML</a></li>
                </ul>
                <h6 class="card-title">Tab Option 1 with Icon</h6>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-home-icon" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile-icon" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                        <div class="tab-pane fade" id="nav-HTML-icon" role="tabpanel">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;div class=&quot;d-flex justify-content-between align-items-center flex-wrap&quot;&gt;
&lt;ul class=&quot;nav nav-tabs px-3 border-bottom-0&quot; role=&quot;tablist&quot;&gt;
&lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link border-0 active&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#nav-home-icon&quot; role=&quot;tab&quot;&gt;&lt;i class=&quot;fa fa-home me-2&quot;&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link border-0&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#nav-profile-icon&quot; role=&quot;tab&quot;&gt;&lt;i class=&quot;fa fa-user me-2&quot;&gt;&lt;/i&gt;Profile&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link border-0&quot; data-bs-toggle=&quot;tab&quot; href=&quot;#nav-contact-icon&quot; role=&quot;tab&quot;&gt;&lt;i class=&quot;fa fa-address-card-o me-2&quot;&gt;&lt;/i&gt;Contact&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;h6 class=&quot;card-title&quot;&gt;Tab Option 1 with Icon&lt;/h6&gt;
&lt;/div&gt;
&lt;div class=&quot;card&quot;&gt;
&lt;div class=&quot;card-body&quot;&gt;
&lt;div class=&quot;tab-content&quot;&gt;
&lt;div class=&quot;tab-pane fade show active&quot; id=&quot;nav-home-icon&quot; role=&quot;tabpanel&quot;&gt;
    &lt;div class=&quot;mb-0&quot;&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;tab-pane fade&quot; id=&quot;nav-profile-icon&quot; role=&quot;tabpanel&quot;&gt;
    &lt;div class=&quot;mb-0&quot;&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Tab Option 2</h6>
                    <ul class="nav nav-tabs tab-page-toolbar rounded d-inline-flex" role="tablist">
                        <li class="nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="#nav2-home" role="tab">Home</a></li>
                        <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav2-profile" role="tab">Profile</a></li>
                        <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav2-contact" role="tab">Contact</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav2-home" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav2-profile" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Tab Option 2 with Icon</h6>
                    <ul class="nav nav-tabs tab-page-toolbar rounded d-inline-flex" role="tablist">
                        <li class="nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="#nav2-home-icon" role="tab"><i class="fa fa-home me-2"></i>Home</a></li>
                        <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav2-profile-icon" role="tab"><i class="fa fa-user me-2"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#nav2-contact-icon" role="tab"><i class="fa fa-address-card-o me-2"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav2-home-icon" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav2-profile-icon" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Tab Option 3</h6>
                    <ul class="nav nav-tabs tab-page-toolbar rounded-pill d-inline-flex" role="tablist">
                        <li class="nav-item"><a class="nav-link rounded-pill border-0 active" data-bs-toggle="tab" href="#nav3-home" role="tab">Home</a></li>
                        <li class="nav-item"><a class="nav-link rounded-pill border-0" data-bs-toggle="tab" href="#nav3-profile" role="tab">Profile</a></li>
                        <li class="nav-item"><a class="nav-link rounded-pill border-0" data-bs-toggle="tab" href="#nav3-contact" role="tab">Contact</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav3-home" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav3-profile" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Tab Option 3 with Icon</h6>
                    <ul class="nav nav-tabs tab-page-toolbar rounded-pill d-inline-flex" role="tablist">
                        <li class="nav-item"><a class="nav-link rounded-pill border-0 active" data-bs-toggle="tab" href="#nav3-home-icon" role="tab"><i class="fa fa-home me-2"></i>Home</a></li>
                        <li class="nav-item"><a class="nav-link rounded-pill border-0" data-bs-toggle="tab" href="#nav3-profile-icon" role="tab"><i class="fa fa-user me-2"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link rounded-pill border-0" data-bs-toggle="tab" href="#nav3-contact-icon" role="tab"><i class="fa fa-address-card-o me-2"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav3-home-icon" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav3-profile-icon" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Tab Option 4</h6>
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
                <ul class="nav nav-tabs tab-card" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav4-home" role="tab">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav4-profile" role="tab">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav4-contact" role="tab">Contact</a></li>
                </ul>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav4-home" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav4-profile" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Tab Option 4 with Icon</h6>
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
                <ul class="nav nav-tabs tab-card" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav4-home-icon" role="tab"><i class="fa fa-home me-2"></i>Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav4-profile-icon" role="tab"><i class="fa fa-user me-2"></i>Profile</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav4-contact-icon" role="tab"><i class="fa fa-address-card-o me-2"></i>Contact</a></li>
                </ul>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav4-home-icon" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav4-profile-icon" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h6 class="card-title mb-0">Tab option 5</h6>
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
                    <ul class="nav nav-pills custom-pill mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link border border-primary mx-1 active" data-bs-toggle="tab" href="#nav5-home" role="tab">Home</a></li>
                        <li class="nav-item"><a class="nav-link border border-primary mx-1" data-bs-toggle="tab" href="#nav5-profile" role="tab">Profile</a></li>
                        <li class="nav-item"><a class="nav-link border border-primary mx-1" data-bs-toggle="tab" href="#nav5-contact" role="tab">Contact</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav5-home" role="tabpanel">
                            <div class="mb-0">It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.</div>
                        </div>
                        <div class="tab-pane fade" id="nav5-profile" role="tabpanel">
                            <div class="mb-0">Lorem Ipsum is simply dummy text of the galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Tab option 6</h6>
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
                <div class="card-body d-flex align-items-start">
                    <ul class="nav nav-pills custom-horizontal me-2" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav6-Home" role="tab">Home</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav6-Profile" role="tab">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav6-Contact" role="tab">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav6-Settings" role="tab">Settings</a></li>
                    </ul>
                
                    <div class="tab-content ps-3">
                        <div class="tab-pane fade show active" id="nav6-Home" role="tabpanel">
                            It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.
                        </div>
                        <div class="tab-pane fade" id="nav6-Profile" role="tabpanel">
                            It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.
                        </div>
                        <div class="tab-pane fade" id="nav6-Contact" role="tabpanel">
                            It is a long established fact that a reader will normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will ma sites still in their infancy.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3">
        @include('backend.documentation.next-previous-url')
    </div>
@endsection

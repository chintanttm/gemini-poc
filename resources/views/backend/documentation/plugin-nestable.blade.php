@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">jquery Nestable</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">Nestable is an experimental example and not under active development. If it suits your requirements feel free to expand upon it!. <a href="https://github.com/display-interactive/Nestable" rel="nofollow">Nestable</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/')}}/assets/bundles/nestable.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- HTML --&gt;
&lt;div class=&quot;dd&quot;&gt;
    &lt;ol class=&quot;dd-list&quot;&gt;
        &lt;li class=&quot;dd-item&quot; data-id=&quot;1&quot;&gt;
            &lt;div class=&quot;dd-handle&quot;&gt;Item 1&lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;dd-item&quot; data-id=&quot;2&quot;&gt;
            &lt;div class=&quot;dd-handle&quot;&gt;Item 2&lt;/div&gt;
        &lt;/li&gt;
    &lt;/ol&gt;
&lt;/div&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    $(function () {
        $('.dd').nestable();
    });
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row row-cols-xl-4 row-cols-lg-4 row-cols-1 g-2 mt-4">
    <div class="col task-planned">
        <div class="dd card border-primary">
            <div class="card-header bg-primary d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-light">Planned</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#addNewTask"><i class="fa fa-plus"></i> Add task</button>
            </div>
            <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 1</div>
                    <span>It is a long established fact will be distracted.</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 2</div>
                    <span>Richard McClintock, a Latin professor</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">7</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">9</span></a>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    <div class="col task-progress">
        <div class="dd card border-warning">
            <div class="card-header bg-warning d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-light">In progress</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#addNewTask"><i class="fa fa-plus"></i> Add task</button>
            </div>
            <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2 mb-1">
                    <div class="dd-handle fw-bold">Item 1</div>
                    <span>It is a long established fact will be distracted.</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">22</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">7</span></a>
                        </div>
                    </div>
                    <ol class="dd-list list-unstyled">
                        <li class="dd-item card p-2 mb-1">
                            <div class="dd-handle fw-bold">Item 2</div>
                            <span>It is a long established fact that a reader will be distracted.</span>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <div class="project-members">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                                </div>
                                <div class="task-action">
                                    <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">7</span></a>
                                    <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">3</span></a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 3</div>
                    <span>It is a long established reader will be distracted.</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">42</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">15</span></a>
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 4</div>
                    <span>Richard McClintock, a Latin professor</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    <div class="col task-review">
        <div class="dd card border-dark">
            <div class="card-header bg-dark d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-muted">Review</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#addNewTask"><i class="fa fa-plus"></i> Add task</button>
            </div>
            <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 1</div>
                    <span>It is a long that a reader will be distracted.</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 2</div>
                    <span>It is a long established fact will be distracted.</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">11</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">5</span></a>
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 3</div>
                    <span>Richard McClintock, a Latin professor</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    <div class="col task-complete">
        <div class="dd card border-success">
            <div class="card-header bg-success d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-light">Complete</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#addNewTask"><i class="fa fa-plus"></i> Add task</button>
            </div>
            <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 1</div>
                    <span>It is a long established reader will be distracted.</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">45</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">14</span></a>
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">Item 2</div>
                    <span>It is a long established fact that a distracted.</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                            <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">18</span></a>
                            <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">3</span></a>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</div> <!-- .row end -->

<!-- Add New Task -->
<div class="modal fade" id="addNewTask" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add New Task</h6>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Task no.">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Job title">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="col-12">
                        <select class="form-control">
                            <option>Select Team</option>
                            <option>John Smith</option>
                            <option>Hossein Shams</option>
                            <option>Maryam Amiri</option>
                            <option>Tim Hank</option>
                            <option>Gary Camara</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label>Range</label>
                        <div class="input-daterange input-group">
                            <input type="date" class="form-control" name="start">
                            <span class="input-group-text">To</span>
                            <input type="date" class="form-control" name="end">
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    $(function () {
        $('.dd').nestable();
    });
</script>
@endsection
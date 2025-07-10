@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Introduction</h6>
                            </div>
                            <div class="card-body">
                                <h4>jKanban Board</h4>
                                <div class="fs-6">jKanban is a pure agnostic Javascript plugin for Kanban boards. For more info see 
                                    <a href="http://www.riccardotartaglia.it/jkanban/" class="fw-bolder me-1">the official site</a>and 
                                    <a class="fw-bolder" href="https://github.com/riktar/jkanban">the Github repository</a>.</div>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- plugin css file  --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/jkanban.min.css&quot;&gt;

&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/jkanban.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- HTML --&gt;
&lt;div class=&quot;mykanban_basic custom_scroll&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;jkanban_color custom_scroll&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;jkanban_advanced custom_scroll&quot;&gt;&lt;/div&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs tab-card mb-2 mt-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#jKanban-Basic">Basic Board</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#jKanban-Color">Color Board</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#jKanban-Advanced">Advanced Board</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="jKanban-Basic" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mykanban_basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="jKanban-Color" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="jkanban_color"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="jKanban-Advanced" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="jkanban_advanced custom_scroll"></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <button class="btn btn-primary" id="addDefault">Add "Default" board</button>
                                        <button class="btn btn-success" id="addToDo">Add element in "To Do" Board</button>
                                        <button class="btn btn-danger" id="removeBoard">Remove "Done" Board</button>
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
                <script>
                    var kanban = new jKanban({
                        element: '.mykanban_basic',
                        gutter: '0',
                        widthBoard: '300px',
                        boards: [{
                            'id': '_inprocess',
                            'title': 'In Process',
                            'item': [{
                                    'title': '<span class="font-weight-bold">You can drag me too</span>'
                                },{
                                    'title': '<span class="font-weight-bold">Buy Milk</span>'
                                }
                            ]
                        }, {
                            'id': '_working',
                            'title': 'Working',
                            'item': [{
                                    'title': '<span class="font-weight-bold">Do Something!</span>'
                                },{
                                    'title': '<span class="font-weight-bold">Run?</span>'
                                }
                            ]
                        }, {
                            'id': '_done',
                            'title': 'Done',
                            'item': [{
                                    'title': '<span class="font-weight-bold">All right</span>'
                                },{
                                    'title': '<span class="font-weight-bold">Ok!</span>'
                                }
                            ]
                        }]
                    });

                    var kanban2 = new jKanban({
                        element : '.jkanban_color',
                        gutter  : '0',
                        widthBoard: '300px',
                        click : function(el){
                            alert(el.innerHTML);
                        },
                        boards  :[
                            {
                                'id' : 'todo',
                                'title'  : 'To Do',
                                'item'  : [
                                    {
                                        'title':'My Task Test',
                                    },{
                                        'title':'Buy Milk',
                                    }
                                ]
                            },{
                                'id' : 'working',
                                'title'  : 'Working',
                                'item'  : [
                                    {
                                        'title':'Do Something!',
                                    },{
                                        'title':'Run?',
                                    }
                                ]
                            },{
                                'id' : 'done',
                                'title'  : 'Done',
                                'item'  : [
                                    {
                                        'title':'All right',
                                    },{
                                        'title':'Ok!',
                                    }
                                ]
                            }
                        ]
                    });

                    var kanban3 = new jKanban({
                        element : '.jkanban_advanced',
                        gutter  : '0',
                        widthBoard: '300px',
                        click : function(el){
                            alert(el.innerHTML);
                        },
                        boards  :[
                            {
                                'id' : 'todo',
                                'title'  : 'To Do',
                                'class' : 'info',
                                'item'  : [
                                    {
                                        'title':'<div class="fw-bold">Design</div><span>It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-2"><div class="project-members"><a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a><a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted fa fa-comments" href="#" title="Comments"><span class="ps-1">10</span></a><a class="p-1 text-muted fa fa-paperclip" href="#" title="Attachment"><span class="ps-1">2</span></a></div></div>',
                                    },{
                                        'title':'<div class="fw-bold">Development</div><span>It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-2"><div class="project-members"><a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted fa fa-comments" href="#" title="Comments"><span class="ps-1">10</span></a><a class="p-1 text-muted fa fa-paperclip" href="#" title="Attachment"><span class="ps-1">2</span></a></div></div>',
                                    }
                                ]
                            },
                            {
                                'id' : 'working',
                                'title'  : 'Working',
                                'class' : 'warning',
                                'item'  : [
                                    {
                                        'title':'Do Something!',
                                    },{
                                        'title':'<div class="fw-bold">Bug fix</div><span>It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-2"><div class="project-members"><a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted fa fa-comments" href="#" title="Comments"><span class="ps-1">10</span></a><a class="p-1 text-muted fa fa-paperclip" href="#" title="Attachment"><span class="ps-1">2</span></a></div></div>',
                                    }
                                ]
                            },
                            {
                                'id' : 'done',
                                'title'  : 'Done',
                                'class' : 'success',
                                'item'  : [
                                    {
                                        'title':'All right',
                                    },{
                                        'title':'Ok!',
                                    }
                                ]
                            }
                        ]
                    });

                    var toDoButton = document.getElementById('addToDo');
                    toDoButton.addEventListener('click',function(){
                        kanban3.addElement(
                            'todo',
                            {
                                'title':'<div class="fw-bold">Item 1</div><span>It is a long established fact will be distracted.</span><div class="d-flex justify-content-between align-items-center mt-2"><div class="project-members"><a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a><a href="#" title="Avatar"><img class="avatar xs rounded" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="friend"> </a></div><div class="task-action"><a class="p-1 text-muted fa fa-comments" href="#" title="Comments"><span class="ps-1">10</span></a><a class="p-1 text-muted fa fa-paperclip" href="#" title="Attachment"><span class="ps-1">2</span></a></div></div>',
                            }
                        );
                    });

                    var addBoardDefault = document.getElementById('addDefault');
                    addBoardDefault.addEventListener('click', function () {
                        kanban3.addBoards(
                            [{
                                'id' : 'todo',
                                'title'  : 'Kanban Default',
                                'item'  : [
                                    {
                                        'title':'Default Item',
                                    },{
                                        'title':'Default Item 2',
                                    },{
                                        'title':'Default Item 3',
                                    }
                                ]
                            }]
                        )
                    });

                    var removeBoard = document.getElementById('removeBoard');
                    removeBoard.addEventListener('click',function(){
                        kanban3.removeBoard('done');
                    });
                </script>
@endsection
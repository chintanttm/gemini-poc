@extends('backend.layouts.app')

@section('title', __('App Chat'))

@section('content')
<style>
.typing-dots::after {
  content: '';
  display: inline-block;
  width: 1em;
  text-align: left;
  animation: dots 1.2s steps(3, end) infinite;
}
.send-image {
    max-width: 100px;
    max-height: 150px;
}
@keyframes dots {
  0%   { content: ''; }
  33%  { content: '.'; }
  66%  { content: '..'; }
  100% { content: '...'; }
}
</style>
<div class="d-flex flex-nowrap">
    <div class="order-1">
        <div class="c-list">
            <div class="input-group mb-2">
                <input type="text" class="form-control mb-1" placeholder="Search...">
            </div>
            <ul class="nav nav-tabs tab-page-toolbar rounded text-center mb-1" role="tablist">
                <li class="flex-fill nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="#chat-recent" role="tab" aria-selected="true">Chat</a></li>
                <li class="flex-fill nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#chat-groups" role="tab" aria-selected="false">Groups</a></li>
                <li class="flex-fill nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#chat-contact" role="tab" aria-selected="false">Contact</a></li>
            </ul>
        </div>
        <div class="tab-content border-top custom_scroll">
            <div class="tab-pane fade show active" id="chat-recent" role="tabpanel">
                <ul class="nav nav-tabs list-group list-group-custom list-group-flush mb-0" role="tablist">
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Chris_Fox" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Chris Fox</span> <small class="msg-time">12:37 PM</small></h6>
                                <span class="text-muted">changed an issue from "In Progress" to</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Robert_Hammer" role="tab">
                            <div class="avatar rounded-circle no-thumbnail">RH</div>
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Robert Hammer</span> <small class="msg-time">10:45 AM</small></h6>
                                <span class="text-muted">It is a long established fact that a reader will be distracted</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Orlando_Lentz" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Orlando Lentz</span> <small class="msg-time">10:11 AM</small></h6>
                                <span class="text-muted">There are many variations of passages</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex active" data-bs-toggle="tab" data-bs-target="#Barbara_Kelly" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Barbara Kelly</span> <small class="msg-time">Sat</small></h6>
                                <span class="text-muted">Contrary to popular belief</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Robert_Hammer" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Robert Hammer</span> <small class="msg-time">Fri</small></h6>
                                <span class="text-muted">making it over 2000 years old</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Orlando_Lentz" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Orlando Lentz</span> <small class="msg-time">Fri</small></h6>
                                <span class="text-muted">There are many variations of passages</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Rose_Rivera" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Rose Rivera</span> <small class="msg-time">Thu</small></h6>
                                <span class="text-muted">The generated Lorem Ipsum</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Chris_Fox" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Chris Fox</span> <small class="msg-time">Wed</small></h6>
                                <span class="text-muted">changed an issue from "In Progress" to</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Robert_Hammer" role="tab">
                            <div class="avatar rounded-circle no-thumbnail">RH</div>
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Robert Hammer</span> <small class="msg-time">Wed</small></h6>
                                <span class="text-muted">It is a long established fact that a reader will be distracted</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Orlando_Lentz" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Orlando Lentz</span> <small class="msg-time">13/10/2020</small></h6>
                                <span class="text-muted">There are many variations of passages</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Barbara_Kelly" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Barbara Kelly</span> <small class="msg-time">13/10/2020</small></h6>
                                <span class="text-muted">Contrary to popular belief</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Robert_Hammer" role="tab">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Robert Hammer</span> <small class="msg-time">22/10/2020</small></h6>
                                <span class="text-muted">making it over 2000 years old</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="chat-groups" role="tabpanel">
                <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded-circle no-thumbnail">GI</div>
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Design UI</span> <small class="msg-time">9/10/2020</small></h6>
                                <span class="text-muted">The point of using Lorem Ipsum</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded-circle no-thumbnail">AD</div>
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Angular Dev Team</span> <small class="msg-time">22/8/2020</small></h6>
                                <span class="text-muted">If you are going to use a passage</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <div class="avatar rounded-circle no-thumbnail">AT</div>
                            <div class="flex-fill ms-3 text-truncate">
                                <h6 class="d-flex justify-content-between mb-0"><span>Account Team</span> <small class="msg-time">11/7/2020</small></h6>
                                <span class="text-muted">The point of using Lorem Ipsum</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="chat-contact" role="tabpanel">
                <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="d-flex justify-content-between mb-0">
                                    <h6 class="mb-0">Chris Fox</h6>
                                    <div class="text-muted">
                                        <i class="fa fa-heart ps-2"></i>
                                        <i class="fa fa-trash ps-2"></i>
                                    </div>
                                </div>
                                <span class="text-muted">chris.fox@LUNO.com</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="d-flex justify-content-between mb-0">
                                    <h6 class="mb-0">Barbara Kelly</h6>
                                    <div class="text-muted">
                                        <i class="fa fa-heart-o ps-2"></i>
                                        <i class="fa fa-trash ps-2"></i>
                                    </div>
                                </div>
                                <span class="text-muted">barbara.kelly@LUNO.com</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="d-flex justify-content-between mb-0">
                                    <h6 class="mb-0">Brian Swader</h6>
                                    <div class="text-muted">
                                        <i class="fa fa-heart-o ps-2"></i>
                                        <i class="fa fa-trash ps-2"></i>
                                    </div>
                                </div>
                                <span class="text-muted">brian.swader@LUNO.com</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="d-flex justify-content-between mb-0">
                                    <h6 class="mb-0">Richard Foos</h6>
                                    <div class="text-muted">
                                        <i class="fa fa-heart ps-2"></i>
                                        <i class="fa fa-trash ps-2"></i>
                                    </div>
                                </div>
                                <span class="text-muted">richard.foos@LUNO.com</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="d-flex justify-content-between mb-0">
                                    <h6 class="mb-0">Frank Camly</h6>
                                    <div class="text-muted">
                                        <i class="fa fa-heart-o ps-2"></i>
                                        <i class="fa fa-trash ps-2"></i>
                                    </div>
                                </div>
                                <span class="text-muted">frank.camly@LUNO.com</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="javascript:void(0);" class="d-flex">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="">
                            <div class="flex-fill ms-3 text-truncate">
                                <div class="d-flex justify-content-between mb-0">
                                    <h6 class="mb-0">Brian Swader</h6>
                                    <div class="text-muted">
                                        <i class="fa fa-heart-o ps-2"></i>
                                        <i class="fa fa-trash ps-2"></i>
                                    </div>
                                </div>
                                <span class="text-muted">brianswader@LUNO.com</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="order-2 flex-grow-1 custom_scroll">
        <div class="tab-content">
            
            <div class="tab-pane fade show active" id="Barbara_Kelly" role="tabpanel">
                <!-- Chat: Header -->
                <div class="py-xl-3 py-3 px-xxl-5 px-lg-4 px-3 chat-header">
                    <a class="d-flex" href="javascript:void(0);" title="">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="avatar">
                        <div class="ms-3">
                            <h6 class="mb-0">AI chat</h6>
                            {{-- <small class="text-muted">Active</small> --}}
                        </div>
                    </a>
                    <div class="dropdown">
    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="chatDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
        <span id="dropdown-label">AI Chat</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="chatDropdownMenu">
        <li><a class="dropdown-item" href="javascript:void(0);" onclick="setChatMode('ai_chat_model', 'AI Chat')">AI Chat</a></li>
        <li><a class="dropdown-item" href="javascript:void(0);" onclick="setChatMode('image_generate_model', 'AI Image Generate')">AI Image Generate</a></li>
    </ul>
</div>

                </div>
                <!-- Chat: body -->
                <div class="chat-history custom_scroll">
                    <!-- Search: div -->
                    <div class="collapse bg-dark" id="chat-search">
                        <div class="input-group py-2 px-xxl-5 px-lg-4 px-3">
                            <input type="text" class="form-control border-0 p-0 bg-transparent" placeholder="Search. Components, Layouts, etc...">
                            <div class="input-group-append ms-3">
                                <button class="btn btn-light" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                    <ul class="py-xl-3 py-2 px-xxl-5 px-lg-4 px-3 list-unstyled mb-0" id="message-box">
                        <!-- Chat: left -->
                        {{-- <li class="mb-3 d-flex flex-row align-items-end">
                            <div class="max-width-70">
                                <div class="user-info mb-1">
                                    <img class="avatar xs rounded-circle me-1" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="avatar">
                                    <span class="text-muted small">10:10 AM, Today</span>
                                </div>
                                <div class="card p-3">
                                    <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                                </div>
                            </div>
                            <!-- More option -->
                            <div class="dropdown morphing">
                                <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <ul class="dropdown-menu border-0 shadow">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </li> --}}
                        <!-- Chat: right -->
                        {{-- <li class="mb-3 d-flex flex-row-reverse align-items-end">
                            <div class="max-width-70 text-end">
                                <div class="user-info mb-1">
                                    <span class="text-muted small">10:12 AM, Today</span>
                                </div>
                                <div class="card border-0 p-3 bg-primary text-light">
                                    <div class="message">Are we meeting today?</div>
                                </div>
                            </div>
                            <!-- More option -->
                            <div class="dropdown morphing">
                                <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <ul class="dropdown-menu border-0 shadow">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div style="text-align: center;" id="error-box">
                </div>
                <!-- Chat: Footer -->
                <form id="ai-chat-form" enctype="multipart/form-data">
                    <div class="py-xl-3 py-2 px-xxl-5 px-lg-4 px-3 chat-msg bg-card mb-3 ms-3 me-3 rounded-3">
                        <div id="image-preview-container" class="position-relative d-none">
                            <img id="image-preview" src="" alt="Preview" style="max-width: 80px; max-height: 80px; border-radius: 8px;" accept="image/*">
                            <span id="remove-image" style="position: absolute; top: -8px; right: -8px; background: red; color: white; border-radius: 50%; padding: 2px 6px; cursor: pointer;">×</span>
                        </div>
                        <div class="btn btn-link file-input">
                            <input type="file" class="form-control" name="file-input" id="chat-file-input">
                            <label for="chat-file-input" class="fa fa-paperclip"></label>
                        </div>
                        <div>
                            <i role="button" id="record" class="fa fa-microphone"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" id="chat-prompt-input" value="" placeholder="Enter text here...">
                        <button class="btn bg-secondary text-light text-uppercase" type="submit" id="send-button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal: Video call -->
<div class="modal fade" id="video_call" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body position-relative">
                <div class="card p-2 shadow mt-4 me-4 position-absolute top-0 end-0" style="z-index: 9999;">
                    <img class="rounded-4" src="{{ url('/') }}/assets/images/profile_av.png" alt="" />
                </div>
                <div class="live-video" style="height: 100%; width: 100%; overflow: hidden;">
                    <img class="img-fluid" src="{{ url('/') }}/assets/images/video-call.jpeg" alt="" />
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><i class="fa fa-info-circle"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><i class="fa fa-comments-o"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add new user"><i class="fa fa-users"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Record a message"><i class="fa fa-microphone"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Record a video"><i class="fa fa-video-camera"></i></button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Call End" data-bs-dismiss="modal"><i class="fa fa-phone"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Screen Share"><i class="fa fa-desktop"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Headphones"><i class="fa fa-headphones"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Smile"><i class="fa fa-smile-o"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Screen"><i class="fa fa-expand"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/dompurify@3.0.5/dist/purify.min.js"></script>
<script>
    var selectedAIModel = "ai_chat_model";
    function setChatMode(mode, text) {
        document.getElementById('dropdown-label').innerText = text;
        selectedAIModel = mode;
    }

    const btn = document.getElementById('record');
    const resultInput = document.getElementById('chat-prompt-input');
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const recognition = new SpeechRecognition();
    recognition.interimResults = false;
    recognition.continuous = false;
    recognition.lang = 'en-US';
 
    record.addEventListener('mousedown', () => {
        recognition.start();
    });
    
    record.addEventListener('mouseup', () => {
        recognition.stop();
    });
    
    recognition.onresult = (event) => {
        const transcript = event.results[0][0].transcript;
        resultInput.value = transcript;
    };
 
    recognition.onerror = (event) => {
        console.error('Speech recognition error:', event.error);
    };
    $('.chat-app .chatlist-toggle').on('click', function () {
        $('.chat-app .order-1').toggleClass('open');
    });
    let conversationContext = [];
    $('#ai-chat-form').on('submit', async  function (e) {
        e.preventDefault();
        
        const inputText = $('#chat-prompt-input').val();
        const file = document.getElementById("chat-file-input").files[0];
        var base64Image = null;
        const parts = [];
        var imageUpload = true; 
        if (file && !file.type.startsWith('image/')) {
            alert('Please select a valid image file (e.g., JPG, PNG, GIF)');
            this.value = '';
            imageUpload = false;
        }
        if (imageUpload && file != "" && file != undefined && file instanceof Blob) {
            base64Image = await fileToBase64(file);
            if (base64Image) {
                const fullSrc = `data:image/png;base64,${base64Image}`;
                var sendMessage = `<li class="mb-3 d-flex flex-row-reverse align-items-end">
                                    <div class="max-width-70 text-end">
                                        <div class="border-0 p-2 text-light">
                                            <div class="message"><img src="${fullSrc}" class="send-image"></div>
                                        </div>
                                    </div>
                                </li>`;
            $('#message-box').append(sendMessage);
            document.getElementById("chat-file-input").value = "";
                parts.push({
                    inlineData: {
                        mimeType: file.type,
                        data: base64Image
                    }
                });
            }
        }
    
        if(inputText != "") {
            parts.push({ text: inputText });
            var sendMessage = `<li class="mb-3 d-flex flex-row-reverse align-items-end">
                                    <div class="max-width-70 text-end">
                                        <div class="card border-0 p-2 bg-primary text-light">
                                            <div class="message">`+inputText+`</div>
                                        </div>
                                    </div>
                                </li>`;
            $('#message-box').append(sendMessage);
            $('#chat-prompt-input').val("");
        }
        
        if(inputText != "" ||  (imageUpload && file != "" && file != undefined)) {
            $('#remove-image').trigger('click');
            $('#send-button').prop('disabled', true);
            var typingId = 'typing-' + Date.now();
            var typingPlaceholder = `
                <li id="${typingId}" class="mb-3 d-flex flex-row align-items-end">
                    <div class="max-width-70">
                    <div class="card p-2">
                        <div class="message"><span class="typing-dots"></span></div>
                    </div>
                    </div>
                </li>`;
            $('#message-box').append(typingPlaceholder);    
            const apiKey = 'AIzaSyAjjVbqPD6nWvG68xemqC9dIcpg8xfadM0';
            var url = "";
            var generationConfig = {};
            if(selectedAIModel == 'ai_chat_model'){
                generationConfig = {"responseModalities":["TEXT"]}
                url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=${apiKey}`;
            } else if(selectedAIModel == 'image_generate_model') {
                url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash-preview-image-generation:generateContent?key=${apiKey}`;
                generationConfig = {"responseModalities":["TEXT","IMAGE"]}
            }
            conversationContext.push({
                role: "user",
                parts: [parts]
            });
            $.ajax({
                url: url,
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                        contents: conversationContext,
                        generationConfig:generationConfig
                    }),
                success: function (response) {
                     const parts = response?.candidates?.[0]?.content?.parts;
                    let contentHtml = '';

                    if (Array.isArray(parts) && parts.length > 0) {
                        parts.forEach(part => {
                            if ('text' in part) {
                                contentHtml += marked.parse(part.text);
                            } else if ('inlineData' in part && part.inlineData.mimeType.startsWith("image/")) {
                                const base64Image = part.inlineData.data;
                                contentHtml += `<img src="data:${part.inlineData.mimeType};base64,${base64Image}" 
                                                alt="Generated Image" style="max-width: 100%; margin-top: 10px;" />`;
                            } else {
                                contentHtml += `<p>[Unknown content]</p>`;
                            }
                        });
                        conversationContext.push({
                            role: "model",
                            parts: parts
                        });

                    } else {
                        contentHtml = '<p>No valid response received.</p>';
                    }
                const receveMessage = $('<li class="mb-3 d-flex flex-row align-items-end">')
                    .append(
                        $('<div class="max-width-70">').append(
                            $('<div class="card p-3">').append(
                                $('<div class="message">').html(contentHtml)
                            )
                        )
                    );
                    $(`#${typingId}`).html(receveMessage);
                        $('#send-button').prop('disabled', false);

                },
                error: function (xhr, status, error) {
                    console.error('Error:', status, error);
                    console.error('API Error:', xhr.responseText || status || error);
                    let message = 'Something went wrong.';
                    console.log(xhr.responseJSON.error.message);
                    if(xhr.responseJSON.error.message != undefined && xhr.responseJSON.error.message != "") {
                        message = xhr.responseJSON.error.message;
                    } else {
                        if (xhr.status === 400) {
                            message = 'Bad Request – Check input data.';
                        } else if (xhr.status === 403) {
                            message = 'Forbidden – Invalid API Key.';
                        } else if (xhr.status === 429) {
                            message = 'Rate limit exceeded. Try again later.';
                        } else if (xhr.status >= 500) {
                            message = 'Server error. Please try again later.';
                        } else {
                            message = 'Something went wrong!';
                        }
                    }

                    showErrorMessage(message);
                        $('#send-button').prop('disabled', false);
                }
            });
        }   
  });
  function showErrorMessage(msg) {
  $('#error-box').html(`
        <p class="text-danger">${msg}</p>
  `);
}
function fileToBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();

        reader.onload = () => {
            const base64 = reader.result.split(',')[1];
            resolve(base64);
        };

        reader.onerror = (error) => reject(error);

        if (file instanceof Blob) {
            reader.readAsDataURL(file);
        } else {
            reject(new TypeError("File must be a Blob."));
        }
    });
}
document.getElementById("remove-image").addEventListener("click", function () {
  const preview = document.getElementById("image-preview");
  preview.src = "";

  const container = document.getElementById("image-preview-container");
  container.classList.add("d-none");

  const input = document.getElementById("chat-file-input");
  input.value = "";
});
document.getElementById("chat-file-input").addEventListener("change", function () {
  const file = this.files[0];

  if (file && file.type.startsWith("image/")) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const preview = document.getElementById("image-preview");
      preview.src = e.target.result;

      const container = document.getElementById("image-preview-container");
      container.classList.remove("d-none");
    };
    reader.readAsDataURL(file);
  }
});
</script>
@endsection

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
    <div class="order-1 m-5">
        <div class="c-list">
            <ul class="nav nav-tabs tab-page-toolbar rounded text-center mb-1" role="tablist">
                <li class="flex-fill nav-item" id="chatTab"><a class="nav-link border-0 active" href="#chat-recent" role="tab" aria-selected="true">Chat</a></li>
            </ul>
        </div>
        <div class="tab-content border-top custom_scroll">
            <div class="tab-pane fade show active" id="chat-recent" role="tabpanel">
                <ul class="nav nav-tabs list-group list-group-custom list-group-flush mb-0" role="tablist" id="chat-history">
                </ul>
            </div>
        </div>
    </div>
    <div class="order-2 flex-grow-1 m-5 bg-white" >
        <div class="tab-content">
            
            <div class="tab-pane fade show active" id="Barbara_Kelly" role="tabpanel">
                <!-- Chat: Header -->
                <div class="py-xl-3 py-3 px-xxl-5 px-lg-4 px-3 chat-header">
                    <a class="d-flex" href="javascript:void(0);" title="">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="avatar">
                        <div class="ms-3">
                            <h6 class="mb-0">AI Chat</h6>
                        </div>
                    </a>
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
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@3.0.5/dist/purify.min.js"></script>
<script>
    document.getElementById('chatTab').addEventListener('click', function () {
  // Delay focus to let Bootstrap tab activate first (if using data-bs-toggle)
    setTimeout(() => {
            const input = document.getElementById('chat-prompt-input');
            input.focus();
            input.setSelectionRange(input.value.length, input.value.length); // move cursor to end
        }, 100); // 100ms delay works well
    });
    function historyClick(el) {
        const chatId = el.dataset.chatId;
        const chatContainer = document.getElementById(chatId);
        chatContainer.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest'  });
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
            const apiKey = "{{ env('GEMINI_API_KEY') }}";
            var url = "";
            var generationConfig = {"responseModalities":["TEXT"]};
            url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=${apiKey}`;
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
                    var historyModel = "";
                    if (Array.isArray(parts) && parts.length > 0) {
                        parts.forEach(part => {
                            if ('text' in part) {
                                contentHtml += marked.parse(part.text);
                                historyModel += part.text;
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
                    $('#chat-history').append(`<li class="list-group-item chat-item" onClick=historyClick(this) data-chat-id="histpry-${typingId}">
                            <a href="javascript:void(0);" class="d-flex" data-bs-toggle="tab" data-bs-target="#Chris_Fox" role="tab">
                                <div class="flex-fill ms-3 text-truncate">
                                    <h6 class="d-flex justify-content-between mb-0"><span>`+inputText+`</span> <small class="msg-time">${getCurrentTimeWithAmPm()}</small></h6>
                                    <span class="text-muted">`+historyModel+`</span>
                                </div>
                            </a>
                        </li>`);
                const receveMessage = $('<li class="mb-3 d-flex flex-row align-items-end">')
                    .append(
                        $(`<div class="max-width-70 chat-content" id="histpry-${typingId}">`).append(
                            $('<div class="card p-3 bg-body-secondary">').append(
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
  function getCurrentTimeWithAmPm() {
    const now = new Date();

    let hours = now.getHours();
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const ampm = hours >= 12 ? 'PM' : 'AM';

    hours = hours % 12;
    hours = hours ? hours : 12; // convert 0 to 12

    return `${hours}:${minutes}:${seconds} ${ampm}`;
    }
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

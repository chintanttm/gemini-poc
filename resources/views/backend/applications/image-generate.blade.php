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
.bg-white {
    background-color: #ffffff
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
        <div class="tab-content border-top custom_scroll p-4">
            <div class="tab-pane fade show active" id="chat-recent" role="tabpanel">
                {{-- <div class="card-body"> --}}
                            <form id="imageGenerationForm">
                                <div class="mb-3">
                                    <label for="prompt" class="form-label">Prompt</label>
                                    <textarea class="form-control" id="prompt" rows="4" name="prompt" placeholder="Describe the image you want to generate..." required=""></textarea>
                                    <div class="form-text">Be specific and descriptive for better results</div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-6">
                                        <label for="style" class="form-label">Style</label>
                                        <select class="form-select" id="style" name="style">
                                            <option value="realistic">Realistic</option>
                                            <option value="artistic">Artistic</option>
                                            <option value="cartoon">Cartoon</option>
                                            <option value="anime">Anime</option>
                                            <option value="abstract">Abstract</option>
                                            <option value="vintage">Vintage</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="quality" class="form-label">Quality</label>
                                        <select class="form-select" id="quality" name="quality">
                                            <option value="standard">Standard</option>
                                            <option value="hd">HD</option>
                                            <option value="ultra">Ultra HD</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row g-3 mb-3">
                                    
                                    <div class="col-6">
                                        <label for="count" class="form-label">Count</label>
                                        <select class="form-select" id="count" name="count">
                                            <option value="1">1 Image</option>
                                            <option value="2">2 Images</option>
                                            <option value="4">4 Images</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary w-100" id="generateBtn">
                                    <i class="fas fa-magic"></i> Generate Image
                                </button>
                            </form>
                            
                            <!-- Quick Prompts -->
                            <div class="mt-4">
                                <h6>Quick Prompts</h6>
                                <div class="quick-prompts">
                                    <button class="btn btn-sm btn-outline-secondary mb-2" onclick="setPrompt('A futuristic cityscape at sunset with flying cars')">
                                        Futuristic City
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary mb-2" onclick="setPrompt('A majestic dragon soaring through clouds')">
                                        Fantasy Dragon
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary mb-2" onclick="setPrompt('Abstract digital art with vibrant colors')">
                                        Abstract Art
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary mb-2" onclick="setPrompt('A serene mountain landscape with a crystal clear lake')">
                                        Nature Scene
                                    </button>
                                </div>
                            </div>
                        </div>
            {{-- </div> --}}
        </div>
    </div>
    <div class="order-2 flex-grow-1 custom_scroll m-5 bg-white">
        <div class="tab-content">
            
            <div class="tab-pane fade show active" id="Barbara_Kelly" role="tabpanel">
                <!-- Chat: Header -->
                <div class="py-xl-3 py-3 px-xxl-5 px-lg-4 px-3 chat-header">
                    <a class="d-flex" href="javascript:void(0);" title="">
                        <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="avatar">
                        <div class="ms-3">
                            <h6 class="mb-0">AI Image Generate</h6>
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
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/dompurify@3.0.5/dist/purify.min.js"></script>
<script>
    function historyClick(el) {
        const chatId = el.dataset.chatId;
        const chatContainer = document.getElementById(chatId);
        chatContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    function setPrompt(val) {
        $('#prompt').val(val);
    }
    $('.chat-app .chatlist-toggle').on('click', function () {
        $('.chat-app .order-1').toggleClass('open');
    });
    let conversationContext = [];
    $('#imageGenerationForm').on('submit', async  function (e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });
        console.log(data);
         const inputText = `
            Prompt: ${data.prompt}
            Negative Prompt: ${data.negative_prompt}
            Style: ${data.style}
            Aspect Ratio: ${data.aspect_ratio}
            Quality: ${data.quality}
            Count: ${data.count}
            `.trim();
        const parts = [];
        var imageUpload = true;
        if(data.prompt != "") {
            parts.push({ text: inputText });
            var sendMessage = `<li class="mb-3 d-flex flex-row-reverse align-items-end">
                                    <div class="max-width-70 text-end">
                                        <div class="card border-0 p-2 bg-primary text-light">
                                            <div class="message">`+data.prompt+`</div>
                                        </div>
                                    </div>
                                </li>`;
            $('#message-box').append(sendMessage);
            $('#chat-prompt-input').val("");
        }
        
        if(data.prompt != "") {
            $('#send-button').prop('disabled', true);
            var typingId = 'typing-' + Date.now();
            var typingPlaceholder = `
                <li id="${typingId}" class="mb-3 flex-row align-items-end">
                    <div class="max-width-70">
                    <div class="card p-2">
                        <div class="message"><span class="typing-dots"></span></div>
                    </div>
                    </div>
                </li>`;
            $('#message-box').append(typingPlaceholder);    
            const apiKey = "{{ env('GEMINI_API_KEY') }}";
            var url = "";
            var generationConfig = {"responseModalities":["TEXT","IMAGE"]};
            url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash-preview-image-generation:generateContent?key=${apiKey}`;
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
                    var historyModel = "";
                    $(`#${typingId}`).html("");
                    if (Array.isArray(parts) && parts.length > 0) {
                        parts.forEach(part => {

                            if ('text' in part) {
                                if(part.text != ""){
                                    var contentHtml = marked.parse(part.text);
                                    historyModel += part.text;
                                    const receveMessage = $('<li class="mb-3 d-flex flex-row align-items-end">')
                                        .append(
                                            $(`<div class="max-width-70 chat-content alert alert-info" id="histpry-${typingId}">`).append(
                                                $('<div class="card p-3">').append(
                                                    $('<div class="message">').html(contentHtml)
                                                )
                                            )
                                        );
                                    $(`#${typingId}`).append(receveMessage);
                                }
                            } else if ('inlineData' in part && part.inlineData.mimeType.startsWith("image/")) {
                                const base64Image = part.inlineData.data;
                                const mimeType = part.inlineData.mimeType;

                                // Generate blob download URL
                                const byteCharacters = atob(base64Image);
                                const byteNumbers = new Array(byteCharacters.length);
                                for (let i = 0; i < byteCharacters.length; i++) {
                                    byteNumbers[i] = byteCharacters.charCodeAt(i);
                                }
                                const byteArray = new Uint8Array(byteNumbers);
                                const blob = new Blob([byteArray], { type: mimeType });
                                const downloadUrl = URL.createObjectURL(blob);

                                // Construct the image + icon HTML
                                const contentHtml = `
                                    <div class="image-wrapper" style="position: relative; display: inline-block;">
                                        <img src="data:${mimeType};base64,${base64Image}" 
                                            alt="Generated Image" 
                                            style="max-width: 100%; border-radius: 8px;" />
                                        <a href="${downloadUrl}" 
                                        download="gemini-generated.png" 
                                        title="Download"
                                        style="
                                                position: absolute;
                                                bottom: 8px;
                                                right: 8px;
                                                background: rgba(0, 0, 0, 0.6);
                                                color: white;
                                                padding: 6px 8px;
                                                border-radius: 50%;
                                                font-size: 14px;
                                                text-decoration: none;
                                                z-index: 2;">
                                            ⬇️
                                        </a>
                                    </div>
                                `;

                                // Create chat bubble
                                const receveMessage = $('<li class="mb-3 d-flex flex-row align-items-end">')
                                    .append(
                                        $(`<div class="max-width-70 chat-content" id="histpry-${typingId}">`).append(
                                            $('<div class="card p-3">').append(
                                                $('<div class="message">').html(contentHtml)
                                            )
                                        )
                                    );

                                // Append to chat
                                $(`#${typingId}`).append(receveMessage);


                            } else {
                                var contentHtml = `<p>[Unknown content]</p>`;
                                const receveMessage = $('<li class="mb-3 d-flex flex-row align-items-end">')
                                    .append(
                                        $(`<div class="max-width-70 chat-content" id="histpry-${typingId}">`).append(
                                            $('<div class="card p-3 bg-body-secondary">').append(
                                                $('<div class="message">').html(contentHtml)
                                            )
                                        )
                                    );
                                    $(`#${typingId}`).html(receveMessage);
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
                                    <h6 class="d-flex justify-content-between mb-0"><span>`+inputText+`</span> <small class="msg-time">12:37 PM</small></h6>
                                    <span class="text-muted">`+historyModel+`</span>
                                </div>
                            </a>
                        </li>`);
                        $('#send-button').prop('disabled', false);

                },
                error: function (xhr, status, error) {
                    $(`#${typingId}`).html("");
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
    setTimeout(() => {
        $('#error-box').empty();
    }, 5000);
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
</script>
@endsection

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
                                <h4>Sweetalert 2</h4>
                                <p class="fs-6">A beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero dependencies. For more info, please visit the <a href="https://sweetalert2.github.io/" target="_blank">plugin's site</a></p>
                                <p>Sweetalert 2 use class with .btn <code>.sa-basic</code>, <code>.sa-title-text</code>, <code>.sa-title-error</code>, <code>.sa-buttons</code>, <code>.sa-position</code>, <code>.sa-image</code></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Js --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/sweetalert2.bundle.js&quot;&gt;&lt;/script&gt;

&lt;!-- Jquery Page Js --&gt;
&lt;script&gt;
    document.querySelector(&quot;.sa-basic&quot;).addEventListener('click', function(){
        Swal.fire(&quot;Our First Alert&quot;);
    });
&lt;/script&gt;
</code></pre>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>A basic message</h5>
                <button class="btn btn-primary sa-basic">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>A title with a text under</h5>
                <button class="btn btn-primary sa-title-text">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>A dialog with three buttons</h5>
                <button class="btn btn-primary sa-buttons">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>A custom positioned dialog</h5>
                <button class="btn btn-primary sa-position">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>A message with a custom image</h5>
                <button class="btn btn-primary sa-image">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>A message with auto close timer</h5>
                <button class="btn btn-primary sa-autoclose">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>AJAX request example</h5>
                <button class="btn btn-primary sa-ajax">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>A modal with a title, an error icon, a text, and a footer</h5>
                <button class="btn btn-primary sa-title-error">CLICK ME</button>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    document.querySelector(".sa-basic").addEventListener('click', function(){
        Swal.fire("Our First Alert");
    });

    document.querySelector(".sa-title-text").addEventListener('click', function(){
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    });

    document.querySelector(".sa-title-error").addEventListener('click', function(){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
        })
    });

    document.querySelector(".sa-buttons").addEventListener('click', function(){
        Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: `Don't save`,
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    });

    document.querySelector(".sa-position").addEventListener('click', function(){
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    });

    document.querySelector(".sa-image").addEventListener('click', function(){
        Swal.fire({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: '{{ url('/') }}/assets/images/gallery/1.jpg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })
    });

    document.querySelector(".sa-autoclose").addEventListener('click', function(){
        let timerInterval
        Swal.fire({
            title: 'Auto close alert!',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    });

    document.querySelector(".sa-ajax").addEventListener('click', function(){
        Swal.fire({
            title: 'Submit your Github username',
            input: 'text',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Look up',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
                return fetch(`//api.github.com/users/${login}`)
                .then(response => {
                    if (!response.ok) {
                    throw new Error(response.statusText)
                    }
                    return response.json()
                })
                .catch(error => {
                    Swal.showValidationMessage(
                    `Request failed: ${error}`
                    )
                })
            },
            allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: `${result.value.login}'s avatar`,
                imageUrl: result.value.avatar_url
                })
            }
        })
    });
</script>
@endsection
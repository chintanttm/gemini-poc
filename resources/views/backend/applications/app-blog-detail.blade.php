@extends('backend.layouts.app')

@section('title', __('App Blog detail'))

@section('content')
<?php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
?>
<!-- Blog: header -->
<header class="blog-header py-3 px-md-3 px-0 bg-dark text-white border-bottom border-secondary border-3">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <!-- Blog: logo -->
            <a href="#" class="me-4">
                <svg height="26" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z"/>
                    <path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z"/>
                    <path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z"/>
                    <path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z"/>
                </svg>
            </a>
            <!-- Blog: menu link -->
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 fs-6">
                <li class="nav-item"><a class="nav-link px-xl-3 px-2 color-400" href="{{ route('admin.applications.app-blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link px-xl-3 px-2 color-400" href="{{ route('admin.applications.app-blog-detail') }}">Blog Detail</a></li>
                <li class="nav-item dropdown morphing scale-left">
                    <a class="nav-link dropdown-toggle px-xl-3 px-2 color-400" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Topics
                    </a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="#">Travel</a></li>
                        <li><a class="dropdown-item" href="#">Cooking</a></li>
                        <li><a class="dropdown-item" href="#">Design</a></li>
                        <li><a class="dropdown-item" href="#">Technology</a></li>
                        <li><a class="dropdown-item" href="#">Fashion</a></li>
                        <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link px-xl-3 px-2 color-400" href="#">Contact us</a></li>
            </ul>
            <!-- Blog: search -->
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <!-- Blog: btn -->
            <div class="text-end">
                <button type="button" class="btn bg-light text-dark me-2">Login</button>
                <a href="{{ route('admin.applications.app-blog-post') }}" title="" class="btn bg-secondary text-light">New Post</a>
            </div>
        </div>
    </div>
</header>
<!-- Blog: banner -->
<div class="blog-banner py-4">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <div class="row g-xl-4 g-3 row-deck">
            <div class="col-xl-12 col-lg-12">
                <div class="card overflow-hidden">
                    <div id="blog_slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators justify-content-start">
                            <button type="button" data-bs-target="#blog_slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#blog_slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#blog_slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="thumb-overlay carousel-item active" style="height: 500px;">
                                <img src="{{ url('/') }}/assets/images/gallery/1.jpg" class="d-block w-100" alt="...">
                                <div class="content-overlay carousel-caption d-none d-md-block text-start">
                                    <span class="bg-primary text-light px-1 small text-uppercase rounded mb-3 d-inline-flex">Design</span>
                                    <div class="h3 d-flex text-white">Beachmaster Elephant Seal Fights off Rival Male, The match is uncompromising</div>
                                    <span class="text-muted">20 minutes ago</span>
                                    <span class="text-muted px-3">|</span>
                                    <span class="text-muted">3k Views</span>
                                </div>
                            </div>
                            <div class="thumb-overlay carousel-item" style="height: 500px;">
                                <img src="{{ url('/') }}/assets/images/gallery/2.jpg" class="d-block w-100" alt="...">
                                <div class="content-overlay carousel-caption d-none d-md-block text-start">
                                    <span class="bg-danger text-light px-1 small text-uppercase rounded mb-3 d-inline-flex">Angular</span>
                                    <div class="h3 d-flex text-white">This genius photo experiment shows we are all just sheeple in the consumer matrix</div>
                                    <span class="text-muted">30 minutes ago</span>
                                    <span class="text-muted px-3">|</span>
                                    <span class="text-muted">8k Views</span>
                                </div>
                            </div>
                            <div class="thumb-overlay carousel-item" style="height: 500px;">
                                <img src="{{ url('/') }}/assets/images/gallery/3.jpg" class="d-block w-100" alt="...">
                                <div class="content-overlay carousel-caption d-none d-md-block text-start">
                                    <span class="bg-secondary text-light px-1 small text-uppercase rounded mb-3 d-inline-flex">Marketing</span>
                                    <div class="h3 d-flex text-white">Beachmaster Elephant Seal Fights off Rival Male, The match is uncompromising</div>
                                    <span class="text-muted">45 minutes ago</span>
                                    <span class="text-muted px-3">|</span>
                                    <span class="text-muted">53k Views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog: Latest posts -->
<div class="blog-posts py-5">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <div class="row g-4">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="blog-detail-text me-xl-5">
                    <h4 class="mb-3 fw-normal">Winners are recognized for outstanding app design, innovation, ingenuity, and technical achievement</h4>
                    <p class="lead mb-5">Get Uniquely crafted Landing pages for <a class="luno-link dotted" href="#"><span data-content="15+ business niche">15+ business niche</span></a>, which covers almost all the major <a class="luno-link text_bg2" href="#">business</a> niche requirements. Single purchase of the <a class="luno-link fw-bold double" href="#"><span data-content="LUNO admin dashboard">LUNO admin dashboard</span></a> license gives access to all this beautiful landing pages.</p>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                    <p class="lead mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="lead mb-5">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h3>The Guitar Legends</h3>
                    <p class="lead mb-3">On top of that, all the <a class="luno-link line-through" href="#"><span data-content="landing pages">landing pages</span></a> has different theme and <a class="luno-link dashed" href="#"><span data-content="color options">color options</span></a>, gives you freedom to adjust the design suitable to your brand.</p>
                    <ul>
                        <li class="fs-6 py-1">Lorem Ipsum has been the industry's standard dummy</li>
                        <li class="fs-6 py-1">Many desktop publishing packages and web page editors now use Lorem</li>
                        <li class="fs-6 py-1">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</li>
                        <li class="fs-6 py-1">Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                        <li class="fs-6 py-1">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</li>
                    </ul>
                    <p class="lead mb-5">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.</p>
                    <p class="lead mb-5">Create beautiful apps faster with <a class="luno-link text_bg" href="{{ route('admin.documentation.w-cards') }}">LUNO widgets collection</a> of Card’s, Small card, Card List, Chart widget and Table option &amp; more...</p>
                    <h3>Apple Design Award Winners: Apps</h3>
                    <p class="lead mb-0">“Every year, app and game developers demonstrate exceptional craftsmanship and we’re honoring the best of the best,” said Ron Okamoto, Apple’s vice president of Worldwide Developer Relations. “Receiving an Apple Design Award is a special and laudable accomplishment. Past honorees have made some of the most noteworthy apps and games of all time. Through their vision, determination, and exacting standards, the winning developers inspire not only their peers in the Apple developer community, but all of us at Apple, too.”</p>
                </div>
                <div class="card author-detail mt-5">
                    <div class="card-body d-flex">
                        <div class="flex-shrink-0">
                            <img class="w120 rounded-circle" src="{{ url('/') }}/assets/images/profile_av.png" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-lg-5 ms-4">
                            <h4 class="mb-1"><a href="{{ route('admin.page.page-profile') }}" title="">Allie Grater</a></h4>
                            <span class="text-muted">Sr. UX Designer</span>
                            <p class="fs-6 mt-3">At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.</p>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="user-comment mt-3">
                    <div class="py-2">
                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-thumbs-up"></i> Like (105)</a>
                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-comment"></i> Comment (2)</a>
                        <a class="me-lg-4 me-2 text-primary" href="#"><i class="fa fa-share"></i> Share (6)</a>
                    </div>
                    <div>
                        <div class="d-flex mt-3 pt-3 border-top">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <p class="lead mb-0">Rose Rivera</p>
                                <p class="text-muted">Nov 23, 2021 at 12:23 pm</p>
                                <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                            </div>
                        </div>
                        <div class="d-flex mt-3 pt-3 border-top">
                            <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                            <div class="flex-fill ms-3">
                                <p class="lead mb-0">Robert Hammer</p>
                                <p class="text-muted">Nov 24, 2021 at 11:38 pm</p>
                                <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-comment mt-5">
                    <div class="row g-3">
                        <div class="col-12">
                            <h3>Post a comment</h3>
                            <span class="text-muted">Your email address will not be published. Required fields are marked *</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control form-control-lg">
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control form-control-lg">
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <label class="form-label">Your Website</label>
                            <input type="text" class="form-control form-control-lg">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Leave a Reply</label>
                            <textarea name="message" class="form-control form-control-lg" rows="4" spellcheck="false"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Save my name, email, and website in this browser for the next time I comment.
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-lg btn-primary">Post Comment</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="text-uppercase mb-3 pb-2 border-bottom">About <strong>Me</strong></div>
                <div class="card bg-transparent border-0 mb-xl-4 mb-3">
                    <div class="d-flex align-items-start mb-3">
                        <div class="me-3">
                            <img class="rounded img-thumbnail" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="avatar lg" title="">
                        </div>
                        <div class="media-body">
                            <h6 class="mb-0"><h4 class="mb-1"><a href="{{ route('admin.page.page-profile') }}" title="">Allie Grater</a></h4></h6>
                            <span class="text-muted">Author</span>
                            <div>
                                <a class="pe-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="pe-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="pe-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>The functional aspect comes first in the work process because it's the core of the object: What is its purpose? something else?</p>
                        <a href="#" class="btn btn-lg btn-danger">Connect With Me</a>
                    </div>
                </div>
                <div class="mb-4 rounded-4 overflow-hidden">
                    <img src="{{ url('/') }}/assets/images/ads-01.jpg" alt="" class="img-fluid" />
                </div>
                <div class="text-uppercase mb-3 pb-2 border-bottom"><strong>Cate</strong>gories</div>
                <div class="card bg-transparent border-0 mb-xl-4 mb-3">
                    <div class="d-flex flex-wrap tag-group">
                        <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">Family</a>
                        <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">Home</a>
                        <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift bg-primary text-light">UI/UX Designer</a>
                        <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">ReactJs</a>
                        <a href="#" class="m-1 small tag py-1 px-3 border border-primary rounded lift">Angular</a>
                    </div>
                </div>
                <div class="text-uppercase mb-3 pb-2 border-bottom"><strong>Insta</strong>gram</div>
                <div class="card bg-transparent border-0 mb-xl-4 mb-3">
                    <div class="row g-1">
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/1.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/1.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/2.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/2.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/3.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/3.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/4.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/4.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/5.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/5.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/6.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/6.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/7.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/7.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/8.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/8.jpg" />
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="fancybox rounded d-block" rel="ligthbox" href="{{ url('/') }}/assets/images/gallery/9.jpg">
                                <img class="img-fluid rounded" alt="" src="{{ url('/') }}/assets/images/gallery/9.jpg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog: Trending Topics -->
<div class="blog-topics py-5 bg-dark mb-5 border-bottom border-secondary border-3">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <div class="row mb-3">
            <div class="col-6">
                <h5 class="mb-0 color-400">Trending Topics</h5>
            </div>
            <div class="col-6 text-end">
                <a class="" href="#">See All Topics</a>
            </div>
        </div>
        <div class="row row-cols-xxl-6 cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-2 g-1 row-deck">
            <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                    <img class="card-img" src="{{ url('/') }}/assets/images/gallery/1.jpg" alt="img hover">
                    <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                        <h6 class="mb-0 text-white">Sports & Fitness</h6>
                    </div>
                </a>    
            </div>
            <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                    <img class="card-img" src="{{ url('/') }}/assets/images/gallery/2.jpg" alt="img hover">
                    <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                        <h6 class="mb-0 text-white">Travel</h6>
                    </div>
                </a>    
            </div>
            <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                    <img class="card-img" src="{{ url('/') }}/assets/images/gallery/3.jpg" alt="img hover">
                    <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                        <h6 class="mb-0 text-white">lifestyle</h6>
                    </div>
                </a>    
            </div>
            <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                    <img class="card-img" src="{{ url('/') }}/assets/images/gallery/4.jpg" alt="img hover">
                    <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                        <h6 class="mb-0 text-white">Health</h6>
                    </div>
                </a>    
            </div>
            <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                    <img class="card-img" src="{{ url('/') }}/assets/images/gallery/5.jpg" alt="img hover">
                    <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                        <h6 class="mb-0 text-white">Animals</h6>
                    </div>
                </a>    
            </div>
            <div class="col">
                <a href="#" class="card thumb-overlay text-center overflow-hidden lift">
                    <img class="card-img" src="{{ url('/') }}/assets/images/gallery/6.jpg" alt="img hover">
                    <div class="card-img-overlay content-overlay d-flex align-items-end justify-content-center">
                        <h6 class="mb-0 text-white">Food & Drink</h6>
                    </div>
                </a>    
            </div>
        </div>
    </div>
</div>
<!-- Blog: footer -->
<div class="blog-footer">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <div class="row g-3">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <ul class="nav flex-column me-xl-4">
                    <li class="nav-item mb-3">
                        <a href="#" class="me-4">
                            <svg height="20" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z"/>
                                <path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z"/>
                                <path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z"/>
                                <path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item mb-2 fs-6">Start writing, no matter what. The water does not flow until the faucet is turned on.</li>
                    <li class="nav-item mb-2 mt-3">
                        <p class="text-uppercase fw-bold mb-1">Address</p>
                        <span>123 Main Street New York, NY 10001</span>
                    </li>
                </ul>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                <h5 class="fw-normal text-uppercase mb-3">Quick link</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">About me</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">Help & Support</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">Licensing Policy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">Refund Policy</a></li>
                </ul>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                <h5 class="fw-normal text-uppercase mb-3">World</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">Conflicts</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">Terrorism</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">Environment</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 color-600">Religion</a></li>
                </ul>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                <form>
                    <h5 class="fw-normal text-uppercase mb-3">Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div>
                        <input type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary mt-1" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>© 2022 <a class="luno-link text_bg2" href="https://www.thememakker.com/" target="_blabk" title="ThemeMakker Infotech LLP">Thememakker</a> All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><i class="fa-lg fa fa-facebook-square"></i></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><i class="fa-lg fa fa-github-square"></i></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><i class="fa-lg fa fa-twitter-square"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<script>
/*	end gallery */
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>
@endsection

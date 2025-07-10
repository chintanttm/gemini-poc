@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Introduction</h6>
                            </div>
                            <div class="card-body">
                                <h4>jQuery Steps Vertical</h4>
                                <p class="fs-6">A powerful jQuery wizard plugin that supports accessibility and HTML5.. For more info, please visit the <a href="https://github.com/rstaib/jquery-steps" target="_blank">plugin's site</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class="language-html m-0" data-lang="html"><code class=" language-html">&lt;!-- Plugin Css --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;{{ url('/') }}/assets/css/jquerysteps.min.css&quot;&gt;

&lt;!-- Jquery Plugin --&gt;
&lt;script src=&quot;{{ url('/') }}/assets/bundles/jquerysteps.bundle.js&quot;&gt;&lt;/script&gt;
</code></pre>
                            </div>
                        </div>
                    </div>
        <div class="col-12 mt-5">
            <h6 class="card-title">Form Wizard horizontal demo 1</h6>
            <div class="card">
                <div class="card-body">
                    <div class="step-app v-wizard-demo1">
                        <ul class="step-steps">
                            <li data-step-target="step1"><span>1</span> Account Information</li>
                            <li data-step-target="step2"><span>2</span> User Information</li>
                            <li data-step-target="step3"><span>3</span> Social ID</li>
                        </ul>
                        <div class="step-content">
                            <div class="step-tab-panel" data-step="step1">
                                <form class="row g-3">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Nellie">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Maxwell">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <label class="form-label">User ID</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Nellie_Maxwell">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Password">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Confirm Password">
                                    </div>
                                </form> <!-- .row end -->
                            </div>
                            <div class="step-tab-panel" data-step="step2">
                                <form class="row g-3">
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Nellie">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Maxwell">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">Country</label>
                                        <select class="country form-control form-control-lg form-select" aria-label="example">
                                            <option selected>Select Country</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="India">India</option>
                                            <option value="Japan">Japan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">Language</label>
                                        <select class="language form-control form-control-lg form-select" aria-label="example">
                                            <option selected>Select Language</option>
                                            <option>English</option>
                                            <option>Mandari</option>
                                            <option>Spanish</option>
                                            <option>German</option>
                                            <option>Portuguese</option>
                                            <option>Arabic</option>
                                            <option>French</option>
                                            <option>Japanese</option>
                                            <option>Russian</option>
                                            <option>Hindi</option>
                                        </select>
                                    </div>
                                </form> <!-- .row end -->
                            </div>
                            <div class="step-tab-panel" data-step="step1">
                                <form class="row g-3">
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Facebook Profile Link">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">Instagram</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Instagram Profile Link">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">Google+</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Google+ Profile Link">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label class="form-label">Twitter</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Twitter Profile Link">
                                    </div>
                                </form> <!-- .row end -->
                            </div>
                            <div class="step-footer d-flex justify-content-end mt-2">
                                <button class="btn btn-primary step-btn ms-1" data-step-action="prev">Prev</button>
                                <button class="btn btn-primary step-btn ms-1" data-step-action="next">Next</button>
                                <button class="btn btn-primary step-btn ms-1" data-step-action="finish">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5">
            <h6 class="card-title">Form Wizard horizontal demo 1</h6>
            <div class="card">
                <div class="step-app v-wizard-demo2">
                    <ul class="step-steps">
                        <li data-step-target="step1"><span>1</span> Account Information</li>
                        <li data-step-target="step2"><span>2</span> User Information</li>
                        <li data-step-target="step3"><span>3</span> Social ID</li>
                    </ul>
                    <div class="row justify-content-start step-content">
                        <div class="col-lg-8 step-tab-panel" data-step="step1">
                            <form class="row g-3">
                                <div class="col-12 mb-3">
                                    <h2 class="mb-1">Account Settings</h2>
                                    <span class="text-muted">Update your username and manage your account</span>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Nellie">
                                    <div class="form-text text-muted small">Your Dribbble URL: https://alui.com/thememakker</div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="info@thememakker.com">
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">Google Analytics tracking code</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="UA-115297597-2">
                                    <div class="form-text text-muted small">Track shot and profile views in your Google Analytics account, e.g. UA-00000000-0 </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Password">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Confirm Password">
                                </div>
                            </form> <!-- .row end -->
                        </div>
                        <div class="col-lg-8 step-tab-panel" data-step="step2">
                            <form class="row g-3">
                                <div class="col-12 mb-3">
                                    <h2 class="mb-1">User Information</h2>
                                    <span class="text-muted">Update your username and manage your account</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Nellie">
                                    <div class="form-text text-muted small">We’re big on real names around here, so people know who’s who.</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Bio</label>
                                    <textarea type="text" class="form-control" placeholder="Bio"></textarea>
                                    <div class="form-text text-muted small">Brief description for your profile. URLs are hyperlinked.</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Country</label>
                                    <select class="country form-control form-control-lg form-select" aria-label="example">
                                        <option selected>Select Country</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Japan">Japan</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <h5 class="border-bottom">Online Presence</h5>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Personal website</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="https://thememakker.com/">
                                    <div class="form-text text-muted small">Your home page, blog, or company site.</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Portfolio URL</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="https://themeforest.net/user/wrraptheme/portfolio">
                                    <div class="form-text text-muted small">Only shared with potential employers.</div>
                                </div>
                            </form> <!-- .row end -->
                        </div>
                        <div class="col-lg-8 step-tab-panel" data-step="step3">
                            <form class="row g-3">
                                <div class="col-12 mb-3">
                                    <h2 class="mb-1">Social Profiles</h2>
                                    <span class="text-muted">Add elsewhere links to your profile</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Facebook Profile Link">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Instagram Profile Link">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Google+</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Google+ Profile Link">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Twitter Profile Link">
                                </div>
                            </form> <!-- .row end -->
                        </div>
                        <div class="step-footer d-flex justify-content-start mt-4">
                            <button class="btn btn-primary step-btn me-1" data-step-action="prev">Prev</button>
                            <button class="btn btn-primary step-btn me-1" data-step-action="next">Next</button>
                            <button class="btn btn-primary step-btn me-1" data-step-action="finish">Finish</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->

    <!-- start: navigation btn -->
    <div class="row g-3 mt-3">
        @include('backend.documentation.next-previous-url')
    </div>
    <script>
        // Step Demo 1
        $('.v-wizard-demo1').steps({});
        // Step Demo 2
        $('.v-wizard-demo2').steps({});
    </script>
@endsection
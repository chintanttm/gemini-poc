@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fa fa-folder me-2"></i>File Structure</h5>
                </div>
                <style>
                    #JsDataTree ul li{font-size: 15px; min-height: 28px;}
                    .jstree-open > .jstree-anchor > .fa-folder:before {content: "\f07c"; margin-left: 2px;}
                </style>
                <div class="card-body">
                    <div class="JsDataTree">
                        <ul>
                            <li>blog</li>
                            <li data-jstree='{ "opened" : "true" }'><span style="min-width: 120px; display: inline-block;">dist</span>
                                <ul>
                                    <li data-jstree='{ "opened" : "true" }'>Assets
                                        <ul>
                                            <li>bundles <span class="text-muted small">- Bundling plugins JS file</span></li>
                                            <li>css <span class="text-muted small">- Compiled CSS</span></li>
                                            <li>fonts <span class="text-muted small">- Google Font and Fontawesome</span></li>
                                            <li>images <span class="text-muted small">- Image assets</span></li>
                                            <li>js <span class="text-muted small">-  Javascript source</span></li>
                                            <li>plugin <span class="text-muted small">- Third party plugins</span></li>
                                        </ul>
                                    </li>
                                    <li>CRM
                                        <ul>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li>Cryptocurrency
                                        <ul>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li>eCommerce
                                        <ul>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li>Event management
                                        <ul>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li>Fitness Analytics
                                        <ul>
                                            <li data-jstree='{ "opened" : "true" }'>Landing one page
                                                <ul>
                                                    <li>assets</li>
                                                    <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                                </ul>
                                            </li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li>Hospital
                                        <ul>
                                            <li data-jstree='{ "opened" : "true" }'>Landing one page
                                                <ul>
                                                    <li>assets</li>
                                                    <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                                </ul>
                                            </li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li>HRMS
                                        <ul>
                                            <li data-jstree='{ "opened" : "true" }'>Landing one page
                                                <ul>
                                                    <li>assets</li>
                                                    <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                                </ul>
                                            </li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li>Inventory Management
                                        <ul>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                            <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                        </ul>
                                    </li>
                                    <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="{{ route('admin.dashboard') }}" target="_blank">index.html</a></li>
                                    <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                </ul>
                            </li>
                            <li>Documentation</li>
                            <li>Front-End uikit ( Elements )
                                <ul>
                                    <li class="text-primary" data-jstree='{ "type" : "file" }'><a href="#" target="_blank">index.html</a></li>
                                    <li class="text-primary" data-jstree='{ "type" : "file" }'>More HTML pages</li>
                                </ul>
                            </li>
                            <li>landing page (One page HTMl)</li>
                            <li><span style="min-width: 120px; display: inline-block;">node_modules</span> <small class="text-muted d-none d-lg-inline-block">( NPM dependencies (by default the folder is not included) <code>npm</code> installs dependencies. )</small>
                            <li data-jstree='{ "opened" : "true" }'>scss <span class="text-muted small">- SCSS source for theme</span>
                                <ul>
                                    <li>bootstrap <span class="text-muted small">-- Custom bootstrap components</span></li>
                                    <li>generic <span class="text-muted small">-- Animation, Helpers class</span></li>
                                    <li>global <span class="text-muted small">-- variables, mixins</span></li>
                                    <li>plugin <span class="text-muted small">-- all plugin scss file</span></li>
                                    <li>skeleton</li>
                                    <li>theme <span class="text-muted small">-- core, high-contrast, themes-dark</span></li>
                                    <li>widgets <span class="text-muted small">-- All widgets</span></li>
                                    <li data-jstree='{ "type" : "file" }'>main.scss</li>
                                </ul>
                            </li>
                            <li>starter-kit</li>
                            <li data-jstree='{ "type" : "file" }'>.gitignore</li>
                            <li data-jstree='{ "type" : "file" }'>Gruntfile.js</li>
                            <li data-jstree='{ "type" : "file" }'>gulpfile.js</li>
                            <li data-jstree='{ "type" : "file" }'>package.json</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: navigation btn -->
        @include('backend.documentation.next-previous-url')
    </div>
    <script>
        // inline data demo	
        $(".JsDataTree").jstree({
            "core": {
                "themes": {
                    "responsive": false
                }
            },
            "types": {
                "default": {
                    "icon": "fa fa-folder"
                },
                "file": {
                    "icon": "fa fa-file-text"
                },
            },
            "plugins": ["types"]
        });
    </script>
@endsection
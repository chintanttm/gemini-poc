<div class="modal fade" id="SettingsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
        <div class="modal-content">
            <div class="px-xl-4 modal-header">
                <h5 class="modal-title">Theme Setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="px-xl-4 modal-body custom_scroll">
                <!-- start: color setting -->
                <div @class(['card fieldset border border-primary p-3 setting-theme mb-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                    <span class="fieldset-tile text-primary bg-card">Color Settings</span>
                    <ul class="list-unstyled d-flex choose-skin mb-0">
                        <li data-theme="black" @class(['active' => $setting->theme == 'theme-black'])><div class="black"></div></li>
                        <li data-theme="indigo" @class(['active' => $setting->theme == 'theme-indigo'])><div class="indigo"></div></li>
                        <li data-theme="blue" @class(['active' => $setting->theme == 'theme-blue'])><div class="blue"></div></li>
                        <li data-theme="cyan" @class(['active' => $setting->theme == 'theme-cyan'])><div class="cyan"></div></li>
                        <li data-theme="green" @class(['active' => $setting->theme == 'theme-green'])><div class="green"></div></li>
                        <li data-theme="orange" @class(['active' => $setting->theme == 'theme-orange'])><div class="orange"></div></li>
                        <li data-theme="blush" @class(['active' => $setting->theme == 'theme-blush'])><div class="blush"></div></li>
                        <li data-theme="red" @class(['active' => $setting->theme == 'theme-red'])><div class="red"></div></li>
                        <li data-theme="dynamic" @class(['active' => $setting->theme == 'theme-dynamic'])><div class="dynamic"><i class="fa fa-paint-brush"></i></div></li>
                    </ul>
                    <!-- Settings: Theme dynamics -->
                    <div @class(['card fieldset border border-primary p-3 dt-setting mt-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                        <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
                        <div class="row g-3">
                            <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
                                        <label>Primary Color</label>
                                    </li>
                                    <li>
                                        <button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
                                        <label>Secondary Color</label>
                                    </li>
                                    <li>
                                        <button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                                        <label>Site Background</label>
                                    </li>
                                    <li>
                                        <button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                        <label>Widget Background</label>
                                    </li>
                                    <li>
                                        <button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                        <label>Border Color</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
                                        <label>Chart Color 1</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
                                        <label>Chart Color 2</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
                                        <label>Chart Color 3</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
                                        <label>Chart Color 4</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
                                        <label>Chart Color 5</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start: Light/dark -->
                <div @class(['card fieldset border setting-mode mb-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                    <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
                    <div class="c_radio d-flex text-center">
                        <label class="m-1 theme-switch" for="theme-switch">
                            <input type="checkbox" id="theme-switch" />
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/dark-version.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1 theme-dark" for="theme-dark">
                            <input type="checkbox" id="theme-dark" />
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/dark-theme.svg" alt="Theme Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                            <input type="checkbox" id="theme-high-contrast"/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/high-version.svg" alt="High Contrast" />
                            </span>
                        </label>
                        <label class="m-1 theme-rtl" for="theme-rtl">
                            <input type="checkbox" id="theme-rtl"/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/rtl-version.svg" alt="RTL Mode!" />
                            </span>
                        </label>
                    </div>
                </div>
                <!-- start: Font setting -->
                <div @class(['card fieldset border setting-font mb-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                    <span class="fieldset-tile bg-card">Google Font Settings</span>
                    <div class="c_radio d-flex text-center font_setting">
                        <label class="m-1" for="font-opensans">
                            <input type="radio" name="font" id="font-opensans" value="font-opensans" {{ $setting->font == "font-opensans" ? 'checked':''}}/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-opensans.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1" for="font-quicksand">
                            <input type="radio" name="font" id="font-quicksand" value="font-quicksand" {{ $setting->font == "font-quicksand" ? 'checked':''}}/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-quicksand.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1" for="font-nunito">
                            <input type="radio" name="font" id="font-nunito" value="font-nunito" {{ $setting->font == "font-nunito" ? 'checked':''}} />
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-nunito.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1" for="font-raleway">
                            <input type="radio" name="font" id="font-raleway" value="font-raleway" {{ $setting->font == "font-raleway" ? 'checked':''}}/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-raleway.svg" alt="Dark Mode" />
                            </span>
                        </label>
                    </div>
                </div>
                <!-- start: Extra setting -->
                <div class="setting-more mb-4">
                    <h6 class="card-title">More Setting</h6>
                    <ul class="list-group list-group-flush list-group-custom fs-6">
                        <!-- Settings: Horizontal menu version -->
                        @if(Request::segment(2) != 'documentation')
                            <li class="list-group-item">
                                <div class="form-check form-switch h-menu-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="h_menu" {{ $setting->horizontal_menu == "Y" ? 'checked':''}}>
                                    <label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
                                </div>
                            </li>
                        @endif
                        <!-- Settings: page header top Fix -->
                        <li class="list-group-item">
                            <div class="form-check form-switch pageheader-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="PageHeader" {{ $setting->page_header_fix == "Y" ? 'checked':''}}>
                                <label class="form-check-label" for="PageHeader">Page Header Fix</label>
                            </div>
                        </li>
                        <!-- Settings: page header Dark version  -->
                        <li class="list-group-item">
                            <div class="form-check form-switch pageheader-dark-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="PageHeader_dark" {{ $setting->page_header_dark_mode == "Y" ? 'checked':''}}>
                                <label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
                            </div>
                        </li>
                        <!-- Settings: Border radius -->
                        <li class="list-group-item">
                            <div class="form-check form-switch radius-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="BorderRadius" {{ $setting->border_radius_none == "Y" ? 'checked':''}}>
                                <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                            </div>
                        </li>
                        <!-- Settings: sidebar dark -->
                        <li class="list-group-item">
                            <div class="form-check form-switch sidebardark-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="SidebarDark" {{ $setting->sidebar_mode_dark == "Y" ? 'checked':''}}>
                                <label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
                            </div>
                        </li>
                        <!-- Settings: Sidebar bg image -->
                        <li class="list-group-item">
                            <div class="setting-img">
                                <div class="form-check form-switch imagebg-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="CheckImage" {{ $setting->sidebar_bg_image == "Y" ? 'checked':''}}>
                                    <label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
                                </div>
                                @php
                                    $extension = explode('/', $setting->sidebar_bg_image_path);
                                    $filename = end($extension);
                                @endphp
                                <div @class(['bg-images','show' => $setting->sidebar_bg_image == 'Y'])>
                                    <ul class="list-unstyled d-flex">
                                        <li @class(['sidebar-img-1 me-1','sidebar-img-active' => $filename == 'sidebar-1.jpg'])><a class="rounded sidebar-img" id="img-1" href="#"><img src="{{url('/')}}/assets/images/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
                                        <li @class(['sidebar-img-2 me-1','sidebar-img-active' => $filename == 'sidebar-2.jpg'])><a class="rounded sidebar-img" id="img-2" href="#"><img src="{{url('/')}}/assets/images/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
                                        <li @class(['sidebar-img-3 me-1','sidebar-img-active' => $filename == 'sidebar-3.jpg'])><a class="rounded sidebar-img" id="img-3" href="#"><img src="{{url('/')}}/assets/images/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
                                        <li @class(['sidebar-img-4 me-1','sidebar-img-active' => $filename == 'sidebar-4.jpg'])><a class="rounded sidebar-img" id="img-4" href="#"><img src="{{url('/')}}/assets/images/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
                                        <li @class(['sidebar-img-1 me-1','sidebar-img-active' => $filename == 'sidebar-5.jpg'])><a class="rounded sidebar-img" id="img-5" href="#"><img src="{{url('/')}}/assets/images/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Settings: Container Fluid -->
                        <li class="list-group-item">
                            <div class="form-check form-switch fluid-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="fluidLayout" {{ $setting->container_fluid == "Y" ? 'checked':''}}>
                                <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                            </div>
                        </li>
                        <!-- Settings: Card box shadow  -->
                        <li class="list-group-item">
                            <div class="form-check form-switch shadow-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="card_shadow" {{ $setting->card_box_shadow == "Y" ? 'checked':''}}>
                                <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
                <button type="button" id="save_changes" class="btn flex-fill btn-primary lift" data-bs-dismiss="modal">Save Changes</button>
                <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    let root = document.documentElement;
    let settingData = {
        "_token": "{{ csrf_token() }}",
        'layout' : '{{ $setting->layout }}',
        'theme' : '{{ $setting->theme }}',
        'primary_color' : '{{ $setting->primary_color }}', 
        'secondary_color' : '{{ $setting->secondary_color }}', 
        'site_background' : '{{ $setting->site_background }}', 
        'card_background' : '{{ $setting->card_background }}', 
        'card_border' : '{{ $setting->card_border }}', 
        'chart_color_1' : '{{ $setting->chart_color_1 }}', 
        'chart_color_2' : '{{ $setting->chart_color_2 }}', 
        'chart_color_3' : '{{ $setting->chart_color_3 }}', 
        'chart_color_4' : '{{ $setting->chart_color_4 }}', 
        'chart_color_5' : '{{ $setting->chart_color_5 }}',
        'layout_mode' : '{{ $setting->layout_mode }}',
        'rtl_mode': '{{ $setting->rtl_mode }}',
        'font' : '{{ $setting->font }}',
        'horizontal_menu' : '{{ $setting->horizontal_menu }}',
        'page_header_fix' : '{{ $setting->page_header_fix }}',
        'page_header_dark_mode': '{{ $setting->page_header_dark_mode }}',
        'border_radius_none': '{{ $setting->border_radius_none }}',
        'sidebar_mode_dark': '{{ $setting->sidebar_mode_dark }}',
        'sidebar_bg_image': '{{ $setting->sidebar_bg_image }}',
        'sidebar_bg_image_path' : '{{ $setting->sidebar_bg_image_path }}',
        'container_fluid' : '{{ $setting->container_fluid }}',
        'card_box_shadow': '{{ $setting->card_box_shadow}}',
        'fullscreen_menu': '{{ $setting->fullscreen_menu}}',
        'sidebar_mini': '{{ $setting->sidebar_mini}}'
    }; 

    $(function() {
        //Ajax Call for setting data
        $('#save_changes').click(function(e){
            $.ajax({
                url: "{{ route('admin.setting.update', $setting->id) }}",
                type: 'PATCH',
                data: settingData
            });
        });

        //Color Settings
        $('.choose-skin li').on('click', function() {
            var $body = $('body');
            var $this = $(this);
            var existTheme = $('.choose-skin li.active').data('theme');
            $('.choose-skin li').removeClass('active');
            $this.addClass('active');
            var selectedTheme = $this.data('theme');
            $body.attr('data-luno','theme-' + selectedTheme);
            settingData.theme = 'theme-' + selectedTheme
        });

        // Dynamic theme color setting
        $('#primaryColorPicker').colorpicker().on('changeColor', function() {
            root.style.setProperty('--primary-color', $(this).colorpicker('getValue', '#ffffff'));
            settingData.primary_color = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#secondaryColorPicker').colorpicker().on('changeColor', function() {
            root.style.setProperty('--secondary-color', $(this).colorpicker('getValue', '#ffffff'));
            settingData.secondary_color = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#BodyColorPicker').colorpicker().on('changeColor', function() {
            root.style.setProperty('--body-color', $(this).colorpicker('getValue', '#ffffff'));
            settingData.site_background = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#CardColorPicker').colorpicker().on('changeColor', function() {
            root.style.setProperty('--card-color', $(this).colorpicker('getValue', '#ffffff'));
            settingData.card_background = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#BorderColorPicker').colorpicker().on('changeColor', function() {
            root.style.setProperty('--border-color', $(this).colorpicker('getValue', '#ffffff'));
            settingData.card_border = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#chartColorPicker1').colorpicker().on('changeColor', function() {
            root.style.setProperty('--chart-color1', $(this).colorpicker('getValue', '#ffffff'));
            settingData.chart_color_1 = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#chartColorPicker2').colorpicker().on('changeColor', function() {
            root.style.setProperty('--chart-color2', $(this).colorpicker('getValue', '#ffffff'));
            settingData.chart_color_2 = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#chartColorPicker3').colorpicker().on('changeColor', function() {
            root.style.setProperty('--chart-color3', $(this).colorpicker('getValue', '#ffffff'));
            settingData.chart_color_3 = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#chartColorPicker4').colorpicker().on('changeColor', function() {
            root.style.setProperty('--chart-color4', $(this).colorpicker('getValue', '#ffffff'));
            settingData.chart_color_4 = $(this).colorpicker('getValue', '#ffffff');
        });
        $('#chartColorPicker5').colorpicker().on('changeColor', function() {
            root.style.setProperty('--chart-color5', $(this).colorpicker('getValue', '#ffffff'));
            settingData.chart_color_5 = $(this).colorpicker('getValue', '#ffffff');
        });

        // light and dark theme setting js
        var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
        var toggleTDSwitch = document.querySelector('.theme-dark input[type="checkbox"]');

        function switchTheme(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
                settingData.layout_mode = "dark";
                toggleHcSwitch.checked = false;
                toggleTDSwitch.checked = false;
            }
            else {        
                document.documentElement.setAttribute('data-theme', 'light');
                settingData.layout_mode = "light";
            }    
        }
        function switchTD(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'theme-dark');
                settingData.layout_mode = "theme-dark";
                toggleSwitch.checked = false;
                toggleHcSwitch.checked = false;
            }
            else {        
                document.documentElement.setAttribute('data-theme', 'light');
                settingData.layout_mode = "light";
            }  
        }
        function switchHc(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'high-contrast');
                settingData.layout_mode = "high-contrast";
                toggleSwitch.checked = false;
                toggleTDSwitch.checked = false;
            }
            else {        
                document.documentElement.setAttribute('data-theme', 'light');
                settingData.layout_mode = "light";
            }  
        }

        toggleSwitch.addEventListener('change', switchTheme, false);
        toggleHcSwitch.addEventListener('change', switchHc, false);
        toggleTDSwitch.addEventListener('change', switchTD, false);

        // quick action light/dark
        $(".quick-light-dark").on("click",function() {
            $(this).toggleClass("active");
            var currentTheme = localStorage.getItem('theme');
            if(currentTheme == 'light'){
                document.documentElement.setAttribute('data-theme', 'dark');
                settingData.layout_mode = "dark";
                localStorage.setItem('theme', 'dark');
                $('#theme-switch').prop('checked', true);
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
                settingData.layout_mode = "light";
                localStorage.setItem('theme', 'light');
                $('#theme-switch').prop('checked', false);
            }
        });

        // LTR/RTL active js
        $('.theme-rtl input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('body').addClass("rtl_mode");
                settingData.rtl_mode = 'Y'
            } else {
                $('body').removeClass("rtl_mode");
                settingData.rtl_mode = 'N'
            }
            var left = $('.scale-left');
            var right = $('.scale-right');
            left.addClass("scale-right");
            left.removeClass("scale-left");
            right.addClass("scale-left");
            right.removeClass("scale-right");
        });

        // google font setting
        $('.font_setting input:radio').on('click', function ()  {
            var others = $("[name='" + this.name + "']").map(function () {
                return this.value
            }).get().join(" ")
            $('body').removeClass(others).addClass(this.value)
            settingData.font = this.value
        });

        // 0. horizontal menu
        $('.h-menu-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('body').addClass("h-menu");
                settingData.horizontal_menu = 'Y'
            } else {
                $('body').removeClass("h-menu");
                settingData.horizontal_menu = 'N'
            }
        });

        // 1. Page Header Fix
        $('.pageheader-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('.page-header').addClass("sticky-top");
                settingData.page_header_fix = 'Y'
            } else {
                $('.page-header').removeClass("sticky-top");
                settingData.page_header_fix = 'N'
            }
        });

        // 2. Page Header dark
        $('.pageheader-dark-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('.page-header').addClass("dark");
                settingData.page_header_dark_mode = 'Y'
            } else {
                $('.page-header').removeClass("dark");
                settingData.page_header_dark_mode = 'N'
            }
        });

        // 3. Border Radius none
        $('.radius-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('body').addClass("radius-0");
                settingData.border_radius_none = 'Y'
            } else {
                $('body').removeClass("radius-0");
                settingData.border_radius_none = 'N'
            }
        });

        // 4. Enable Dark! ( Sidebar )
        $('.sidebardark-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('.sidebar').addClass("dark");
                settingData.sidebar_mode_dark = 'Y'
            } else {
                $('.sidebar').removeClass("dark");
                settingData.sidebar_mode_dark = 'N'
            }
        });

        // 5. Background Image (Sidebar)
        $('.imagebg-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('.bg-images').addClass("show");
                $('.sidebar').addClass("sidebar-img-bg");
                settingData.sidebar_bg_image = 'Y'
            } else {
                $('.bg-images').removeClass("show");
                $('.sidebar').removeClass("sidebar-img-bg");
                settingData.sidebar_bg_image = 'N'
            }
        });

        $('.sidebar-img').on('click', function () {
            var eleId = $(this).attr("id");
            eleId = eleId.split("-");
            root.style.setProperty('--sidebar-img', 'url(https://alui.thememakker.com/html/assets/images/sidebar-bg/sidebar-'+eleId[1]+'.jpg)');
            $('.sidebar-img-active').removeClass('sidebar-img-active');
            $('.sidebar-img-'+eleId[1]).addClass('sidebar-img-active');
            settingData.sidebar_bg_image_path = 'https://alui.thememakker.com/html/assets/images/sidebar-bg/sidebar-'+eleId[1]+'.jpg';
        });

        // 6. Container Fluid
        $('.fluid-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('.container').addClass("container-fluid");
                $('.container').removeClass("container");
                settingData.container_fluid = 'Y'
            } else {
                $('.container-fluid').addClass("container");
                $('.container-fluid').removeClass("container-fluid");
                settingData.container_fluid = 'N'
            }
        });

        // 7. Card box shadow
        $('.shadow-switch input:checkbox').on('click', function () {
            if($(this).is(":checked")) {
                $('.card').addClass("shadow-active");
                settingData.card_box_shadow = 'Y'
            } else {
                $('.card').removeClass("shadow-active");
                settingData.card_box_shadow = 'N'
            }
        });
    });
</script>